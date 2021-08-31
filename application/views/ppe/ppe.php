<!doctype html>
<html>
    <head>
        <title>PortFolio</title>
    </head>
    <body class="bodyPpe">

    <form class="form-horizontal" action="<?php echo base_url() . "index.php/menu/c_menu" ?>" method="POST">
        <button type='submit' class='btn no-print' style=" position: relative; top: 10px; left: 5px; color:black;  height: 40px;" > <i class="fas fa-long-arrow-alt-left"></i> RETOUR </button>
    </form>
        
        <div class="div" name="cont1">
            <h1>Qu'est ce que les PPE ?</h1>
            <div class="presentation" name="presentation">
                <p class="txtPresentation">
                    Les Projet Personnalisé Encadrés (PPE) sont des travaux en duo. Ils permettent de mettre en situation les élèves selon les contextes qu'ils pourraient rencontrer dans le monde professionnel. </br>
                </p>
            </div>
        </div>

        <div name="cont3" id="cont3">
            <div name="matiere1er" class="text_sio">
                <h3>PPE 1</h3>
                <p>
                    Contexte : Notre société souhaite développer un site internet privé pour la section BTS </br> afin que les étudiants puissent garder le contact avec les professeurs mais aussi d'avoir </br> un réseau professionnel avant d'avoir le diplôme. Le site sera implanté dans les </br> serveurs locaux de l'établissement.
                    </br>
                    </br>
                    Le projet est en PHP avec comme framework CodeIgniter.
                    </br>
                    </br>
                    Le site web contient une vitrine de présentation du BTS SIO, un système </br> de communication(messagerie instantanée), une plateforme de dépôt de CV </br> et de demande de stage, un calandrier </br> des manifestations et une gestion de compte.
                    </br>
                    </br>
                    <a href="https://github.com/ValentinRoulet/LVV-PROJECT-PHP">Lien GitHub</a>
                </p>
            </div>
            <div name="matiere2eme" class="text_sio">
                <h3>PPE2</h3>
                <p>
                    Contexte : Une entreprise veut étendre son activité aux courses en ligne.</br> Elle nous alors contactée pour développer une application mobile </br> permettant de gérer l'activité interne de l'entreprise.
                    </br>
                    </br>
                    Le projet est en Java.
                    </br>
                    </br>
                    L’application permet pour un client de faire ses courses (ajouter des produits</br>
                    dans son panier), payer, changer ses informations. Pour un employé de</br> 
                    voir les livraisons en attente et de les accepter. Pour un administrateur</br>
                    d’ajouter des produits et des catégories de  produits puis gérer les employés.</br>
                    </br>
                    </br>
                    <a href="https://github.com/PltPierre/ProjetJavaSIO">Lien GitHub</a>
                </p>
            </div>
        </div>
        

    </body>
</html>