function ask(){

var r = confirm("Do you want to enter");
	if(r == true)
	{
	alert("welcome!!Have a nice day");
	}
	else{
	history.go(-1);
	}
}

function datedisplay(){
document.getElementById("date").innerHTML=Date();
}
function set(x){
if(!(document.getElementById(x).value)){
document.getElementById(x).value="enter name";
}

}
function remove(x){
if((document.getElementById(x).value=="enter name")||(!(document.getElementById(x).value))){
document.getElementById(x).value="";
}
}
function check(oForm)
{
	oForm.onsubmit = function()
	{
		if((!(oForm.elements('namef').value))||(oForm.elements('namef').value=="enter name")){
		alert("you canot leave first name feild empty");
		return false;
		}
		if(!(oForm.elements('namel').value)){
		alert("you canot leave last name feild empty");
		return false;
		}
return true;
		
	}
}
function changecolor(){
colorobject=document.getElementById('color');
colorobject.style.color= 'red';
colorobject.style.face= 'Tahoma';
colorobject.style.backgroundColor= "silver";
}
function mouseover(){
document.getElementById('changeimage').src='images/left.jpg';
} 

function mouseout(){
document.getElementById('changeimage').src='images/right.jpg';
}
