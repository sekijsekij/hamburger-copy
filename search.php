<?php get_header(); ?>

<main class="l-main">
  <section class="c-hero--archive">
    <h2 class="c-hero--archive__text">search:<?php the_search_query(); ?><span class="c-hero--archive__category"></span></h2>
  </section><!-- c-hero--archive -->

  <section class="p-archive--press">
    <h2 class="p-archive--press__text">小見出しが入ります</h2>
    <p class="p-archive--press__about">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    <!-- 検索結果から固定ページを除外 -->
    <?php 
      global $query_string;
      query_posts($query_string . "&post_type=post");
    ?>
    <!-- loop -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>


        <article class="c-card p-archive--press__wrapper">
          <div class="c-card__main">
            <?php the_post_thumbnail("medium"); ?>
          </div>
          <div class="c-card__text-wrapper">
            <h3 class="c-card__title"><?php the_title(); ?></h3>
            <h4 class="c-card__sub-title">小見出しが入ります</h4>
            <p class="c-card__about">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <div class="c-card__btn-wrapper"><button class="c-card__btn">詳しく見る</button></div>
          </div>
        </article>
      <?php endwhile; ?>
  
    <?php endif; ?>
    <div class="c-pagenation">
      <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
      } ?>
    </div>
    <!-- <div class="p-archive--press__pagenation c-pagenation">
          <p class="c-pagenation__current">page 1/10</p>
          <ul class="c-pagenation__pages">
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link prev"><i class="fas fa-angle-double-left"></i></a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link number current">1</a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link number">2</a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link number">3</a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link number">4</a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link number">5</a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link number">6</a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link number">7</a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link number">8</a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link number">9</a></li>
            <li class="c-pagenation__page"><a href="#" class="c-pagenation__link next"><i class="fas fa-angle-double-right"></i></a></li>
          </ul>
        </div> -->
  </section>
</main><!-- l-main -->
</main>


<?php get_sidebar(); ?>
</div><!-- contents -->

<div id="filter" class="c-filter"></div>
<?php get_footer(); ?>