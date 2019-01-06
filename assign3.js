function handleMenuColor(){
	for(let menuItem of document.querySelectorAll('header li a')){
		menuItem.classList.remove('active');
	}

	this.classList.add('active');
}

