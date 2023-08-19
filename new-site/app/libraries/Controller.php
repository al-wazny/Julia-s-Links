<?php
session_start();

class Controller {
    // load model

    protected $model;

    /*
     * So, if post is passed to the model method, it would require the model
     * and then return it. Something like new Post();
     */
    public function model($model)
    {
        // Require model file
        require_once APP_ROOT. '/models/' .$model . '.php';

        // Instantiate model
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        // check for view file
        if (file_exists(APP_ROOT. '/views/' . $view . '.php')) {
            require_once APP_ROOT . '/views/' . $view . '.php'; // Require view file
        } else {
            die('HTTP 404: The requested view file does not exist'); // View does not exit, Thus, stop the application
        }
    }
}