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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                            <div class="position-relative">
                                <img class="card-img-top p-3" src="<?= $product->image ?>" alt="<?= $product->name ?>">
                                <?php if ($product->category === 'gatto') { ?>
                                    <i class="fas fa-cat position-absolute top-0 end-0 p-2"></i>
                                <?php } elseif ($product->category === 'cane') { ?>
                                    <i class="fas fa-dog position-absolute top-0 end-0 p-2"></i>
                                <?php } ?>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center pb-3">
                                    <p class="fs-4 m-0"><?= $product->name ?></p>
                                    <?php if ($product instanceof accessory && $product->color) { ?>
                                        <p class="<?= $product->color ?> color-circle m-0"></p>
                                    <?php } ?>
                                </div>
                                <p><?= $product->brand ?></p>
                                <p><?= $product->price ?>€</p>
                                <?php if ($product instanceof food && $product->expirationDate && $product->weight) { ?>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-secondary small"><?= $product->expirationDate ?></p>
                                        <p class="text-secondary small"><?= $product->weight ?> gr</p>
                                    </div>
                                <?php } ?>
                                <?php if($product instanceof Accessory && $product->material){?>
                                    <p><?= $product->material ?></p>
                                <?php } ?>
                                <span>made in:</span>
                                <img class="ah-logo" src="<?php echo $product->getFlag() ?>" alt="<?= $product->name ?>">
                                

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>



</html>