<?php
get_header();
if (have_posts()) {while(have_posts()) {the_post();?>

   <section class="page-header container my-5">
      <div class="row">
        <div class="col-6">
          <div class="breadcrumbs">
            <div class="breadcrumbs-list">
              <li class="breadcrumbs-item"><a href="/">Главная</a></li>
              <li class="breadcrumbs-item breadcrumbs-devider"><span> » </span></li>
              <li class="breadcrumbs-item"><a href="/#catalog">Каталог</a></li>
              <li class="breadcrumbs-item breadcrumbs-devider"><span> » </span></li>
              <li class="breadcrumbs-item"><?php the_title(); ?></li>
            </div>
          </div>
          <h1 class="header-title">
            <?php the_title(); ?>
          </h1>
          <div class="my-5">
            <p>
              Оригинальное изделие от официального представителя в России.
            </p>
            <div>
              <div>
                Стоимость:
              </div>
              <div class="product-details-price">
                31 423 р
              </div>
            </div>
          </div>
          <div>
            <button class="btn btn-primary">Заказать</button>
          </div>
        </div>
        
        <div class="col-6">
          <div class="product-details-image">
            <div class="product-image">
              <div class="product-image-active">
                <div class="single-image">
                  <img src="<?php the_post_thumbnail(array(636, 636)); ?>
                </div>
              </div>
            </div>
            <div class="product-thumb-image">
              <div  class="active">
                <img src="<?php the_post_thumbnail(array(79, 79)); ?>" alt="<?php the_title(); ?>">
              </div>
              <div>
                <img src="<?php the_post_thumbnail(array(636, 636)); ?>" alt="<?php the_title(); ?>">
              </div>
              <div>
                <img src="<?php the_post_thumbnail(array(636, 636)); ?>" alt="<?php the_title(); ?>">
              </div>
              <div>
                <img src="<?php the_post_thumbnail(array(636, 636)); ?>" alt="<?php the_title(); ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php }}?>
    <style>
      .breadcrumbs{}
      .breadcrumbs-list{
        display: flex;
        flex-direction: row;
        list-style: none;
        gap: 10px;
        padding-left: 2px;
      }
      .breadcrumbs-item{}
      .breadcrumbs-devider{}

       .product-thumb-image{
        display: flex;
        flex-direction: row;
        gap: 15px;
        margin-top: 20px;
       }
       .product-thumb-image div{
        max-width: 100px; 
        cursor: pointer;
        border-radius: 4px;
        background: #fff;
        overflow: hidden;
        opacity: .7;
       }
       .product-thumb-image div.active{
          box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.32);
          opacity: 1;
       }
       .product-thumb-image img{
          width: 100%;
          height: 100%;
          object-fit: cover;
       }
     </style>

     <!--====== ABOUT ONE PART START ======-->

    <section class="about-area about-one">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="about-title text-center">
              <h2 class="title fw-bold">Работаем для вас</h2>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row justify-content-center">
          <div class="col-md-4 col-sm-8">
            <div class="single-about-items">
              <div class="items-icon">
                <i class="lni lni-delivery"></i>
              </div>
              <div class="items-content">
                <h4 class="items-title">Доставка по Миру</h4>
                <p class="text">
                  Отправим в любую точку планеты чреез ТК или по почте
                </p>
              </div>
            </div>
            <!-- single about items -->
          </div>
          <div class="col-md-4 col-sm-8">
            <div class="single-about-items">
              <div class="items-icon">
                <i class="lni lni-mastercard"></i>
              </div>
              <div class="items-content">
                <h4 class="items-title">Удобная оплата</h4>
                <p class="text">
                  Онлайн, наличные, перевод, СБП, биткойны
                </p>
              </div>
            </div>
            <!-- single about items -->
          </div>
          <div class="col-md-4 col-sm-8">
            <div class="single-about-items">
              <div class="items-icon">
                <i class="lni lni-protection"></i>
              </div>
              <div class="items-content">
                <h4 class="items-title">Гарантия качества</h4>
                <p class="text">
                  Даем гарантию на изделия до двух лет
                </p>
              </div>
            </div>
            <!-- single about items -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

    <!--====== ABOUT ONE PART ENDS ======-->

    <section class="cta-style-1 py-5">
      <div class="container">
        <div class="cta-style-1-wrapper primary-gradient-6">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="cta-content">
                <h1 class="mb-3 cta-title">Получайте скидки %</h1>
                <ul class="mb-3">
                    <li>При повторных покупках товаров скидка увеличивается на 5%. Чаще покупаете - больше выгода</li>
                    <li>Совместные покупки. Покупайте сразу несколько категорий товаров и получите скикду до 30%</li>
                  </ul>
                <a href="javascript:void(0)" class="btn primary-btn">
                  <i class="mdi mdi-download"></i>
                  Связаться
                </a>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="cta-img">
                <img src="assets/img/cta/cta-1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
get_sidebar();
get_footer();
