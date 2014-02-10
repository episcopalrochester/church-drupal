<?php $text = variable_get("sidebar_welcome_text","");
if (!empty($text['value'])): ?>
<?php print $text['value']; ?>
<?php endif; ?>
<?php if ($calendars): ?>
<strong>Calendars</strong>
<ul id="sidebar-calendars">
    <?php $date = false; foreach($calendars['nodes'] as $calendar): ?>
    <li class="sidebar-calendar">
      <?php print l(date('F Y',strtotime($calendar->field_calendar_date['und'][0]['value']))." Calendar",file_create_url($calendar->field_calendar_file['und']['0']['uri'])); ?>
    <?php if (node_access("update",$calendar)): ?>
      <ul><li><?php print l("edit","node/".$calendar->nid."/edit"); ?></li></ul>
    <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
<?php if ($bulletin): ?>
<strong>Bulletin</strong>
<ul id="sidebar-bulletins">
    <?php $date = false; foreach($bulletin['nodes'] as $bulletin): ?>
    <li class="sidebar-bulletin">
      <?php print l($bulletin->title." (".date('F j, Y',strtotime($bulletin->field_bulletin_date['und'][0]['value'])).")",file_create_url($bulletin->field_bulletin_file['und']['0']['uri'])); ?>
    <?php if (node_access("update",$bulletin)): ?>
      <ul><li><?php print l("edit","node/".$bulletin->nid."/edit"); ?></li></ul>
    <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
<?php if ($newsletters): ?>
<strong>Newsletter</strong>
<ul id="sidebar-newsletters">
    <?php $date = false; foreach($newsletters['nodes'] as $newsletter): ?>
    <li class="sidebar-newsletter">
      <?php print l($newsletter->title." (".date('F j, Y',strtotime($newsletter->field_newsletter_date['und'][0]['value'])).")",file_create_url($newsletter->field_newsletter_file['und']['0']['uri'])); ?>
    <?php if (node_access("update",$newsletter)): ?>
      <ul><li><?php print l("edit","node/".$newsletter->nid."/edit"); ?></li></ul>
    <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>

<?php if ($sermon): ?>
<strong>Sermon</strong>
<ul id="sidebar-sermons">
    <?php $date = false; foreach($sermon['nodes'] as $sermon): ?>
    <li class="sidebar-sermon">
      <?php print l($sermon->title." (".date('F j, Y',$sermon->field_sermon_date['und'][0]['value']).")","node/".$sermon->nid); ?>
    <?php if (node_access("update",$sermon)): ?>
      <ul><li><?php print l("edit","node/".$sermon->nid."/edit"); ?></li></ul>
    <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>

<?php if ($letters): ?>
<strong>Letter from the Priest</strong>
<ul id="sidebar-letters">
    <?php $date = false; foreach($letters['nodes'] as $letter): ?>
    <li class="sidebar-letter">
      <?php print l($letter->title." (".date('F j, Y',strtotime($letter->field_letter_date['und'][0]['value'])).")","node/".$letter->nid); ?>
    <?php if (node_access("update",$letter)): ?>
      <ul><li><?php print l("edit","node/".$letter->nid."/edit"); ?></li></ul>
    <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
