<!-- ヘッダーの読み込み -->
<?php get_header(); ?>
<!-- サムネイルの表示 -->
<?php the_post_thumbnail('category-main'); ?>
<!-- ブログタイトルの表示 -->
<h1><?php the_title(); ?></h1>
<h2>page.phpです</h2>
<!-- 本文の表示 抜粋ではないよ -->
<p><?php the_content(); ?></p>
<!-- フッター読み込み -->
<?php get_footer(); ?>