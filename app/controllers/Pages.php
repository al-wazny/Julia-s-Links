<?php

class Pages extends Controller {

    private $ladingpageLoader;

    private $adminpageLoader;

    private $authModel;

    public function __construct()
    {
        $this->ladingpageLoader = $this->model('landingpageLoader');
        $this->adminpageLoader = $this->model('adminpageLoader');
        $this->authModel = $this->model('authentication');
    }

    public function index()
    {
        $data = [
            'page' => $this->ladingpageLoader->load(),
        ];

        return $this->view('pages/landingpage', $data);
    }

    public function admin()
    {
        $data = $this->authModel->checkAdminCredentials();

        if (isset($data['error'])) {
            return $this->view('pages/adminLogin', $data);
        }

        $data = $this->adminpageLoader->load();

        return $this->view('pages/admin', $data);
    }
}