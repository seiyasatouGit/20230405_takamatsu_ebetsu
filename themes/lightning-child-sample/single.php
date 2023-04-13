<?php get_header(); ?>
    <section class="row">
        <div class="page-wrap col-12">
            <div class="section-card">
                <div class="section-headline">
                    <h2 class="section-headline__text" ><?php the_title(); ?></h2>
                </div>
                <div class="card-wrap">
                    <article class="card-outside card-outside__ebetsu">
                        <div class="card-imginfo card-imginfo__ebetsu">
                            <div class="card-title">
                                <h4 class="card-title__text"> 江別市</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-content__box">
                                    <img src="<?php the_field('ebetsu_img'); ?>" alt="">
                                </div>
                                <p class="card-content__text">
                                    <?php the_field('ebetsu_text'); ?>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="card-outside card-outside__takamatsu">
                        <div class="card-imginfo card-imginfo__takamatsu">
                            <div class="card-title">
                                <h4 class="card-title__text">高松市</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-content__box">
                                    <img src="<?php the_field('takamatsu_img'); ?>" alt="">
                                </div>
                                <p class="card-content__text">
                                    <?php the_field('takamatsu_text'); ?>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="call_to_action">
                    <a href="http://wp8th-ebetsu-takamatsu.local/top">
                        <div class="call_to_action__box">
                            <p class="call_to_action__text">TOPに戻る</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
