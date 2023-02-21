<?php

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ldir  = 'utopia_02/sbj';
        $this->load->model('utopia_02/sbj/event_model');
    }

    public function index()
    {
        $data = '';

        $method_arr = explode('::',  __METHOD__);

        $this->load->view('utopia_02/sbj/header');
        $this->load->view('utopia_02/sbj/' . $method_arr[1], $data);
        $this->load->view('utopia_02/sbj/footer');
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
