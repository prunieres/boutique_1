<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Panier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!-- container-fluid -->
    <div class="container-fluid p-0">
        <header>
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-md-12">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="index.html">Logo</a>
                        <img src="img/wolf.png" width="30" height="30" alt="logo" />
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <!--Catégorie1 -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégorie1</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Sous-catégorie1</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie2</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie4</a>
                                    </div>
                                </li>
                                <!-- Catégorie1 -->
                                <!--Catégorie2 -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégorie2</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Sous-catégorie1</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie2</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie4</a>
                                    </div>
                                </li>
                                <!-- Catégorie2 -->
                                <!--Catégorie3 -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégorie3</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Sous-catégorie1</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie2</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie4</a>
                                    </div>
                                </li>
                                <!-- Catégorie3 -->
                                <!--Catégorie4 -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégorie4</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Sous-catégorie1</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie2</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Sous-catégorie4</a>
                                    </div>
                                </li>
                                <!-- Catégorie4 -->
                            </ul>
                            <!-- search -->
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control" type="search" placeholder="Rechercher " aria-label="Search">
                                <button class="btn btn-light my-2 my-sm-0" type="submit"><span><i class="fas fa-search"></i></span></button>
                            </form>
                            <!-- search -->
                            <!-- user -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <!-- <i class="fas fa-user nav-link"></i> -->
                                    <a class="nav-link" href="#">Log/Sign</a>
                                </li>
                                <li class="nav-item">
                                    <!-- <i class="fas fa-shopping-cart nav-link"></i> -->
                                    <a class="nav-link" href="#">Panier</a>
                                </li>
                                <li class="nav-item">
                                    <i class="fab fa-twitter nav-link"></i>
                                    <i class="fab fa-facebook-f nav-link"></i>
                                    <i class="fab fa-google-plus-g nav-link"></i>
                                </li>
                            </ul>
                            <!-- user -->
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
                <!-- col -->
            </div>
        </header>

        <main>
            <div class="container">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive" /></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">Product 1</h4>
                                        <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$1.99</td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control text-center" value="1">
                            </td>
                            <td data-th="Subtotal" class="text-center">1.99</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center"><strong>Total 1.99</strong></td>
                        </tr>
                        <tr>
                            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                            <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <footer class="bg-secondary">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-white">
                        <a href="#">tempor incididunt</a><a href="#">tempor incididunt</a><a href="#">tempor incididunt</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <!-- container-fluid -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
