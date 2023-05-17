<?php
include __DIR__ . '/database/db.php'; 
?>

<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/utility.js"></script>
        <link rel="stylesheet" href="./css/style.css">
    <title>esercizio</title>
</head>



<body>    
<div class="bg-dark">
        <div class="container">
        <h1 class="text-white text-center text-uppercase p-5 fw-3">Animal Shop</h1>
            <div class="row justify-content-center">
                <?php foreach ($products as $product) { ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="<?= $product->image ?>" alt="<?= $product->name ?>">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="fs-4"><?= "$product->name" ?></p>
                                </div>
                                
                                <p><?php echo "$product->price" ?>€</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>   
</body>

</html>