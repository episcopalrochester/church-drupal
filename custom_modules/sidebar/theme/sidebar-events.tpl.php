<div id="sidebar-upcoming-events">
    <?php $date = false; foreach($events as $event): ?>
    <?php if ($date != date("l, F j",$event->field_event_date['und'][0]['value'])): ?>
      <?php $date = date("l, F j",$event->field_event_date['und'][0]['value']); ?>
      <h3 class="title"><?php print $date; ?></h3>
    <?php endif; ?>
    <div class="sidebar-upcoming-event">
      <?php print str_replace("<br /><br />","<br />",$event->body['und'][0]['value']); ?>
    </div>
  <?php endforeach; ?>
</div>
<div class="event-controls">
<?php print l("See more events","upcoming-events"); ?>
</div>

