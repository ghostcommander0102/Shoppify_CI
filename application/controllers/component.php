<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the Product Model
        $this->load->model('ComponentModel', 'component');
    }

    public function index() {
        $component_type = $this->input->get('component_type');
        $this->load->view('admin/head');
        $data['components'] = $this->component->getComponents($component_type);
        $this->load->view('admin/components', $data);
        $this->load->view('admin/foot');
    }

    public function editComponent(){
        $id = $this->input->get('id');
        $this->load->view('admin/head');
        $data['component'] = $this->component->editComponent($id);
        $this->load->view('admin/editcomponent', $data);
        $this->load->view('admin/foot');
    }

    public function saveComponent() {
        $param = $this->input->post();
        $this->component->saveComponent($param);
    }

    public function addViewComponent() {
        $this->load->view('admin/head');
        $this->load->view('admin/addcomponent');
        $this->load->view('admin/foot');
    }

    public function addComponent() {
        $param = $this->input->post();
        $this->component->addComponent($param);
    }

    public function deleteComponent(){
        $id = $this->input->get('id');
        return $this->component->deleteComponent($id);
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
