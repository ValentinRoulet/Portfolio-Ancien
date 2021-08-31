<?php 
    use Otp\Otp;
    use Otp\GoogleAuthenticator;
    use ParagonIE\ConstantTime\Encoding;

    require_once('./assets/plugins/otp/Otp.php');
    require_once('./assets/plugins/otp/GoogleAuthenticator.php');
    require_once('./assets/plugins/otp/OtpInterface.php');
    require_once('./assets/plugins/Encoding/Encoding.php');
    require_once('./assets/plugins/Encoding/Base32.php');

?>

<h1>Mon Compte</h1>
<p>bienvenu <?php echo $userInfo['prenom'] . ' ' . $userInfo['nom'] ?></p>

<?php

    //debug($_SESSION);

    if($userInfo['estSimple']){
?>
    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/login/c_login/activate_totp">
        <button type="submit" class="btn btn-info">Activer TOTP</button>
    </form>
<?php    
    } else {
?>

    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/login/c_login/desactiver_totp">
        <button type="submit" class="btn btn-info">Désactiver TOTP</button>
    </form>

<?php
    }
?>
<br><br><br>

<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/login/c_login/infos_utilisateur">
    <button type="submit" class="btn btn-info">Voir vos informations</button>
</form>
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/login/c_login/envoyer_fichier">
    
    <input type="file" name="fileToUpload" id="fileToUpload">
    <button type="submit" class="btn btn-info" name="fichier">Envoyer fichier</button>
</form>

<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Menu/c_menu">
    <button type="submit" class="btn btn-info">Retour Menu</button>
</form>
