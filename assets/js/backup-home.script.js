var scrollWatcher = createScrollWatcher();
Navbar.init();

const header = document.querySelector("header#home");
const navbarToggler = document.querySelector("#navbarToggler")
const contactForm = document.forms["contact"];
const modalContact = document.querySelector("#modalContact");
const alertContact = document.querySelector("#alertContact");
const galleryItem = document.querySelectorAll("#about .gallery-item");
const sections =  document.querySelectorAll("[data-section-register]");
const modalPlantation = document.getElementById("modalPlantation");

Array.from(sections).forEach(section => {
	SectionRegister.push(section.getAttribute("data-section-name"), section);
});

loadImgHeaderHero(header);

let activeSection = SectionRegister.getActiveRange();
Navbar.setActivedMenu(activeSection);

const imgList = lazyLoadImgAnalyzerForHomePage();
loadImg(imgList, true);

if(getBsBreakpoint() == "sm" || getBsBreakpoint() == "xsm"){
	galleryItem.forEach(item => item.removeAttribute("data-aos"));
}

/*document.addEventListener("DOMContentLoaded", function(){});*/

modalPlantation.addEventListener("show.bs.modal", function(event){
	let plantationImg = modalPlantation.querySelectorAll("img[data-loaded='false']");
	loadImg([...plantationImg], true);
});

navbarToggler.addEventListener("click", () => {
	Navbar.toggleCollapse();
});

contactForm.btnSubmit.addEventListener("click", () => {

	if(!contactForm.checkValidity()){
		contactForm.classList.add("was-validated");
		return;
	}

	let formData = new FormData(contactForm);
	let success = false;
	let xhr = new XMLHttpRequest();

	xhr.open('POST', 'http://localhost/mogreen/mail', true);
	xhr.onload = function(){
		let response = this.responseText;
		try{
			response = JSON.parse(response);
			success = response.status;

		} catch(e){
			console.log(e.messege);
		}
	};
	xhr.send(formData);
	contactForm.classList.remove("was-validated");

	if(success){
		bootstrap.Modal.getInstance(modalContact).hide();
		contactForm.messege.value = "";
	}else{
		bsAlert(alertContact, "danger", "<b>Failed</b> to send your messeges! Try other option, please.");
		document.querySelector("#modalContact .modal-body").scrollTop = alertContact.offsetTop;
	}

});

contactForm.btnReset.addEventListener("click", () => {

	contactForm.reset();
	contactForm.classList.remove("was-validated");

});

window.onscroll = () => {

	Navbar.scrolledStyle();

	scrollWatcher.setKey();

	if(activeSection != SectionRegister.getActiveRange()){
		activeSection = SectionRegister.getActiveRange();
		Navbar.setActivedMenu(activeSection);
	}
};

AOS.init();