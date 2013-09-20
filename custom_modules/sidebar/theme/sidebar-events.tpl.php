<div id="sidebar-upcoming-events">
    <?php $date = false; foreach($events['nodes'] as $event): ?>
    <?php if ($date != date("l, F j",$event->field_event_date['und'][0]['value'])): ?>
      <?php $date = date("l, F j",$event->field_event_date['und'][0]['value']); ?>
      <h3 class="title"><?php if ($event->sticky == 1):?>Featured: <?php endif; ?><?php print $date; ?></h3>
    <?php endif; ?>
    <div class="sidebar-upcoming-event">
      <?php print strip_tags($event->body['und'][0]['value'],"<strong><b>"); ?>
    </div>
    <?php if (node_access("update",$event)): ?>
      <p><?php print l("edit","node/".$event->nid."/edit"); ?></p>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
<div class="event-controls">
  <?php print l("&laquo; See more events &raquo;","upcoming-events",array('html'=>TRUE)); ?>
</div>

