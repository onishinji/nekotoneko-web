<?php $view['slots']->start('body') ?>
    <div class="form">
        <form class="vertical" action="<?php echo $view['router']->generate('fos_oauth_server_authorize', array(
            'client_id' => $view['request']->getParameter('client_id'),
            'response_type' => $view['request']->getParameter('response_type'),
            'redirect_uri' => $view['request']->getParameter('redirect_uri'),
            'state' => $view['request']->getParameter('state'),
            'scope' => $view['request']->getParameter('scope'),
        )) ?>" method="POST"  <?php echo $view['form']->enctype($form); ?>>
            <div class="form_title">
                Grant access to <?php echo $view->escape($client->getName()); ?>?
            </div>
            <?php echo $view['form']->widget($form) ?>
            <div class="form_button">
                <input type="submit" value="Authorize" />
            </div>
        </form>
    </div>
<?php $view['slots']->stop() ?>
