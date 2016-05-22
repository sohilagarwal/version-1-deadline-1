function clckFile(){
	$('.ptFile').click();
}

function signingup(obj){
	$(obj).ajaxSubmit({
		success:successSingup
	});
	return false;
}

function successSingup(result){
	
	if(result==1){
		$('.signupForm')[0].reset();
		alert("You are successfully registered. Please login with the same credential");
	}else{
		alert(result);
	}
}

function submitLogin(obj){
	$(obj).ajaxSubmit({
		success:successLogin
	});
	return false;
}

function successLogin(result){
	if(result==1){
		alert("You have logged in successfully! We are in underconstruction mode, we will get back soon! Thanks for choosing us!");
	}else{
		alert(result);
	}
}

function submitContact(obj){
	$(obj).ajaxSubmit({
		success:successContactSubmit
	});
	return false;
}

function successContactSubmit(result){
	if(result==1){
		$('.contactForm')[0].reset();
		alert('Thanks for contacting with us, we will get back to you shortly!');
	}else{
		alert(result);
	}
}