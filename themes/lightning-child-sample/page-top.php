<?php get_header(); ?>
    <section class="row">
        <div class="page-wrap col-12">
            <div class="section-card">
                <div class="card-wrap__top">

                    <div class="section-topheadline">
                        <h4 class="section-topheadline__text" >カードをクリックするとネタのお題が出るよ。オンラインで話すときにお役に立ててね。</h2>
                    </div>

                <?php $count_card = 1; ?>
                <?php $card_face = "ura__blue"; ?>
                <?php query_posts(array('orderby' => 'rand', 'showposts' => 8));
                    if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
            
                    <div class="card csize">
                        <input id="tg0<?= $count_card?>" style="display: none;" type="checkbox" />
                        <label id="omote" class="fuda csize omote" for="tg0<?= $count_card?>"><?php the_title(); ?>
                        <a class="more_button" href="<?php the_permalink() ?>">詳しく見る</a></label>
                        <label id=<?= $card_face ?> class="fuda csize" for="tg0<?= $count_card?>"></label>
                    </div>
                    <?php $count_card+=1; ?>
                    <!-- <?php if($card_face == "ura__blue"){
                        $card_face = "ura__brown";
                    }else{
                        $card_face = "ura__blue";
                    }; ?> -->

                    <?php endwhile; endif; ?>
                   

                </div>

                <div class="shuffle">
                    <a href="http://wp8th-ebetsu-takamatsu.local/top">
                        <div class="shuffle__box">
                            <p class="shuffle__text">カードを配りなおす</p>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>






<?php get_footer(); ?>