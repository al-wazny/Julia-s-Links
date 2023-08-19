<?php

class Pages extends Controller {

    private $pagesModel;

    public function __construct()
    {
        $this->pagesModel = $this->model('landingpageLoader');
    }

    public function index ()
    {
  
        $data = [
            'page' => 'hello world',
        ];

        $this->view('pages/landingpage', $data);
    }
}