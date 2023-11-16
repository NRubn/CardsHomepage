console.log("hello");

const userArea = document.getElementById('userarea');
const overlay = document.getElementById('overlay');

function cards(){
	console.log("cards");
	const cards = document.querySelectorAll('.card-back');
	cards.forEach(card => {
		const pageName = card.getAttribute('data-page-name');
		if (pageName) {
			card.addEventListener('click', () => {
				console.log("klick");
				userArea.classList.add('turnout');
				overlay.classList.add('active');
				setTimeout(() => {
					console.log("setTimeout");
						console.log("loadPage", pageName);
						gotosite(pageName);
				}, 2000);
			});
		}
	});
}

function open(){
	console.log('hello');
}

function loadPage(pageName) {
    const userArea = document.getElementById('userarea');

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            userArea.innerHTML = xhr.responseText;
			checkfunction(pageName);
        }
    };

    xhr.open('GET', 'Ajax.php?page=' + pageName, true);
    xhr.send();
}

function gotosite(site){
	console.log(site);
	const overlay = document.getElementById('overlay');
	const userArea = document.getElementById('userarea');
	//const backButtonList = document.querySelectorAll('.backbutton');
	overlay.classList.add('active');
	userArea.classList.add('turnout');
	setTimeout(() => {
		overlay.classList.remove('active');
		userArea.classList.remove('turnout');
		loadPage(site);
	}, 2000);
}

function backbutton(){
	const overlay = document.getElementById('overlay');
	const userArea = document.getElementById('userarea');
	const backButtonList = document.querySelectorAll('.backbutton');

	backButtonList.forEach(backButton => {
		backButton.addEventListener('click', () => {
			overlay.classList.add('active');
			userArea.classList.add('turnout');
			setTimeout(() => {
				overlay.classList.remove('active');
				userArea.classList.remove('turnout');
				loadPage("home");
			}, 2000);
		});
	});
}

loadPage("home");

function checkfunction(pageName){
	console.log("checkfunction");
	switch (pageName) {
		case 'home':
		// Führe die cards() Funktion aus um Links zu setzen 
		cards();
		backbutton();
		break;
		default:
	}
}