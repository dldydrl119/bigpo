<?php


class Main extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->ldir  = 'utopiaeloom2';
        $this->load->helper('url');
        $this->load->model($this->ldir . '/admin_model');
    }

    public function index(){
        $this->load->view($this->ldir.'/admin_login');
    }


    public function loginData() //로그인 데이터
    {
        $loginData = $this->admin_model->loginData();

        if (password_verify($_POST['pass'] ,$loginData->admin_pass) ) {
            $newdata = array(
                'utopiaeloom2_id'  => $loginData->admin_id,
                'utopiaeloom2_idx'	=> $loginData->admin_idx,
            );
            $this->session->set_userdata($newdata);
            echo json_encode(['return'=>true]);
        }
        else {
            echo json_encode(['return'=>false]);
        }
    }

    public function logout(){
//        $this->session->sess_destroy();
        $this->session->unset_userdata('utopiaeloom2_id');

        $this->session->unset_userdata('utopiaeloom2_idx');
        header("location: ".URL.'utopiaeloom2/admin/main/');
        exit;
    }

    public function uploadimage() {
        $json = $this->upload('image');
        return $this->json($json);
    }


}