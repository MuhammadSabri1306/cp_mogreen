<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mogreen</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css?version=10" rel="stylesheet">
</head>
<body>
	<header id="home" class="home-header position-relative full-height" data-target-hero="assets/img/hero3-compressed.jpg" data-loaded-hero="false" style="background-image: url('assets/img/hero3-sm-compressed.jpg');">
		<div class="hero-gradient">&nbsp;</div>
		<div class="position-absolute w-100 left-0 top-0">
			<div class="container">
				<div class="row full-height justify-content-center align-items-center">
					<div class="d-none d-md-block col col-lg-5">&nbsp;</div>
					<div class="col-auto">
						<div class="hero-description">
							<h1 class="text-light hero-text">Get More <span class="text-primary">Green<i class="fas fa-leaf"></i></span></h1>
							<h4 class="text-light font-style3 hero-text mb-5">We provide vegetable products directly from farmers hands.</h4>
							<div class="hero-buttons d-flex">
								<a href="#about" class="btn btn-lg btn-outline-light rounded-pill">Read more <i class="fas fa-angle-down"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<nav id="navbar" class="navbar navbar-expand-md navbar-dark fixed-top">
		<div class="container px-md-3">
			<a href="#home" class="navbar-brand">mogreen</a>
			<button id="navbarToggler" class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon d-flex justify-content-center align-items-center"><i class="fas fa-bars"></i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto me-0">
					<li class="nav-item px-2 px-md-0">
						<a class="nav-link text-end" href="#about" data-section-target="about">About</a>
					</li>
					<li class="nav-item px-2 px-md-0">
						<a class="nav-link text-end" href="#products" data-section-target="products">Products</a>
					</li>
					<li class="nav-item px-2 px-md-0">
						<a class="nav-link text-end" href="#features"  data-section-target="features">Features</a>
					</li>
					<li class="nav-item px-2 px-md-0">
						<a class="nav-link text-end" href="#team" data-section-target="team">Team</a>
					</li>
					<li class="nav-item d-flex">
						<button type="button" class="btn rounded-0 ms-auto ms-md-2 mb-3 mb-md-0" data-bs-toggle="modal" data-bs-target="#modalContact">Contact</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="modal fade" id="modalContact" tabindex="-1" aria-labelledby="modalContactLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"><div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="modalContactLabel">Contact Us</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<p class="text-center text-muted">We would like to work together. Let's get in touch.</p>
					<div class="d-flex justify-content-center align-items-center">
						<a href="mailto:cv.mogreen@gmail.com" target="_blank" class="link-success m-2"><i class="far fa-envelope fa-2x"></i></a>
						<a href="tel:+6285298368811" target="_blank" class="link-success m-2" style="font-size:1.5em"><i class="fas fa-phone"></i></a>
						<a href="https://wa.me/6285298368811" target="_blank" class="link-success m-2"><i class="fab fa-whatsapp fa-2x"></i></a>
						<a href="javascript:void(1)" class="link-success m-2"><i class="fab fa-linkedin-in fa-2x"></i></a>
						<a href="https://www.instagram.com/mogreen.id/" target="_blank" class="link-success m-2"><i class="fab fa-instagram fa-2x"></i></a>
						<a href="javascript:void(2)" class="link-success m-2"><i class="fab fa-facebook-f fa-2x"></i></a>
					</div>
					<div id="alertContact"></div>
					<form name="contact" class="py-4" class="needs-validation">
						<div class="mb-4">
							<label for="contactName" class="form-label">Name</label>
							<input type="text" name="name" id="contactName" class="form-control" placeholder="*" required>
							<div class="invalid-feedback">Please enter your name</div>
						</div>
						<div class="mb-4">
							<label for="contactEmail" class="form-label">E-Mail</label>
							<input type="email" name="email" id="contactEmail" class="form-control" placeholder="*" required>
							<div class="invalid-feedback">Please enter your phone number</div>
						</div>
						<div class="mb-4">
							<label for="contactPhone" class="form-label">Phone Number</label>
							<input type="tel" name="phone" id="contactPhone" class="form-control">
						</div>
						<div class="mb-4">
							<label for="contactInstitution" class="form-label">Institution</label>
							<select name="institution" id="contactInstitution" class="form-select">
								<option value="Public" selected>Public</option>
								<option value="Media">Media</option>
								<option value="Investor">Investor</option>
							</select>
						</div>
						<div class="mb-4">
							<label for="contactMessege" class="form-label">Messege</label>
							<textarea name="messege" id="contactMessege" class="form-control" rows="4" placeholder="*" required></textarea>
							<div class="invalid-feedback">Please enter your messeges</div>
						</div>
						<div class="d-flex justify-content-end align-items-center px-4 py-4">
							<button type="button" name="btnReset" class="btn btn-sm btn-outline-secondary rounded-0">Reset</button>
							<button type="button" name="btnSubmit" class="btn btn-dark text-white rounded-0 ms-4">Send</button>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div></div>
	</div>
	<div class="modal fade" id="modalPlantation" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-fullscreen"><div class="modal-content">
			<div class="modal-body position-relative d-flex p-0">
				<div id="plantationCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#plantationCarousel" data-bs-slide-to="0" aria-label="plantation 1" class="active" aria-current="true"></button>
						<button type="button" data-bs-target="#plantationCarousel" data-bs-slide-to="1" aria-label="plantation 2"></button>
						<button type="button" data-bs-target="#plantationCarousel" data-bs-slide-to="2" aria-label="plantation 3"></button>
						<button type="button" data-bs-target="#plantationCarousel" data-bs-slide-to="3" aria-label="plantation 4"></button>
					</div>
					<div class="carousel-inner h-100">
						<div class="carousel-item h-100 active">
							<img src="assets/img/gallery1-sm-compressed.jpg" class="kebun-1" data-target="assets/img/gallery1-lg-compressed.jpg" data-loaded="false" alt="plantation 1">
						</div>
						<div class="carousel-item h-100">
							<img src="assets/img/gallery2-sm-compressed.jpg" class="kebun-2" data-target="assets/img/gallery2-lg-compressed.jpg" data-loaded="false" alt="plantation 2">
						</div>
						<div class="carousel-item h-100">
							<img src="assets/img/gallery3-sm-compressed.jpg" class="kebun-3" data-target="assets/img/gallery3-lg-compressed.jpg" data-loaded="false" alt="plantation 3">
						</div>
						<div class="carousel-item h-100">
							<img src="assets/img/gallery4-sm-compressed.jpg" class="kebun-4" data-target="assets/img/gallery4-lg-compressed.jpg" data-loaded="false" alt="plantation 4">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#plantationCarousel" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#plantationCarousel" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
				<div class="close-container position-absolute top-0 end-0">
					<button type="button" class="btn btn-lg close text-light border-0" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
				</div>
			</div>
		</div></div>
	</div>
	<main class="position-relative bg-light">
		<section id="about" class="full-height d-flex flex-column justify-content-center text-muted" data-section-register="true" data-section-name="about">
			<div class="container py-lg-5">
				<h5 class="text-center font-style3 line-height-1 px-lg-5 py-4 pb-lg-5" data-aos="fade-up"><b>Mogreen</b> is corporation from <b>Indonesia</b> who be supplier to provide <b>vegetable</b> product needs.
					We manage about <b>3000</b> hectares plantation land and collaborate with more than <b>100 local farmers</b> at Malino, South Sulawesi. Malino's yields can reach up to <b>100 tons</b> for a day and be supplier region vegetable needs of South Sulawesi to national</h5>
				<div class="position-relative">
					<div class="position-absolute top-0 end-0" style="z-index: 99;">
						<button class="btn btn-dark rounded-0" data-bs-toggle="modal" data-bs-target="#modalPlantation">
							<i class="far fa-eye"></i> More about our plantation
						</button>
					</div>
					<div class="d-flex">
						<img src="assets/img/gallery4-sm-compressed.jpg" class="kebun-4" data-target="assets/img/gallery4-lg-compressed.jpg" data-loaded="false" alt="plantation">
					</div>
				</div>
			</div>
		</section>
		<section id="products" class="full-height d-flex align-items-center bg-white" data-section-register="true" data-section-name="products">
			<div class="container">
				<h3 class="text-center text-dark mb-4" data-aos="fade-up">Our Products</h3>
				<div id="productsCarousel" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#productsCarousel" data-bs-slide-to="0" aria-label="potato" class="active" aria-current="true"></button>
						<button type="button" data-bs-target="#productsCarousel" data-bs-slide-to="1" aria-label="potato"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="carousel-img bg-dark">
								<img src="products/produk_kentang-sm-compressed.jpg" data-target="products/produk_kentang-compressed.jpg" data-loaded="false" alt="potato">
							</div>
							<div class="carousel-caption">
								<h3>Potato</h3>
								<p>We provide potatoes specific to Granola type cause of their low starch content (16% - 18%) and high resistance to plant diseases, such as late blight and bacterial wilt.</p>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-img bg-dark">
								<img src="products/produk_wortel-sm-compressed.jpg" data-target="products/produk_wortel-compressed.jpg" data-loaded="false" alt="carrot">
							</div>
							<div class="carousel-caption">
								<h3>Carrot</h3>
								<p>we provide are of the Nantes type which has a highly water content that the tastes are sweeter than other carrot kinds. This type can consumpt as raw or cooked, and can be processed into juice drinks, soups and salads.</p>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#productsCarousel" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#productsCarousel" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
				<div class="row justify-content-center text-dark pt-5">
					<div class="col-md-8 col-lg-6">
						<h5 class="text-center font-style3 text-muted" data-aos="fade-up">Apart from potatoes and carrots, we also provide a variety of vegetable products. Just <b>tell us</b> what your need.</h5>
					</div>
				</div>
			</div>
		</section>
		<section id="features" class="full-height d-flex align-items-center bg-white" data-section-register="true" data-section-name="features">
			<div class="container">
				<h4 class="font-style2 text-center text-dark mb-0" data-aos="fade-up">Why should</h4>
				<h1 class="text-center text-primary pb-4 mb-5" data-aos="fade-up">mogreen<span class="font-style3 text-dark small">?</span></h1>
				<div class="gallery">
					<div class="gallery-item">
						<img src="vendor/undraw/undraw_farm_girl_dnpe.svg" class="img-fluid" data-aos="fade-up" alt="icon-farmer">
						<p class="text-center text-muted mt-4" data-aos="fade-up">We work with more than <b>100</b> farmers who are ready to supply your needs.</p>
					</div>
					<div class="gallery-item">
						<img src="vendor/undraw/undraw_online_payments_re_y8f2.svg" class="img-fluid" data-aos="fade-up" data-aos-offset="200" alt="icon-deliver">
						<p class="text-center text-muted mt-4" data-aos="fade-up" data-aos-offset="200"><b>Order <i class="fas fa-long-arrow-alt-right"></i> Harvest <i class="fas fa-long-arrow-alt-right"></i> Deliver</b><br>We process the orders for freshness.</p>
					</div>
					<div class="gallery-item">
						<div class="d-flex smaller-img" data-aos="fade-up">
							<img src="vendor/undraw/undraw_gardening_eaf3.svg" class="img-fluid" data-aos="fade-up" alt="icon-yields">
						</div>
						<p class="text-center text-muted mt-4" data-aos="fade-up">We work with our own garden with a yield of up to <b>100 tons</b> in a day.</p>
					</div>
					<div class="gallery-item">
						<img src="vendor/undraw/undraw_make_it_rain_iwk4.svg" class="img-fluid" data-aos="fade-up" data-aos-offset="200" alt="icon-payment">
						<p class="text-center text-muted mt-4" data-aos="fade-up" data-aos-offset="200">Payment flexibility and ease transactions.</p>
					</div>
				</div>
			</div>
		</section>
		<section id="team" class="bg-light text-muted" data-section-register="true" data-section-name="team">
			<div class="container">
				<h3 class="text-center mb-4 mb-lg-3" data-aos="fade-up">Our Teams</h3>
				<div class="row justify-content-center">
					<div class="col-10 col-md-5 col-lg-4"><div class="pb-3 px-lg-5">
						<div class="card rounded-0"><div class="card-body">
							<div class="d-flex justify-content-center py-4">
								<img src="assets/img/user-sm.jpg" class="border" data-target="assets/img/profile_harto-md-compressed.jpg" data-loaded="false" alt="Sumiarso Suharto">
							</div>
							<h6 class="text-center font-style2 mb-1" data-aos="fade-up">Sumiarso Suharto</h6>
							<p class="text-center font-style1 mb-2" data-aos="fade-up">Founder</p>
							<p class="text-center" data-aos="fade-up">If you want something in your life you've never had, you'll have to do something. You've never done.</p>
							<p class="text-end text-md-center px-4 pt-4 pt-lg-2">
								<a href="https://www.linkedin.com/in/hart-mogreen-b04147228/" target="_blank" class="social link-success"><i class="fab fa-linkedin-in me-3 me-lg-1"></i></a>
								<a href="https://www.instagram.com/hart11_/" target="_blank" class="social link-success"><i class="fab fa-instagram"></i></a>
							</p>
						</div></div>
					</div></div>
					<div class="col-10 col-md-5 col-lg-4"><div class="pb-3 px-lg-5">
						<div class="card rounded-0"><div class="card-body">
							<div class="d-flex justify-content-center py-4">
								<img src="assets/img/user-sm.jpg" class="border" data-target="assets/img/profile_allu-md-compressed.jpg" data-loaded="false" alt="Ahlul Amzari">
							</div>
							<h6 class="text-center font-style2 mb-1" data-aos="fade-up">Ahlul Amzari</h6>
							<p class="text-center font-style1 mb-2" data-aos="fade-up">Business Development</p>
							<p class="text-center" data-aos="fade-up">No lates for successful, keep do it even through the world tries to depress you.</p>
							<p class="text-end text-md-center px-4 pt-4 pt-lg-2">
								<a href="https://www.linkedin.com/in/aul-amzari-3466a0221/" target="_blank" class="social link-success"><i class="fab fa-linkedin-in me-3 me-lg-1"></i></a>
								<a href="https://www.instagram.com/aulamzarii/" target="_blank" class="social link-success"><i class="fab fa-instagram"></i></a>
							</p>
						</div></div>
					</div></div>
					<div class="col-10 col-md-5 col-lg-4"><div class="pb-3 pt-md-2 pt-lg-0 px-lg-5">
						<div class="card rounded-0"><div class="card-body">
							<div class="d-flex justify-content-center py-4">
								<img src="assets/img/user-sm.jpg" class="border" data-target="assets/img/profile_sabri-md-compressed.jpg" data-loaded="false" alt="Muhammad Sabri">
							</div>
							<h6 class="text-center font-style2 mb-1" data-aos="fade-up">Muhammad Sabri</h6>
							<p class="text-center font-style1 mb-2" data-aos="fade-up">IT Support</p>
							<p class="text-center" data-aos="fade-up">Read to be a writer, walk before run. Learn more and do it. Result will refer to the process.</p>
							<p class="text-end text-md-center px-4 pt-4 pt-lg-2">
								<a href="https://www.linkedin.com/in/sabri-muhammad-3355061a3/" target="_blank" class="social link-success"><i class="fab fa-linkedin-in me-3 me-lg-1"></i></a>
								<a href="https://www.instagram.com/initial.sa/" target="_blank" class="social link-success"><i class="fab fa-instagram"></i></a>
							</p>
						</div></div>
					</div></div>
				</div>
			</div>
		</section>
	</main>
	<footer class="bg-light text-muted"><div class="container pt-lg-5">
		<div class="d-md-flex justify-content-center pb-md-5 pt-lg-5 mb-lg-5">
			<div class="py-4 px-md-4">
				<div class="text-muted text-center text-md-end mb-4">
					<h1 class="text-primary mb-0" data-aos="fade-up">Found Us</h1>
					<p class="font-style3" data-aos="fade-up">on our social media</p>
				</div>
				<div id="social" class="d-flex justify-content-center justify-content-md-end">
					<a class="social position-relative" href="mailto:cv.mogreen@gmail.com" target="_blank" data-aos="fade-up">
						<div class="icon">
							<i class="fab fa-linkedin"></i>
						</div>
						<div class="title bg-primary text-white"><b>cv.mogreen@gmail.com</b></div>
					</a>
					<a class="social position-relative" href="https://www.instagram.com/mogreen.id/" target="_blank" data-aos="fade-up" data-aos-offset="150">
						<div class="icon">
							<i class="fab fa-instagram"></i>
						</div>
						<div class="title bg-primary text-white"><b>@mogreen.id</b></div>
					</a>
					<a class="social position-relative" href="javascript:void(0)" title="mogreen.id" data-aos="fade-up" data-aos-offset="200">
						<div class="icon">
							<i class="fab fa-facebook-square"></i>
						</div>
						<div class="title bg-primary text-white"><b>Not available</b></div>
					</a>
				</div>
			</div>
			<div class="p-4">
				<p class="font-style1">CV. MOGREEN INDONESIA</p>
				<p>Jl. Perintis Kemerdekaan Km. 9, Tamalanrea<br>Makassar, 90245 - Indonesia</p>
				<p><i class="fas fa-phone"></i> +62 852 9836 8811<br><i class="fas fa-envelope"></i> cv.mogreen@gmail.com</p>
			</div>
		</div>
		<p class="text-muted text-center small mb-0 pt-5 pb-3"><b>Copyright <i class="far fa-copyright"></i> 2021 MOGREEN<span class="d-none d-md-inline">. All rights reserved</span></b></p>
	</div></footer>
