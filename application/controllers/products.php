<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the Product Model
        $this->load->model('ProductsModel', 'products');
    }

    public function index() {
        $this->load->view('head');
        $data['products'] = $this->products->getProducts();
        $this->load->view('products',$data);
        $this->load->view('foot');
    }

    public function getDetail($id){
        $this->load->view('head');
        $data['product'] = $this->products->getDetail($id);
        $this->load->view('product', $data);
        $this->load->view('foot');
    }

    public function viewLimitedEdition(){
        $this->load->view('head');
        $data['products'] = $this->products->getProducts();
        $this->load->view('limitedproduct',$data);
        $this->load->view('foot');
    }
}

function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $temparray['name'] = str_replace(".pdf", "", $value);
            $tempa = explode('\\uploads\\', $path)[1];
            $temparray['directory'] = str_replace(".pdf", "", $tempa);
            $results[] = $temparray;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
        }
    }

    return $results;
}
