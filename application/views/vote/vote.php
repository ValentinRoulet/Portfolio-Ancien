<!doctype html>
<html>
    <head>
        <title>Vote</title>
    </head>
    <form class="form-horizontal" action="<?php echo base_url() . "index.php/menu/c_menu" ?>" method="POST">
        <button type='submit' class='btn no-print' style=" position: relative; top: 10px; left: 5px; color:black;  height: 40px;" > <i class="fas fa-long-arrow-alt-left"></i> RETOUR </button>
    </form>
    <body class="bodyMenu">

    <div class="oui">
        <div class="fdp" style="">
            <h3>Votez pour les lunettes qui me vont le mieux</h3>
            <p>(stp 💛)</p>
        </div>
    
        

            <span id="votre_id1" class="target">
            </span>
            <span id="votre_id2" class="target">
            </span>
            <span id="votre_id3" class="target">
            </span>
            <span id="votre_id4" class="target">
            </span>
            <div class="cadre_diapo">
                <div class="interieur_diapo">
                    <div class=description>
                        <span>
                            Lunettes Doré
                        </span>
                        <img src="../../../assets/lunettes/doré/dore1.jpg" alt>
                    </div>
                    <div class=description>
                        <span>
                            Lunettes Doré(comme Julien lol)
                        </span>
                        <img src="../../../assets/lunettes/doré/dore2.jpg" alt>
                    </div>
                    <div class=description>
                        <span>
                            Lunettes Doré
                        </span>
                        <img src="../../../assets/lunettes/doré/dore3.jpg" alt>
                    </div>
                    <div class=description>
                        <span>
                            Lunettes Doré
                        </span>
                        <img src="../../../assets/lunettes/doré/dore4.jpg" alt>
                    </div>
                </div>
                <ul class="navigation_diapo">
                <li>
                <a href="#votre_id1">
                <img src="../../../assets/lunettes/doré/dore1.jpg" alt>
                </a>
                </li>
                <li>
                <a href="#votre_id2">
                <img src="../../../assets/lunettes/doré/dore2.jpg" alt>
                </a>
                </li>
                <li>
                <a href="#votre_id3">
                <img src="../../../assets/lunettes/doré/dore3.jpg" alt>
                </a>
                </li>
                <li>
                <a href="#votre_id4">
                <img src="../../../assets/lunettes/doré/dore4.jpg" alt>
                </a>
                </li>
                </ul>
            </div>



            <span id="votre_id5" class="target2">
            </span>
            <span id="votre_id6" class="target2">
            </span>
            <div class="cadre_diapo2">
                <div class="interieur_diapo2">
                    <div class=description>
                        <span>
                            Lunettes Noire
                        </span>
                        <img src="../../../assets/lunettes/noir/noir1.jpg" alt>
                    </div>
                    <div class=description>
                        <span>
                            Lunettes Noire
                        </span>
                        <img src="../../../assets/lunettes/noir/noir2.jpg" alt>
                    </div>
                </div>
                <ul class="navigation_diapo2">
                <li>
                    <a href="#votre_id5">
                        <img src="../../../assets/lunettes/noir/noir1.jpg" alt>
                    </a>
                </li>
                <li>
                    <a href="#votre_id6">
                        <img src="../../../assets/lunettes/noir/noir2.jpg" alt>
                    </a>
                </li>
                </ul>
            </div>

        


    </div>

    <div class="box box-primary with-border col-md-4">
            <form class="form-horizontal" action="<?php echo base_url() . "index.php/vote/c_vote/formulaire" ?>" method="POST">

                <div class="box-header with-border">

                    <div class="form-group">
                        <label for="inputPrenom" class="col-sm-1 control-label">Prenom</label>
                        <div class="col-sm-10">
                            <input type="text" name="prenom" id="inputPrenom" class="form-control" placeholder="Prenom" required>
                        </div>
                        <span class="text-danger"><?php echo form_error('prenom'); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputNom" class="col-sm-1 control-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" name="nom" id="inputNom" class="form-control" placeholder="Nom" required>
                        </div>
                        <span class="text-danger"><?php echo form_error('nom'); ?></span>
                    </div>
                </div>

                <div class="box-body with-border">
                    <!-- Menu déroulant -->
                    <div class="col-sm-10">
                        <select class="noire" name="choix" id="Choix" class="col-sm-2 col-md-offset-6">

                                <option value="Dore">Dore</option>
                                <option value="Noire">Noire</option>
                                <option value="Aucune">Aucune des deux</option>
                        </select>

                    </div>
                </div>

                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-info">Valider</button>
                </div>

            </form>
        

    </body>
</html>