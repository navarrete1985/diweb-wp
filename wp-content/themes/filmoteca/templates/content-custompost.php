<!-- Single Event Area -->
<div class="col-12 col-md-12 col-lg-6 d-flex flex-column">
    <div class="single-event-area mb-30 d-flex flex-column h-100">
        <div class="event-thumbnail">
            <div class="img bg-img pb-100" style="background-image: url(<?= get_the_post_thumbnail_url() ?>);"></div>
            <!--<img src="/img/bg-img/b1.jpg" alt="">-->
            <!-- Album Price -->
            <div class="album-price">
                <div class="stars custom-post-stars">
                   <?php $rating = get_post_meta($post->ID, 'review_rating', true) ?>
                   <input class="cp-star star-5" id="star-5" type="radio" <?= $rating == 5 ? 'checked' : '' ?> value='5'/>
                   <label class="cp-star star-5" for="star-5"></label>
                   <input class="cp-star star-4" id="star-4" type="radio" <?= $rating == 4 ? 'checked' : '' ?> value='4'/>
                   <label class="cp-star star-4" for="star-4"></label>
                   <input class="cp-star star-3" id="star-3" type="radio" <?= $rating == 3 ? 'checked' : '' ?> value='3'/>
                   <label class="cp-star star-3" for="star-3"></label>
                   <input class="cp-star star-2" id="star-2" type="radio" <?= $rating == 2 ? 'checked' : '' ?> value='2'/>
                   <label class="cp-star star-2" for="star-2"></label>
                   <input class="cp-star star-1" id="star-1" type="radio" <?= $rating == 1 ? 'checked' : '' ?> value='1'/>
                   <label class="cp-star star-1" for="star-1"></label>
                </div>
            </div>
        </div>
        <div class="event-text h-100 d-flex flex-column">
            <h4><?= the_title() ?></h4>
            <div class="event-meta-data">
                <a href="#" class="event-place"><?= get_the_author() ?></a>
                <a href="#" class="event-date"><?= get_the_date() ?></a>
            </div>
            <p>
                <?= get_the_excerpt() ?>
            </p>
            <a href="<?= get_the_permalink() ?>" class="btn see-more-btn to-end">Ver Review</a>
        </div>
    </div>
</div>

