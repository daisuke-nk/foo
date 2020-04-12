<?php

define('title','SVG一覧');
define('keyword','SVG');
define('discription','SVG一覧だよ');
define('css','');
define('script','');
include($_SERVER['DOCUMENT_ROOT'].'/template/header.php');

?>

<header>
    
    <h1 class="headline">SVG ICON SET{{ title }}</h1>
<script>

    const app = new Vue({
        el: '.headline',
        data: {
            title: 'hogemoge'
        }
    })

    // const app = new Vue({
    //     el: '.headline',
    //     data: {
    //         title: 'Hello World'
    //     }
    // })


</script>

    <?php /* //////////////////////////////////////// 種類選択ボタン //////////////////////////////////////// */?>

    <ul id="js-btn" class="select-btn">
        <li data-type-btn="pin">ピン</li>
        <li data-type-btn="mail">手紙</li>
        <li data-type-btn="build">建物</li>
        <li data-type-btn="vehicle">乗り物</li>
        <li data-type-btn="logo">ロゴ</li>
        <li data-type-btn="tel">電話・モバイル</li>
        <li data-type-btn="arw">矢印</li>
        <li data-type-btn="notepen">ノート・ペン</li>
        <li data-type-btn="clock">時計</li>
        <li data-type-btn="null">未分類</li>
        <li data-type-btn="all">ALL</li>
    </ul>

</header>

<?php /* //////////////////////////////////////// SVG一覧 //////////////////////////////////////// */?>

