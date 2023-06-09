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
                <?php $omote = "omote__blue"; ?>
                <?php $morebtn = "morebtn-box__blue"; ?>

                <?php query_posts(array('orderby' => 'rand', 'showposts' => 8));
                    if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
            
                    <div class="card csize backboard">
                        <input id="tg0<?= $count_card?>" style="display: none;" type="checkbox" />
                        <label id="omote" class="fuda csize omote <?= $omote?>" for="tg0<?= $count_card?>">
                            <div class="omote-content">
                                <div class="omote-content__title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="morebtn">
                                    <div class="morebtn-box <?= $morebtn?>" for="tg0<?= $count_card?>">
                                        <a href="<?php the_permalink() ?>">
                                            <p class="morebtn__text">例を見てみる</p>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </label>
                        <label id=<?= $card_face ?> class="fuda csize" for="tg0<?= $count_card?>"></label>
                    </div>
                    <?php $count_card+=1; ?>
                    <?php if($card_face == "ura__blue"){
                        $card_face = "ura__brown";
                        $omote = "omote__brown";
                        $morebtn = "morebtn-box__brown";
                    }else{
                        $card_face = "ura__blue";
                        $omote = "omote__blue";
                        $morebtn = "morebtn-box__blue";
                    }; ?>

                    <?php endwhile; endif; ?>

                </div>

                <div class="shuffle">
                    <a href="/">
                        <div class="shuffle__box">
                            <p class="shuffle__text">カードを配りなおす</p>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>






<?php get_footer(); ?>