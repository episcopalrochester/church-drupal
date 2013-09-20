<?php foreach($articles as $article): ?>
  <div class="news-article">
    <strong><?php print l($article->title,$article->field_article_external_link['und'][0]['url']); ?></strong>
  </div>
<?php endforeach; ?>
