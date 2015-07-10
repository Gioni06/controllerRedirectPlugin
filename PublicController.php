<?php
/**
 * Public controller for ImpressPages.
 */
namespace Plugin\ControllerRedirectPlugin;

class PublicController extends \Ip\Controller{

    /**
     * HelloWorld public controller, sayHello action. Can be accessed using URL http://www.example.com/?pa=HelloWorld.sayHello
     */
    public function sayHello()
    {
        return "Hello World. This is public controller example.";
    }

}