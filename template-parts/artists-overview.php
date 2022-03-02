<aside class="artists-overview">
   <div class="layout-inner">
   <?php
   $posts = get_posts(array('post_type' => 'rebeldes_artists',
                            'num_posts' => 999)); ?>

<ul>
<?php
foreach ($posts as $post): ?>
<li><a href="<?php the_permalink() ?>"><?php the_title($post->post_ID) ?></a><span class="artists-overview-sep">*</span></li>
   <?php
   endforeach;
?>
</ul>
</div>
</aside>
