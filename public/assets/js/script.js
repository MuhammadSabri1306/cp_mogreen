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
	elm: () => document.querySelector("#home .hero > img"),
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

const createElm = obj => {
	if(!obj.hasOwnProperty("tag")) return null;

	let elm = document.createElement(obj.tag);
	if(obj.hasOwnProperty("class")){
		if(Array.isArray(obj.class)) obj.class.forEach(className => elm.classList.add(className));
		else if(typeof obj.class == "string") elm.classList.add(obj.class);
	}
	if(obj.hasOwnProperty("id")) elm.id = obj.id;
	if(obj.hasOwnProperty("attr")) Object.entries(obj.attr).forEach(attr => elm.setAttribute(attr[0], attr[1]));
	if(obj.hasOwnProperty("text")) elm.innerText = obj.text;
	if(obj.hasOwnProperty("child")){
		obj.child.forEach(child => elm.appendChild(createElm(child)));
	}

	return elm;
};