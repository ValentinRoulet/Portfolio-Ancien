<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class c_cv extends C_utilitaire
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Europe/Paris');
        setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
        $this->dir_reload = 'menu/c_menu';
        $this->dir_index = 'index/c_index';
    }

    function index()
    {
        // On peuple la variable data pour charger les bons script/css dans le fichier template/header_scripts
        $data['scripts'] = array('bootstrap', 'cssCV', 'jquery', 'sourisMenu', 'cssBouton');


        $this->load->view('template/header_scripts', $data);
        //oui
        $this->load->view('cv/cv', $data);
    }
}