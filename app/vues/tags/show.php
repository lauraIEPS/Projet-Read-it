<?php
/*
    ./app/vues/tags/show.php
*/
?>

<div class="tagcloud">
  <?php foreach ($tags as $tag): ?>
    <a href="#" class="tag-cloud-link"><?php echo $tag['name']; ?></a>
  <?php endforeach; ?>
</div>
