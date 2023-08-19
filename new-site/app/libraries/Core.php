<?php
/*
 #
 # Core Class for Creating URL and Loading Core Controllers
 # URL Format - /controller/method/param
 */

class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->getUrl();
        
        // check if controller exists
        if(file_exists(APP_ROOT. '/controllers/'. ucwords($url[1]) . '.php')){
            $this->currentController = ucwords($url[1]); // our default controller is Pages, which is defined above, anything founded would override it.
            unset($url[1]);
        }
        
        require_once APP_ROOT. '/controllers/'. $this->currentController . '.php';
        $this->currentController = new $this->currentController;
        
        // check if method exists
        if(isset($url[2])) {
            if(method_exists($this->currentController, $url[2])){
                $this->currentMethod = $url[2];
                unset($url[2]);
            }
            
        }

        $this->params = $url ?? [];
        
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl() {
        if(isset($_SERVER['PATH_INFO'])) {
            $url = rtrim($_SERVER['PATH_INFO']);

            $url = filter_var($url);

            $url = array_filter(preg_split("/[^a-zA-Z0-9]+/", $url));

            $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

            parse_str($request, $params);

            array_push($url, $params);

            return $url;
        }
    }
    
}
