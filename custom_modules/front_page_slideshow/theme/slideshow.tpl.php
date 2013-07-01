<?php if ($slides): ?>
<div class="row hidden-phone">
    <div class="span12 cycle-slideshow"
data-cycle-fx="fade"
data-cycle-manual-speed="1200"
data-cycle-prev=".slide-prev"
data-cycle-next=".slide-next"
data-cycle-slides="> div"
data-cycle-timeout="0"
id="front-slideshow">
      <?php foreach ($slides as $slide): ?>
        <div class="slide <?php print $slide->field_slide_text_position['und']['0']['value']; ?>">
        <div class="slide-text-container hidden-phone">
        <div class="slide-text-container-inner">
        <div class="slide-title">
          <?php print $slide->title; ?>
        </div>
        <div class="slide-text">
          <?php print $slide->field_slide_text['und'][0]['value']; ?>
        </div>
        </div>
        </div>
        <?php print theme_image_style(array('path'=>$slide->field_slide_image['und'][0]['uri'],'style_name'=>'front_page_slide','width'=>NULL,'height'=>NULL)); ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div><!-- /.slideshow -->
<?php endif; ?>
