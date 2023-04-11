<?php get_header(); ?>
    <section>
        <div class="page-wrap">
            <div class="section-card">
                <div class="section-headline">
                    <h4 class="section-headline__toptext" >カードをクリックするとネタのお題が出るよ。オンラインで話すときにお役に立ててね。</h2>
                </div>
                <div class="card-wrap__top">
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

                <div class="call_to_action">
                    <a href="http://wp8th-ebetsu-takamatsu.local/top/">
                        <div class="call_to_action__box">
                            <p class="call_to_action__text">カードをシャッフルする</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>






<?php get_footer(); ?>