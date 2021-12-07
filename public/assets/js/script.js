var Navbar = {
	elm : document.getElementById("navbar"),
	config: {
		isCollapsed: false,
		isLight: false,
		isHide: false
	},
	collapse: new bootstrap.Collapse(document.querySelector("#navbarNav"), {
		toggle: false
	}),
	init: function(){
		if(this.mustLight()){
			this.config.isLight = true;
		}

		if(this.config.isLight) this.toLight();
	},
	mustLight: function(){
		// const offset = App.getSize("header#home").height - App.getSize(this.elm).height;
		const offset = 50;
		return (window.scrollY > offset);
	},
	toLight: function(){
		if(this.elm.classList.contains("navbar-dark"))
			this.elm.classList.remove("navbar-dark");

		if(!this.elm.classList.contains("navbar-light"))
			this.elm.classList.add("navbar-light");

		if(!this.elm.classList.contains("bg-light"))
			this.elm.classList.add("bg-light");

		if(!this.elm.classList.contains("shadow-sm"))
			this.elm.classList.add("shadow-sm");
	},
	toDark: function(){
		if(this.elm.classList.contains("navbar-light"))
			this.elm.classList.remove("navbar-light");

		if(!this.elm.classList.contains("navbar-dark"))
			this.elm.classList.add("navbar-dark");

		if(this.elm.classList.contains("bg-light"))
			this.elm.classList.remove("bg-light");

		if(this.elm.classList.contains("shadow-sm"))
			this.elm.classList.remove("shadow-sm");
	},
	toggleCollapse: function(){
		this.config.isCollapsed = !this.config.isCollapsed;

		if(this.config.isCollapsed === true || this.config.isLight === true)
			this.toLight();
		else this.toDark();
		
		this.collapse.toggle();
	},
	scrolledStyle: function(){
		this.config.isLight = this.mustLight();

		if(this.config.isLight) this.toLight();
		else this.toDark();
	}
};

var Hero = {
	// elms: () => document.querySelectorAll("#home, #home .hero-gradient, #home .progressive > img"),
	elm: () => document.querySelector("#home .progressive > img"),
	init: function(){
		let height = this.calcHeight(window.scrollY);

		if(height > 0) this.stylingHeight(`${height}vh`);
		else this.stylingHeight(0);
	},
	calcHeight: function(key){
		return 100 - (key * 100 / App.getSize("#home").height);
	},
	setHeight: function(){
		let height = this.calcHeight(window.scrollY);
		if(height > 0) this.stylingHeight(`${height}vh`);
		else if(height == 0) this.stylingHeight(0);
	},
	stylingHeight: function(height){
		this.elm().style.height = height;
		this.elm().style.minHeight = 0;
	}
};

function bsAlert(parent, type, messege){
	parent.innerHTML = `<div class="alert alert-${type} alert-dismissible mt-4" role="alert"><small>${messege}</small><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
}

var App = {
	orientation: {
		isPortrait: () => (window.outerHeight > window.outerWidth),
		isLandscape: () => (window.outerWidth > window.outerHeight)
	},
	breakpoint: () => {
		if(window.outerWidth >= 1400) return "xxl";
		else if(window.outerWidth >= 1200) return "xl";
		else if(window.outerWidth >= 992) return "lg";
		else if(window.outerWidth >= 768) return "md";
		else if(window.outerWidth >= 576) return "sm";
		else return "xsm";
	},
	getSize: selector => {
		if(typeof selector == "string") selector = document.querySelector(selector);
		return {
			height: selector.offsetHeight,
			width: selector.offsetWidth
		};
	},
	scroll: {
		key: null,
		setKey: () => { App.scroll.key = window.scrollY; },
		isScrollUp: () => (window.scrollY < App.scroll.key),
		isScrollDown: () => (window.scrollY > App.scroll.key)
	}
};

App.scroll.setKey();
Navbar.init();
Hero.init();

if(App.orientation.isPortrait() === true){
	document.querySelector("#about .section-hero").removeAttribute("data-aos-offset");
}

if(App.breakpoint() == "sm" || App.breakpoint() == "xsm"){
	document.querySelectorAll("#about .gallery-item").forEach(item => item.removeAttribute("data-aos"));
}

// document.addEventListener("DOMContentLoaded", function(){});

document.querySelector("#navbarToggler").addEventListener("click", () => {
	Navbar.toggleCollapse();
});

const contactForm = document.forms["contact"];

contactForm.btnSubmit.addEventListener("click", () => {

	if(!contactForm.checkValidity()){
		contactForm.classList.add("was-validated");
		return;
	}

	let formData = new FormData(contactForm);
	contactForm.classList.remove("was-validated");
	let success = false;

	if(success){
		console.log(formData);
		bootstrap.Modal.getInstance(document.querySelector("#modalContact")).hide();
		contactForm.messege.value = "";
	}else{
		let alert = document.querySelector("#alertContact");
		bsAlert(alert, "danger", "<b>Failed</b> to send your messeges! Try other option, please.");
		document.querySelector("#modalContact .modal-body").scrollTop = alert.offsetTop;
	}

});

contactForm.btnReset.addEventListener("click", () => {

	contactForm.reset();
	contactForm.classList.remove("was-validated");

});

window.onscroll = () => {

	Hero.setHeight();
	Navbar.scrolledStyle();

	App.scroll.setKey();

};

var headerHeroTimer = setInterval(headerHeroChecker, 500);
function headerHeroChecker(){
	if(!document.querySelector("#home .progressive > img").classList.contains("preview")){
		clearInterval(headerHeroTimer);
		Hero.init();
	}
}

AOS.init();