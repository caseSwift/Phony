<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'/>
    <link href="/css/style.css" rel="stylesheet">
    <title>Phony</title>
    <style>
        .navbar {
            opacity: 0.7;
        }

        .navbar-nav li a {
            font-weight: bold;
        }

        .navbar-brand {
            font-weight: bold;
            text-align: center;
        }

        .navbar-nav li a:hover {
            color: #0d6efd !important;
            border-bottom: solid 2px #0d6efd;
        }
    </style>
</head>

<body>
<div>
    <Section>
        <nav class="navbar fixed-top navbar-expand-md bg-light navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.php"><h1>PHONY</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="products.php"><i
                                        class="fas fa-mobile-alt mr-2"></i>Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item"
                                                                                                           class="badge badge-danger"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </Section>

    <section>
        <div class="jumbotron jumbotron-fluid section_divider text-center">
            <div class="container-fluid">
                <h1 class="title display-4 mt-5">Phony on SALE</h1>
            </div>
        </div>
    </section>

    <br>

    <section id='phones-on-sale' class="mb-5">
        <div class="container">


            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                include 'connection.php';
                $stmt = $con->prepare("SELECT* FROM product");
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) :
                    ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card- text-center"><?= $row['product_name'] ?></h5>
                                <img src=<?= $row['product_image'] ?> class="card-img-top" alt="...">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Price:
                                        £ <?= number_format($row['product_price']) ?></li>
                                    <li class="list-group-item">
                                        Mileage: <?= number_format($row['product_capacity']) ?></li>
                                    <li class="list-group-item">Fuel type: <?= $row['product_model'] ?> </li>
                                    <li class="list-group-item">Color: <?= $row['product_color'] ?></li>
                                </ul>
                            </div>

                            <div class="card-footer p-1">
                                <form action="" class="form-submit">
                                    <div class="row p-2">
                                        <div class="col-md-6 py-1 pl-4">
                                            <b>Quantity : </b>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control pqty"
                                                   value="<?= $row['product_qty'] ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                    <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                    <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                                    <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                    <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                    <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add
                                        to
                                        cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

<script type="text/javascript">
    $(document).ready(function () {

        // Send product details in the server
        $(".addItemBtn").click(function (e) {
            e.preventDefault();
            var $form = $(this).closest(".form-submit");
            var pid = $form.find(".pid").val();
            var pname = $form.find(".pname").val();
            var pprice = $form.find(".pprice").val();
            var pimage = $form.find(".pimage").val();
            var pcode = $form.find(".pcode").val();

            var pqty = $form.find(".pqty").val();

            $.ajax({
                url: 'action.php',
                method: 'post',
                data: {
                    pid: pid,
                    pname: pname,
                    pprice: pprice,
                    pqty: pqty,
                    pimage: pimage,
                    pcode: pcode
                },
                success: function (response) {
                    $("#message").html(response);
                    window.scrollTo(0, 0);
                    load_cart_item_number();
                }
            });
        });

        // Load total no.of items added in the cart and display in the navbar
        load_cart_item_number();

        function load_cart_item_number() {
            $.ajax({
                url: 'action.php',
                method: 'get',
                data: {
                    cartItem: "cart_item"
                },
                success: function (response) {
                    $("#cart-item").html(response);
                }
            });
        }
    });
</script>
</body>

</html>
</body>

</html>