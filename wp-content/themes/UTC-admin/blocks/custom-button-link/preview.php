<style>
.btn {
    display: block;
    margin: 0 auto;
    padding: .7% 1.4%;
    width: fit-content;
    font-size: 3.333vw;
    background: #C3C3C3;
    box-shadow: inset -2px -2px 0px #262626, inset 2px 2px 0px #F0F0F0, inset -4px -4px 0px #7E7E7E;
    text-decoration: none;
    color:black;
}
.btn:hover{
    color:black;
    background-color: #838383;
    box-shadow: inset 2px 2px 2px 0 black;
    transition: all .3s;
}
@media screen and (max-width: 830px) {
    .btn {
        margin: 0 auto;
        padding: 2.5% 5%;
        font-size: 8.533vw;
    }
}

</style>

<a class="btn" href="<?php block_field('button_link');?>"><?php block_field('button-eng');?></a>