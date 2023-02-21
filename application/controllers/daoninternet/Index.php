<?php

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ldir  = 'daoninternet';
        $this->load->model('daoninternet/event_model');
    }

    public function index()
    {
        $data = '';

        $method_arr = explode('::',  __METHOD__);

        $this->load->view('daoninternet/header');
        $this->load->view('daoninternet/' . $method_arr[1], $data);
        $this->load->view('daoninternet/footer');
    }

    public function adkin()
    {
        $insert_data = [
            'name' => $this->input->post('name'),
            'number' => $this->input->post('phone'),
            'birth' => $this->input->post('birth'),
            'gender' => $this->input->post('gender'),
             'chekVal' => $this->input->post('chekVal'),
            'chekVal2' => $this->input->post('chekVal2'),
            'DSTADDR' => $this->input->post('DSTADDR'),
            'address' => $this->input->post('address')
        ];

        $result = $this->event_model->eventAddData($insert_data);
        if ($result) {
            $this->json(['result' => 'true']);
        } else {
            $this->json(['result' => 'false']);
        }
    }
}
