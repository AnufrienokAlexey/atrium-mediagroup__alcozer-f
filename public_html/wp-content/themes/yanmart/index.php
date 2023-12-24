<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yanmart
 */

get_header();

?>
<section class="header-area header-one">
      <div class="header-content-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12">
              <div class="header-wrapper">
                <div class="header-content">
                  <h1 class="header-title">
                    Стильные аксессуары и бижутерия мировых брендов
                  </h1>
                  <p class="text-lg">
                    Только оригинальное качество
                  </p>
                  <div class="header-btn rounded-buttons">
                    <h1
                      class="btn primary-btn-outline"
                      href="javascript:void(0)"
                    >
                      Перейти в каталог
                    </h1>
                  </div>
                </div>
                <!-- header content -->
              </div>
            </div>
            <!-- <div class="col-lg-6 col-12">
              <div class="header-image d-none d-lg-block">
                <div class="image">
                  <img
                    src="../assets/images/header/header-1.svg"
                    alt="Header"
                  />
                </div>
              </div>
            </div> -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div class="header-shape">
          <img src="<?=YANMART_IMG_DIR;?>/header-shape.svg" alt="shape" />
        </div>
        <!-- header-shape -->
      </div>
      <!-- header content area -->
    </section>

<section class="portfolio-area portfolio-one" id="catalog">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xxl-6 col-xl-7 col-lg-8">
				<div class="section-title text-center mb-5">
					<h2 class="mb-3 fw-bold">Популярные товары</h2>
				</div>
			</div>
		</div>
		

		
		<div class="row">
			<div class="col-lg-12">
				<div class="portfolio-menu">
					<button data-filter="all" class="active">Все товары</button>
					<button data-filter="braslet">Браслеты</button>
					<button data-filter="kole">Колье</button>
					<button data-filter="kolczo">Кольца</button>
					<button data-filter="sergi">Серьги</button>
					<button data-filter="brosh">Броши</button>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="row grid">
			<?php if (have_posts()) {while(have_posts()) {the_post();
			$posttags = get_the_tags();
			if( $posttags ){
				foreach( $posttags as $tag ){ ?>
					<div class="col-lg-4 col-sm-6" data-filter="<?php echo $tag->name; ?>">
						<div class="portfolio-style-one text-center">
							<div class="portfolio-image">
								<?php the_post_thumbnail(array(400, 400)); ?>
							</div>
							<div class="portfolio-overlay d-flex align-items-center">
								<div class="portfolio-content">
									<div class="portfolio-icon">
										<a
										   class="image-popup-two glightbox"
										   href="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ) ; ?>"
										   >
											<i class="lni lni-zoom-in"></i>
										</a>
									</div>
									<div class="portfolio-text">
										<h4 class="portfolio-title">
											<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
										</h4>
										<p class="text">
											<?php the_excerpt(); ?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- single portfolio -->
					</div>
			<?php }}}}?>

		</div>
		<!-- row -->
	</div>
	<!-- container -->
</section>

<?php
get_sidebar();
get_footer();
