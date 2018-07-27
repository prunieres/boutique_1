<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Produit</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
    $product_id = $_GET['produit'];
    $dbh = new PDO('mysql:host=localhost;dbname=boutique_2', 'admin', 'plop');
    $product = $dbh->query('SELECT * from produit where id='.$product_id)->fetch();

    ?>
    <div class="container-fluid p-0">
    <?php require 'header.php'; ?>

        <main>
            <h2>Produits n°</h2>

        <article class="m-5">
                    <div class="col-md-6 col-sm-12">
                        <div class="media m-3">
                            <img class="mr-3 thumb" src="<?php echo($product['thumb']); ?>" alt="from">
                            <div class="media-body">
                                <h3 class="mt-0"><?php echo($product['name']); ?></h3>
                                <p>
                                    <?php echo($product['description']); ?>
                                </p>
                                <span class="price"><?php echo($product['price']); ?>€</span>
                                <span class="quantity">Il reste <?php echo($product['price']); ?>produits!</span>
                            </div>
                        </div>
                    </div>
                </article>

        </main>

        <?php require 'footer.php'; ?>
    </div>
    <!-- container -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/get_params.js"></script>

</body>

</html>
