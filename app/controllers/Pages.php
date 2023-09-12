<?php

class Pages extends Controller {

    private $pagesModel;

    private $authModel;

    public function __construct()
    {
        $this->pagesModel = $this->model('landingpageLoader');
        $this->authModel = $this->model('authentication');
    }

    public function index()
    {
        $data = [
            'page' => 'hello world',
        ];

        return $this->view('pages/landingpage', $data);
    }

    public function admin()
    {
        $data = $this->authModel->checkAdminCredentials();

        if (isset($data['error'])) {
            return $this->view('pages/adminLogin', $data);
        }

        return $this->view('pages/admin', $data);
    }
}