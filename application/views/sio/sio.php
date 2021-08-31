<!doctype html>
<html>
    <head>
        <title>PortFolio</title>
    </head>
    <body class="bodySio">

    <form class="form-horizontal" action="<?php echo base_url() . "index.php/menu/c_menu" ?>" method="POST">
        <button type='submit' class='btn no-print' style=" position: relative; top: 10px; left: 5px; color:black;  height: 40px;" > <i class="fas fa-long-arrow-alt-left"></i> RETOUR </button>
    </form>
        
        <div class="div" name="cont1">
            <h1>Présentation</h1>
            <div class="presentation" name="presentation">
                <p class="txtPresentation">
                    Le BTS Services Informatiques aux Organisations est un diplôme recconu par l'état de niveau BAC+2.

                    Il remplace depuis Septembre 2011, l'ancien BTS IG (Informatique de gestion).

                    En effet, cette nouvelle formule réponds aux attentes de la profession en matière de qualification.

                    Le programme a évolué en fonction de la place et du rôle des TIC (Technologies de l'Information et de la Communication)

                    Et propose deux spécialités bien distinctes : Le BTS SIO Option SISR et le BTS SIO Option SLAM.
                </p>
            </div>
        </div>

        <h1 class="titre">Option de la formation</h1>
        <div name="cont2" id="cont2">
            
            <div name="slam" class="text_sio">
                <h3>
                    OPTION A : SLAM SOLUTIONS LOGICIELLES ET APPLICATIONS MÉTIERS</h3>
                <p>
                    La spécialisation SLAM du BTS SIO est elle plus orientée Développement. Elle permet d'apprendre à réaliser des logiciels, sites webs, applications mobiles, mais aussi de rédiger des documentations techniques liées à celles-ci. De plus, elle permet d'apprendre à former des utilisateurs pour gérer la maintenance des applications.
                </p>
            </div>
            <div name="sisr" class="text_sio">
                <h3>OPTION B : SISR SOLUTIONS D'INFRASTRUCTURES SYSTÈMES ET RÉSEAUX</h3>
                <p>La spécialisation SISR du BTS SIO permet d’apprendre un métier qui consiste à installer, configurer et gérer les équipements et les réseaux informatiques. Cela signifie intervenir sur la conception, la mise en place, le déploiement et la maintenance de programmes destinés à la gestion au sein d’une organisation.</p>
            </div>
        </div>

        <h1 class="titre">Matières enseignées</h1>
        <div name="cont3" id="cont3">
            <div name="matiere1er" class="text_sio">
                <h3>Première Année :</h3>
                <p>
                    - Culture Générale & Expression <br/>

                    - Anglais<br/>

                    - Mathématiques<br/>

                    - Algorithmie<br/>

                    - Analyse économique, managériale et juridiques des services informatiques<br/>

                    - Enseignements Communs : 4 Modules au 1er semestre et 2 au second<br/>

                    - Enseignements de spécialité (SLAM ou SISR) : 2 modules uniquement au second semestre<br/>

                    - Projets Personnels Encadrés (PPE)<br/>
                </p>
            </div>
            <div name="matiere2eme" class="text_sio">
                <h3>Deuxième Année :</h3>
                <p>
                    - Culture Générale & Expression<br/>

                    - Anglais<br/>

                    - Mathématiques<br/>

                    - Analyse économique, managériale et juridiques des services informatiques<br/>

                    - Enseignements Communs : 1 Module de Gestion de Projet<br/>

                    - Enseignements de spécialité (SLAM ou SISR) : 3 Modules<br/>

                    - Projets Personnels Encadrés (PPE)<br/>
                </p>
            </div>
        </div>
        

    </body>
</html>