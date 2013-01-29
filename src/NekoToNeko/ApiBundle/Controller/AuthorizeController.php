<?php

namespace NekoToNeko\ApiBundle\Controller;

use FOS\OAuthServerBundle\Controller\AuthorizeController as BaseAuthorizeController;

use FOS\OAuthServerBundle\Event\OAuthEvent;
use FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler;
use OAuth2\OAuth2;
use OAuth2\OAuth2ServerException;
use OAuth2\OAuth2RedirectException;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;

class AuthorizeController extends BaseAuthorizeController
{
    public function authorizeAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if (!$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        if (true === $this->container->get('session')->get('_fos_oauth_server.ensure_logout')) {
            $this->container->get('session')->invalidate(600);
            $this->container->get('session')->set('_fos_oauth_server.ensure_logout', true);
        }

        $form = $this->container->get('fos_oauth_server.authorize.form');
        $formHandler = $this->container->get('fos_oauth_server.authorize.form.handler');

        $event = $this->container->get('event_dispatcher')->dispatch(
            OAuthEvent::PRE_AUTHORIZATION_PROCESS,
            new OAuthEvent($user, $this->getClient())
        );

        if ($event->isAuthorizedClient()) {
            $scope = $this->container->get('request')->get('scope', null);

            return $this->container
                ->get('fos_oauth_server.server')
                ->finishClientAuthorization(true, $user, null, $scope);
        }

        if (true === $formHandler->process()) {
            return $this->processSuccess($user, $formHandler);
        }

        return $this->container->get('templating')->renderResponse(
            'NekoToNekoApiBundle:Authorize:authorize.html.' . $this->container->getParameter('fos_oauth_server.template.engine'),
            array(
                'form'      => $form->createView(),
                'client'    => $this->getClient(),
            )
        );
         
    }
}
