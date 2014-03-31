<?php $pref = variable_get("sidebar_events_pref","builtin");
if ($pref == "builtin" && count($events['nodes'])): ?>
<div id="sidebar-upcoming-events">
    <?php foreach($events['nodes'] as $event): ?>
    <div class="sidebar-upcoming-event">
    <h3 class="title"><?php print drupal_render(field_view_field('node',$event,'field_event_date',array('label'=>'hidden','settings'=>array('format_type'=>'short')))); ?></h3>
      <p><strong><?php print l($event->title,"node/".$event->nid); ?></strong></p>
    </div>
    <?php if (node_access("update",$event)): ?>
      <p><?php print l("edit","node/".$event->nid."/edit"); ?></p>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
<div class="event-controls">
  <?php print l("&laquo; See more events &raquo;","upcoming-events",array('html'=>TRUE)); ?>
</div>
<?php else: ?>
<?php print variable_get("sidebar_events_block",""); ?>
<?php endif; ?>
