function divShow(){
    document.getElementById("btnshow").style.display="block";
    document.getElementById("du").src="../images/upward.png";
    document.getElementById("btnhref").href ="javascript:divhidden()";
}
function divhidden(){
    document.getElementById("btnshow").style.display="none";
    document.getElementById("du").src="../images/down.png";
    document.getElementById("btnhref").href ="javascript:divShow()"; 
}
function divShow2(){
    document.getElementById("btnshow2").style.display="block";
    document.getElementById("pu").src="../images/upward.png";
    document.getElementById("btnhref2").href ="javascript:divhidden2()";
}
function divhidden2(){
    document.getElementById("btnshow2").style.display="none";
    document.getElementById("pu").src="../images/down.png";
    document.getElementById("btnhref2").href ="javascript:divShow2()"; 
}
function divShow3(){
    document.getElementById("btnshow3").style.display="block";
    document.getElementById("gu").src="../images/upward.png";
    document.getElementById("btnhref3").href ="javascript:divhidden3()";
}
function divhidden3(){
    document.getElementById("btnshow3").style.display="none";
    document.getElementById("gu").src="../images/down.png";
    document.getElementById("btnhref3").href ="javascript:divShow3()"; 
}
function quitlogin(){
    location='../login.php'  
}