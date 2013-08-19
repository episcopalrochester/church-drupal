<?php foreach ($sermons['nodes'] as $node): ?>
<div class="sermon-teaser">
<h2><?php print l($node->title,"node/".$node->nid); ?></h2>
<?php if (isset($node->field_sermon_video['und'][0])): ?>
<p><?php print render(field_view_field('node',$node,'field_sermon_video',array(
  'type' => 'file_rendered',
  'label' => 'hidden',
))); ?></p>
<?php endif; ?>
<?php if (isset($node->field_sermon_audio['und'][0])): ?>
<p><?php print render(field_view_field('node',$node,'field_sermon_audio',array(
  'type' => 'mediaelement_audio',
  'label' => 'hidden',
))); ?></p>
<?php endif; ?>
<p><?php print $node->body['und'][0]['summary']; ?></p>
<p><?php print l("Read more &raquo;","node/".$node->nid,array('html'=>true)); ?></p>
</div>
<?php endforeach; ?>
<?php if ($sermons['pager']): ?>
<?php  print $sermons['pager']; ?>
<?php endif; ?>
