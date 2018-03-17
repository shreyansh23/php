function checkForm(form) {
		var errors=[];
		var rePhone=/^[6-9]{1}[0-9]{9}$/;
		var reName =/^[\w ]+$/;
		var reAge =/^[1-9]{1}[0-9]?$/;
		var reEmail =/[a-zA-Z]{1}[\w]*(@){1}[a-zA-Z]+(.)[a-zA-Z]+$/;
		if(!rePhone.test(form.number.value))
		{
			errors.push("Invalid Phone Number!");
		}


		
		
		if(!reAge.test(form.age.value))
		{
			errors.push("Invalid Age entered!");
		}
		if(!reEmail.test(form.email.value))
		{
			errors.push("Invalid Email ID!");
		}	
		if((form.password1.value=="")||(form.password2.value==""))
		{   console.log("entered in passV");
			errors.push("Password Not Entered!");

		}
		else{
			if(form.password1.value!=form.password2.value)
			{errors.push("Passwords do not match!");}
		}

		if(form.name.value=="")
		{
			//alert("Error: Input Name is Empty!");
			//form.name.focus();
			//return false;
			errors.push("Input Name is Empty!");
		}
	
	
		
		else
		{
			if(!reName.test(form.name.value))
			{errors.push("Input Name contains invalid characters!");}
			//alert("Error: Input Name contains invalid characters!");
			//form.name.focus();
			//return false;
			
		}
        
       



		if(errors.length>0)
		{var msg="ERRORS:\n\n";
	     for (var i = 0; i <errors.length; i++) 
	       {msg+=errors[i]+"\n";}
	      alert(msg);
	      return false;

		}
		return true;

}
