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
        <?php include "pages/header.php" ?>
        <div class="main">
            <div class="breadcrumb-wrap">
                <div class="container">
                    <div class="row">
                        <ul class="breadcrumb " style="align-items: center;">
                            <?php
                            $breadcrumbs = array(
                                'Trang chủ' => 'index.php',
                                'Giới thiệu' => '#'
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
            <!-- Content Infomation -->
            <div class="home-slider owl-carousel js-fullheight">
                <div class="slider-item js-fullheight" style="background-image:url(img/HCM.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                            <div class="col-md-12 ftco-animate">
                                <div class="text w-100 text-center">
                                    <h2>Chi nhánh</h2>
                                    <h1 class="mb-3">HCM City</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item js-fullheight" style="background-image:url(img/HN.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                            <div class="col-md-12 ftco-animate">
                                <div class="text w-100 text-center">
                                    <h2>Chi nhánh</h2>
                                    <h1 class="mb-3">HN Capital</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item js-fullheight" style="background-image:url(img/DN.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                            <div class="col-md-12 ftco-animate">
                                <div class="text w-100 text-center">
                                    <h2>Chi nhánh</h2>
                                    <h1 class="mb-3">ĐN City</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Infomation  -->
            <!-- Info -->
            <div class="container">
                <div class="row justify-content-center w-100 mt-4" style="font-size: 40px;">Giới thiệu về công ty</div>
                <div class="row mt-3">
                    <div class="col-md-6 col-12 fs-3">“Kính gửi Quý cổ đông, khách hàng và toàn thể cán bộ nhân viên HHA
                        Retail,
                        Chúng ta vừa trải qua năm 2021 đầy khó khăn và thách thức. Đây là năm thứ hai đại dịch COVID-19
                        bùng phát mạnh mẽ, chi phối mọi hoạt động kinh tế - xã hội trên toàn thế giới. Việt Nam là một
                        trong những quốc gia chịu ảnh hưởng nặng nề của dịch bệnh, tăng trưởng kinh tế năm 2021 chỉ ở
                        mức 2,58%, thấp nhất trong vòng 30 năm qua. Tuy nhiên trong bối cảnh đó, tập thể cán bộ nhân
                        viên HHA Retail đã không ngừng nỗ lực vượt qua khó khăn, đạt được những thành tựu nhất định,
                        đánh dấu chặng đường 10 năm hình thành và phát triển.

                        Năm 2021, FRT có kết quả kinh doanh ấn tượng, doanh thu luỹ kế đạt 22.495 tỷ đồng, tăng trưởng
                        53% so với năm 2020, gấp 1,4 lần kế hoạch doanh thu năm 2021. Lợi nhuận trước thuế đạt 554 tỷ
                        đồng, gấp 19,5 lần năm 2020 và gấp 4,6 lần kế hoạch lợi nhuận đặt ra. Đặc biệt, năm 2021 là năm
                        tăng trưởng mạnh mẽ của chuỗi Long Châu với doanh thu đạt 3.977 tỷ đồng, tăng 3,3 lần so với năm
                        2020, trở thành chuỗi nhà thuốc dẫn đầu thị trường với 400 nhà thuốc trải khắp 53 tỉnh thành.
                        Doanh thu online cả năm 2021 đạt 6.285 tỷ đồng, chiếm 28% tổng doanh thu. Khoảng thời gian dài
                        đóng cửa do giãn cách, kết quả kinh doanh Quý 4 cải thiện rõ rệt. Trong đó, HHA Shop,
                        F. Studio by HHA gặt hái nhiều thành tích trong mảng kinh doanh sản phẩm Apple chính hãng khi mở
                        bán thành công iPhone 13 series và Macbook Pro 2021, đưa doanh thu toàn ngành hàng Apple năm
                        2021 tăng gấp 1,6 lần so với năm 2020. Chỉ riêng trong Quý 4, gần 100 cửa hàng Long Châu được mở
                        mới, nhờ đó Long Châu đã vượt mục tiêu mở mới 150 cửa hàng đặt ra đầu năm 2021.
                        FRT tiếp tục giữ vững vị thế nhà bán lẻ Laptop số 1 thị trường và là chuỗi bán lẻ hàng công nghệ
                        đứng thứ 2 trên thị trường. Ðịa điểm kinh doanh đắc địa, vị trí trung tâm luôn là lợi thế cạnh
                        tranh, khiến hình ảnh của HHA Shop hiện hữu và tiếp cận được tối đa khách hàng. Công ty thực
                        hiện tối ưu hóa doanh thu trên mỗi cửa hàng bằng cách bán chéo các sản phẩm theo hình thức
                        shop-in-shop. Công ty tối ưu hóa chi phí hoạt động tại cửa hàng bằng cách tăng năng suất lao
                        động và ứng dụng công nghệ mới. Ðối mặt với tình hình dịch bệnh kéo dài, Công ty tập trung phát
                        triển mạnh kinh doanh trực tuyến, giao hàng tận nhà, với hàng loạt chương trình ưu đãi, giảm
                        giá. Song song đó, tối ưu khả năng trưng bày sản phẩm, bày trí bắt mắt, chuyên nghiệp đã góp
                        phần tăng đáng kể hiệu quả bán hàng tại các cửa hàng.</div>
                    <div class="col-md-6 col-12 fs-3">
                        Bước sang năm 2022, với chuyển biến tích cực của tình hình dịch bệnh nhờ độ phủ vắc xin COVID-19
                        và các chính sách kích cầu kinh tế, Việt Nam dần kiểm soát dịch bệnh và thích ứng với trạng thái
                        bình thường mới. Nhu cầu tiêu dùng một lần nữa trở thành động lực cho sự tăng trưởng; bán lẻ và
                        dịch vụ sẽ là hai ngành đón đầu xu hướng chi tiêu hậu giãn cách, hứa hẹn một triển vọng tươi
                        sáng hơn trong năm 2022. Đồng thời, nền kinh tế hậu COVID-19 dần chuyển dịch sang nền kinh tế
                        số, đây là một thế mạnh và là chiến lược mà FRT đã theo đuổi từ lâu cùng với sự hỗ trợ, tư vấn
                        từ tập đoàn HHA.
                        Với sự phát triển của thương mại điện tử, bên cạnh các cửa hàng truyền thống, HHA Retail đẩy
                        mạnh bán hàng trực tuyến bằng ứng dụng công nghệ vào nguồn dữ liệu khách hàng để tăng trải
                        nghiệm mua sắm. FRT đang thực hiện chuyển đổi số toàn diện, trên các mặt gồm nghiệp vụ, công
                        nghệ và trải nghiệm người dùng. Công ty cũng đã xây dựng trung tâm phân tích dữ liệu với công
                        nghệ, mô hình phân tích tốt nhất, tập trung phân tích nhóm đối tượng khách hàng, phục vụ cá thể
                        hoá nhu cầu từng khách hàng. Ngoài ra, HHA Retail cũng đã và đang triển khai các phần mềm quản
                        lý nội bộ do chính công ty nghiên cứu và phát triển để quản lý vận hành và kinh doanh chính xác,
                        kịp thời nhất.
                        Trải qua 10 năm hoạt động, bước sang năm thứ 6 là công ty đại chúng, cùng với sự đồng lòng và
                        tận tâm của đội ngũ gần 10.000 nhân viên, HHA Retail mang đầy hy vọng về một năm 2022 phát triển
                        mạnh mẽ, chinh phục mọi thách thức, đem đến cho các nhà đầu tư lợi ích và giá trị doanh nghiệp
                        gia tăng không ngừng.

                        Với phương châm "Tận tâm", HHA Retail sẽ cố gắng hết sức, làm hết trách nhiệm và hết khả năng
                        của từng cá nhân để thể hiện tấm lòng thành tâm nhất, trân quý nhất đến từng khách hàng.

                        Cuối cùng, thay mặt Hội đồng quản trị, tôi xin trân trọng cảm ơn sự tín nhiệm và ủng hộ của các
                        Quý vị cổ đông, cảm ơn niềm tin của Quý đối tác và Quý khách hàng. Đồng thời, tôi cũng gửi lời
                        cảm ơn chân thành nhất đến toàn bộ đội ngũ nhân viên Công ty đã, đang và sẽ cùng tôi xây dựng
                        một HHA Retail rực rỡ hơn trong tương lai.”
                    </div>
                </div>
            </div>
            <!-- End Info -->
            <!-- Dashboard -->
            <div class="container container-custom mt-5">
                <div class="row justify-content-center w-100 mb-3" style="font-size: 40px;">Những con số đạt được</div>
                <div class="row mt-3">
                    <div class="counters">
                        <!-- Counter 1 -->
                        <div class="counter customer mt-3">
                            <h2 class="number"><span class="value h1 me-2" data-value="210">0</span>k+</h2>
                            <p class="detail">Satisfied Customers</p>
                        </div>
                        <!-- Counter 2 -->
                        <div class="counter project mt-3">
                            <h4 class="number"><span class="value h1 me-2" data-value="15">0</span>+</h4>
                            <p class="detail">Company Branch</p>
                        </div>
                        <!-- Counter 3 -->
                        <div class="counter employee mt-3">
                            <h4 class="number"><span class="value h1 me-2" data-value="110">0</span>+</h4>
                            <p class="detail">Creative Employees</p>
                        </div>
                        <!-- Counter 4 -->
                        <div class="counter award mt-3">
                            <h4 class="number"><span class="value h1 me-2" data-value="12">0</span>+</h4>
                            <p class="detail">International Awards</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Dashboard -->
            <!-- Info 2 -->
            <div class="container" style="margin-top:60px;">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <img src="./img/Shop.jpg" alt="BKU image" class="d-block mx-auto w-100">
                    </div>
                    <div class="col-md-1 col-0"></div>
                    <div class="col-md-5 col-12 text-start mt-5 mt-md-0">
                        <div class="row fs-3">HHA là công ty tiên phong chuyển đổi số và dẫn đầu về tư vấn, cung cấp,
                            triển khai các dịch vụ, giải pháp công nghệ - viễn thông. Chúng tôi đồng hành cùng các khách
                            hàng tại 30 quốc gia và vùng lãnh thổ trên toàn cầu hiện thực hóa chiến lược, mục tiêu phát
                            triển kinh doanh dựa trên công nghệ.

                            Với kinh nghiệm triển khai dự án trên phạm vi toàn cầu trong suốt hơn ba thập kỷ qua, chúng
                            tôi
                            giúp khách hàng vượt qua những thách thức, rào cản và đạt được hiệu quả cao nhất trong hành
                            trình chuyển đổi số. Dựa trên những công nghệ mới nhất trí tuệ nhân tạo, phân tích dữ liệu
                            lớn,
                            điện toán đám mây, tự động hóa, kết nối vạn vật…, chúng tôi đưa ra những giải pháp, dịch vụ
                            công
                            nghệ tiên tiến giúp khách hàng chủ động, linh hoạt thích ứng trong mọi bối cảnh.</div>
                        <div class="row fs-3 mt-4 justify-content-center justify-content-md-start">Tìm hiểu thêm về chúng tôi:</div>
                        <ul class="list-unstyled mt-3 justify-content-center justify-content-md-start d-flex">
                            <li class="d-inline-block me-3"><a href="#" class="fb"><i class="fa-brands fa-square-facebook" style="font-size:30px"></i></a></li>
                            <li class="d-inline-block mx-3"><a href="#" class="tw"><i class="fa-brands fa-twitch" style="font-size:30px"></i></a>
                            </li>
                            <li class="d-inline-block mx-3"><a href="#" class="in"><i class="fa-brands fa-twitter" style="font-size:30px"></i></a>
                            </li>
                            <li class="d-inline-block mx-3"><a href="#" class="be"><i class="fa-brands fa-youtube" style="font-size:30px"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include ("pages/footer.php") ?>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/main1.js"></script>
</body>

</html>