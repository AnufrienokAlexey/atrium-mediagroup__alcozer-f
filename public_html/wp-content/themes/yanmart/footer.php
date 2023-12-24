<footer class="footer-area footer-one">
	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-4 col-sm-12">
					<div class="f-about">
						<div class="footer-logo">
							<a href="javascript:void(0)">
								<img src="<?=YANMART_IMG_DIR;?>/logo-black.png" alt="Logo" />
							</a>
						</div>
						<p class="text">
							Оригинальное качество Европейских брендов
						</p>
					</div>

				</div>
				<div class="col-xl-2 col-lg-2 col-sm-4">
					<div class="footer-link">
						<h6 class="footer-title">Клиентам</h6>
						<ul>
							<li><a href="javascript:void(0)">О нас</a></li>
							<li><a href="javascript:void(0)">Оплата и доставка</a></li>
							<li><a href="javascript:void(0)">Гарантия и возврат</a></li>
						</ul>
					</div>
					<!-- footer link -->
				</div>
				<div class="col-xl-2 col-lg-3 col-sm-4">
					<div class="footer-link">
						<h6 class="footer-title">Каталог</h6>
						<ul>
							<li><a href="javascript:void(0)">Браслеты</a></li>
							<li><a href="javascript:void(0)">Колье</a></li>
							<li><a href="javascript:void(0)">Кольца</a></li>
							<li><a href="javascript:void(0)">Серьги</a></li>
							<li><a href="javascript:void(0)">Броши</a></li>
						</ul>
					</div>
					<!-- footer link -->
				</div>
				<div class="col-xl-2 col-lg-3 col-sm-4">
					<!-- Start Footer Contact -->
					<div class="footer-contact">
						<h6 class="footer-title">Контакты</h6>
						<ul>
							<li>
								<i class="lni lni-map-marker"></i> г. Санкт-Петербург
							</li>
							<li><i class="lni lni-phone-set"></i> +7 911 111 11 11</li>
							<li><i class="lni lni-envelope"></i> manager@alcozer.ru</li>
						</ul>
					</div>
					<!-- End Footer Contact -->
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</div>
	<!-- footer widget -->

	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div
						 class="
								copyright
								text-center
								d-md-flex
								justify-content-between
								align-items-center
								"
						 >
						<p class="text">Санкт-Петербург © 2023. Все права защищены</p>
						<ul class="social">
							<li>
								<a href="javascript:void(0)">
									<i class="lni lni-vk"></i>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="lni lni-whatsapp"></i>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)"
								   ><i class="lni lni-telegram-original"></i
									></a>
							</li>
						</ul>
					</div>
					<!-- copyright -->
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</div>
	<!-- footer copyright -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/js/glightbox.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/css/glightbox.min.css" />

<script>
	const filters = document.querySelectorAll(".portfolio-menu button");

	filters.forEach((filter) => {
		filter.addEventListener("click", function () {
			// ==== Filter btn toggle
			let filterBtn = filters[0];
			while (filterBtn) {
				if (filterBtn.tagName === "BUTTON") {
					filterBtn.classList.remove("active");
				}
				filterBtn = filterBtn.nextSibling;
			}
			this.classList.add("active");

			// === filter
			let selectedFilter = filter.getAttribute("data-filter");
			let itemsToHide = document.querySelectorAll(
				`.grid .col-lg-4:not([data-filter='${selectedFilter}'])`
			);
			let itemsToShow = document.querySelectorAll(
				`.grid [data-filter='${selectedFilter}']`
			);

			if (selectedFilter == "all") {
				itemsToHide = [];
				itemsToShow = document.querySelectorAll(".grid [data-filter]");
			}

			itemsToHide.forEach((el) => {
				el.classList.add("hide");
				el.classList.remove("show");
			});

			itemsToShow.forEach((el) => {
				el.classList.remove("hide");
				el.classList.add("show");
			});
		});
	});

	//========= glightbox
	const myGallery = GLightbox({
		selector: ".glightbox",
		type: "image",
		width: 900,
	});

	//===== close navbar-collapse when a  clicked
	let navbarTogglerNine = document.querySelector(
		".navbar-nine .navbar-toggler"
	);
	navbarTogglerNine.addEventListener("click", function () {
		navbarTogglerNine.classList.toggle("active");
	});

	// ==== left sidebar toggle
	let sidebarLeft = document.querySelector(".sidebar-left");
	let overlayLeft = document.querySelector(".overlay-left");
	let sidebarClose = document.querySelector(".sidebar-close .close");

	overlayLeft.addEventListener("click", function () {
		sidebarLeft.classList.toggle("open");
		overlayLeft.classList.toggle("open");
	});
	sidebarClose.addEventListener("click", function () {
		sidebarLeft.classList.remove("open");
		overlayLeft.classList.remove("open");
	});

	// ===== navbar nine sideMenu
	let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

	sideMenuLeftNine.addEventListener("click", function () {
		sidebarLeft.classList.add("open");
		overlayLeft.classList.add("open");
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
