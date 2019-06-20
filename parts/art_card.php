<div class="card text-center">
    <a href="<?php the_permalink() ?>">
        <img class="card-img-top" src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/index/posterBackground.jpg" alt="Card image cap">
        <div class="card-body">
            <!-- <p class="date"><span>13</span> мая</p> -->
            <p class="date"><?php echo get_the_date('d-m-Y');?></p>
            <h3 class="card-title"><?php echo the_title();?></h3>
            <p class="place">Киев</p>
        </div>
    </a>
</div>