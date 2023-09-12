<?php

class authentication {

    private $db;
    private $user;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function index() {
        return 'hello world';
    }

    public function checkAdminCredentials() 
    {
        if (!$this->cookiesAllowed()) {
            $data['error']['cookiesError'] = 'You need to accept the Cookies to do this';
            
            return $data;
        }
        
        if (!$this->hasValidToken()) {
            if (empty($_POST)) {
                $data['error']['expiredToken'] = true;
                
                return $data;
            }

            if (!$this->checkCredentials()) {
                $data['error']['invalidCredentials'] = 'Incorrect username or password. Please try again.';
                
                return $data; 
            }

            $token = $this->generateToken();
            $this->setCookieToken($token);
            $this->updateDbToken($token);
        }
    }

    private function checkCredentials() {
        $this->user = $this->bindAndFetchUser('username', $_POST['username']);
        if ($this->user) {
            return isset($_POST['password']) &&  $_POST['password'] === $this->user['password'];
        }
    }

    private function hasValidToken() {
        if (!isset($_COOKIE['token'])) {
            return false;
        }

        $this->user = $this->bindAndFetchUser('token', $_COOKIE['token']);
        if ($this->user) {
            return $_COOKIE['token'] === $this->user['token'];
        }
    }

    //? maybe this would make more sense to put it inside the DB class
    private function bindAndFetchUser($col, $value) {
        $this->db->prepare("SELECT * FROM `user_accounts` WHERE `$col`=?");
        $this->db->bind('s', $value);
        $this->db->exec();
        $result = $this->db->getResult();

        return $result->fetch_assoc();
    }
    
    private function cookiesAllowed() {
        return (isset($_COOKIE['allowCookies']) && $_COOKIE['allowCookies'] === '1');
    }

    private function generateToken() {
        return bin2hex(openssl_random_pseudo_bytes(16));
    }
    
    private function setCookieToken($token) {
        // Set a cookie that expires in 1 hour (3600 seconds)
        setcookie('token', $token, time() + 3600, '/', '', true, true);
    }

    private function updateDbToken($token) {
        $username = $this->user['username'];
        $sql = "UPDATE `user_accounts` SET token='$token' WHERE username='$username'";

        $this->db->insert($sql);
    }
}