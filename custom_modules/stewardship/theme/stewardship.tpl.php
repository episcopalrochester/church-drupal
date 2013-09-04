<?php print $message['value']; ?>
<?php if (count($stories['nodes'])): ?>
  <h2>Stories of Giving</h2>
  <?php foreach ($stories['nodes'] as $story): ?>
    <div class="stewardship-story">
      <h3 class="stewardship-title"><h3><?php print l($story->title,"node/".$story->nid); ?></h3>
      <div class="stewardship-image"><a href="<?php print url("node/".$story->nid); ?>"><?php
        print theme_image_style(array('path' => $story->field_stewardship_featured_image['und'][0]['uri'], 'style_name' => 'stewardship_thumb','width'=>NULL,'height'=>NULL));
      ?></a></div>
      <p><?php print $story->body['und'][0]['summary']; ?></p>
      <p><?php print l("Read more &raquo;","node/".$story->nid,array('html'=>true)); ?></p>
    </div>
  <?php endforeach; ?>
<?php endif; ?>
<h2>Ways of Giving</h2>
<div class="ways-of-giving">
  <?php print $ways['value']; ?>
</div>
