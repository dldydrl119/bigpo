<?php

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ldir  = 'rental/sinkpure';
        $this->load->model('rental/sinkpure/event_model');
    }

    public function index()
    {
        $data = '';

        $method_arr = explode('::',  __METHOD__);

        $this->load->view('rental/sinkpure/header');
        $this->load->view('rental/sinkpure/' . $method_arr[1],$data);
        $this->load->view('rental/sinkpure/footer');
    }

    public function adkin() {
        $insert_data = [
            'name'=>$this->input->post('name'),
            'memo' => $this->input->post('phone'),
            'birth' => $this->input->post('birth'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address')
        ];

        $result = $this->event_model->eventAddData($insert_data);
        if($result) {
            $this->json(['result'=>'true']);
        } else {
            $this->json(['result'=>'false']);
        }
    }

}