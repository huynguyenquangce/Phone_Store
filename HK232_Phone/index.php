<?php
require ("connectDB.php")  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HHA Phone - "Vua" Phone</title>
    <meta name="description" content="Trang web bán phone chất lượng với giá cả hợp lý.">
    <meta name="keywords" content="phone, mua phone, giá phone">
    <link rel="icon" href="./img/logo.png">
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
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="app">
        <?php include ("pages/header.php") ?>
        
        <div class="main">
                <div class="slider">
                    <div class="slider-item">
                        <div class="slider-img">
                            <a href="#"><img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/22/638466965962807850_F-C1_1200x300.png" alt="no image"></a>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <a href="#"><img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/4/3/638477392842187612_F-C1_1200x300@2x.png" alt="no image"></a>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <a href="#"><img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/4/16/638488582368852528_C1_S24%20Ultra.png" alt="no image"></a>
                        </div>
                    </div>
                </div>

        <div class="container" style="padding: 0 10px;">
                <div class="products-list fl spbw">
                    <?php
                    $sql_brand = "SELECT brand_image, brand_id FROM brand";
                    $result_brand = $conn->query($sql_brand);
                    if ($result_brand->num_rows > 0) {
                        while ($row = $result_brand->fetch_assoc()) { ?>
                            <span class="products-list__name">
                                <a href="productpage.php?id=<?php echo $row['brand_id']; ?>">
                                    <img src="<?php echo $row['brand_image'] ?>" alt="no image">
                                </a>
                            </span>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="products">
                    <div class="products-wrap">
                        <?php
                        $sql_brand = "SELECT brand_name, brand_id FROM brand";
                        $result_brand = $conn->query($sql_brand);
                        if ($result_brand->num_rows > 0) {
                            while ($row = $result_brand->fetch_assoc()) {
                                $brand_id = $row['brand_id'];
                                echo "<h2 class='product-title'>" . $row["brand_name"] . "</h2>";
                                $sql_product = "SELECT * FROM product WHERE brand_id = '$brand_id' LIMIT 4";
                                $result_product = $conn->query($sql_product);
                                if ($result_product === false) {
                                    echo "Error executing query: " . $conn->error;
                                }
                                else if ($result_product->num_rows > 0) {
                        ?>
                                    <div class="row mt-top25">
                                        <?php
                                        while ($row_product = $result_product->fetch_assoc()) {
                                        ?>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="product-item">
                                                    <span class="tra-gop mt-bottom25">Trả góp 0%</span>
                                                    <a href="productdetail.php?id=<?php echo $row_product["products_id"] ?> " class="d-flex justify-content-center">
                                                        <img src="<?php echo  $row_product["image"] ?>"  alt="no image" class="product-item__img pd-bottom25" >
                                                    </a>
                                                    <div class="rate fl">
                                                        <?php
                                                        $sql_rating_avg = "SELECT AVG(rating) AS rating_avg FROM reviews WHERE pr_id = $row_product[products_id]";
                                                        $result_rating_avg = $conn->query($sql_rating_avg);
                                                        if ($result_rating_avg && $result_rating_avg->num_rows > 0) {
                                                            $row_rating_avg = $result_rating_avg->fetch_assoc();
                                                            $rating_avg = round($row_rating_avg['rating_avg'], 1);
                                                        } else {
                                                            echo "Không tìm thấy đánh giá nào.";
                                                        }
                                                        $rating_avg = round($rating_avg);
                                                        for ($i = 0; $i < $rating_avg; $i++) { ?>
                                                            <span><i class="fa-solid fa-star fa-starActive"></i></span>
                                                        <?php
                                                        }
                                                        for ($i = $rating_avg; $i < 5; $i++) { ?>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <a href="productdetail.php?id=<?php echo $row_product["products_id"] ?>">
                                                        <?php echo "<h3 class='product-item__name'>" . $row_product["products_name"] . "</h3>"; ?>
                                                    </a>
                                                    <div>
                                                        <span class="product-item__desc">RAM 8GB</span>
                                                        <span class="product-item__desc">SSD 256GB</span>
                                                    </div>
                                                    <div class="fl spbw product-item__price-wrap">
                                                        <span class="product-item__price"><?php echo  $row_product["price"] ?> ₫</span>
                                                        <span class="product-item__price-old"><?php echo  $row_product["discount"] ?> ₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } else {
                                    echo "Không có sản phẩm thuộc thương hiệu $brand_id.";
                                } ?>
                                <div class="product-btn-more__wrap">
                                    <a href="productpage.php?id=<?php echo $row["brand_id"]; ?>">
                                        <button class="Btn product-btn-more">
                                            Xem tất cả
                                            <?php echo $row["brand_name"]; ?>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </button>
                                    </a>
                                </div>
                        <?php
                            }
                        }
                        ?>                        
                    </div>
                </div>
            </div>
        </div>         
        <?php include ("pages/footer.php") ?>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>