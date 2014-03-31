<?php foreach($articles as $article): ?>
    <div class="news-article row">
      <?php if (isset($article->field_image['und'][0])): ?>
        <div class="news-photo span2">
        <?php print l(theme_image(array('path'=>$article->field_image['und'][0]['uri'],'attributes'=>array())),'node/'.$article->nid,array('html'=>TRUE)); ?>
        </div>
      <?php endif; ?>
<div class="span5">
      <h3><?php print l($article->title,"node/".$article->nid); ?></h3>
      <?php if (isset($article->field_news_attached_pdf['und'][0])): ?>
        <?php print render(field_view_field('node',
        $article,'field_news_attached_pdf',array('label'=>'inline'))); ?>
      <?php endif; ?>
      <?php if (!empty($article->body['und'][0]['summary'])): ?>
              <p><?php print $article->body['und'][0]['summary']; ?></p>
                    <?php else: ?>
                          <?php print text_summary($article->body['und'][0]['value'],NULL,400); ?>
      <?php endif; ?>
      <p><?php print l("Read more &raquo;","node/".$article->nid,array('html'=>TRUE)); ?></p>
    </div>
</div>
<?php endforeach; ?>
