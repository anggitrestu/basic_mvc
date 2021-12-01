<?php

class Contact_Us extends Controller
{
    public function index()
    {
        $data['judul'] = 'Contact Us';

        $this->view('templates/header',);
        $this->view('contact_us/index');
        $this->view('templates/footer');
    }
}
