<?php get_header(); ?>

<main class="l-main">
  <section class="c-hero--archive">
    <h2 class="c-hero--archive__text">Menu:<span class="c-hero--archive__category"><?php wp_title(''); ?></span></h2>
  </section><!-- c-hero--archive -->

  <section class="p-archive--press">
    <h2 class="p-archive--press__text">小見出しが入ります</h2>
    <p class="p-archive--press__about">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="c-card">
          <div class="c-card__main">
            <?php the_post_thumbnail("thumbnail"); ?>
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

  </section>
</main><!-- l-main -->
</main>
<?php get_sidebar(); ?>
</div><!-- contents -->
<div id="filter" class="c-filter"></div>
<?php get_footer(); ?>