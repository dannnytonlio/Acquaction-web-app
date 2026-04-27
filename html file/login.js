const form = document.getElementById('form');
const email = document.getElementById('email');
const pass = document.getElementById('pass');


form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() { 
	// trim to remove the whitespaces
	const emailValue = email.value.trim();
	const passValue = pass.value.trim();

	if(emailValue === '') {
		setErrorFor(email);
	} else if (!isEmail(emailValue)) {
		setErrorFor(email);
	} else {
		setSuccessFor(email);
	}
	
	if(passValue ==='') {
		setErrorFor(pass);
	} else {
		setSuccessFor(pass);
	}	
}

function setErrorFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control error';

}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
  }

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}