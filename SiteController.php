<?php
/**
 * Site controller for ImpressPages
 */
namespace Plugin\ControllerRedirectPlugin;

class SiteController extends \Ip\Controller{

    /**
     * HelloWorld site controller, sayHello action. Can be accessed using URL http://www.example.com/?sa=HelloWorld.sayHello
     */
    public function sayHello()
    {
        return "Hello World. This is site controller example.";
    }

}