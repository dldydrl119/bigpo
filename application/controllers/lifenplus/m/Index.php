<?php

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ldir  = 'lifenplus/m';
        $this->load->model('lifenplus/event_model');
    }

    public function index()
    {
        $data = '';

        $method_arr = explode('::',  __METHOD__);

        $this->load->view('lifenplus/m/header');
        $this->load->view('lifenplus/m/' . $method_arr[1],$data);
        $this->load->view('lifenplus/m/footer');
    }

    public function adkin() {
        $insert_data = [
            'name'=>$this->input->post('name'),
            'memo' => $this->input->post('phone'),
            'hope' => $this->input->post('hope')
        ];

        $result = $this->event_model->eventAddData($insert_data);
        if($result) {
            $this->json(['result'=>'true']);
        } else {
            $this->json(['result'=>'false']);
        }
    }
}