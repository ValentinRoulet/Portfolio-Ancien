<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class m_vote extends CI_Model {
    
     public function __construct() {
        parent::__construct();
        date_default_timezone_set('Europe/Paris');
        setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
        $this->load->helper('fonctions_helper');
		 
    }
    
    // oui
    public function set_vote($prenom,$nom,$choix) {
        $sql = " 
        INSERT INTO vote (prenom_vote, nom_vote,choix_vote)
        VALUES (?, ?, ?)
        ";
        $query = $this->db->query($sql, array($prenom,$nom,$choix));
    }







}   
?>