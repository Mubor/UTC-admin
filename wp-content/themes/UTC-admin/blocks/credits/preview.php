<style>

.credits.credits--border-flex, 
.credits.credits--flex{
    display: flex;
    flex-direction: row-reverse;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.credits:not(.credits--terminal) .credits__inner-title>b {
    display: block;
    width: fit-content;
}
.credits.credits--border-fullwidth  .credits__item:first-child,
.credits.credits--fullwidth .credits__item:first-child {
    margin-bottom: 3.4%;   
}

.credits.credits--border-fullwidth .credits__item{
    width: 100%;
}

.credits.credits--fullwidth .credits__item {
    width: 100%;
   
}
.credits.credits--fullwidth .credits__item .credits__container {
    border:0;
}

.credits.credits--flex .credits__item .credits__container {
    border:0;
}

.credits.credits--flex .credits__item {
    width: 49.2%;
}
.credits.credits--flex .credits__item {
    width: 100%;
}
.credits.credits--flex .credits__item:first-child {
    margin-bottom: 1.9%;
}

.credits__container {
    border: 2px solid black;
    padding: 2.7vw 1.6vw 0;
}
.credits__item{
    width: 49.2%;
}

.credits__item:first-child .credits__inner-title > *:first-child {
    margin-bottom: 35px;
}
.credits__container > p {
    font-family: Montserrat;
    font-size: 20px;
}

.credits__inner-title > b {
    font-size: 20px;
    background-color:lime;
}
/* .credits__inner-title > span {
    font-size: 3.3vw;
    font-family: AndaleMono;
} */
.credits__container > *:not(p:last-child) {
    margin-bottom: 15px;
}
.credits__container > p:last-child{
    margin-bottom: 15px;
}

@media screen and (max-width: 830px) {
    
}
</style>
<!-- <?php
// if (file_exists("../../translating.php"))
include_once(dirname(__FILE__) . '/../../translating.php');

?>   -->
    <div class="credits post__item <?php block_field('credits_select');?>">
        <div class="credits__item">
            <div class="credits__container">
                <div class="credits__inner-title">
                    <b><?= block_field('client_title_eng'); ?></b>
                    <b><?= block_field('agency_title_eng'); ?></b>
                </div>
                <?= block_field('text_area_client_agency_eng'); ?>
            </div>
        </div>
        <div class="credits__item">
            <div class="credits__container">
                <div class="credits__inner-title">
                    <b><?= block_field('production_title_eng'); ?></b>
                </div>
                <?= block_field('text_area_production_eng'); ?>
            </div>
        </div>
    </div>