<?php $video = variable_get('stewardship_video',FALSE);
if ($video['fid']):
  $file =  file_load($video['fid']);
  $display = array(
    'settings' => array(
      'width' => '640',
      'height' => '360',
      'autoplay' => FALSE,
      'autohide' => FALSE,
      'color' => TRUE,
      'enablejsapi' => FALSE,
      'loop' => FALSE,
      'modestbranding' => TRUE,
      'nocookie' => FALSE,
      'origin' => '',
      'protocol' => '',
      'protocol_specify' => '',
      'rel' => '',
      'showinfo' => FALSE,
      'theme' => '',
    ),
  );
  if ($file->filemime == "video/vimeo") {
    print render(media_vimeo_file_formatter_video_view($file,$display,LANGUAGE_NONE));
  }
  else {
    print render(media_youtube_file_formatter_video_view($file,$display,LANGUAGE_NONE));
  }
?>
  <br />
<?php endif; ?>
<?php print $message['value']; ?>
<?php if (count($stories['nodes'])): ?>
  <h2>Stories of Giving</h2>
  <?php foreach ($stories['nodes'] as $story): ?>
    <div class="stewardship-story">
      <h3 class="stewardship-title"><h3><?php print l($story->title,"node/".$story->nid); ?></h3>
      <?php if (variable_get('stewardship_donor_videos',0) && isset($story->field_stewardship_video['und'][0])): ?>
        <?php
          print render(field_view_field('node',$story,'field_stewardship_video',array(
            'type' => 'file_rendered',
            'label' => 'hidden',
          )));
        ?>
      <?php endif; ?>
      <?php $class=""; if (variable_get('stewardship_donor_photos',1) && isset($story->field_stewardship_featured_image['und'][0])): ?>
        <div class="stewardship-image"><a href="<?php print url("node/".$story->nid); ?>"><?php
          print theme_image_style(array('path' => $story->field_stewardship_featured_image['und'][0]['uri'], 'style_name' => 'stewardship_thumb','width'=>NULL,'height'=>NULL));
        ?></a></div>
      <?php $class = "indent"; endif; ?>
      <p class="<?php print $class; ?>"><?php print $story->body['und'][0]['summary']; ?></p>
      <p class="<?php print $class; ?>"><?php print l("Read more &raquo;","node/".$story->nid,array('html'=>true)); ?></p>
    </div>
  <?php endforeach; ?>
<?php endif; ?>
<?php if ($ways['value']): ?>
  <h2>Ways of Giving</h2>
  <div class="ways-of-giving">
    <?php print $ways['value']; ?>
  </div>
<?php endif; ?>
