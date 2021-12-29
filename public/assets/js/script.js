var SectionRegister = {
	data: [],
	push: function(name, elm){
		let top = 0;
		if(this.data.length > 0) top = this.data[this.data.length - 1].postB;
		let bottom = top + elm.offsetHeight;
		this.data.push({
			name: name,
			elm: elm,
			postT: top,
			postB: bottom
		});
	},
	getItem: function(key){
		let index = (typeof key == "number") ? key
			: (typeof key == "string") ? this.data.findIndex(item => item.name == key)
			: -1;
		if(index >= 0) return this.data[index];
	},
	inRangeItem: function(key){
		let item = this.getItem(key);
		if(typeof item == "undefined") return false;
		else return (window.scrollY >= item.postT && window.scrollY < item.postB);
	},
	getItems: function(){
		return this.data;
	},
	getActiveRange: function(){
		let index = this.data.findIndex(item => (window.scrollY >= item.postT && window.scrollY < item.postB));
		if(index < 0) return "";
		else return this.data[index].name;
	}
};

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
		if(this.mustLight()) this.config.isLight = true;
		if(this.config.isLight) this.toLight();
	},
	mustLight: function(){
		// const offset = getElmSize("header#home").height - getElmSize(this.elm).height;
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
	setActivedMenu: function(activedTarget){
		let navLink = Array.from(this.elm.querySelectorAll("a.nav-link"));
		this.elm.querySelectorAll("a.nav-link").forEach(link => {
			if(link.getAttribute("data-section-target") == activedTarget && !link.classList.contains("active"))
				link.classList.add("active");
			else if(link.getAttribute("data-section-target") != activedTarget && link.classList.contains("active"))
				link.classList.remove("active");
		});
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
	elm: () => document.querySelector("#home .hero > img"),
	init: function(){
		let height = this.calcHeight(window.scrollY);

		if(height > 0) this.stylingHeight(`${height}vh`);
		else this.stylingHeight(0);
	},
	calcHeight: function(key){
		return 100 - (key * 100 / getElmSize("#home").height);
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

function getBsBreakpoint(){
	if(window.outerWidth >= 1400) return "xxl";
	else if(window.outerWidth >= 1200) return "xl";
	else if(window.outerWidth >= 992) return "lg";
	else if(window.outerWidth >= 768) return "md";
	else if(window.outerWidth >= 576) return "sm";
	else return "xsm";
}

function isMediaOrientation(ort){
	if(["L", "l", "Landcape", "landcape"].indexOf(ort) >= 0)
		return window.outerWidth > window.outerHeight;

	if(["P", "p", "Portrait", "portrait"].indexOf(ort) >= 0)
		return window.outerHeight > window.outerWidth;

	if(["S", "s", "Square", "square"].indexOf(ort) >= 0)
		return window.outerHeight == window.outerWidth;
}

function getElmSize(selector){
	if(typeof selector == "string") selector = document.querySelector(selector);
	return {
		height: selector.offsetHeight,
		width: selector.offsetWidth
	};
}

function createScrollWatcher(){
	let scrollWatcher = {
		key: null,
		setKey: () => { this.scroll.key = window.scrollY; },
		isScrollUp: () => (window.scrollY < this.scroll.key),
		isScrollDown: () => (window.scrollY > this.scroll.key)
	};

	scrollWatcher.setKey();
	return scrollWatcher
}

function createImg(target){
	let img = new Image;
	img.src = target.getAttribute("data-target");

	[...target.attributes].filter(attr => (attr.nodeName!="src" && attr.nodeName!="src")).forEach(attr => img.setAttribute(attr.nodeName, attr.nodeValue));

	return img;
}

function loadImg(target, order = false){
	const passLoadToNextTarget = targetList => {
		if(targetList.length > 1){
			targetList.shift();
			loadImg(targetList, true);
		}
	};

	if(!Array.isArray(target)){

		let img = createImg(target);
		img.onload = function(){
			if(target.hasAttribute("data-loaded")) img.setAttribute("data-loaded", true);
			target.parentNode.replaceChild(img, target);
		};

	}else if(target.length > 0 && order === true){

		let img = createImg(target[0]);
		img.onload = function(){
			if(target[0].hasAttribute("data-loaded")) img.setAttribute("data-loaded", true);
			target[0].parentNode.replaceChild(img, target[0]);
			passLoadToNextTarget(target);
		};
		img.onerror = function(){
			passLoadToNextTarget(target);
		}

	}else if(target.length > 0){
		target.forEach(t => {

			let img = createImg(t);
			img.onload = function(){
				if(t.hasAttribute("data-loaded")) img.setAttribute("data-loaded", true);
				t.parentNode.replaceChild(img, t);
			};

		});
	}
}

function lazyLoadImgAnalyzerForHomePage(){
	let sections = [],
		imgList = [];
	SectionRegister.getItems().forEach(section => {
		sections.push({
			elm: section.elm,
			node: Math.abs(section.postT - window.scrollY)
		});
	});

	sections = bubbleSortAlgorithm(sections, item => item.node);
	for(s in sections){
		sections[s].elm.querySelectorAll("img[data-target]").forEach(img => {
			imgList.push(img);
		});
	}
	return imgList;
}

function bubbleSortAlgorithm(data, getItem = null){
	if(!Array.isArray(data)){
		console.log("The Quick Sort Algorithm need data as Array");
		return;
	}
	if(getItem === null) getItem = item => item;

	for(let i = 0; i < data.length; i++){
		for(let j = data.length - 1; j > i; j--){
			if(getItem(data[j]) < getItem(data[j - 1])){
				let dummy = data[j];
				data[j] = data[j - 1];
				data[j - 1] = dummy;
			}
		}
	}
	return data;
}