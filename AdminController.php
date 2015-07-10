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
        ipAddJs('view/assets/js/vendor/angular.js',1);
        ipAddJs('view/assets/js/vendor/angular-animate.min.js');
        ipAddJs('view/assets/js/vendor/angular-sanitize.min.js');
        ipAddJs('view/assets/js/vendor/ngToast.min.js');
        ipAddJs('view/assets/js/Controllers/WidgetCtrl.js',6);
        ipAddCss('view/assets/css/ngToast.min.css');

        $BasePath = ipConfig()->baseUrl();
        ipAddJsVariable('BASEPATH', $BasePath);
        $data = array(
        );

        return ipView('view/main.php', $data)->render();
    }

    /**
     * HelloWorld admin controller, sayHello action. Can be accessed by administrator using url http://www.example.com/?aa=HelloWorld.sayHello
     */
    public function sayHello()
    {
        return "Hello World. This is admin controller example.";
    }

}