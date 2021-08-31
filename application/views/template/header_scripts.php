<?php
//Définition du fudeau horaire
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');

// Chargement des fichier css de grocery
if (isset($output)){
    foreach($output->css_files as $file){
       echo "<link type='text/css' rel='stylesheet' href='".$file."'/>";
    }    
}

foreach ($scripts as $script) {




    //----------------------------------------------------------------------------------------//
    //------------------------------------Animation Scroll------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'animScroll'){
		echo '<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>';
        echo '<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/PixiPlugin.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/tweene/0.5.11/tweene-all.min.js"></script>';
        echo '<script src="https://assets.codepen.io/16327/SplitText3.min.js"></script>';
        echo '<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>';
        echo '<script type="text/javascript" src="..\..\..\assets\JavaScript\AnimationScroll.js"></script>';
	}
    

    //----------------------------------------------------------------------------------------//
    //------------------------------------framwork css bulma------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'bulma'){
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">';
	}










    //----------------------------------------------------------------------------------------//
    //------------------------------------css de la page index------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'cssIndex'){
		echo '<link rel="stylesheet" href="..\..\..\assets\index\css\index.css">';
	}

    //----------------------------------------------------------------------------------------//
    //------------------------------------css de la page menu------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'cssMenu'){
		echo '<link rel="stylesheet" href="..\..\..\assets\menu\css\menu.css">';
	}

    //----------------------------------------------------------------------------------------//
    //------------------------------------css de la page cv------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'cssCV'){
		echo '<link rel="stylesheet" href="..\..\..\assets\cv\css\cv.css">';
	}

    //----------------------------------------------------------------------------------------//
    //------------------------------------css de la page sio ---- ----------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'cssSio'){
		echo '<link rel="stylesheet" href="..\..\..\assets\sio\css\sio.css">';
	}

    //----------------------------------------------------------------------------------------//
    //------------------------------------css d'un type de bouton ----------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'cssBouton'){
		echo '<link rel="stylesheet" href="..\..\..\assets\CSS\Bouton.css">';
	}

    //----------------------------------------------------------------------------------------//
    //------------------------------------css de ppe ----------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'cssPpe'){
		echo '<link rel="stylesheet" href="..\..\..\assets\ppe\ppe.css">';
	}


    //----------------------------------------------------------------------------------------//
    //------------------------------------css de competence ----------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'cssCsompetence'){
		echo '<link rel="stylesheet" href="..\..\..\assets\competence\competence.css">';
	}

    //----------------------------------------------------------------------------------------//
    //------------------------------------css de veille ----------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'cssVeille'){
		echo '<link rel="stylesheet" href="..\..\..\assets\veille\css\veille.css">';
	}











    //----------------------------------------------------------------------------------------//
    //------------------Fichier javascript de la souris pour la page index -------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'sourisIndex'){
		echo '<script type="text/javascript" src="..\..\..\assets\index\javascript\SourisIndex.js"></script>';
	}

    //----------------------------------------------------------------------------------------//
    //-------------------Fichier javascript de la souris pour la page Menu -------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'sourisMenu'){
		echo '<script type="text/javascript" src="..\..\..\assets\menu\javascript\sourismenu.js"></script>';
	}


    //----------------------------------------------------------------------------------------//
    //-------------------Fichier javascript de l'animation de feuilles/neige -----------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'feuilles'){
		echo '<script type="text/javascript" src="..\..\..\assets\index\javascript\feuilles.js"></script>';
	}

    //----------------------------------------------------------------------------------------//
    //-------------------Fichier javascript de l'animation de feuilles/neige -----------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'ZoomImg'){
		echo '<script type="text/javascript" src="..\..\..\assets\plugins\ZoomImg\jquery.elevatezoom.js"></script>';
	}




    //----------------------------------------------------------------------------------------//
    //-------------------------------------Material DEsign for Bootstrap------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'MDB'){
		echo "<link rel='stylesheet' href='".base_url('\assets\plugins\MDB5-STANDARD 3.5.0\css\mdb.min.css')."'/>
        <script src='".base_url('/assets\plugins\MDB5-STANDARD 3.5.0\js\mdb.min.js')."'></script>
        ";
	}


    //----------------------------------------------------------------------------------------//
    //-------------------------------------BOOTSTRAP------------------------------------------//
    //----------------------------------------------------------------------------------------//
    if ($script === 'bootstrap'){
        echo "<link rel='stylesheet' href='".base_url('/assets/plugins/bootstrap/css/bootstrap-theme.min.css')."'/>
              <link rel='stylesheet' href='".base_url('/assets/plugins/bootstrap/css/bootstrap.min.css')."'/>
			  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css' />
              <link rel='stylesheet' href='".base_url('/assets/plugins/bootstrap/css/font-awesome.min.css')."'/>";
    } 
	
	elseif ($script == 'wysihtml5'){
        echo "<link rel='stylesheet' href='".base_url('/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')."'/>";
    }
	
	
    //----------------------------------------------------------------------------------------//
    //-------------------------------------JQUERY-UI------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'jquery'){
		echo "<script
        src='https://code.jquery.com/jquery-3.6.0.js'
        integrity='sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk='
        crossorigin='anonymous'></script>";
	}
	
	 //----------------------------------------------------------------------------------------//
    //-------------------------------------SELECT2------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'select2'){
        echo "<link rel='stylesheet' href='".base_url('/assets/plugins/select2/css/select2.css')."'/>";
    }
	//----------------------------------------------------------------------------------------//
    //-------------------------------------JQUERY-UI------------------------------------------//
    //----------------------------------------------------------------------------------------//
	if ($script == 'jqueryui'){
		echo "<link rel='stylesheet' href='".base_url('/assets/plugins/jquery/ui/jquery-ui.css')."'/>";
	}
    
	if ($script == 'jquery2_header'){
	    echo "<script src='".base_url('/assets/plugins/jquery/js/jquery-2.1.4.min.js')."'></script>";
	}
    //----------------------------------------------------------------------------------------//
    //------------------------------------AUTOCOMPLETE----------------------------------------//
    //----------------------------------------------------------------------------------------//
    else if ($script === 'autocomplete'){
        echo "<link rel='stylesheet' href='".base_url('/assets/plugins/autocomplete/css/token-input.css')."'/>
            <link rel='stylesheet' href='".base_url('/assets/plugins/autocomplete/css/token-input-custom.css')."'/>";
    }
	
	//----------------------------------------------------------------------------------------//
    //---------------------------------------CHOSEN-------------------------------------------//
    //----------------------------------------------------------------------------------------//
    else if ($script === 'chosen'){
        echo "<link rel='stylesheet' href='".base_url('/assets/plugins/grocery_crud/css/jquery_plugins/chosen/chosen.css')."'/>";
		echo "<style>
		.chosen-mini{
			width: 100px !important;
		}
		</style>";
    }
    
    //----------------------------------------------------------------------------------------//
    //---------------------------------------LTE ADMIN----------------------------------------//
    //----------------------------------------------------------------------------------------//
    else if ($script === 'lte'){
        echo "<link rel='stylesheet' href='".base_url('/assets/plugins/lteadmin/css/AdminLTE.min.css')."'/>";
		echo "<link rel='stylesheet' href='".base_url('/assets/plugins/lteadmin/css/skins/skin-blue.min.css')."'/>";
    } 
	
	//----------------------------------------------------------------------------------------//
    //------------------------------------SWEETALERT------------------------------------------//
    //----------------------------------------------------------------------------------------//
	else if ($script == 'sweetalert'){
		echo "<link rel='stylesheet' href='".base_url('/assets/plugins/sweetalert/sweetalert.css')."'/>";
	}
    
    //----------------------------------------------------------------------------------------//
    //---------------------------------------DATEPICKER---------------------------------------//
    //----------------------------------------------------------------------------------------//
    else if ($script == 'datepicker' || $script == 'timepicker' || $script == 'daterangepicker'){
        echo "<link rel='stylesheet' href='".base_url('/assets/plugins/datepicker/css/datepicker3.css')."'/>
              <link rel='stylesheet' href='".base_url('/assets/plugins/datepicker/css/daterangepicker-bs3.css')."'/>";
    }
        //----------------------------------------------------------------------------------------//
    //---------------------------------------CLOCKPICKER---------------------------------------//
    //----------------------------------------------------------------------------------------//
    else if ($script == 'clockpicker'){
        echo "<link rel='stylesheet' href='".base_url('/assets/plugins/clockpicker/dist/jquery-clockpicker.css')."'/>";
    }  
    //----------------------------------------------------------------------------------------//
    //---------------------------------------DATATABLES---------------------------------------//
    //----------------------------------------------------------------------------------------//
    else if ($script == 'datatables' or $script == 'datatables_ajax'){
        echo "<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/RowGroup-1.0.0/css/rowGroup.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/Buttons-1.2.4/css/buttons.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/DataTables-1.10.13/css/dataTables.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/Buttons-1.2.4/css/buttons.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/ColReorder-1.3.2/css/colReorder.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/FixedColumns-3.2.2/css/fixedColumns.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/FixedHeader-3.1.2/css/fixedHeader.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/KeyTable-2.2.0/css/keyTable.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/Responsive-2.1.0/css/responsive.bootstrap.min.css')."'/>
                        
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/RowReorder-1.2.0/css/rowReorder.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/Scroller-1.4.2/css/scroller.bootstrap.min.css')."'/>
			<link rel='stylesheet' type='text/css' href='".base_url('/assets/plugins/datatables/src/Select-1.2.0/css/select.bootstrap.min.css')."'/>";
    }
    else if ($script == 'datatables_custom'){
        include "/assets/plugins/datatables/css/datatables_css.php";
    }
	
    //----------------------------------------------------------------------------------------//
	//----------------------------------FULLCALENDAR-----------------------------------------//
	//----------------------------------------------------------------------------------------//
	if ($script == 'fullcalendar'){
        echo "<link href='".base_url('/assets/plugins/fullcalendar/core/main.css')."' rel='stylesheet' />";
        echo "<link href='".base_url('/assets/plugins/fullcalendar/daygrid/main.css')."' rel='stylesheet' />";
        echo "<link href='".base_url('/assets/plugins/fullcalendar/timegrid/main.css')."' rel='stylesheet' />";
    }
}
    ?>
    <style>
        body{/*correction bug ios iframe responsive*/
        max-width: 100vw !important;
        }
        .dataTables_scrollBody thead tr[role="row"]{ /*empèche affichage 2ème ligne de recherche dans tableaux*/
        visibility: collapse !important;
    }
    </style>
          </head>
          
        <body>