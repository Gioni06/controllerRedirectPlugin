<?php
/**
 * Admin controller for ImpressPages
 */
namespace Plugin\ControllerRedirectPlugin;

class AdminController extends \Ip\Controller{

    /**
     * Index action adds an item to administration menu
     */
    public function index(){
        return 'Controller Redirect Plugin'; // HTML string returned by this method appears in administration menu.
    }

    /**
     * HelloWorld admin controller, sayHello action. Can be accessed by administrator using url http://www.example.com/?aa=HelloWorld.sayHello
     */
    public function sayHello()
    {
        return "Hello World. This is admin controller example.";
    }

}