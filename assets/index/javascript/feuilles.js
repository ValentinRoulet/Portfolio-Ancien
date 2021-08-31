/****************************************** 
* Titre:	De la neige !!!
* Réécrit par Spacefrog	
* Date: 	12/2009
******************************************/ 
var IsIE6 = !!document.all && !window.XMLHttpRequest

var ext=(IsIE6)?'gif':'png';	

var IsIE=!!document.all; 

	var snowsrc=new Image();
	snowsrc.src="../../../assets/index/image/feuille0."+ext
	var snowsrc1= new Image;
	snowsrc1.src="../../../assets/index/image/feuille1." +ext	  

  // Configure below to change number of snow to render 
var densite = 1; 


var tf; //taile de la feuille
var dx, xp, yp;    // coordinate and position variables 
var am, vx, vy;  // amplitude and step variables 
var i, doc_width , doc_height ; 
var vitesseH = 1 //coefficient de vitesse de balancement
var changevent=true // pour ajouter la variation du sens et de l'intensité du vent
var vent =new Array(20,0,-20,-30,0,-15,-20,-15,-13,0,12,13,15,20,30,40,50,60,80,70,50,30,10,0,-1,-5,-10,-20);//Vent de travers  positif=> G à D _ négatif => D à G.
var forceH=0;
var drift=10; 

var changechute=true
var chute= new Array(1,2,3,2,1,1,2,3,4,5,4,3,5,4,6,4,2,3,2,1,1,1,1,1,1) //Vitesse de chute des flocons de 1 à 10
var forceV=0 
var vitesseV = 1 //coefficient de vitesse de chute

var dx = new Array(); 
var xp = new Array(); 
var yp = new Array(); 
var am = new Array(); 
var vx = new Array(); 
var vy = new Array(); 

function init(){

	//Densité de flocons:
	doc_width = document.body.offsetWidth; 
    doc_height = document.body.offsetHeight;   
	densite=Math.floor(doc_width/10);


	var flake= document.createElement('img');
	flake.style.border='0';
	flake.style.width="auto";
	flake.style.height="auto";
	flake.className="ani";
	flake.setAttribute("name","oui");

    

	var flakediv=document.createElement('div');
	    flakediv.style.position='absolute';
		flakediv.style.top='15px';
		flakediv.style.left='15px';
		flakediv.style.display="none";
		flakediv.className="flocons";


	//Position des flocons
	for (i = 0; i < densite;  i++) {  
		dx[i] = 0;                        // set coordonnés variables 
		xp[i] = Math.random()*(doc_width-50);  // positions variables 
		yp[i] = Math.random()*doc_height; 
		am[i] = Math.random()*40;         // amplitude de balancement 
		vx[i] = 0.02 + Math.random()/10 * vitesseH; // vitesse horizontale variable 
		vy[i] = 0.9 + Math.random() * vitesseV;     // vitesse verticale variable 


		var opacite=Math.random()*100;
		var newflake=flakediv.cloneNode(true);
		newflake.id="flocon"+i;
		newflake.zIndex=i+1;
		newpic=flake.cloneNode(true);
		newpic.src=(i % 2==0)?snowsrc.src:snowsrc1.src;
		newflake.appendChild(newpic);
		IsIE?newflake.style.filter="alpha(opacity="+opacite+")":newflake.style.opacity=opacite/100;
		document.body.appendChild(newflake);
	}
	var neige=setInterval(function(){snow()},30);  
	if (changevent==true){ var girouette=setInterval(function(){wind()},4250);
		}
	if (changechute==true){ var intesite=setInterval(function(){fall()},7130);
		}
	}	


function wind(){
	drift = vent[forceH]
	forceH++	
	forceH=(forceH>vent.length)?0:forceH;
}

function fall()	{
	vitesseV = chute[forceV]
	forceV++	
	forceV=(forceV>chute.length-1)?0:forceV;
}  

function snow() {  

	doc_width = document.body.offsetWidth; 
    doc_height = document.body.offsetHeight;  

    for (i = 0; i < 50; i++) {  
    yp[i] += vy[i]; 
    if (yp[i] > doc_height-20) { 
        xp[i] = (Math.random()*(doc_width-am[i]-30)); 
        yp[i] = 0; 
        vx[i] = (0.02 + Math.random()/10)*vitesseH; 
        vy[i] = (0.7 + Math.random())*vitesseV; 
    } 

    dx[i] += vx[i]; 
	document.getElementById("flocon"+i).style.display="block"
    document.getElementById("flocon"+i).style.top = yp[i]+"px";
	
	
	if (drift>0){
					xp[i]=((xp[i]+drift/10)>doc_width)?0:xp[i]+drift/10;
					document.getElementById("flocon"+i).style.transform = 'rotate(90deg)';
				}
	if (drift<0){
					xp[i]=((xp[i]+drift/10)<0)?doc_width:xp[i]+drift/10;
					document.getElementById("flocon"+i).style.transform = 'rotate(270deg)';
	}

	if (drift ==0)
	{
		document.getElementById("flocon"+i).style.transform = 'rotate(180deg)';
	}

	
	
    document.getElementById("flocon"+i).style.left = xp[i] + am[i]*Math.sin(dx[i])+"px"; 
    } 
}

function test()
{
	console.log(drift);
};

/*
Il faut ajouter dans le css

html, body {	height: 100%;
				width: 100%;
				overflow:hidden;
				margin:0;
				padding:0;
				}

avec un doctype dans le html 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
*/