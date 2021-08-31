<?php

//Commentaire

use Otp\Otp;
use Otp\GoogleAuthenticator;
use ParagonIE\ConstantTime\Encoding;

require_once('./assets/plugins/otp/Otp.php');
require_once('./assets/plugins/otp/GoogleAuthenticator.php');
require_once('./assets/plugins/otp/OtpInterface.php');
require_once('./assets/plugins/Encoding/Encoding.php');
require_once('./assets/plugins/Encoding/Base32.php');
require_once('./assets/plugins/phpqrcode/qrlib.php');

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class c_login extends C_utilitaire {

    private $data;

    public function __construct() {
		parent::__construct();
		date_default_timezone_set( 'Europe/Paris' );
		setlocale( LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1' );
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('login/m_login');
        $this->load->helper('fonctions_helper');
        $this->dir_controlleur = 'login/c_login';
        $this->dir_changelog = 'changeLog/c_changelog_posts';

	}

    function index(){

        $_SESSION['user'] = null;

        $_SESSION['MM_Username'] = 1;
        $_SESSION['SU'] = 'X';
        

        $this->form_validation->set_rules("login","login","required");
        $this->form_validation->set_rules("password","password","required");
        if($this->form_validation->run()){
            // met dans une array les inputs du formulaire
            $data['output'] = array(
                'login'=>$this->input->post('login'),
                'password'=>f_crypt($this->input->post('password'))
            );
            var_dump($data['output']['password']);

            //envoie les données du formulaire à la fonction login_user du modèle totp_login
            if($this->m_login->login_user($data)){
                // récupère l'id de l'utilisateur qui viens de se connecter et le place dans une variable de session
                $_SESSION['user'] = $this->m_login->get_id_user($data);
                echo('oui');
                //regarde si il possède ou pas la double auth et le redirige en fonction de ça
                if($this->m_login->get_data_user($_SESSION['user'][0]->user_id)[0]->totp_key == null){
                    redirect(base_url() . 'index.php/'. $this->dir_controlleur .'/mon_compte');
                }
                else{
                    redirect(base_url() . 'index.php/'. $this->dir_controlleur .'/valider_totp');
                }
            }else{
                redirect(base_url() . 'index.php/'. $this->dir_controlleur);
            }
        }



        // On peuple la variable data pour charger les bons script/css
        $data['scripts'] = array('jquery2', 'bootstrap', 'lte', 'datatables', 'datepicker', 'sweetalert');
        

        // On charge les differents modules neccessaires a l'affichage d'une page
        $this->load->view('template/header_scripts', $data);
		$this->load->view("login/login_page.php", $data);
    }
    function envoyer_fichier()
    {
        
        $target_dir = "F:\Programme\laragon\www\Portfolio\assets\CV/";
        $target_file =  $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        /*
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        */
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "pdf" ) {
            echo "Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.";
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
        
        redirect(base_url() . 'index.php/login/c_login/mon_compte');
    }

    function mon_compte(){
        // si la session est null c'est que l'utilisateur n'est pas connecté donc retour à la page de login
        if($_SESSION['user'] == null){
            redirect(base_url() . 'index.php/'. $this->dir_controlleur);
        }

        //données envoyé à la vue
        $data['userInfo'] = array(
            "prenom" => $this->m_login->get_data_user($_SESSION['user'][0]->user_id)[0]->user_prenom,
            "nom" => $this->m_login->get_data_user($_SESSION['user'][0]->user_id)[0]->user_nom,
            "estSimple" => $this->m_login->get_data_user($_SESSION['user'][0]->user_id)[0]->totp_key == null
        );
        
        $_SESSION['user']['role'] = $this->m_login->get_role($_SESSION['user'][0]->user_id)[0]->user_role;

        // On peuple la variable data pour charger les bons script/css
        $data['scripts'] = array('jquery2', 'bootstrap', 'lte', 'datatables', 'datepicker', 'sweetalert');


        // On charge les differents modules neccessaires a l'affichage d'une page
        $this->load->view('template/header_scripts', $data);
		$this->load->view("login/mon_compte.php", $data);

    }

    function valider_totp(){
        // si la session est null c'est que l'utilisateur n'est pas connecté donc retour à la page de login
        if($_SESSION['user'] == null){
            redirect(base_url() . 'index.php/'. $this->dir_controlleur);
        }

        // validation form de la double authentification
        $this->form_validation->set_rules("key","key","required");
        if($this->form_validation->run()){
            $inputKey = $this->input->post('key');

            $otp = new Otp();

            // décode la clé secrete en fonction de la clé totp décrypté en BDD
            $currentTotp = $otp->totp(Encoding::base32DecodeUpper(f_decrypt($this->m_totp_login->get_data_user($_SESSION['user'][0]->user_id)[0]->totp_key)));

            // compare l'input et la clé décodé en BDD
            if($currentTotp == $inputKey){
                redirect(base_url() . 'index.php/'. $this->dir_controlleur .'/mon_compte');
            }else{
                redirect(base_url() . 'index.php/'. $this->dir_controlleur);
            }
        }

        // On peuple la variable data pour charger les bons script/css
        $data['scripts'] = array('jquery2', 'bootstrap', 'lte', 'datatables', 'datepicker', 'sweetalert');

        // On charge les differents modules neccessaires a l'affichage d'une page
        $this->load->view('template/header_scripts', $data);
		$this->load->view("login/valider_totp.php", $data);

    }

    function activate_totp(){
        // si la session est null c'est que l'utilisateur n'est pas connecté donc retour à la page de login
        if($_SESSION['user'] == null){
            redirect(base_url() . 'index.php/'. $this->dir_controlleur);
        }

        // appel fonction qui crée la clé TOTP
        $secret = GoogleAuthenticator::generateRandom();

        // appel fonction qui retourne le string le l'URI du type otpauth
        $qrtext = GoogleAuthenticator::getKeyUri('totp', 'totpGPA', $secret, null, array("algoritm" => "SHA256", "digits" => '6', "period" => '30'));

        // Création du de l'image du qr code
        $SERVERFILEPATH = $_SERVER['DOCUMENT_ROOT'].'/assets/images/qrcodes/';
        $text = $qrtext;
        $text1= $_SESSION['user'][0]->user_id;	
        $folder = $SERVERFILEPATH;
        $file_name1 = $text1."-Qrcode" . rand(2,200) . ".png";
        $file_name = $folder.$file_name1;
        QRcode::png($text,$file_name);
        $qrCode = base_url('/assets/images/qrcodes/'.$file_name1);

        $data['totp'] = array("qrCode" => $qrCode);

        // ajoute la clé TOTP crypté dans la BDD
        $this->m_totp_login->set_totp_key(f_crypt($secret), $_SESSION['user'][0]->user_id);

        // On peuple la variable data pour charger les bons script/css
        $data['scripts'] = array('jquery2', 'bootstrap', 'lte', 'datatables', 'datepicker', 'sweetalert');
        // Creation du bandeau
        $data['titre'] = array("Activer le totp", "");
        $data['boutons'] = array(
            array("Retour", "fa fa-arrow-left", $this->dir_controlleur . "/mon_compte", null)
        );
        $data['custom_script'] = '';

        // On charge les differents modules neccessaires a l'affichage d'une page
        $this->load->view('template/header_scripts', $data);
		$this->load->view("login/activate_totp.php", $data);
    }

    function desactiver_totp(){
        // si la session est null c'est que l'utilisateur n'est pas connecté donc retour à la page de login
        if($_SESSION['user'] == null){
            redirect(base_url() . 'index.php/'. $this->dir_controlleur);
        }

        $this->m_totp_login->set_totp_key(null, $_SESSION['user'][0]->user_id);
        $this->mon_compte();
    }

    function infos_utilisateur(){
        // si la session est null c'est que l'utilisateur n'est pas connecté donc retour à la page de login
        if($_SESSION['user'] == null){
            redirect(base_url() . 'index.php/'. $this->dir_controlleur);
        }

        //données envoyé à la vue
        $data['userInfo'] = array(
            "prenom" => $this->m_login->get_data_user($_SESSION['user'][0]->user_id)[0]->user_prenom,
            "nom" => $this->m_login->get_data_user($_SESSION['user'][0]->user_id)[0]->user_nom,
            "mail" => $this->m_login->get_data_user($_SESSION['user'][0]->user_id)[0]->user_mail,
            "estSimple" => $this->m_login->get_data_user($_SESSION['user'][0]->user_id)[0]->totp_key == null
        );

        $data['scripts'] = array('jquery2', 'bootstrap', 'lte', 'datatables', 'datepicker', 'sweetalert');

        // On charge les differents modules neccessaires a l'affichage d'une page
        $this->load->view('template/header_scripts', $data);
		$this->load->view("login/infos_utilisateur.php", $data);

    }
}