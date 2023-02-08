<style>

    .post__item--text {
        font-family: Montserrat;
    }
    .post__item--text:not(.big-text) {
        font-size: 25px;
    }

    .big-text {
        font-size: 60px;
        text-transform: uppercase;
    }

    .post__item  p {
        margin-bottom: 20px;
    }

    .left-text, .right-text {
        display: flex;
    }
    .left-text > .container, .right-text > .container {
        width: 50%;
    }
    .left-text {
        justify-content: flex-start;
    }
    .right-text {
        justify-content: flex-end;
    }

</style>

<div class="post__item <?= block_field('simple-text-type')?> post__item--text">
    <div class="container">
        <?= block_field('simple_text_eng')?>
    </div>
</div>