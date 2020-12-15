<?php get_header(); ?>

<main class="l-main">

  <section class="c-hero__single">
    <!-- loop -->

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h2 class="c-hero__single__text">
          <?php the_title(); ?>
        </h2>
        <div class="c-hero__single__menu">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cheese.png" alt="">
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>


  <section class=" c-hero__info">
          <h2 class="c-hero__info__title">見出しh2</h2>
          <p class="c-hero__info__about">pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。</p>
          <h3 class="c-hero__info__title__secondary">見出しh3</h3>
          <p class="c-hero__info__about__secondary">見出しh4</p>
          <p class="c-hero__info__about__secondary">見出しh3</p>
          <p class="c-hero__info__about__secondary">見出しh4</p>
          <p class="c-hero__info__about__secondary">見出しh5</p>
          <p class="c-hero__info__about__secondary">見出しh6</p>

          <div class="c-hero__info__source">
            <p>引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
            <div class="c-hero__info__source__title">出典元:
              <div class="c-hero__info__source__secondary">oooooooo</div>
            </div>
          </div>
  </section>

  <section class="c-menu__info">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__top alt=">
    <ul class="c-menu__info__wrap">
      <li class="c-menu__info__wrapper">
        <p class="c-menu__info__img"></p>
        <p class="c-menu__info__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </li>
    </ul>
    <ul class="c-menu__info__wrap">
      <li class="c-menu__info__wrapper-second">
        <p class="c-menu__info__img-second"></p>
        <p class="c-menu__info__text-second">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </li>
    </ul>

    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__bottom alt=">

    <!-- grid -->
    <div class="c-menu__info__img-grid">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__img_grid alt=">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__img_grid alt=">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__img_grid alt=">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__img_grid alt=">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__img_grid alt=">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__img_grid alt=">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__img_grid alt=">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__img_grid alt=">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" class="c-menu__info__img_grid alt=">
    </div>

    <div class="c-menu__info__about">
      <ul class="c-menu__info__about-text">
        <li>1.リストリストリスト</li>
        <li>2.リストリストリスト</li>
      </ul>
      <ul>
        <li class="c-menu__info__about-text-second">1.リストリストリスト</li>
        <li class="c-menu__info__about-text-second">2.リストリストリスト</li>
      </ul>
      <ul>
        <li>1.リストリストリスト</li>
        <li>2.リストリストリスト</li>
      </ul>

      <ul>
        <li>リストリストリスト</li>
        <li>リストリストリスト</li>
      </ul>
      <ul>
        <li class="c-menu__info__about-text-second">リスト2リスト2リスト2</li>
        <li class="c-menu__info__about-text-second">リスト2リスト2リスト2</li>
      </ul>
      <ul>
        <li>リストリストリスト</li>
        <li>リストリストリスト</li>
      </ul>
    </div>
  </section>
  <div class="c-menu__info__about-end"></div>

  <table class="c-menu__info-table">
    <tr>
      <td class="c-menu__info-table-parts-right">テーブル</td>
      <td class="c-menu__info-table-parts-left">テーブル</td>
    </tr>
    <tr>
      <td class="c-menu__info-table-parts-right">テーブル</td>
      <td class="c-menu__info-table-parts-left">テーブル</td>
    </tr>
    <tr>
      <td class="c-menu__info-table-parts-right">テーブル</td>
      <td class="c-menu__info-table-parts-left">テーブル</td>
    </tr>
    <tr>
      <td class="c-menu__info-table-parts-right">テーブル</td>
      <td class="c-menu__info-table-parts-left">テーブル</td>
    </tr>
  </table>

  <form action="#" method="get" class="c-menu__info-button">
    <input type="submit" class="c-menu__info-button-btn" value="ボタン">
  </form>


</main><!-- l-main -->
</main>
<?php get_sidebar(); ?>
</div><!-- contents -->
<div id="filter" class="c-filter"></div>
<?php get_footer(); ?>