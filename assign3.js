function handleMenuColor(){
	for(let menuItem of document.querySelectorAll('header li a')){
		menuItem.classList.remove('active');
	}

	this.classList.add('active');
}

function handleBannerColor(){
	document.getElementById('banner').style.color = 'yellow';
}

function handleSubmitClick(){
	alert('Input fields empty');
}

function handleSubmitClickALT(){
	document.getElementById('green').append('Input fields empty');
}

function handleFooterMenuColor(color){
	document.querySelector('footer').style.backgroundColor = color;
}