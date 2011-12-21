//---------------------------form validation------------------------------------------
function validateForm(oForm)
{
	//oForm refers to the form which you want to validate
	oForm.onsubmit = function() // attach the function to onsubmit event
	{
		var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var regexempty= /^[a-zA-Z]+$/;
	if((oForm.elements['pass'].value.length<6)||((oForm.elements['pass'].type)=='text')||(oForm.elements['pass'].value.length>32))
		{
			alert("Password length should be 6-32");
			return false;
		}
	
	if((!(oForm.elements['username'].value))||(oForm.elements['username'].value)=='Email')
		{
			alert("You cannot leave the Email field empty");
			return false;
		}
		else if(!regex.test(oForm.elements['username'].value))
		{
			alert("Invalid email address format");
			return false;
		}
	
		return true;
	}
}
//----------------------------Form Validaton------------------------------------------
function validate(oForm)
{
	//oForm refers to the form which you want to validate
	oForm.onsubmit = function() // attach the function to onsubmit event
	{
		var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var regexempty= /^[a-zA-Z]+$/;
		if(!(oForm.elements['name'].value))
		{
			alert("You cannot leave the name field empty");
			return false;
		}
	if((oForm.elements['pass'].value.length<6)||(oForm.elements['pass'].value.length>32))
		{
			alert("Password length should be 6-32");
			return false;
		}	
	if(!(oForm.elements['emailadd'].value))
		{
			alert("You cannot leave the email field empty");
			return false;
		}
		else if(!regex.test(oForm.elements['emailadd'].value))
		{
			alert("Invalid email address format");
			return false;
		}
	
		return true;
	}
}

//---------------------------text onfucus and on blur---------------------------------

window.onload = function() 
{
  applyDefaultValue(document.getElementById('txtUser'), 'Email');
}

function applyDefaultValue(elem, val) {
  elem.value = val;
  elem.onfocus = function() {
		if(this.value == val) {
		  this.style.color = '';
		  this.value = '';
		}
	}
  elem.onblur = function() {
		if(this.value == '') {
		  this.value = val;
		}
	}

	applyPasswordType(document.getElementById('txtPass'), 'Password', 'text');
}

function applyPasswordType(elem, val, typ) {
  elem.value = val;
  elem.type = typ;
  elem.onfocus = function() {
		if(this.value == val) {
		  this.style.color = '';
		  this.type = 'password';
		  this.value = '';
		}
	}
  elem.onblur = function() {
		if(this.value == '') {
		  this.value = val;
		  this.type = 'text';
		}
	}
}

 <script type="text/javascript">
                                                                //form check
                                                                new validateForm(document.forms['check']);
                                                        </script>
                                                </tr>