<div id="js-list" class="list">

    <?php /*ハート：アイコン*/?>
    <div class="list__items" data-type-item="heart">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-heart">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-heart"></use></svg>
    </div>
    <?php /*ライン：ロゴ*/?>
    <div class="list__items" data-type-item="logo">
        <pre><code>&lt;svg>&lt;use xlink:href="#logo-line">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#logo-line"></use></svg>
    </div>
    <?php /*メール：アイコン*/?>
    <div class="list__items" data-type-item="mail">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-mail">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-mail"></use></svg>
    </div>
    <?php /*受話器：アイコン*/?>
    <div class="list__items" data-type-item="tel">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-tel">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-tel"></use></svg>
    </div>
    <?php /*角丸矢印：アイコン*/?>
    <div class="list__items" data-type-item="arw">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-arw">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-arw"></use></svg>
    </div>
    <?php /*店：アイコン*/?>
    <div class="list__items" data-type-item="build">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-shop">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-shop"></use></svg>
    </div>
    <?php /*ピン：アイコン*/?>
    <div class="list__items" data-type-item="pin">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-pin">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-pin"></use></svg>
    </div>
    <?php /*ペン&紙：アイコン*/?>
    <div class="list__items" data-type-item="notepen">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-pen-paper">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-pen-paper"></use></svg>
    </div>
    <?php /* FACEBOOK：ロゴ */?>
    <div class="list__items" data-type-item="logo">
        <pre><code>&lt;svg>&lt;use xlink:href="#logo-facebook">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#logo-facebook"></use></svg>
        <p>色は別々に指定できる</p>
    </div>
    <?php /* FACEBOOK：ロゴ */?>
    <div class="list__items" data-type-item="logo">
        <pre><code>&lt;svg>&lt;use xlink:href="#logo-instagram">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#logo-instagram"></use></svg>
    </div>
    <?php /* メール2：アイコン */?>
    <div class="list__items" data-type-item="mail">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-mail2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-mail2"></use></svg>
    </div>
    <?php /* モバイル：アイコン */?>
    <div class="list__items" data-type-item="tel">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-mobile">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-mobile"></use></svg>
    </div>
    <?php /* 受話器2：アイコン */?>
    <div class="list__items" data-type-item="tel">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-tel2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-tel2"></use></svg>
    </div>
    <?php /* ビル：アイコン */?>
    <div class="list__items" data-type-item="build">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-bill">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-bill"></use></svg>
    </div>
    <?php /* 計算機：アイコン */?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-calc">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-calc"></use></svg>
    </div>
    <?php /*ペン&紙2：アイコン*/?>
    <div class="list__items" data-type-item="notepen">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-pen-paper2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-pen-paper2"></use></svg>
    </div>
    <?php /*工具：アイコン*/?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#id-tool">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#id-tool"></use></svg>
    </div>
    <?php /*家：アイコン*/?>
    <div class="list__items" data-type-item="build">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-home">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-home"></use></svg>
    </div>
    <?php /*フリーダイアル：アイコン*/?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-free-dial">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-free-dial"></use></svg>
    </div>
    <?php /*矢印2：アイコン*/?>
    <div class="list__items" data-type-item="arw">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-arw2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-arw2"></use></svg>
    </div>
    <?php /*時計：アイコン*/?>
    <div class="list__items" data-type-item="clock">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-clock">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-clock"></use></svg>
    </div>
    <?php /* ハート2：アイコン*/?>
    <div class="list__items" data-type-item="heart">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-heart2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-heart2"></use></svg>
    </div>
    <?php /* 時計2：アイコン*/?>
    <div class="list__items" data-type-item="clock">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-clock2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-clock2"></use></svg>
    </div>
    <?php /* ピン2：アイコン*/?>
    <div class="list__items" data-type-item="pin">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-pin2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-pin2"></use></svg>
    </div>
    <?php /* 電車：アイコン*/?>
    <div class="list__items" data-type-item="vehicle">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-train">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-train"></use></svg>
    </div>
    <?php /* 肉球：アイコン*/?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-nikukyu">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-nikukyu"></use></svg>
    </div>
    <?php /* ノートパソコン：アイコン*/?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-note-pc">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-note-pc"></use></svg>
    </div>
    <?php /* 家2：アイコン*/?>
    <div class="list__items" data-type-item="build">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-home2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-home2"></use></svg>
    </div>
    <?php /* ペン：アイコン*/?>
    <div class="list__items" data-type-item="notepen">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-pen">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-pen"></use></svg>
    </div>
    <?php /* カレンダー：アイコン*/?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-calender">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-calender"></use></svg>
    </div>
    <?php /* 矢印3：アイコン*/?>
    <div class="list__items" data-type-item="arw">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-arw3">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-arw3"></use></svg>
    </div>
    <?php /* 入口：アイコン*/?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#in">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#in"></use></svg>
    </div>
    <?php /* 矢印4：アイコン*/?>
    <div class="list__items" data-type-item="arw">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-arw4">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-arw4"></use></svg>
    </div>
    <?php /* 家3：アイコン*/?>
    <div class="list__items" data-type-item="build">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-home3">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-home3"></use></svg>
    </div>
    <?php /* ビル：アイコン */?>
    <div class="list__items" data-type-item="build">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-bill2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-bill2"></use></svg>
    </div>
    <?php /* 葉：アイコン */?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#leaf">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#leaf"></use></svg>
    </div>
    <?php /*メール3：アイコン*/?>
    <div class="list__items" data-type-item="mail">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-mail3">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-mail3"></use></svg>
    </div>
    <?php /*錠前：アイコン*/?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-lock">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-lock"></use></svg>
    </div>
    <?php /* 矢印5：アイコン*/?>
    <div class="list__items" data-type-item="arw">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-arw5">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-arw5"></use></svg>
    </div>
    <?php /* 矢印5：アイコン*/?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-plus">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-plus"></use></svg>
    </div>
    <?php /* 電車2：アイコン*/?>
    <div class="list__items" data-type-item="vehicle">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-train2">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-train2"></use></svg>
    </div>
    <?php /* 人：アイコン*/?>
    <div class="list__items" data-type-item="null">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-human">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-human"></use></svg>
    </div>
    <?php /*メール4：アイコン*/?>
    <div class="list__items" data-type-item="mail">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-mail4">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-mail4"></use></svg>
    </div>
    <?php /*電話4：アイコン*/?>
    <div class="list__items" data-type-item="tel">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-tel3">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-tel3"></use></svg>
    </div>
    <?php /*矢印5：アイコン*/?>
    <div class="list__items" data-type-item="arw">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-arw6">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-arw6"></use></svg>
    </div>
    <?php /*電話4：アイコン*/?>
    <div class="list__items" data-type-item="tel">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-tel4">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-tel4"></use></svg>
    </div>
    <?php /*手紙5：アイコン*/?>
    <div class="list__items" data-type-item="mail">
        <pre><code>&lt;svg>&lt;use xlink:href="#icn-mail5">&lt;/use>&lt;/svg></code></pre>
        <svg><use xlink:href="#icn-mail5"></use></svg>
    </div>

</div>
<div id="output" class="output">
    <pre><code>
&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="display:none">
    &lt;defs></code><div id="target"><code></code></div><code>
    &lt;/defs>
&lt;/svg>
    </code></pre>
</div>

</body>
</html>