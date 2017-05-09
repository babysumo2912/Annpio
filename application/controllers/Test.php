<?php
class Test extends CI_Controller{
    public function index(){
        $this->load->view('test');
    }
    public function upload(){
        $upload = $this->input->post('upload');
//        var_dump($upload);
//        die;
        if(($upload)){
//            die('123');
        $config['upload_path'] ='./public/img/test';
        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size'] = 100;
//        $config['max_width']            = 1024;
//        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->load->initialize($config);
        if (!$this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('test', $error);
        }
        else
        {
            $data['upload'] = $this->upload->data();
            $file_name = $data['upload']['file_name'];
            $upload = array(
                'img' => $file_name
            );
            $data['add'] = $this->Test_models->add($upload);
            if(isset($data['add']) && $data['add'] == false){
                $data['error'] = "FAIL!";
            }
            $this->load->view('test',$data);
        }
    }}
}
?>