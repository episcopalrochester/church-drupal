<?php $text = variable_get("sidebar_welcome_text",""); if (!empty($text['value'])): ?>
<?php print $text['value']; ?>
<?php endif; ?>
<?php if ($events && variable_get("sidebar_events_welcome","false") <> "false"): ?>
  <strong>Upcoming Events</strong>
<ul>
    <?php foreach($events['nodes'] as $event): ?>
      <li class="sidebar-event">
        <?php print l($event->title." (".strip_tags(drupal_render(field_view_field('node',$event,'field_event_date',array('label'=>'hidden','settings'=>array('format_type'=>'short'))))).")","node/".$event->nid); ?>
  <?php if (node_access("update",$event)): ?>
      <ul><li><?php print l("edit","node/".$event->nid."/edit"); ?></li></ul>
        <?php endif; ?>
  </li>
      <?php endforeach; ?>
<li><?php print l("More events...","upcoming-events"); ?></li>
</ul>
  <?php endif; ?>

<?php if ($calendars || $newsletters || $letters): ?>
<strong>This Month</strong>
<ul>
  <?php if ($calendars): ?>
  <?php foreach($calendars['nodes'] as $calendar): ?>
  <li class="sidebar-calendar">
  <?php print l(date('F Y',strtotime($calendar->field_calendar_date['und'][0]['value']))." Calendar",file_create_url($calendar->field_calendar_file['und']['0']['uri'])); ?>
  <?php if (node_access("update",$calendar)): ?>
  <ul><li><?php print l("edit","node/".$calendar->nid."/edit"); ?></li></ul>
  <?php endif; ?>
  </li>
  <?php endforeach; ?>
  <?php endif; ?>
  <?php if ($newsletters): ?>
  <?php foreach($newsletters['nodes'] as $newsletter): ?>
  <li class="sidebar-newsletter">
  <?php print l("Newsletter: ".$newsletter->title." (".date('F j, Y',strtotime($newsletter->field_newsletter_date['und'][0]['value'])).")",file_create_url($newsletter->field_newsletter_file['und']['0']['uri'])); ?>
  <?php if (node_access("update",$newsletter)): ?>
  <ul><li><?php print l("edit","node/".$newsletter->nid."/edit"); ?></li></ul>
  <?php endif; ?>
  </li>
  <?php endforeach; ?>
  <?php endif; ?>
  <?php if ($letters): ?>
  <?php foreach($letters['nodes'] as $letter): ?>
  <li class="sidebar-letter">
  <?php print l($letter->title." (".date('F j, Y',strtotime($letter->field_letter_date['und'][0]['value'])).")","node/".$letter->nid); ?>
  <?php if (node_access("update",$letter)): ?>
  <ul><li><?php print l("edit","node/".$letter->nid."/edit"); ?></li></ul>
  <?php endif; ?>
  </li>
  <?php endforeach; ?>
  <?php endif; ?>
</ul>
<?php endif; ?>
<?php if ($bulletins || $announcements || $sermon): ?>
<strong>This Week</strong>
<ul>
  <?php if ($bulletins): ?>
  <?php foreach($bulletins['nodes'] as $bulletin): ?>
  <li class="sidebar-bulletin">
  <?php print l("Bulletin: ".$bulletin->title." (".date('F j, Y',strtotime($bulletin->field_bulletin_date['und'][0]['value'])).")",file_create_url($bulletin->field_bulletin_file['und']['0']['uri'])); ?>
  <?php if (node_access("update",$bulletin)): ?>
  <ul><li><?php print l("edit","node/".$bulletin->nid."/edit"); ?></li></ul>
  <?php endif; ?>
  </li>
  <?php endforeach; ?>
  <?php endif; ?>
  <?php if ($announcements): ?>
  <?php foreach($announcements['nodes'] as $announcement): ?>
  <li class="sidebar-announcement">
  <?php print l("Announcements (".date('F j, Y',strtotime($announcement->field_announcement_date['und'][0]['value'])).")",file_create_url($announcement->field_announcements_file['und']['0']['uri'])); ?>
  <?php if (node_access("update",$announcement)): ?>
  <ul><li><?php print l("edit","node/".$announcement->nid."/edit"); ?></li></ul>
  <?php endif; ?>
  </li>
  <?php endforeach; ?>
  <?php endif; ?>
  <?php if ($sermon): ?>
  <?php foreach($sermon['nodes'] as $sermon): ?>
  <li class="sidebar-sermon">
  <?php print l("Sermon: ".$sermon->title." (".date('F j, Y',$sermon->field_sermon_date['und'][0]['value']).")","node/".$sermon->nid); ?>
  <?php if (node_access("update",$sermon)): ?>
  <ul><li><?php print l("edit","node/".$sermon->nid."/edit"); ?></li></ul>
  <?php endif; ?>
  </li>
  <?php endforeach; ?>
  <?php endif; ?>
</ul>
<?php endif; ?>
