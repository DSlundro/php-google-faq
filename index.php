<?php 
include './assets/php/faqs.php';
include './assets/php/navbar.php';
include './assets/php/footerMenu.php';
?>
<! doctype html>
<html lang='en'>
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS v5.1.3 -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' 
    integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <div class="bg-white">
            <div class="row m-0">

                <div class="col-12 d-flex align-items-center pt-3 pb-2">
                    <div class="header-img">
                        <img src="./assets/img/logo.png" alt="">
                    </div>
                    <div class="header-text">
                        <p class="fs-3 m-0 pb-2">Privacy & Termini</p>
                    </div>
                </div>

                <div class="class-12">
                    <navbar>
                        <ul class="d-flex gap-5 m-0">
                            <?php foreach ($navbar as $bar) :?>
                                <li class="pb-3"><?=$bar?></li>
                            <?php endforeach?>
                        </ul>
                    </navbar>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container bg-white">
            <div class="row">
                <div class="col-12 px-5">
                    <?php foreach ($faqs as $faq) : ?>
                        <h3 class="pt-5 pb-1"><?=$faq['question']?></h3>
                        <?php foreach ($faq['answer'] as $faqA) :?>
                            <p class="py-1"><?=$faqA?></p>
                        <?php endforeach?>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="bg-white">
            <div class="row m-0 py-3">
                <div class="col-12">
                    <ul class="d-flex gap-5 m-0">
                        <?php foreach ($footerMenu as $list) :?>
                            <li><?=$list?></li>
                        <?php endforeach?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>