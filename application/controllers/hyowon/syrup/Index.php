<?php

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ldir  = 'hyowon/syrup';
        $this->load->model('hyowon/syrup/event_model');
    }

    public function index()
    {
        $data = '';

        $method_arr = explode('::',  __METHOD__);

        $this->load->view('hyowon/syrup/header');
        $this->load->view('hyowon/syrup/' . $method_arr[1],$data);
        $this->load->view('hyowon/syrup/footer');
    }

    public function adkin() {
        $insert_data = [
            'name'=>$this->input->post('name'),
            'memo' => $this->input->post('phone')
        ];

        $result = $this->event_model->eventAddData($insert_data);
        if($result) {
            $this->json(['result'=>'true']);
        } else {
            $this->json(['result'=>'false']);
        }
    }

}