<?php get_header(); ?>

<section class="page-header container my-5">
  <div class="row">
    <div class="col-12 breadcrumbs">
      <div class="breadcrumbs-list">
        <li class="breadcrumbs-item"><a href="/">Главная</a></li>
        <li class="breadcrumbs-item breadcrumbs-devider"><span> » </span></li>
        <li class="breadcrumbs-item"><?php the_title(); ?></li>
      </div>
    </div>
    <div class="col-12">
      <h1 class="header-title">
        Контакты
      </h1>
    </div>
  </div>
</section>
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
</style>

<?php the_content();
get_sidebar();
get_footer();
