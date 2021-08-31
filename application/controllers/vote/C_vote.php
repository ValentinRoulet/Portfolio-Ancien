<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_vote extends C_utilitaire {

    public function __construct() {
		parent::__construct();
		date_default_timezone_set( 'Europe/Paris' );
		setlocale( LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1' );
        $this->dir_reload = 'menu/c_menu';
        $this->dir_index = 'index/c_index';
        $this-> dir_controlleur = 'vote/c_vote';
        $this->load->model('vote/m_vote');
	}

    function index(){
        // On peuple la variable data pour charger les bons script/css dans le fichier template/header_scripts
        $data['scripts'] = array('bootstrap', 'cssMenu', 'jquery','sourisMenu');
        $ip = $this->input->ip_address();
        echo(ip2long($ip));
        echo($_SERVER['REMOTE_ADDR']);





        
        
        
        $this->load->view('template/header_scripts', $data);
        $this->load->view('vote/vote',$data);
        
        
        
        
    }

    function formulaire()
    {
        $data['postData'] = array(
            'prenom'=>$this->input->post('prenom'),
            'nom'=>$this->input->post('nom'),
            'choix' =>$this->input->post('choix')
        );
        
            $this->m_vote->set_vote($data['postData']['prenom'],$data['postData']['nom'],$data['postData']['choix']);
        
    
        
        
        redirect($this-> dir_controlleur);
    
    }


}