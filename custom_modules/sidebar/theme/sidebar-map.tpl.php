<?php if ($address): ?>
<p><div id="sidebar-church-map" data-map-address="<?php print $address; ?>">&nbsp;</div></p>
<p><?php print str_replace("\n","<br />",$address); ?></p>
<?php endif; ?>
<?php if ($external_url): ?>
  <p style="text-align:center;"><?php print l("&laquo; View larger map &raquo;",$external_url,array('html'=>TRUE,'attributes'=>array('target'=>'_blank'))); ?></p>
<?php endif; ?>
