var meses = new Array ("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"); 
var diasSemana = new Array("Dom","Lun","Mar","Mie","Jue","Vie","Sáb"); 
var f=new Date(); 
document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());

function startTime(){ 
	today=new Date(); 
	h=today.getHours(); 
	m=today.getMinutes(); 
	s=today.getSeconds(); 
	m=checkTime(m); 
	s=checkTime(s); 
	document.getElementById('reloj').innerHTML=h+":"+m+":"+s; 
	t=setTimeout('startTime()',500);
} 
function checkTime(i) {
	if (i<10) {
		i="0" + i;
	}return i;
} 
window.onload=function(){
	startTime();
} 
//Obteniendo una variable con la máscara d-m-Y H:i:s