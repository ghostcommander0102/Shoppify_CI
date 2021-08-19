<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Build extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the Product Model
        $this->load->model('BuildsModel', 'builds');
        $this->load->model('ComponentModel', 'component');
    }

    public function index() {
        $this->load->view('admin/head');
        $data['builds'] = $this->builds->getBuilds();
        $this->load->view('admin/builds',$data);
        $this->load->view('admin/foot');
    }

    public function editBuild(){
        $build_id = $this->input->get('build_id');
        $data['build'] = $this->builds->getBuild($build_id);
        var_dump($data['build']);
        var_dump($data['build'][0]['build_fortnitefps']);
        $data['build_cpu'] = $this->component->getEasyComponents(1);
        $data['build_motherboard'] = $this->component->getEasyComponents(2);
        $data['build_ram'] = $this->component->getEasyComponents(3);
        $data['build_case'] = $this->component->getEasyComponents(4);
        $data['build_psu'] = $this->component->getEasyComponents(5);
        $data['build_gpu'] = $this->component->getEasyComponents(6);
        $data['build_ssd'] = $this->component->getEasyComponents(7);
        $data['build_hdd'] = $this->component->getEasyComponents(8);
        $data['build_soft'] = $this->component->getEasyComponents(9);
        $data['build_acce'] = $this->component->getEasyComponents(10);
        $data['build_warranty'] = $this->component->getEasyComponents(11);
        $data['build_cooling'] = $this->component->getEasyComponents(12);
        $this->load->view('admin/head');
        $this->load->view('admin/editbuild', $data);
        $this->load->view('admin/foot');
    }

    public function addViewBuild() {
        $data['build_cpu'] = $this->component->getEasyComponents(1);
        $data['build_motherboard'] = $this->component->getEasyComponents(2);
        $data['build_ram'] = $this->component->getEasyComponents(3);
        $data['build_case'] = $this->component->getEasyComponents(4);
        $data['build_psu'] = $this->component->getEasyComponents(5);
        $data['build_gpu'] = $this->component->getEasyComponents(6);
        $data['build_ssd'] = $this->component->getEasyComponents(7);
        $data['build_hdd'] = $this->component->getEasyComponents(8);
        $data['build_soft'] = $this->component->getEasyComponents(9);
        $data['build_acce'] = $this->component->getEasyComponents(10);
        $data['build_warranty'] = $this->component->getEasyComponents(11);
        $data['build_cooling'] = $this->component->getEasyComponents(12);
        // var_dump($data['build_cpu']);
        // return;
        $this->load->view('admin/head');
        $this->load->view('admin/addbuild', $data);
        $this->load->view('admin/foot');
    }

    public function saveBuild() {
        $files = $_FILES['images'];
        $param = $this->input->post();
        $this->builds->saveBuild($param, $files);
    }

    public function addBuild() {
        $files = $_FILES['images'];
        $param = $this->input->post();
        $this->builds->addBuild($param, $files);
    }

    public function deleteBuild() {
        $build_id = $this->input->get('build_id');
        $this->builds->deleteBuild($build_id);
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
