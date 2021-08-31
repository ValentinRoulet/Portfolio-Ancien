
// https://www.pierre-giraud.com/jquery-apprendre-cours/gestion-evenement-souris/

var direction = "";

function Bouton(bouton)
{
    
    document.getElementById('bouton'+bouton).animate
    (
        [
            { opacity : 1 },
            { opacity : 0 },
            { opacity : 1 },
            { opacity : 0}
        ],
        {
            duration: 1000
        }
    );
    
    
    
    
}


function redirect1(direc)
{
    direction = direc;
    let delay5 = 1000;
    window.setTimeout(redirect2, delay5)
}


function redirect2()
{
    if(direction == 1)
    {
        window.location.href="http://localhost:8000/index.php/sio/c_sio"
    }
    else if(direction == 2)
    {
        window.location.href="http://localhost:8000/index.php/ppe/c_ppe"
    }
    else if(direction == 3)
    {
        window.location.href="http://localhost:8000/index.php/competence/c_competence"
    }
    else if(direction == 4)
    {
        window.location.href="http://localhost:8000/index.php/veille/c_veille"
    }
    else if(direction == 5)
    {
        window.location.href="http://localhost:8000/index.php/profil/c_profil"
    }
    else if(direction == 6)
    {
        window.location.href="http://localhost:8000/index.php/contact/c_contact"
    }
    
}

