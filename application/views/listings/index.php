<h2><?php echo $title?></h2>
<?php foreach($listings as $listing): ?>
<h3><?php echo $listing['title']; ?></h3>
<p>
    <?php echo $listing['description']; ?>
</p>
<?php endforeach ?>


