<?php

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ldir  = 'cuckoo/promotion_5';
        // $this->load->model('utopia/syrup/event_model');
    }

    public function index()
    {
        $data = '';

        $method_arr = explode('::',  __METHOD__);

        // $this->load->view('utopia/syrup/header');
        $this->load->view('cuckoo/promotion_5/' . $method_arr[1],$data);
        // $this->load->view('utopia/syrup/footer');
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