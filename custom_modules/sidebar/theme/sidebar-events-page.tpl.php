<?php $pref = variable_get("sidebar_events_pref","builtin");
if ($pref == "builtin"): ?>
<div id="sidebar-upcoming-events">
    <?php foreach($events['nodes'] as $event): ?>
    <div class="sidebar-upcoming-event">
    <h3 class="title"><?php print drupal_render(field_view_field('node',$event,'field_event_date',array('label'=>'hidden'))); ?></h3>
      <p><strong><?php print l($event->title,"node/".$event->nid); ?></strong></p>
      <?php print drupal_render(field_view_field("node",$event,"body",array('label'=>'hidden'))); ?>
    </div>
    <?php if (node_access("update",$event)): ?>
      <p><?php print l("edit","node/".$event->nid."/edit"); ?></p>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
<?php print $events['pager']; ?>
<?php else: ?>
<?php print variable_get("sidebar_events_page",""); ?>
<?php endif; ?>
