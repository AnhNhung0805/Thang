<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThangLH2 Football Shoes</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Work+Sans&family=Prompt:ital,wght@1,600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
    <!-- jQuery -->
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/index.js"></script>
</head>
<body>
    <div id="header"></div>
    <div class="slide">
        <a href="#" class="slide__item">
            <img src="images/slideshow_1.jpg" alt="Giày bóng đá chính hãng">
        </a>
        <a href="#" class="slide__item">
            <img src="images/slideshow_2.jpg" alt="Giày sân cỏ nhân tạo">
        </a>
        <a href="#" class="slide__item">
            <img src="images/slideshow_3.jpg" alt="Giày futsal">
        </a>
        <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="product container">
        <div class="product__brands">
            <a class="flash" href="#"><img src="images/adidas.png" alt="Adidas"></a>
            <a class="flash" href="#"><img src="images/nike.png" alt="Nike"></a>
            <a class="flash" href="#"><img src="images/puma.png" alt="Puma"></a>
            <a class="flash" href="#"><img src="images/mizuno.png" alt="Mizuno"></a>
        </div>
        <div class="product__interest">
            <p>Bạn Đang Quan Tâm</p>
            <hr>
            <div class="shine">
                <a href="#">
                    <span></span>
                    <img src="images/ic.jpg" alt="Giày Futsal">
                </a>
                <a href="#">
                    <span></span>
                    <img src="images/tf.jpg" alt="Giày cỏ nhân tạo">
                </a>
                <a href="#">
                    <span></span>
                    <img src="images/accessories.jpg" alt="Phụ kiện">
                </a>
                <a href="#">
                    <span></span>
                    <img src="images/sale.jpg" alt="Sản phẩm khuyến mãi">
                </a>
            </div>
        </div>
        <div class="product__hot">
            <p>Sản Phẩm Bán Chạy</p>
            <hr>
            <div class="product__hot__box">
                <a href="#">
                    <img src="images/products/nike mercurial.jpg" alt="Nike Mercurial">
                    <p class="product__name">Nike Mercurial</p>
                    <p class="product__price">2.500.000 <span>đ</span></p>
                    <p class="product_desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia tempore 
                        quibusdam voluptatum sequi, expedita animi voluptates sit! Architecto, 
                        dicta sint ex doloribus.
                    </p>
                    <button class="buyBtn">Mua ngay</button>
                </a>
                <a href="#">
                    <img src="images/products/adidas x.jpg" alt="Adidas X">
                    <p class="product__name">Adidas X</p>
                    <p class="product__price">2.100.000 <span>đ</span></p>
                    <p class="product_desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia tempore 
                        quibusdam voluptatum sequi, expedita animi voluptates sit! Architecto, 
                        dicta sint ex doloribus.
                    </p>
                    <button class="buyBtn">Mua ngay</button>
                </a>
                <a href="#">
                    <img src="images/products/adidas predator.jpg" alt="Adidas Predator">
                    <p class="product__name">Adidas Predator</p>
                    <p class="product__price">2.300.000 <span>đ</span></p>
                    <p class="product_desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia tempore 
                        quibusdam voluptatum sequi, expedita animi voluptates sit! Architecto, 
                        dicta sint ex doloribus.
                    </p>
                    <button class="buyBtn">Mua ngay</button>
                </a>
                <a href="#">
                    <img src="images/products/nike tiempo.jpg" alt="Nike Tiempo">
                    <p class="product__name">Nike Tiempo</p>
                    <p class="product__price">1.900.000 <span>đ</span></p>
                    <p class="product_desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia tempore 
                        quibusdam voluptatum sequi, expedita animi voluptates sit! Architecto, 
                        dicta sint ex doloribus.
                    </p>
                    <button class="buyBtn">Mua ngay</button>
                </a>
            </div>
            <button class="view-all">Xem Thêm</button>
        </div>
        <div class="product__new">
            <p>Sản Phẩm Mới</p>
            <hr>
            <div class="product__new__box" id="productSlider">
                <div class="slider" id="slider">
                    <a class="slider__item" href="#">
                        <div class="product__img">
                            <img src="images/products/puma ultra 1.jpg" alt="">
                            <img src="images/products/puma ultra 2.jpg" class="img-sub" alt="">
                        </div>
                        <p class="product__name">Nike Mercurial</p>
                        <p class="product__price">2.500.000 <span>đ</span></p>
                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                    </a>
                    <a class="slider__item" href="#">
                        <div class="product__img">
                            <img src="images/products/puma ultra 1.jpg" alt="">
                            <img src="images/products/puma ultra 2.jpg" class="img-sub" alt="">
                        </div>
                        <p class="product__name">Adidas X</p>
                        <p class="product__price">2.100.000 <span>đ</span></p>
                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                    </a>
                    <a class="slider__item" href="#">
                        <div class="product__img">
                            <img src="images/products/puma ultra 1.jpg" alt="">
                            <img src="images/products/puma ultra 2.jpg" class="img-sub" alt="">
                        </div>
                        <p class="product__name">Adidas Predator</p>
                        <p class="product__price">2.300.000 <span>đ</span></p>
                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                    </a>
                    <a class="slider__item" href="#">
                        <div class="product__img">
                            <img src="images/products/puma ultra 1.jpg" alt="">
                            <img src="images/products/puma ultra 2.jpg" class="img-sub" alt="">
                        </div>
                        <p class="product__name">Nike Tiempo</p>
                        <p class="product__price">1.900.000 <span>đ</span></p>
                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                    </a>
                    <a class="slider__item" href="#">
                        <div class="product__img">
                            <img src="images/products/puma ultra 1.jpg" alt="">
                            <img src="images/products/puma ultra 2.jpg" class="img-sub" alt="">
                        </div>
                        <p class="product__name">Nike Tiempo</p>
                        <p class="product__price">1.900.000 <span>đ</span></p>
                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                    </a>
                    <a class="slider__item" href="#">
                        <div class="product__img">
                            <img src="images/products/puma ultra 1.jpg" alt="">
                            <img src="images/products/puma ultra 2.jpg" class="img-sub" alt="">
                        </div>
                        <p class="product__name">Nike Tiempo</p>
                        <p class="product__price">1.900.000 <span>đ</span></p>
                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                    </a>
                    <a class="slider__item" href="#">
                        <div class="product__img">
                            <img src="images/products/puma ultra 1.jpg" alt="">
                            <img src="images/products/puma ultra 2.jpg" class="img-sub" alt="">
                        </div>
                        <p class="product__name">Nike Tiempo</p>
                        <p class="product__price">1.900.000 <span>đ</span></p>
                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                    </a>
                    <a class="slider__item" href="#">
                        <div class="product__img">
                            <img src="images/products/puma ultra 1.jpg" alt="">
                            <img src="images/products/puma ultra 2.jpg" class="img-sub" alt="">
                        </div>
                        <p class="product__name">Nike Tiempo</p>
                        <p class="product__price">1.900.000 <span>đ</span></p>
                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                    </a>
                    <a class="slider__item" href="#">
                        <div class="product__img">
                            <img src="images/products/puma ultra 1.jpg" alt="">
                            <img src="images/products/puma ultra 2.jpg" class="img-sub" alt="">
                        </div>
                        <p class="product__name">Nike Tiempo</p>
                        <p class="product__price">1.900.000 <span>đ</span></p>
                        <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
                    </a>
                </div>
                <button class="ctrl-btn pro-prev"><i class="fas fa-chevron-left"></i></button>
                <button class="ctrl-btn pro-next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
    <div class="feature">
        <div class="feature__exp">
            <p>Trải Nghiệm Mua Sắm</p>
            <hr>
            <div class="feature__exp__items">
                <div class="item">
                    <img src="images/tuvan.jpg" alt="Tư vấn">
                    <p>Tư vấn bán hàng chuyên nghiệp</p>
                </div>
                <div class="item">
                    <img src="images/dosize.jpg" alt="Đo size">
                    <p>Đo size chuẩn bằng thiết bị chuyên dụng</p>
                </div>
                <div class="item">
                    <img src="images/thanhtoan.jpg" alt="Thanh toán">
                    <p>Hình thức thanh toán đa dạng, tiện lợi</p>
                </div>
                <div class="item">
                    <img src="images/tragop.jpg" alt="Trả góp">
                    <p>Hỗ trợ trả góp 0% lãi suất qua Fundiin</p>
                </div>
                <div class="item">
                    <img src="images/vanchuyen.jpg" alt="Vận chuyển">
                    <p>Dịch vụ giao hàng nhanh chóng, an toàn</p>
                </div>
            </div>
        </div>
        <div class="feature__news">
            <p>Tin Tức</p>
            <hr>
            <div class="feature__news__items">
                <a class="item" href="#">
                    <img src="images/news 1.jpg" alt="">
                    <p>PUMA ra mắt phối màu mới của dòng giày tốc độ Ultra</p>
                    <p>Nhằm hỗ trợ cho dòng giày Future Z hoàn toàn mới, PUMA đã bổ sung...</p>
                </a>
                <a class="item" href="#">
                    <img src="images/news 2.jpg" alt="">
                    <p>Puma ra mắt dòng giày FUTURE Z 1.1 mới</p>
                    <p>Tháng 12/2020, Puma đã ra mắt dòng giày đá bóng hoàn toàn mới FUTURE Z...</p>
                </a>
                <a class="item" href="#">
                    <img src="images/news 3.jpg" alt="">
                    <p>Puma Ultra SL 21 có thật sự là đôi giày đá banh siêu nhẹ và tốc độ nhất</p>
                    <p>Khi nói đến trọng lượng, Puma luôn đặt ra cho họ sự thử thách vượt...</p>
                </a>
            </div>
        </div>
        <div class="feature__feedback">
            <p>Feedback Của Khách Hàng</p>
            <hr>
            <img src="images/feedback.jpg" alt="Feedback">
        </div>
    </div>
    <div id="footer"></div>
    <div class="license">
        <i class="far fa-registered"></i> <p>GIAO DIỆN CODE XÌ KHÓI BỞI THANGLH2 !</p>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide__item");
            if (n > slides.length) {slideIndex = 1} 
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }
    </script>
    <script src="js/product-slider.js"></script>
</body>
</html>