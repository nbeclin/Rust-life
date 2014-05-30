<?php
class Main extends Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        global $config;
        $template = $this->loadView('front/main');
        $template->set('static', $this->staticFiles);
        $template->set('title', $config['project']);
        $template->set('user', $this->session->get('user'));
        $template->render();
    }

}