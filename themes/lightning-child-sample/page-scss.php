<?php get_header(); ?>

    <p>scssのテスト</p>



<section>
    <div class="page-wrap">
        <div class="section-course">
            <div>
                <h2 class="section-headline" >コース一覧</h2>
            </div>
            <div class="course-wrap">
                <article class="shadow radius">
                    <div class="course-imginfo">
                        <div class="course-box">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sanukibeer.jpg" alt="" class="course-box__img">
                        </div>
                        <div class="course-content">
                            <h4 class="course-content__title">タイトルが入ります</h4>
                            <p class="course-content__text">
                                コースの紹介文が入ります。コースの紹介文が入ります。
                                コースの紹介文が入ります。コースの紹介文が入ります。
                                コースの紹介文が入ります。コースの紹介文が入ります。
                                <!-- コースの紹介文が入ります。コースの紹介文が入ります。 -->
                            </p>
                        </div>
                    </div>
                </article>

                <article class="shadow radius">
                    <div class="course-imginfo">
                        <div class="course-box">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sanukibeer.jpg" alt="" class="course-box__img">
                        </div>
                        <div class="course-content">
                            <h4 class="course-content__title">タイトルが入ります</h4>
                            <p class="course-content__text">
                                コースの紹介文が入ります。コースの紹介文が入ります。
                                コースの紹介文が入ります。コースの紹介文が入ります。
                                <!-- コースの紹介文が入ります。コースの紹介文が入ります。
                                コースの紹介文が入ります。コースの紹介文が入ります。 -->
                            </p>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>