<?php foreach ($teachings['nodes'] as $node): ?>
  <div class="teaching-teaser">
    <h2><?php print l($node->title,"node/".$node->nid); ?></h2>
    <?php if (isset($node->field_teaching_series['und'][0])): ?>
    <?php $options = teachings_get_series();
    $series = $options[$node->field_teaching_series['und'][0]['value']];
    ?>
    <strong>Series: <?php print $series; ?></strong>
    <?php endif; ?>
    <?php if (isset($node->field_teaching_author['und'][0])): ?>
      <p><strong>By: </strong>
        <?php $author_nid = $node->field_teaching_author['und'][0]['nid'];
        $author = node_load($author_nid);
        print l($author->title,"node/".$author_nid); ?>
      </p>
    <?php elseif (isset($node->field_teaching_by_text['und'][0])): ?>
      <p><strong>By: </strong>
      <?php print $node->field_teaching_by_text['und'][0]['value']; ?>
    <?php endif; ?>
    <?php if (isset($node->field_teaching_date['und'][0])): ?>
      <p><em>
        <?php print date('l, F j, Y',$node->field_teaching_date['und'][0]['value']);
        ?></em>
      </p>
    <?php endif; ?>
    <?php if (isset($node->field_teaching_video['und'][0])): ?>
      <p><?php print render(field_view_field('node',$node,'field_teaching_video',array(
        'type' => 'file_rendered',
        'label' => 'hidden',
      ))); ?></p>
    <?php endif; ?>
    <?php if (isset($node->field_teaching_audio['und'][0])): ?>
      <p><?php print render(field_view_field('node',$node,'field_teaching_audio',array(
        'type' => 'mediaelement_audio',
        'label' => 'hidden',
      ))); ?></p>
<p>Download: <?php print render(field_view_field('node',$node,'field_teaching_audio',array(
'label' => 'hidden',
))); ?></p>
    <?php endif; ?>
    <p><?php print $node->body['und'][0]['summary']; ?></p>
    <p><?php print l("Read more &raquo;","node/".$node->nid,array('html'=>true)); ?></p>
  </div>
<?php endforeach; ?>
<?php if ($teachings['pager']): ?>
  <?php  print $teachings['pager']; ?>
<?php endif; ?>
