<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class c_ppe extends C_utilitaire {

    public function __construct() {
		parent::__construct();
		date_default_timezone_set( 'Europe/Paris' );
		setlocale( LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1' );
        $this->dir_reload = 'sio/c_sio';
        $this->dir_menu = 'menu/c_menu';
	}

    function index(){
        // On peuple la variable data pour charger les bons script/css dans le fichier template/header_scripts
        $data['scripts'] = array('bootstrap', 'cssPpe', 'jquery');
        
        
        $this->load->view('template/header_scripts', $data);
        $this->load->view('ppe/ppe',$data);
        
        
    }


}