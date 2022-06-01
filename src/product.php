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
                    <img src="images/<?=$value['img'] ?>">
                    <h3 class="title"><a href="#"><?=$value['name']?></a></h3>
                    <span>Price: <?=$value['price'] ?></span>
                    <a class="add-to-cart" href="./controller/addCart.php?id=<?=$value['id']?>">Add To Cart</a>
                </div>

            <?php } ?>
        </div>
    </div>


    <?php include("footer.php") ?>