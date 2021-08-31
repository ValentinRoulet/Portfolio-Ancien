<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class c_menu extends C_utilitaire {

    public function __construct() {
		parent::__construct();
		date_default_timezone_set( 'Europe/Paris' );
		setlocale( LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1' );
        $this->dir_reload = 'menu/c_menu';
        $this->dir_index = 'index/c_index';
	}

    function index(){
        // On peuple la variable data pour charger les bons script/css dans le fichier template/header_scripts
        $data['scripts'] = array('bootstrap', 'cssMenu', 'jquery','sourisMenu');
        


        $data['boutons'] = array(
            array("BTS SIO",1),
            array("PPE",2),
            array("COMPÉTENCES",3),
            array("VEILLE",4),
            //array("QUI-SUIS-JE ?",5),
            //array("CONTACT",6)
        );
        
        
        $this->load->view('template/header_html_base', $data);
        $this->load->view('template/header_scripts', $data);
        
        $this->load->view('menu/menu',$data);
        $this->load->view('template/bouton', $data);
        $this->load->view('template/carousel', $data);
        
        
    }


}