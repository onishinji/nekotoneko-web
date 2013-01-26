<?php

namespace NekoToNeko\ApiBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use FOS\OAuthServerBundle\Controller\AuthorizeController as BaseAuthorizeController;
use Acme\OAuthServerBundle\Form\Model\Authorize;
use Acme\OAuthServerBundle\Document\Client;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AuthorizeController extends BaseAuthorizeController
{
    public function authorizeAction(Request $request)
    {
        if (!$request->get('client_id')) {
            throw new NotFoundHttpException("Client id parameter {$request->get('client_id')} is missing.");
        }
        
        $clientManager = $this->container->get('fos_oauth_server.client_manager.default');
        $client = $clientManager->findClientByPublicId($request->get('client_id'));
        
        if (!($client instanceof Client)) {
            throw new NotFoundHttpException("Client {$request->get('client_id')} is not found.");
        }
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $form = $this->container->get('acme_oauth_server.authorize.form');
        $formHandler = $this->container->get('acme_oauth_server.authorize.form_handler');
        
        $authorize = new Authorize();
        
        if (($response = $formHandler->process($authorize)) !== false) {
            return $response;
        }
                
        return $this->container->get('templating')->renderResponse('AcmeOAuthServerBundle:Authorize:authorize.html.php', array(
            'form' => $form->createView(),
            'client' => $client,
        ));
    }
}
