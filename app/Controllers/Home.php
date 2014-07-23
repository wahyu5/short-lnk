<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{
    public function index()
    {
        $data['title'] = 'Hello world!';
        $data['pages'] = 'home';
        $this->output('home', $data);
    }
}
