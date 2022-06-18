<?php include("header.php") ?>

<link rel="stylesheet" href="style.css">
<title>BuyNow</title>
</head>

<body>
    <?php include("nav.php") ?>

<h1 style="text-align: center;">CheckOut page</h1>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-danger">
            <tr>
                <th>ID</th>
                <th>Images</th>
                <th>price</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Total</th>
                <th><a href="./controller/removeAll.php?action=buy">REMOVE ALL</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // print_r($_SESSION['buy']);
            foreach ($_SESSION['buy'] as $key => $value) {
            ?>


                <tr>
                    <td>
                        <?= $value['id'] ?>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="./images/<?= $value['image'] ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />

                        </div>
                    </td>

                    <td><?= $value['price'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <form action="./controller/edit.php?action=buy" method="POST">
                        <input name="id" type="hidden" value="<?= $value['id'] ?>">
                        <td> <input name="quantity" type="number" onchange="form.submit()" value=<?= $value['quantity'] ?> /></td>
                    </form>
                    <td><?= $value['total'] ?></td>


                    <td>
                        <a href="./controller/remove.php?action=buy&id=<?= $value['id'] ?>"><button type="button" class="btn btn-link btn-sm btn-rounded">
                                delete
                            </button></a>


                    </td>
                <?php } ?>

        </tbody>
    </table>

    <a class="btn btn-success" href="./controller/allCart.php?action=buy">Cart All</a>
    <a class="btn btn-primary" href="./controller/allWishlist.php?action=buy">Wish All</a>


    <?php include("footer.php") ?>