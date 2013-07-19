<div id="sidebar-upcoming-events">
  <?php foreach ($events as $event): ?>
    <div class="sidebar-upcoming-event">
      <?php print str_replace("<br /><br />","<br />",$event->body['und'][0]['value']); ?>
    </div>
  <?php endforeach; ?>
</div>
