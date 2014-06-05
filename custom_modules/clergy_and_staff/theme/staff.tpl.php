<?php foreach ($staff_array as $staff): ?>
  <div class="staff-profile row">
    <div class="staff-profile-image span2">
      <?php if(isset($staff->field_staff_teaser_image['und'][0]['uri'])): ?>
        <a href="<?php print url("node/".$staff->nid); ?>"><?php print theme_image_style(array('path' => $staff->field_staff_teaser_image['und'][0]['uri'], 'style_name' => 'staff_profile_thumb','width'=>NULL,'height'=>NULL)); ?></a>
      <?php else: ?>
        &nbsp;
      <?php endif; ?>
    </div>
    <div class="span1 staff-profile-spacer">
      &nbsp;
    </div>
    <div class="staff-profile-data span5">
      <h2><a href="<?php print url("node/".$staff->nid); ?>"><?php print $staff->title; ?></a></h2>
      <p><strong><?php print $staff->field_job_title['und'][0]['value']; ?></strong></p>
<?php if (isset($staff->field_e_mail['und'])): ?>
<p>
<?php print l($staff->field_e_mail['und'][0]['email'],"mailto:".$staff->field_e_mail['und'][0]['email']); ?> 
</p>
<?php endif; ?>
      <?php if (!empty($staff->body['und'][0]['summary'])): ?>
      <p><?php print $staff->body['und'][0]['summary']; ?></p>
      <p><a href="<?php print url("node/".$staff->nid); ?>">Read more &raquo;</a></p>
      <?php elseif(!empty($staff->body['und'][0]['value'])): ?>
      <?php print text_summary($staff->body['und'][0]['value'],NULL,400); ?>
      <p><a href="<?php print url("node/".$staff->nid); ?>">Read more &raquo;</a></p>
      <?php endif; ?>
    </div>
  </div>
<?php endforeach; ?>
