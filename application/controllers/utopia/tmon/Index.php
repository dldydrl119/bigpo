<?php

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ldir  = 'utopia/tmon';
        $this->load->model('utopia/tmon/event_model');
    }

    public function index()
    {
        $data = '';

        $method_arr = explode('::',  __METHOD__);

        $this->load->view('utopia/tmon/header');
        $this->load->view('utopia/tmon/' . $method_arr[1], $data);
        $this->load->view('utopia/tmon/footer');
    }

    public function adkin()
    {
        $insert_data = [
            'name' => $this->input->post('name'),
            'memo' => $this->input->post('phone')
        ];

        $result = $this->event_model->eventAddData($insert_data);
        if ($result) {
            $this->json(['result' => 'true']);
        } else {
            $this->json(['result' => 'false']);
        }
    }
}
