
<!doctype html>
<html>
    <head>
    <title>PortFolio</title>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script>

    </head>
    <body class="bodySio">

    <form class="form-horizontal" action="<?php echo base_url() . "index.php/menu/c_menu" ?>" method="POST">
        <button type='submit' class='btn no-print' style=" position: relative; top: 10px; left: 5px; color:black;  height: 40px;" > <i class="fas fa-long-arrow-alt-left"></i> RETOUR </button>
    </form>
        
        <div class="div" name="cont1">
            <h1>Veille technologique</h1>
            <div class="presentation" name="presentation">
                <p class="txtPresentation">
                La veille technologique porte sur les innovations du secteur, les nouvelles techniques et nouveaux produits des concurrents.</br>
                </br>
                Plusieurs critères permettent de surveiller les évolutions technologiques, les brevets déposés,</br>
                les nouvelles normes, les nouveaux produits, les nouveaux processus de production et de prise en charge des clients.</br>
                </br>
                Pour le sujet, nous avons choisi les moteurs de jeux vidéo.</br>
                Nous sommes passionnés par les jeux vidéo et c'est pour cela que nous voulions en apprendre plus sur leurs créations, conceptions.</br>
                
                </br>
                Nous avons choisi la méthode PULL qui permet de "pousser" l'information vers nous.</br>
                Pour cela, nous utilisons <a href="https://feedly.com/">Feedly</a>.</br>
                </p>
            </div>
        </div>


        <div name="cont2" id="cont2">
            
            <div name="article1" class="text_sio" >
                <h3 data-toggle="modal" data-target="#article1"> Unreal Engine 5 </h3>
                <p>
                    L'unreal Engine sort en early acces  (Mai 2021)
                </p>
                <a target="_blank" class="btn" href="http://forums.unrealengine.com/t/inside-unreal-welcome-to-unreal-engine-5-early-access/231165">En voir plus...</a>
            </div>
            <div name="article2" class="text_sio">
                <h3> L'in-app update Android Unity</h3>
                <p>Elle permet d'informer les développeurs et l'application sur les mises à jours(date, priotité, nouvelle Màj) (Avril 2021)</p>
                <a target="_blank" class="btn" href="https://developer.android.com/guide/playcore/in-app-updates/unity" onclick="">En voir plus...</a>
            </div>
        </div>

        <div name="cont2" id="cont2">
            
            <div name="article1" class="text_sio">
                <h3> Unity et Here</h3>
                <p>
                Unity et Here Technologies développent un système de navigation basé sur une carte 3D (Mars 2021)
                </p>
                <a target="_blank" class="btn" href="https://www.usine-digitale.fr/article/unity-et-here-technologies-developpent-un-systeme-de-navigation-base-sur-une-carte-3d.N1074914">En voir plus...</a>
            </div>
            <div name="article2" class="text_sio" >
                <h3>Fermeture d’Unity Connect</h3>
                <p>La platforme d'unity connect permettait à tous d'utiliser des outils de développement fait par la communauté(Février 2021)</p>
                <a target="_blank" class="btn" href="https://support.unity.com/hc/en-us/articles/210624243-What-is-Unity-Connect-">En voir plus...</a>
            </div>
        </div><div name="cont2" id="cont2">
            
            <div name="article1" class="text_sio">
                <h3> Amélioration des squelettes</h3>
                <p>
                Avec la sortie de l'Unreal Engine 4.26 une nouvelle mise à jours arrive, l'amélioration du contrôle des squelettes des mannequins. Il y a plus d'animations, plus de membres contrôlables...(Janvier 2021)
                </p>
                <a target="_blank" class="btn" href="https://www.unrealengine.com/en-US/tech-blog/control-rig-mannequin-sample-updated-to-demonstrate-latest-4-26-features">En voir plus...</a>
            </div>
            <div name="article2" class="text_sio" >
                <h3>Mise à jours D'unreal Engine 4.26</h3>
                <p>La nouvelle mise à jours apporte son lot de nouveautés et d'améliorations. Des nouveaux monde et environnements, des nouveaux outils de développement(Decembre 2020)</p>
                <a target="_blank" class="btn" href="https://www.unrealengine.com/en-US/blog/unreal-engine-4-26-released">En voir plus...</a>
            </div>
        </div><div name="cont2" id="cont2">
            
            <div name="article1" class="text_sio" >
                <h3> Plus d’information sur unreal engine 5</h3>
                <p>
                L’article nous permet d’en apprendre plus sur le fonctionnement de la lumière avec notamment l’interview  d’Alex Junca, concepteur lumière. (novembre 2020)
                </p>
                <a target="_blank" class="btn" href="https://www.lightzoomlumiere.fr/interview/unreal-engine-5-nouvelle-technologie-en-eclairage-lumen/">En voir plus...</a>
            </div>
            <div name="article2" class="text_sio" >
                <h3>Unity vs Unreal</h3>
                <p>Comparaison entre les deux moteurs de recherche les plus connu(octobre 2020)</p>
                <a target="_blank" class="btn" href="https://gamedevacademy.org/unity-vs-unreal/">En voir plus...</a>
            </div>
        </div>



        <!-- Modal -->

        <div id="article1" class="modal-window">
            <div class="">
                <a href="#" title="Close" class="modal-close">Close</a>
                <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="97%"
                    height="100%"
                    src="http://forums.unrealengine.com/t/inside-unreal-welcome-to-unreal-engine-5-early-access/231165">
                </iframe>
            </div>
        </div>

        <div id="article2" class="modal-window">
            <div class="">
                <a href="#" title="Close" class="modal-close">Close</a>
                <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="97%"
                    height="100%"
                    src="">
                </iframe>
            </div>
        </div>

        <div id="article3" class="modal-window">
            <div class="">
                <a href="#" title="Close" class="modal-close">Close</a>
                <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="97%"
                    height="100%"
                    src="">
                </iframe>
            </div>
        </div>

        <div id="article4" class="modal-window">
            <div class="">
                <a href="#" title="Close" class="modal-close">Close</a>
                <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="97%"
                    height="100%"
                    src="">
                </iframe>
            </div>
        </div>

        <div id="article5" class="modal-window">
            <div class="">
                <a href="#" title="Close" class="modal-close">Close</a>
                <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="97%"
                    height="100%"
                    src="">
                </iframe>
            </div>
        </div>

        <div id="article6" class="modal-window">
            <div class="">
                <a href="#" title="Close" class="modal-close">Close</a>
                <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="97%"
                    height="100%"
                    src="">
                </iframe>
            </div>
        </div>

        <div id="article7" class="modal-window">
            <div class="">
                <a href="#" title="Close" class="modal-close">Close</a>
                <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="97%"
                    height="100%"
                    src="">
                </iframe>
            </div>
        </div>

        <div id="article8" class="modal-window">
            <div class="">
                <a href="#" title="Close" class="modal-close">Close</a>
                <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="97%"
                    height="100%"
                    src="https://forum.alsacreations.com/topic-5-79179-1-ContenudistantdansunmodalBootstrap.html">
                </iframe>
            </div>
        </div>


        <!--
            <div name="cont2" id="cont2">
            
            <div name="article1" class="text_sio" >
                <h3 data-toggle="modal" data-target="#article1"> Unreal Engine 5 </h3>
                <p>
                    L'unreal Engine sort en early acces  (Mai 2021)
                </p>
                <a target="_blank" class="btn" href="http://forums.unrealengine.com/t/inside-unreal-welcome-to-unreal-engine-5-early-access/231165">En voir plus...</a>
            </div>
            <div name="article2" class="text_sio">
                <h3> L'in-app update Android Unity</h3>
                <p>Elle permet d'informer les développeurs et l'application sur les mises à jours(date, priotité, nouvelle Màj) (Avril 2021)</p>
                <a target="_blank" class="btn" href="https://developer.android.com/guide/playcore/in-app-updates/unity" onclick="">En voir plus...</a>
            </div>
        </div>
         -->


        <!-- ---- FIN MODAL ------- -->
        
        


    </body>
</html>