</div>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/fontawesome/js/all.min.js"></script>
<script src="vendor/aos/aos.min.js"></script>
<script src="assets/js/script.min.js?version=8"></script>
<script type="text/javascript">var scrollWatcher=createScrollWatcher();Navbar.init();const header=document.querySelector("header#home"),navbarToggler=document.querySelector("#navbarToggler"),contactForm=document.forms.contact,modalContact=document.querySelector("#modalContact"),alertContact=document.querySelector("#alertContact"),galleryItem=document.querySelectorAll("#about .gallery-item"),sections=document.querySelectorAll("[data-section-register]"),modalPlantation=document.getElementById("modalPlantation");Array.from(sections).forEach(e=>{SectionRegister.push(e.getAttribute("data-section-name"),e)}),loadImgHeaderHero(header);let activeSection=SectionRegister.getActiveRange();Navbar.setActivedMenu(activeSection);const imgList=lazyLoadImgAnalyzerForHomePage();loadImg(imgList,!0),"sm"!=getBsBreakpoint()&&"xsm"!=getBsBreakpoint()||galleryItem.forEach(e=>e.removeAttribute("data-aos")),modalPlantation.addEventListener("show.bs.modal",function(e){let t=modalPlantation.querySelectorAll("img[data-loaded='false']");loadImg([...t],!0)}),navbarToggler.addEventListener("click",()=>{Navbar.toggleCollapse()}),contactForm.btnSubmit.addEventListener("click",()=>{if(!contactForm.checkValidity())return void contactForm.classList.add("was-validated");new FormData(contactForm);contactForm.classList.remove("was-validated");bsAlert(alertContact,"danger","<b>Failed</b> to send your messeges! Try other option, please."),document.querySelector("#modalContact .modal-body").scrollTop=alertContact.offsetTop}),contactForm.btnReset.addEventListener("click",()=>{contactForm.reset(),contactForm.classList.remove("was-validated")}),window.onscroll=(()=>{Navbar.scrolledStyle(),scrollWatcher.setKey(),activeSection!=SectionRegister.getActiveRange()&&(activeSection=SectionRegister.getActiveRange(),Navbar.setActivedMenu(activeSection))}),AOS.init();</script>
</body>
</html>