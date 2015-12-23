<?php
  foreach($posts as $post)
  {  ?>
    <div class="posts">
        <p class = 'post'><?= $post['post'] ?></p>
        <p class = 'time'>wrote at: <?= $post['created_at'] ?></p>
    </div>
<?php
  }  ?>