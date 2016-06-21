// JavaScript Document

var menuActivo=false;

var opacityMenu = document.getElementById("opacityMenu");



function activarMenu () {

	if (menuActivo==false) {

	opacityMenu.style.opacity="1";

		menuActivo=true;

	}else{

		opacityMenu.style.opacity="0";

		menuActivo=false;

		}

}


var opacityCupFa=document.getElementById("opacityCupFa");
var cup=document.getElementById("cup");

var aleatorioNumero= Math.floor((Math.random() * 100000000) + 1);


var claves;
claves=Array("A","B","C","D","E","F","G","H","I"," J","K","L","M","N","O","P","Q","R","S","T","U","V" ,"W","X","Y","Z","0","1","2","3","4","5","6","7"," 8","9","0");
var msje1;
msje1 = claves[Math.floor(Math.random() * claves.length)];
var msje2;
msje2=claves[Math.floor(Math.random() * claves.length)];
var msje3;
msje3=claves[Math.floor(Math.random() * claves.length)];
var msje4;
msje4=claves[Math.floor(Math.random() * claves.length)];
var msje5;
msje5=claves[Math.floor(Math.random() * claves.length)];
var msje6;
msje6=claves[Math.floor(Math.random() * claves.length)];


function despCupFa() {
	document.getElementById("opacityCupFa").style.opacity="1";
	document.getElementById("cup").style.display="block";

document.getElementById("num_cup").innerHTML=aleatorioNumero;
document.getElementById("cod_cup").innerHTML=msje1+msje2+msje3+msje4+msje5+msje6;

	
}


function cerrarCup() {
	document.getElementById("opacityCupFa").style.opacity="0";
	document.getElementById("cup").style.display="none";
	
	document.getElementById("num_cup").innerHTML='';
	document.getElementById("cod_cup").innerHTML='';
}





function printCoupon() {
   window.print();
   return false;
}

