<?php

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ldir  = basename(__DIR__);
        $this->load->model('utopiaeloom3/event_model');
    }

    public function index()
    {
        $data = '';

        $method_arr = explode('::',  __METHOD__);

        $this->load->view('utopiaeloom3/header');
        $this->load->view('utopiaeloom3/' . $method_arr[1],$data);
        $this->load->view('utopiaeloom3/footer');
    }
 
    public function adkin() {
        $insert_data = [
            'name'=>$this->input->post('name'),
            'memo' => $this->input->post('phone'),
            'DSTADDR' => $this->input->post('DSTADDR'),
            // 'hope' => $this->input->post('hope')
        ];

        $result = $this->event_model->eventAddData($insert_data);
        if($result) {
            $this->json(['result'=>'true']);
        } else {
            $this->json(['result'=>'false']);
        }
    }
}