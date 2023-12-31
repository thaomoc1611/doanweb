<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-iphone.css">
    <link rel="stylesheet" href="css/style.css">
    <link
      rel="stylesheet"
      href="library/assets/fonts/fontawesome-free-6.1.2-web/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Iphone</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="">
    <header>
      <div class="head">
        <div class="logo">
          <a href="index.html" title="Logo">
            <img
              src="images/logo.jpg"
              alt="Logo"
              class="img-responsive"
              height="50px"
            />
          </a>
          <a href="#">
            <img src="images/APR_logo.png" alt="Logo" class="img-autho" />
          </a>
        </div>
        <ul class="menu">
          <li class="menu-ip">
            <a href="/iphone">
              <span>iPhone</span>
            </a>
          </li>
          <li class="menu-mac">
            <a href="/mac">
              <span>Mac</span>
            </a>
          </li>
          <li class="menu-ipad">
            <a href="/mac">
              <span>iPad</span>
            </a>
          </li>
          <li class="menu-watch">
            <a href="/apple-watch">
              <span>Watch</span>
            </a>
          </li>
          <li class="menu-sound">
            <a href="/am-thanh">
              <span>Âm thanh</span>
            </a>
          </li>
          <li class="menu-access">
            <a href="/phu-kien">
              <span>Phụ kiện</span>
            </a>
          </li>
        </ul>
        <div class="search-cart">
          <div class="search-sp">
            <i class="topzone-search"></i>
          </div>
          <a href="/cart" class="cart">
            <i class="topzone-cart"></i>
          </a>
        </div>
        <form class="form-search" onsubmit="return false;">
          <div class="click-search active">
            <i class="topzone-search"></i>
            <input type="text" placeholder="Tìm kiếm sản phẩm" />
            <i class="topzone-delSearch"></i>
          </div>
          <button
            type="submit"
            class="submit-search"
            style="display: none"
          ></button>
          <div class="sg-search" style="display: none"></div>
        </form>
        <div>
            <a href="/admin/login" class="btn btn-primary">Login</a>
        </div>
      </div>
    </header>
    <div class="bg-sg"></div>
    <h1 hidden="">Phụ Kiện</h1>
    <section>
        <a href="javascript:;" class="catename">
            <i class="logo-category">
                <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Category/482/WPhuKien-120x36.png"
                    width="152" height="32" alt="Phụ kiện">
            </i>
        </a>


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="./images/slides-Iphone/iPhone-11-2400-600-1920x480.webp" alt="Los Angeles"
                        style="width:100%;">
                </div>

                <div class="item">
                    <img src="./images/slides-Iphone/iPhone-14-Pro-Max-2400-600-1920x480.webp" alt="Chicago"
                        style="width:100%;">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="filter-cate">
            <div class="ft-cate">

                <a href="/phu-kien" data-id="0" class="active">
                    Tất cả
                </a>
                <a href="/phu-kien-iphone" data-id="482" class="">
                    Phụ kiện iPhone
                </a>
                <a href="/phu-kien-mac" data-id="482" class="">
                    Phụ kiện Mac
                </a>
                <a href="/phu-kien-ipad" data-id="482" class="">
                    Phụ kiện iPad
                </a>
                <a href="/phu-kien-apple-watch" data-id="482" class="">
                    Phụ kiện Apple Watch
                </a>
                <a href="/sac-du-phong" data-order="1" data-id="57" class="">
                    Sạc dự phòng
                </a>
                <a href="/adapter-sac" data-order="2" data-id="9499" class="">
                    Adapter sạc, chuyển đổi
                </a>
                <a href="/cap-sac" data-order="3" data-id="58" class="">
                    Cáp sạc, chuyển đổi
                </a>
                <a href="/op-lung-iphone" data-order="4" data-id="60" class="">
                    Ốp lưng, ví da iPhone
                </a>
                <a href="/op-lung-ipad" data-order="5" data-id="1662" class="">
                    Ốp lưng iPad
                </a>
                <a href="/chuot-may-tinh" data-order="6" data-id="86" class="">
                    Chuột máy tính
                </a>
                <a href="/phim-but" data-order="7" data-id="1882" class="">
                    Bàn phím &amp; Bút
                </a>
                <a href="/airtag" data-order="8" data-id="10618" class="">
                    Airtag
                </a>
                <a href="/tv-box" data-order="9" data-id="9118" class="">
                    Apple TV
                </a>
                <a href="/mieng-dan-man-hinh" data-order="10" data-id="1363" class="">
                    Dán màn hình
                </a>
                <a href="/tui-dung-airpods" data-order="11" data-id="7925" class="">
                    Túi đựng AirPods
                </a>
                <a href="/tui-chong-soc" data-order="12" data-id="7923" class="">
                    Balo, túi chống sốc
                </a>
                <a href="/gia-do-laptop" data-order="13" data-id="6862" class="">
                    Giá đỡ laptop
                </a>
                <a href="/day-apple-watch" data-order="13" data-id="7978" class="">
                    Dây Apple Watch
                </a>
            </div>

            <!-- Bộ filter -->

            <div class="ft-sort">
                <a href="javascript:;">Xếp theo: Nổi bật</a>
                <ul>
                    <li>
                        <a href="javascript:;" class="check" data-id="14">
                            <i class="topzone-stick"></i>
                            <span>Nổi bật</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="" data-id="12">
                            <i class="topzone-stick"></i>
                            <span>Mới ra mắt</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-id="7">
                            <i class="topzone-stick"></i>
                            <span>Bán chạy</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-id="2">
                            <i class="topzone-stick"></i>
                            <span>Giá thấp đến cao</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-id="3">
                            <i class="topzone-stick"></i>
                            <span>Giá cao đến thấp</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-productbox">
            <div id="preloader">
                <div class="lds-roller">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <ul class="listing-cate">
                <li class=" item  __cate_9499" data-index="1" data-id="230315" data-issetup="0" data-maingroup="16"
                    data-subgroup="2831" data-type="1" data-vehicle="1" data-productcode="0162831000114" data-pos="1">


                    <a href="/adapter-sac/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3" data-s="Nomal"
                        data-site="16" data-pro="3" data-cache="True" data-sv="tz-web15"
                        data-name="Adapter sạc Apple USB-C 20W" data-id="230315" data-price="520000.0"
                        data-brand="Apple" data-cate="Adapter sạc, chuyển đổi" data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_9499">
                            <img class="thumb ls-is-cached lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/9499/230315/s16/114.34.03-650x650.png"
                                alt="Adapter sạc Apple USB-C 20W"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/9499/230315/s16/114.34.03-650x650.png">
                        </div>



                        <h3>
                            Adapter sạc Apple USB-C 20W </h3>

                        <div class="box-p">
                            <strong class="price">520.000₫</strong>
                            <p class="price-old black">690.000₫</p>
                            <span class="percent">-24%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_60" data-index="2" data-id="290326" data-issetup="0" data-maingroup="16"
                    data-subgroup="2831" data-type="1" data-vehicle="1" data-productcode="0162831000265" data-pos="2">


                    <a href="/op-lung-iphone/op-lung-magsafe-iphone-14-pro-max-nhua-trong-apple-mpu73"
                        data-s="OnlineSavingCMS" data-site="16" data-pro="3" data-cache="True" data-sv="tz-web15"
                        data-name="Ốp lưng Magsafe cho iPhone 14 Pro Max Nhựa trong Apple MPU73" data-id="290326"
                        data-price="950000.0" data-brand="Apple" data-cate="Ốp lưng, ví da iPhone" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_60">
                            <img class="thumb ls-is-cached lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290326/s16/op-lung-magsafe-iphone-14-pro-max-nhua-trong-apple-mpu73-thumb-650x650.png"
                                alt="Ốp lưng Magsafe cho iPhone 14 Pro Max Nhựa trong Apple MPU73"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290326/s16/op-lung-magsafe-iphone-14-pro-max-nhua-trong-apple-mpu73-thumb-650x650.png">
                        </div>



                        <h3>
                            Ốp lưng Magsafe cho iPhone 14 Pro Max Nhựa trong Apple MPU73 </h3>

                        <div class="box-p">
                            <strong class="price">950.000₫</strong>
                            <p class="price-old black">1.590.000₫</p>
                            <span class="percent">-40%</span>
                        </div>
                        <p class="item-txt-online orange">Online giá rẻ</p>
                    </a>

                </li>
                <li class=" item  __cate_58" data-index="3" data-id="259283" data-issetup="0" data-maingroup="16"
                    data-subgroup="2831" data-type="1" data-vehicle="1" data-productcode="0162831000223" data-pos="3">


                    <a href="/cap-sac/cap-type-c-lightning-1m-apple-mm0a3-trang" data-s="Nomal" data-site="16"
                        data-pro="3" data-cache="True" data-sv="tz-web15" data-name="Cáp sạc USB-C - Lightning 1m"
                        data-id="259283" data-price="490000.0" data-brand="Apple" data-cate="Cáp sạc, chuyển đổi"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_58">
                            <img class="thumb ls-is-cached lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/58/259283/s16/cap-type-c-lightning-1m-apple-mm0a3-trang-650x650.png"
                                alt="Cáp sạc USB-C - Lightning 1m"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/58/259283/s16/cap-type-c-lightning-1m-apple-mm0a3-trang-650x650.png">
                        </div>



                        <h3>
                            Cáp sạc USB-C - Lightning 1m </h3>

                        <div class="box-p">
                            <strong class="price">490.000₫</strong>
                            <p class="price-old black">590.000₫</p>
                            <span class="percent">-16%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_1882" data-index="4" data-id="251881" data-issetup="0" data-maingroup="16"
                    data-subgroup="4659" data-type="1" data-vehicle="1" data-productcode="0164659000032" data-pos="4">


                    <a href="/phim-but/magic-keyboard" data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                        data-sv="tz-web15" data-name="Magic Keyboard" data-id="251881" data-price="2230000.0"
                        data-brand="Apple" data-cate="Bàn phím &amp; Bút" data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_1882">
                            <img class="thumb ls-is-cached lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/251881/s16/magic-keyboard-thumb-650x650.png"
                                alt="Magic Keyboard"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/251881/s16/magic-keyboard-thumb-650x650.png">
                        </div>



                        <h3>
                            Magic Keyboard </h3>

                        <div class="box-p">
                            <strong class="price">2.230.000₫</strong>
                            <p class="price-old black">3.190.000₫</p>
                            <span class="percent">-30%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_1882" data-index="5" data-id="237414" data-issetup="0" data-maingroup="16"
                    data-subgroup="4659" data-type="1" data-vehicle="1" data-productcode="0164659000007" data-pos="5">


                    <a href="/phim-but/but-cam-ung-apple-pencil-1-mk0c2" data-s="OnlineSavingCMS" data-site="16"
                        data-pro="3" data-cache="True" data-sv="tz-web15" data-name="Apple Pencil (thế hệ 1)"
                        data-id="237414" data-price="2090000.0" data-brand="Apple" data-cate="Bàn phím &amp; Bút"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_1882">
                            <img class="thumb ls-is-cached lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/237414/s16/17-650x650.png"
                                alt="Apple Pencil (thế hệ 1)"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/237414/s16/17-650x650.png">
                        </div>



                        <h3>
                            Apple Pencil (thế hệ 1) </h3>

                        <div class="box-p">
                            <strong class="price">2.090.000₫</strong>
                            <p class="price-old black">2.890.000₫</p>
                            <span class="percent">-27%</span>
                        </div>
                        <p class="item-txt-online orange">Online giá rẻ</p>
                    </a>

                </li>
                <li class=" item  __cate_1882" data-index="6" data-id="255340" data-issetup="0" data-maingroup="16"
                    data-subgroup="4659" data-type="1" data-vehicle="1" data-productcode="0164659000022" data-pos="6">


                    <a href="/phim-but/magic-keyboard-voi-phim-so" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Magic Keyboard với phím số" data-id="255340"
                        data-price="2720000.0" data-brand="Apple" data-cate="Bàn phím &amp; Bút" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_1882">
                            <img class="thumb ls-is-cached lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/255340/s16/magic-keyboard-with-numeric-keypad-mq052-thumb-1-650x650.png"
                                alt="Magic Keyboard với phím số"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/255340/s16/magic-keyboard-with-numeric-keypad-mq052-thumb-1-650x650.png">
                        </div>



                        <h3>
                            Magic Keyboard với phím số </h3>

                        <div class="box-p">
                            <strong class="price">2.720.000₫</strong>
                            <p class="price-old black">3.890.000₫</p>
                            <span class="percent">-30%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_57" data-index="7" data-id="266084" data-issetup="0" data-maingroup="16"
                    data-subgroup="4659" data-type="1" data-vehicle="1" data-productcode="0162831000233" data-pos="7">


                    <a href="/sac-du-phong/pin-apple-magsafe-battery-pack" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Pin Dự Phòng MagSafe" data-id="266084"
                        data-price="2540000.0" data-brand="Apple" data-cate="Sạc dự phòng" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_57">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/57/266084/s16/pin-apple-magsafe-battery-pack-211221-090310-650x650.png"
                                alt="Pin Dự Phòng MagSafe">
                        </div>



                        <h3>
                            Pin Dự Phòng MagSafe </h3>

                        <div class="box-p">
                            <strong class="price">2.540.000₫</strong>
                            <p class="price-old black">2.990.000₫</p>
                            <span class="percent">-15%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_86" data-index="8" data-id="251787" data-issetup="0" data-maingroup="16"
                    data-subgroup="4659" data-type="1" data-vehicle="1" data-productcode="0164659000036" data-pos="8">


                    <a href="/chuot-may-tinh/chuot-bluetooth-apple-mk2e3-trang" data-s="OnlineSavingCMS" data-site="16"
                        data-pro="3" data-cache="True" data-sv="tz-web15" data-name="Magic Mouse" data-id="251787"
                        data-price="1890000.0" data-brand="Apple" data-cate="Chuột máy tính" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_86">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/86/251787/s16/1-650x650.png"
                                alt="Magic Mouse">
                        </div>



                        <h3>
                            Magic Mouse </h3>

                        <div class="box-p">
                            <strong class="price">1.890.000₫</strong>
                            <p class="price-old black">2.490.000₫</p>
                            <span class="percent">-24%</span>
                        </div>
                        <p class="item-txt-online orange">Online giá rẻ</p>
                    </a>

                </li>
                <li class=" item  __cate_1363" data-index="9" data-id="291765" data-issetup="0" data-maingroup="184"
                    data-subgroup="410" data-type="1" data-vehicle="1" data-productcode="1840410000110" data-pos="9">


                    <a href="/mieng-dan-man-hinh/mieng-dan-camera-iphone-14-pro-14-pro-max-uniq-bac" data-s="Nomal"
                        data-site="16" data-pro="3" data-cache="True" data-sv="tz-web15"
                        data-name="Miếng dán camera iPhone 14 Pro | 14 Pro Max UniQ" data-id="291765"
                        data-price="300000.0" data-brand="iPhone, iPad" data-cate="Dán màn hình" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_1363">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1363/291765/s16/mieng-dan-camera-iphone-14-pro-14-pro-max-uniq-bac-thumb-650x650.png"
                                alt="Miếng dán camera iPhone 14 Pro | 14 Pro Max UniQ">
                        </div>



                        <h3>
                            Miếng dán camera iPhone 14 Pro | 14 Pro Max UniQ </h3>

                        <div class="box-p">
                            <strong class="price">300.000₫</strong>
                            <p class="price-old black">400.000₫</p>
                            <span class="percent">-25%</span>
                        </div>
                        <p class="item-txt-online ">Sản phẩm chỉ nhận tại cửa hàng</p>
                    </a>

                </li>
                <li class=" item  __cate_60" data-index="10" data-id="290325" data-issetup="0" data-maingroup="16"
                    data-subgroup="2831" data-type="1" data-vehicle="1" data-productcode="0162831000264" data-pos="10">


                    <a href="/op-lung-iphone/op-lung-magsafe-iphone-14-pro-da-apple-mppk3" data-s="OnlineSavingCMS"
                        data-site="16" data-pro="3" data-cache="True" data-sv="tz-web15"
                        data-name="Ốp lưng Magsafe cho iPhone 14 Pro Da Apple MPPK3" data-id="290325"
                        data-price="970000.0" data-brand="Apple" data-cate="Ốp lưng, ví da iPhone" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_60">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290325/s16/op-lung-magsafe-iphone-14-pro-da-apple-mppk3-thumb-650x650.png"
                                alt="Ốp lưng Magsafe cho iPhone 14 Pro Da Apple MPPK3">
                        </div>



                        <h3>
                            Ốp lưng Magsafe cho iPhone 14 Pro Da Apple MPPK3 </h3>

                        <div class="box-p">
                            <strong class="price">970.000₫</strong>
                            <p class="price-old black">1.790.000₫</p>
                            <span class="percent">-45%</span>
                        </div>
                        <p class="item-txt-online orange">Online giá rẻ</p>
                    </a>

                </li>
                <li class=" item  __cate_60" data-index="11" data-id="290327" data-issetup="0" data-maingroup="16"
                    data-subgroup="2831" data-type="1" data-vehicle="1" data-productcode="0162831000266" data-pos="11">


                    <a href="/op-lung-iphone/op-lung-magsafe-iphone-14-pro-max-da-apple-mppm3" data-s="OnlineSavingCMS"
                        data-site="16" data-pro="3" data-cache="True" data-sv="tz-web15"
                        data-name="Ốp lưng Magsafe cho iPhone 14 Pro Max Da Apple MPPM3" data-id="290327"
                        data-price="1070000.0" data-brand="Apple" data-cate="Ốp lưng, ví da iPhone" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_60">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290327/s16/op-lung-magsafe-iphone-14-pro-max-da-apple-mppm3-thumb-650x650.png"
                                alt="Ốp lưng Magsafe cho iPhone 14 Pro Max Da Apple MPPM3">
                        </div>



                        <h3>
                            Ốp lưng Magsafe cho iPhone 14 Pro Max Da Apple MPPM3 </h3>

                        <div class="box-p">
                            <strong class="price">1.070.000₫</strong>
                            <p class="price-old black">1.790.000₫</p>
                            <span class="percent">-40%</span>
                        </div>
                        <p class="item-txt-online orange">Online giá rẻ</p>
                    </a>

                </li>
                <li class=" item  __cate_1363" data-index="12" data-id="291825" data-issetup="0" data-maingroup="16"
                    data-subgroup="4199" data-type="1" data-vehicle="1" data-productcode="0164199000076" data-pos="12">


                    <a href="/mieng-dan-man-hinh/mieng-dan-kinh-iphone-14-pro-max-jcpal" data-s="Nomal" data-site="16"
                        data-pro="3" data-cache="True" data-sv="tz-web15"
                        data-name="Miếng dán kính iPhone 14 Pro Max Jcpal" data-id="291825" data-price="360000.0"
                        data-brand="iPhone, iPad" data-cate="Dán màn hình" data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_1363">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1363/291825/s16/mieng-dan-kinh-iphone-14-pro-max-jcpal-thumb1-650x650.png"
                                alt="Miếng dán kính iPhone 14 Pro Max Jcpal">
                        </div>



                        <h3>
                            Miếng dán kính iPhone 14 Pro Max Jcpal </h3>

                        <div class="box-p">
                            <strong class="price">360.000₫</strong>
                            <p class="price-old black">400.000₫</p>
                            <span class="percent">-10%</span>
                        </div>
                        <p class="item-txt-online ">Sản phẩm chỉ nhận tại cửa hàng</p>
                    </a>

                </li>
                <li class=" item  __cate_1363" data-index="13" data-id="291958" data-issetup="0" data-maingroup="16"
                    data-subgroup="4199" data-type="1" data-vehicle="1" data-productcode="0164199000084" data-pos="13">


                    <a href="/mieng-dan-man-hinh/mieng-dan-kinh-iphone-14-pro-max-belkin" data-s="Nomal" data-site="16"
                        data-pro="3" data-cache="True" data-sv="tz-web15"
                        data-name="Miếng dán kính iPhone 14 Pro Max Belkin" data-id="291958" data-price="490000.0"
                        data-brand="iPhone, iPad" data-cate="Dán màn hình" data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_1363">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1363/291958/s16/mieng-dan-kinh-iphone-14-pro-max-belkin-thumb-1-650x650.png"
                                alt="Miếng dán kính iPhone 14 Pro Max Belkin">
                        </div>



                        <h3>
                            Miếng dán kính iPhone 14 Pro Max Belkin </h3>

                        <strong class="price">490.000₫</strong>
                        <p class="item-txt-online ">Sản phẩm chỉ nhận tại cửa hàng</p>
                    </a>

                </li>
                <li class=" item  __cate_58" data-index="14" data-id="203760" data-issetup="0" data-maingroup="16"
                    data-subgroup="2831" data-type="1" data-vehicle="1" data-productcode="0162831000074" data-pos="14">


                    <a href="/cap-sac/cap-type-c-type-c-1m-apple-muf72-trang" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Cáp sạc USB-C 1m" data-id="203760"
                        data-price="530000.0" data-brand="Apple" data-cate="Cáp sạc, chuyển đổi" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_58">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/58/203760/s16/122-650x650.png"
                                alt="Cáp sạc USB-C 1m">
                        </div>



                        <h3>
                            Cáp sạc USB-C 1m </h3>

                        <div class="box-p">
                            <strong class="price">530.000₫</strong>
                            <p class="price-old black">590.000₫</p>
                            <span class="percent">-10%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_10618" data-index="15" data-id="238092" data-issetup="0" data-maingroup="16"
                    data-subgroup="4659" data-type="1" data-vehicle="1" data-productcode="0164659000020" data-pos="15">


                    <a href="/airtag/thiet-bi-dinh-vi-thong-minh-airtag-1-pack-mx532" data-s="Nomal" data-site="16"
                        data-pro="3" data-cache="True" data-sv="tz-web15" data-name="AirTag" data-id="238092"
                        data-price="790000.0" data-brand="Apple" data-cate="Airtag" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_10618">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/10618/238092/s16/airtag-650x650.png"
                                alt="AirTag">
                        </div>



                        <h3>
                            AirTag </h3>

                        <strong class="price">790.000₫</strong>
                    </a>

                </li>
            </ul>
            <div class="view-more ">
                <a href="javascript:;">Xem thêm <span class="remain">420</span> sản phẩm</a>
            </div>
        </div>
    </section>
        <!-- start footer -->
        <footer>
            <div class="foot">
                <div class="logo-foot">

                    <a href="index.html" title="Logo" style="margin-right: 22px;">
                        <img src="images/logo.jpg" alt="Logo" class="img-responsive" height="50px">
                    </a>
                    <a href="#">
                        <img src="images/APR_logo.png" alt="Logo" class="img-autho">
                    </a>
                </div>
                <ul class="list-foot">
                    <li>

                        <span>Tổng đài</span>

                        <a href="tel:1900969642">
                            <span>Mua hàng:</span>
                            <b>1900.9696.42</b>
                            (7:30 - 22:00)
                        </a>
                        <a href="tel:1900986843">
                            <span>CSKH:</span>
                            <b>1900.9868.43</b>
                            (8:00 - 21:30)
                        </a>

                        <div class="footer-social">
                            <p class="txt">Kết nối với chúng tôi</p>
                            <a href="https://www.facebook.com/topzone.vn" target="_blank" class="link-social">
                                <i class="iconsocial-facebook"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCoWdPNr8jSr7JM0OFlKvQHw" target="_blank"
                                class="link-social">
                                <i class="iconsocial-youtube"></i>
                            </a>
                            <a href="https://zalo.me/2040551312124557463" target="_blank" class="link-social">
                                <i class="iconsocial-zalo"></i>
                            </a>
                        </div>

                    </li>
                    <li>
                        <span>Hệ thống cửa hàng</span>
                        <a href="/he-thong-cua-hang">
                            Xem 100 cửa hàng
                        </a>
                        <a href="/noi-quy-cua-hang">
                            Nội quy cửa hàng
                        </a>
                        <a href="/chat-luong-phuc-vu">
                            Chất lượng phục vụ
                        </a>
                        <a href="/bao-hanh-doi-tra">
                            Chính sách bảo hành &amp; đổi trả
                        </a>
                    </li>
                    <li>
                        <span>Hỗ trợ khách hàng</span>
                        <a href="/dieu-kien-giao-dich">
                            Điều kiện giao dịch chung
                        </a>
                        <a href="/huong-dan-mua-hang">
                            Hướng dẫn mua hàng online
                        </a>
                        <a href="/giao-hang">
                            Chính sách giao hàng
                        </a>
                        <a href="/thanh-toan">
                            Hướng dẫn thanh toán
                        </a>
                    </li>
                    <li>
                        <span>Về thương hiệu TopZone</span>

                        <a href="/tekzone/tat-tan-tat-thong-tin-ve-app-tich-diem-hoan-toan-moi-1480642#gioithieu"
                            class="color-link">
                            Tích điểm Quà tặng VIP
                        </a>
                        <a href="/gioi-thieu">
                            Giới thiệu TopZone
                        </a>
                        <a href="https://www.thegioididong.com/b2b">
                            Bán hàng doanh nghiệp
                        </a>
                        <a href="/bao-mat-thong-tin">
                            Chính sách bảo mật thông tin
                        </a>
                        <a rel="nofollow" href="https://www.topzone.vn/iphone?sclient=mobile">Xem bản mobile</a>
                    </li>
                    <li>
                        <span>Trung tâm bảo hành TopCare</span>
                        <a href="/topcare">
                            Giới thiệu TopCare
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
        <!-- end footer -->
</body>

</html>
