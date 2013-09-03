<?php $max = count($highlights); $count = 0; ?>
<?php while ($count < $max): ?>
  <?php if ($count % 2 == 0): ?>
    <div class="row">
  <?php endif; ?>
  <div class="span4 highlight <?php if ($count % 2 == 0):
      print "left";
    else:
      print "right";
    endif; ?>">
    <div class="highlight-inner">
      <div class="highlight-image-container">
        <?php $link = intval($highlights[$count]['link']); 
        if ($link): ?>
          <a href="<?php print url("node/".$link); ?>">
        <?php endif; ?>
        <?php print $highlights[$count]['image']; ?>
        <?php if ($link): ?>
          </a>
        <?php endif; ?>
      </div>
      <h2><?php if ($link): ?>
        <a href="<?php print url("node/".$link); ?>">
      <?php endif; ?><?php print $highlights[$count]['title']; ?></h2>
      <?php if ($link): ?>
        </a>
      <?php endif; ?>
      <?php print check_markup($highlights[$count]['description']['value'],'full_html'); ?>
      <?php if ($link): ?>
        <a href="<?php print url("node/".$link); ?>">Read more &raquo;</a>
      <?php endif; ?>
    </div>
  </div>
  <?php if ($count % 2 <> 0): ?>
    </div>
  <?php endif; ?>
  <?php $count++; ?>
<?php endwhile; ?>
