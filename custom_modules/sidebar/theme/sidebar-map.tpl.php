<p><div id="sidebar-church-map" data-map-address="<?php print $address; ?>">&nbsp;</div></p>
<p><?php print str_replace("\n","<br />",$address); ?></p>
<?php if ($external_url): ?>
<p><?php print l("View larger map &raquo;",$external_url,array('html'=>TRUE,'attributes'=>array('target'=>'_blank'))); ?></p>
<?php endif; ?>
