<?php

class Language extends Controller {

    private $helper;

    public function __construct()
    {
        $this->helper = $this->model('helper'); 
    }

    public function choose($data)
    {
        setcookie('lang', $data['language'], time() + (86400 * 30), "/");
        header("location: /pages/admin");
    }

    public function save($data) {
        $data = array_filter($data, function($element) {
            return !empty($element);
        });

        $this->helper->saveElement($data);
        header("location: /pages/admin");
    }
}