<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Catalogue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <?php
    $dbh = new PDO('mysql:host=localhost;dbname=boutique_2', 'admin', 'plop');
    $products = $dbh->query('SELECT * from produit');

    ?>
    <!-- container-fluid p-0 -->
    <div class="container-fluid p-0">
    <?php require 'header.php'; ?>

        <!-- filtres -->
        <div id="filter">
            <div class="row">
                <div class="col-md-4">
                    <h3>Filtrez votre recherche</h3>
                    <div class="col-md-8">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Trier par : </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Prix décroissants</a>
                                <a class="dropdown-item" href="#">Marque</a>
                                <a class="dropdown-item" href="#">Popularité</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- filter -->

        <main>
            <h2>Nos produits</h2>
            <?php foreach ($products as $product) {
        ?>
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
                                <a class="btn-danger"href="product.php?produit=<?php echo $product['id'] ?>">VOIR PLUS</a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php
    } ?>
        </main>

        <?php require 'footer.php'; ?>

    </div>
    <!-- container-fluid p-0 -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/catalog_x10.js"></script>
    <script src="js/get_params.js"></script>
    <script src="js/catalog.js"></script>
</body>

</html>
