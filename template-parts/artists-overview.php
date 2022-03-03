<aside class="artists-overview">
   <div class="layout-inner">
   <?php
   $posts = get_posts(array('post_type' => 'rebeldes_artists',
                            'numberposts' => -1,
                            'orderby' => 'menu_order',
                            'order' => 'ASC')); ?>

<ul>
<?php
foreach ($posts as $post): ?>
<li><a href="<?php the_permalink() ?>"><?php the_title($post->post_ID) ?></a><span class="artists-overview-sep">*</span></li>
   <?php
   endforeach;
   ?>

   <?php
   $query2 = get_posts( array('post_type' => 'rebeldes_curators',
                              'orderby' => 'menu_order',
                              'order' => 'ASC') );
   ?>
   <br>
   <?php
   foreach ($query2 as $post): ?>
       <li><a href="<?php the_permalink() ?>"><?php the_title($post->post_ID) ?></a><span class="artists-overview-sep">*</span></li>
   <?php
   endforeach;
   ?>

</ul>


</div>
</aside>
