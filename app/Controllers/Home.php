<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{
    public function index()
    {


        $data['message'] = '';
        
        if(isset($_POST['submit'])){
        	$data = array(
        		'id'	=> $this->resources->tools->getRandomString(4 ,false),
        		'target' => $this->resources->request->post('target',FILTER_SANITIZE_URL) , 
        		);
        	$q=$this->models->url_m->random($data);
        	if($q==true){
        		$data['message'] = 'success';
        	}else{
        		exit();
        	}
        }

        $data['title'] = 'Hello world!';
        $data['pages'] = 'home';
        $this->output('home', $data);
    }
}
