<!doctype html>
<html>
    <head>
        <title>PortFolio</title>
    </head>
    <body class="bodyCompetence">

    <form class="form-horizontal" action="<?php echo base_url() . "index.php/menu/c_menu" ?>" method="POST">
        <button type='submit' class='btn no-print' style=" position: relative; top: 10px; left: 5px; color:black;  height: 40px;" > <i class="fas fa-long-arrow-alt-left"></i> RETOUR </button>
    </form>
        
        <div class="div" name="cont1">
            <h1>Portefeuille de compétence ?</h1>
            <div class="presentation" name="presentation">
                <p class="txtPresentation">
                    Le portefeuille de compétence contient les compétences que j'ai acquises lors de mes deux années de BTS.</br>
                </p>
            </div>
        </div>

        <div name="image" class="imgDiv">
            <!--<img src="..\..\..\assets\competence\grille.jpg" alt="" class="imgCompetence">-->
            <img class="" id="zoom_05" src="..\..\..\assets\competence\grille.jpg" data-zoom-image="http://localhost:8000/assets/competence/grille1.jpg"/>
        </div>


        <script type="text/javascript">
            $("#zoom_05").elevateZoom({
            zoomType				: "inner",
            cursor: "crosshair"
            });

            $("#zoom_01").elevateZoom();

            //https://www.elevateweb.co.uk/image-zoom/examples/
        </script>


    </body>
</html>