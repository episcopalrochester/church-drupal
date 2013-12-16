<?php if ($slides): ?>
<div class="row hidden-phone">
    <div class="span12 cycle-slideshow"
data-cycle-fx="fade"
data-cycle-manual-speed="1200"
data-cycle-prev=".slide-prev"
data-cycle-next=".slide-next"
data-cycle-slides="> div"
data-cycle-pause-on-hover="true"
data-cycle-timeout="<?php print variable_get("slideshow_speed",0); ?>"
id="front-slideshow">
      <?php foreach ($slides as $slide): ?>
        <div class="slide <?php print $slide->field_slide_text_position['und']['0']['value']; ?>">
        <div class="slide-text-container hidden-phone">
        <div class="slide-text-container-inner">
        <div class="slide-title">
          <?php if (isset($slide->field_slide_link['und'][0]['nid'])): ?>
          <a href="<?php print url("node/".$slide->field_slide_link['und'][0]['nid']); ?>">
          <?php endif; ?>
          <?php print $slide->title; ?>
          <?php if (isset($slide->field_slide_link['und'][0]['nid'])): ?>
          </a>
          <?php endif; ?>
        </div>
        <div class="slide-text">
          <?php if (isset($slide->field_slide_link['und'][0]['nid'])): ?>
          <a href="<?php print url("node/".$slide->field_slide_link['und'][0]['nid']); ?>">
          <?php endif; ?>
          <?php if (isset($slide->field_slide_link['und'][0]['nid'])): ?>
          <a href="<?php print url("node/".$slide->field_slide_link['und'][0]['nid']); ?>">
          <?php endif; ?>
          <?php print $slide->field_slide_text['und'][0]['value']; ?>
          <?php if (isset($slide->field_slide_link['und'][0]['nid'])): ?>
          </a>
          <?php endif; ?>
        </div>
        </div>
        </div>
          <?php if (isset($slide->field_slide_link['und'][0]['nid'])): ?>
          <a href="<?php print url("node/".$slide->field_slide_link['und'][0]['nid']); ?>">
          <?php endif; ?>
        <?php print theme_image_style(array('path'=>$slide->field_slide_image['und'][0]['uri'],'style_name'=>'front_page_slide','width'=>NULL,'height'=>NULL)); ?>
          <?php if (isset($slide->field_slide_link['und'][0]['nid'])): ?>
          </a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div><!-- /.slideshow -->
<?php endif; ?>
