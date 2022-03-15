<?php
//load the model and view
class Controller
{
    public function model($model)
    {
        require_once APPROOT . '/libraries/php-activerecord/ActiveRecord.php';

        ActiveRecord\Config::initialize(function ($cfg) {
            $cfg->set_model_directory('models');
            $cfg->set_connections(array(
                'development' => 'mysql://root:secret@mysql-server/test'
            ));
        });
        //require model file
        require_once '../app/models/' . $model . '.php';
        //init model
        return new $model;
    }
    // load the view
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            echo $view . "<br>";
            die("View Doesnt Exist");
        }
    }
}
