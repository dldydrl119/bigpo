<?php

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ldir  = basename(__DIR__);
        $this->load->model('utopiaeloom2/event_model');
    }

    public function index()
    {
        $data = '';

        $method_arr = explode('::',  __METHOD__);

        $this->load->view('utopiaeloom2/header');
        $this->load->view('utopiaeloom2/' . $method_arr[1],$data);
        $this->load->view('utopiaeloom2/footer');
    }
 
    public function adkin() {
        if (!empty($this->input->post('marketing_agreement'))) {
            $marketing_agreement = '동의';
        } else {
            $marketing_agreement = '비동의';
        }
        $insert_data = [
            'name'=>$this->input->post('name'),
            'memo' => $this->input->post('phone'),
            'hope' => $this->input->post('hope'),
            'DSTADDR' => $this->input->post('DSTADDR'),
            'marketing_agreement' => $marketing_agreement
        ];

        $result = $this->event_model->eventAddData($insert_data);
        if($result) {
            $this->json(['result'=>'true']);
        } else {
            $this->json(['result'=>'false']);
        }
    }
}