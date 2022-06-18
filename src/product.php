<?php
include("header.php");
include("./controller/config.php");
?>

<link rel="stylesheet" href="style.css">
<title>Home</title>
</head>

<body>
    <?php include("nav.php") ?>

    <div id="main">
        <div id="products">
            <?php
            foreach ($products as $key => $value) {
            ?>
                <div id="product-101" class="product">
                    <a href="./controller/addWishlist.php?id=<?= $value['id'] ?>"><i class="fa-solid fa-heart fa-2xl" ></i></a>
                    <img src="images/<?= $value['img'] ?>">
                    <h3 class="title"><a href="#"><?= $value['name'] ?></a></h3>
                    <span>Price: <?= $value['price'] ?></span>
                    <a class="add-to-cart" href="./controller/addCart.php?id=<?= $value['id'] ?>">Add To Cart</a>
                </div>

            <?php } ?>
        </div>
    </div>
   <hr/>
<div>
<h1 style="text-align: center;">Cart</h1>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-danger">
            <tr>
                <th>ID</th>
                <th>Images</th>
                <th>price</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Total</th>
                <th><a href="./controller/removeAll.php?action=cart">REMOVE ALL</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION['cart'] as $key => $value) {
            ?>


                <tr>
                    <td>
                        <input type="checkbox" value="<?= $value['id'] ?>" >
                        <?= $value['id'] ?>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="./images/<?= $value['image'] ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />

                        </div>
                    </td>

                    <td><?= $value['price'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <form action="./controller/edit.php?action=cart" method="POST">
                        <input name="id" type="hidden" value="<?= $value['id'] ?>">
                        <td> <input name="quantity" type="number" onchange="form.submit()" value=<?= $value['quantity'] ?> /></td>
                    </form>
                    <td><?= $value['total'] ?></td>


                    <td>
                        <a href="./controller/remove.php?action=cart&id=<?= $value['id'] ?>"><button type="button" class="btn btn-link btn-sm btn-rounded">
                                delete
                            </button></a>
                    </td>

                <?php } ?>

        </tbody>
    </table>
    <a class="btn btn-success" href="./controller/allBuy.php?action=cart">Buy All</a>
    <a class="btn btn-primary" href="./controller/allWishlist.php?action=cart">Wish All</a>


 
</div>

    <?php include("footer.php") ?>