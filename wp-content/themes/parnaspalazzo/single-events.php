<?php get_header(); ?>
<?php
global $post;
$fields = get_fields($post->ID);
?>

<div class="container event" data-event-id="<?= $post->ID ?>">
  <div class="row">
    <div class="col-12 event__title">
      <span><?= $post->post_title ?></span>
      <span><?= $fields["date"] ?></span>
    </div>
  </div>
</div>

<?php get_footer(); ?>
