<?php

namespace App;

//Core App class
class Core
{
    protected $currentController = 'Auth';
    protected $currentMethod = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->getUrl();
        //first letter should be capatalized
        if ($url) {
            if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
                //will set a new controller
                // echo "current controller is : " . $this->currentController;
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }
        }
        //require controller
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        // check for the method
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        // get params
        $this->params = $url ? array_values($url) : [];
        // print_r($this->params);
        //call a callback with arr of param
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            //allow to filter variables
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //braeking into array
            $url = explode('/', $url);
            return $url;
        }
    }
}
