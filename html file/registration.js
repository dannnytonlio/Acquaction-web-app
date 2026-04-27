const form = document.getElementById('form');
const firstname = document.getElementById('firstname');
const lastname= document.getElementById('lastname');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const confirm = document.getElementById('confirm');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const firstnameValue = firstname.value.trim();
  const lastnameValue = lastname.value.trim();
	const emailValue = email.value.trim();
	const passValue = pass.value.trim();
	const confirmValue = confirm.value.trim();
	
	if(firstnameValue === '') {
		setErrorFor(firstname, 'Firstname cannot be blank');
	} else {
		setSuccessFor(firstname);
	}
  
	if(lastnameValue === '') {
		setErrorFor(lastname, 'Lastname cannot be blank');
	} else {
		setSuccessFor(lastname);
	}
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passValue ==='') {
		setErrorFor(pass, 'Password cannot be blank');
	} else {
		setSuccessFor(pass);
	}
	
	if(confirmValue === '') {
		setErrorFor(confirm, 'Password confirm cannot be blank');
	} else if(passValue !== confirmValue) {
		setErrorFor(confirm, 'Passwords does not match');
	} else{
		setSuccessFor(confirm);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

