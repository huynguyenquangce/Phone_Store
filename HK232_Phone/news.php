<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HHA Phone - "Vua" Phone</title>
    <meta name="description" content="Trang web bán laptop chất lượng với giá cả hợp lý.">
    <meta name="keywords" content="laptop, mua laptop, giá laptop">
    <link rel="icon" href="./img/ltnn.png">
    <link rel="stylesheet" href="./icon/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e26d989c97.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Slider -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/countingNumber.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
</head>
<body>
    <div class="app">
        <?php
        include ("pages/header.php")
            ?>
        <div class="main">
            <div class="breadcrumb-wrap">
                <div class="container">
                    <div class="row">
                        <ul class="breadcrumb">
                            <?php
                            $breadcrumbs = array(
                                'Trang chủ' => 'index.php',
                                'Tin tức' => '#',
                            );

                            foreach ($breadcrumbs as $title => $link) {
                                if ($link === '#') {
                                    echo '<li class="breadcrumb-item">' . $title . '</li>';
                                } else {
                                    echo '<li class="breadcrumb-item"><a href="' . $link . '">' . $title . '</a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- content -->
            <?php
            include 'connectDB.php';
            $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 3;
            $current_page = !empty($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
            $offset = ($current_page - 1) * $item_per_page;
            $new = mysqli_query($conn, "SELECT * FROM new ORDER BY `new_id` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
            $totalRecords = mysqli_query($conn, "SELECT * FROM `new`");
            $totalRecords = $totalRecords->num_rows;
            $totalPages = ceil($totalRecords / $item_per_page);
            ?>
            <div class="container mt-5">
                <div class="row justify-content-center w-100 mt-4 col-12" style="font-size: 40px;">Tin tức</div>
                <div class="row">
                    <div class="product-items">
                        <?php
                        while ($row = mysqli_fetch_array($new)) {
                            ?>
                            <div class="product-item col-12 col-md-4">
                                <div class="product-img">
                                    <img src="admin/adminql/new/<?php echo $row['new_img'] ?>"
                                        title="<?php echo $row['new_title'] ?>" />
                                </div>
                                <strong><?php echo $row['new_title'] ?></strong><br />
                                <label>Tag: <div class="btn btn-info"><a href="news_category.php"
                                            class="text-white"><?php echo $row['new_tag']; ?></a></div></label><br />
                                <p class="content-2-lines"><?= $row['new_content'] ?></p>
                                <div class="buy-button">
                                    <a href="news_detail.php?new_id=<?php echo $row['new_id']?>">Xem bài viết</a>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="clear-both"></div>
                        <div class="clear-both"></div>
                    </div>
                    <?php
                        include './pagination.php';
                        ?>
                </div>
            </div>
            <!-- end content  -->
        </div>
        <?php
        include ("pages/footer.php")
            ?>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/main1.js"></script>
    <style>
        body {
            font-family: arial;
        }
        .content-2-lines {
            height: 20px;
            overflow: hidden;
        }
        h1 {
            text-align: center;
        }

        .product-items {
            /* border: 1px solid #ccc;
            padding: 30px; */
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            border: 1px solid #ccc;
            padding: 30px;
        }

        .product-item {
            /* float: left;
            width: 23%;
            margin: 1%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            line-height: 26px; */
            width: calc(25% - 20px); /* Sử dụng calc để tính toán chiều rộng chính xác */
            margin-bottom: 20px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
        }

        .product-item label {
            font-weight: bold;
        }

        .product-item p {
            margin: 0;
            line-height: 26px;
            max-height: 52px;
            overflow: hidden;
        }

        .product-price {
            color: red;
            font-weight: bold;
        }

        .product-img {
            padding: 5px;
            border: 1px solid #ccc;
            margin-bottom: 5px;
        }

        .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-item ul {
            margin: 0;
            padding: 0;
            border-right: 1px solid #ccc;
        }

        .product-item ul li {
            float: left;
            width: 33.3333%;
            list-style: none;
            text-align: center;
            border: 1px solid #ccc;
            border-right: 0;
            box-sizing: border-box;
        }

        .clear-both {
            clear: both;
        }

        a {
            text-decoration: none;
        }
        .buy-button {
            text-align: right;
            margin-top: 10px;
        }
        .buy-button a {
            background: #444;
            padding: 5px;
            color: #fff;
        }
        #pagination {
            text-align: right;
            margin-top: 15px;
        }
        .page-item {
            border: 1px solid #ccc;
            padding: 5px 9px;
            color: #000;
        }
        .current-page {
            background: #000;
            color: #FFF;
        }
    </style>
</body>

</html>