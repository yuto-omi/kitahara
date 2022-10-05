<?php
/*Template Name: top*/
?>

<?php get_header() ?>

<section class="cont1">
    <div class="cont1__text">
        患者さんの笑顔のために<br>
        安心と安全の町の歯医者さん。
    </div>
    <figure class="cont1__time"><?php echo img("top", "time-table", "svg", null, "営業時間表") ?></figure>
    <figure class="circle__logo"><?php echo img("top", "circle-logo", "svg", null, "ロゴ") ?></figure>
</section>

<section class="cont2">
    <div class="wrap-1080 wrap">
        <h2 class="cont2__treatment">
            <span>TREATMENT</span>
            お悩みからさがす
        </h2>
        <ul>
            <li>
                <a href="">
                    <figure><?php echo img("top", "cont2-1", "svg", null, "歯周病") ?></figure>
                    <div>歯周病かもしれない</div>
                </a>
            </li>
            <li>
                <a href="">
                    <figure><?php echo img("top", "cont2-2", "svg", null, "予防") ?></figure>
                    <div>予防をしたい</div>
                </a>
            </li>
            <li>
                <a href="">
                    <figure><?php echo img("top", "cont2-3", "svg", null, "虫歯") ?></figure>
                    <div>虫歯がないか心配</div>
                </a>
            </li>
            <li>
                <a href="">
                    <figure><?php echo img("top", "cont2-4", "svg", null, "歯が抜けた") ?></figure>
                    <div>歯が抜けた</div>
                </a>
            </li>
            <li>
                <a href="">
                    <figure><?php echo img("top", "cont2-5", "svg", null, "口臭") ?></figure>
                    <div>口臭が気になる</div>
                </a>
            </li>
            <li>
                <a href="">
                    <figure><?php echo img("top", "cont2-6", "svg", null, "歯並び") ?></figure>
                    <div>歯並びを直したい</div>
                </a>
            </li>
            <li>
                <a href="">
                    <figure><?php echo img("top", "cont2-7", "svg", null, "詰め物") ?></figure>
                    <div>詰め物がとれた</div>
                </a>
            </li>
            <li>
                <a href="">
                    <figure><?php echo img("top", "cont2-8", "svg", null, "親知らず") ?></figure>
                    <div>親知らずが気になる</div>
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="cont3">
    <div class="wrap-1280">
        <figure class="logo"><?php echo img("top", "circle-logo-green", "svg", null, "ロゴ") ?></figure>
        <h2>
            <span>ABOUT</span>
            当院について
        </h2>
        <div class="cont3__flex">
            <figure><?php echo img("top", "cont3-img", "webp", null, "治療中風景") ?></figure>
            <div>

                きたはら歯科は<br>
                最先端の技術と、安心できる施術を
                大切にした町の歯医者さんです。
                <p><a href="">MORE</a></p>
            </div>
        </div>
        <ul class="cont3__list">
            <li><a href="">理事長あいさつ・医院の想い</a></li>
            <li><a href="">スタッフ紹介</a></li>
            <li><a href="">治療方針</a></li>
            <li><a href="">感染予防対策について</a></li>
            <li><a href="">医院案内・設備・導入アプリ</a></li>
            <li><a href="">アクセス</a></li>
        </ul>
    </div>
</section>

<?php get_footer(); ?>