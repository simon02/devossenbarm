<?php
/**
 * @var array $classes
 */
?>

<?php $testimonial = $testimonials[0] ?>
<div class="testimonial text-center">
  <?php if (!empty($testimonial['title'])) : ?>
    <h4 class="title">
      <i class='fa fa-heart icon-left'></i>
      <?php echo $testimonial['title'] ?>
      <i class='fa fa-heart icon-right'></i>
    </h4>
  <?php endif; ?>
  <?php if (!empty($testimonial['text'])) : ?>
    <div class="content">
      <?php echo wp_kses_post( $testimonial['text'] ) ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($testimonial['attribution'])) : ?>
    <div class="author">
      <?php echo wp_kses_post( $testimonial['attribution'] ) ?>
    </div>
  <?php endif; ?>
</div>