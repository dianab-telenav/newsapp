<h2><?php echo $title; ?></h2>
<?php $index=1; ?>
<?php foreach ($news as $news_item): ?>

    <h3><?php echo $index++.'. '.$news_item['title']; ?></h3>
    <div class="main">
        <?php echo $news_item['text']; ?>
    </div>
    <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
</br></br>
<?php endforeach; ?>
