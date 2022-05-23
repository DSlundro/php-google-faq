<?php 
include 'faqs.php';
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

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php foreach ($faqs as $faq) : ?>
                    <h2><?=$faq['question']?></h2>
                    
                <?php endforeach?>
            </div>
        </div>
    </div>
</body>
</html>