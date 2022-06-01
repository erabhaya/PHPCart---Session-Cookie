<?php include("header.php") ?>

<link rel="stylesheet" href="style.css">
<title>Home</title>
</head>

<body>
    <?php include("nav.php") ?>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>ID</th>
                <th>Images</th>
                <th>price</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($_SESSION['cart'] as $key => $value) {
            ?>

            
            <tr>
                <td>
                <?=$value['id'] ?>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="./images/<?=$value['image'] ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />

                    </div>
                </td>

                <td><?=$value['price'] ?></td>
                <td><?=$value['name'] ?></td>

                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        delete
                    </button>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                    </button>
                </td>
<?php } ?>

        </tbody>
    </table>



    <?php include("footer.php") ?>