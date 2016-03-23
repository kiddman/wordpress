# 固定ページで記事一覧を表示する
<?php
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query('post_type=hongo_recreation' . '&paged=1&posts_per_page=1');
?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
  <?php the_title(); ?>
  <?php
    $post_id = get_the_ID();
    $image1 = get_post_meta($post_id, 'image1', true);
    $image1 = wp_get_attachment_image_src( $image1, array(150,128) );
    $src1 = $image1[0];
   ?>
   <img src="<?php echo $src1; ?>">
   <?php endwhile; ?>
<?php $wp_query = null; $wp_query = $temp; ?>