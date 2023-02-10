<style>
.is-root-container > * {
        margin: 2% 0 !important;
        max-width: unset;
    }
.credits:not(.credits--terminal) .credits__inner-title>b {
    display: block;
    width: fit-content;
}
.credits.credits--terminal .credits__item {
    width: 100%;
    
}
.credits.credits--terminal .credits__item:first-child {
    margin-bottom: 1.9%;
}
.credits.credits--terminal .credits__item .credits__container {
    border:0;
    
}
.credits.credits--terminal .credits__container{
    color:silver;
    background-color:black;
    /* padding: 2.7vw 1.6vw; */
}
.credits.credits--terminal .credits__inner-title>span {
    display: block;
    width: fit-content;
}


.credits__item:first-child .credits__inner-title > *:first-child {
    margin-bottom: 35px;
}
.credits--terminal .credits__inner-title > span{
    color:lime;
}

.credits__container > p {
    font-family: Montserrat;
    font-size: 20px;
}

.credits__inner-title > span {
    font-size: 20px;
    font-family: AndaleMono;
}
.credits__container > *:not(p:last-child) {
    margin-bottom: 15px;
}

.credits__container > p:last-child{
    padding-bottom: 2.7vw;
}
.credits--terminal .credits__inner-title u, 
.credits.credits--terminal .credits__container{
    color: silver;
    text-decoration: none;
}
.credits--terminal .credits__inner-title i {
    color:cornflowerblue;
}
@media screen and (max-width: 830px) {

}
</style>
<div class="credits post__item credits--terminal">
        <div class="credits__item">
            <div class="credits__container">
                <div class="credits__inner-title">
                    <span><?= block_field('client_title_eng'); ?></span>
                    <span><?= block_field('agency_title_eng'); ?></span>
                </div>
                <?= block_field('text_area_client_agency_eng'); ?>
            </div>
        </div>
        <div class="credits__item">
            <div class="credits__container">
                <div class="credits__inner-title">
                <span><?= block_field('production_title_eng'); ?></span>
                </div>
                <?= block_field('text_area_production_eng'); ?>
            </div>
        </div>
    </div>