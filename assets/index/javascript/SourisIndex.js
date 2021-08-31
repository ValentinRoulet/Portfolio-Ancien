
// https://www.pierre-giraud.com/jquery-apprendre-cours/gestion-evenement-souris/


// COORDONNEE SOURIS



$(document).ready(function(){
//On passe une référence à l'objet event en argument pour pouvoir 
//utiliser ses propriétés

    $("body").mousemove(function(event){
        //On récupère la position de la souris dans le document
        var pageCoords = "(" + event.pageX + ", " + event.pageY + ")";
        
        //Affiche cette position dans un span
        $("span").text(pageCoords);
        
    });

    $("body").click(function(){
        //On change le fond en bleu
        
        if (event.pageX > 481 & event.pageX < 1438 & event.pageY > 94 & event.pageY < 850)
        {
            //$(this).css("background-color", "lightBlue");
            document.getElementById("body").className += " bodyAnimation";
            
            var delay = 2000;
            var delay2 = 3000;
            var delay3 = 4500;
            window.setTimeout(disparition,delay);
            window.setTimeout(animBackgound,delay);
            window.setTimeout(animBackgound2,delay2);
            window.setTimeout(redirect,delay3);

            
            
        }
        else
        {
            
        }
    });
});


function disparition()
{
    for (let pas = 0; pas < 191; pas++)
            {
                document.getElementById("flocon"+pas).className += " opac";
            }
}

function animBackgound()
{
    document.getElementById("body").className = " image";
}
function animBackgound2()
{
    document.getElementById("body").className += " image2";
}

function redirect()
{
    window.location.href="http://localhost:8000/index.php/menu/c_menu"
}

