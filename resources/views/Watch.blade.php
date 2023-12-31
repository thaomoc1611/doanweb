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
    <h1 hidden="">Watch</h1>
    <section>
        <a href="javascript:;" class="catename">
            <i class="logo-category">
                <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Category/7077/awatch-120x25.png"
                    width="152" height="32" alt="Watch">
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
                <a href="/apple-watch" data-id="0" class="active">
                    Tất cả
                </a>
                <a href="/apple-watch-ultra" data-id="245020" class="">
                    Apple Watch Ultra
                </a>
                <a href="/apple-watch-series-8" data-id="244889" class="">
                    Apple Watch Series 8
                </a>
                <a href="/apple-watch-se-2022" data-id="245021" class="">
                    Apple Watch SE 2022
                </a>
                <a href="/apple-watch-series-7" data-id="199767" class="">
                    Apple Watch Series 7
                </a>
            </div>

            <!-- Bộ filter -->

            <div class="ft-sort">
                <a href="javascript:;">Xếp theo: Mới ra mắt</a>
                <ul>
                    <li>
                        <a href="javascript:;" class="check" data-id="8">
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
                <li class=" item  __cate_7077" data-index="1" data-id="289814" data-issetup="0" data-maingroup="23"
                    data-subgroup="2391" data-type="1" data-vehicle="1" data-productcode="0232391001999" data-pos="1">


                    <a href="/apple-watch/apple-watch-ultra-size-m" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15"
                        data-name="Apple Watch Ultra GPS + Cellular 49mm Alpine Loop" data-id="289814"
                        data-price="18990000.0" data-brand="Apple" data-cate="Watch" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_7077">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289814/s16/apple-watch-s8-ultra-size-m-cam-thumbtz-650x650.png"
                                alt="Apple Watch Ultra GPS + Cellular 49mm Alpine Loop size M"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289814/s16/apple-watch-s8-ultra-size-m-cam-thumbtz-650x650.png">
                        </div>



                        <h3>
                            Apple Watch Ultra GPS + Cellular 49mm Alpine Loop size M </h3>

                        <div class="box-p">
                            <strong class="price">18.990.000₫</strong>
                            <p class="price-old black">23.990.000₫</p>
                            <span class="percent">-20%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_7077" data-index="2" data-id="289840" data-issetup="0" data-maingroup="23"
                    data-subgroup="2391" data-type="1" data-vehicle="1" data-productcode="0232391001986" data-pos="2">


                    <a href="/apple-watch/apple-watch-s8-lte-41mm-day-thep" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Apple Watch S8 GPS + Cellular 41mm"
                        data-id="289840" data-price="18990000.0" data-brand="Apple" data-cate="Watch" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_7077">
                            <img class="thumb" width="235" height="235"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289840/s16/apple-watch-s8-lte-41mm-day-thep-bac-thumbtz-650x650.png"
                                alt="Apple Watch S8 LTE dây thép">
                        </div>



                        <div class="prods-group" data-mergename="Apple Watch S8 LTE dây thép"
                            data-lstarranged="289840,289844">
                            <ul>
                                <li data-url="/apple-watch/apple-watch-s8-lte-41mm-day-thep" data-id="289840"
                                    data-index="0" class="merge__item item act">41mm</li>
                                <li data-url="//" data-id="289844" data-index="1" class="merge__item item ">45mm</li>
                            </ul>
                        </div>
                        <h3>
                            Apple Watch S8 LTE dây thép </h3>

                        <div class="box-p">
                            <strong class="price">18.990.000₫</strong>
                            <p class="price-old black">21.990.000₫</p>
                            <span class="percent">-13%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_7077" data-index="3" data-id="289832" data-issetup="0" data-maingroup="23"
                    data-subgroup="2391" data-type="1" data-vehicle="1" data-productcode="0232391001985" data-pos="3">


                    <a href="/apple-watch/apple-watch-s8-lte-41mm-vien-thep" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Apple Watch S8 GPS + Cellular 41mm"
                        data-id="289832" data-price="17990000.0" data-brand="Apple" data-cate="Watch" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_7077">
                            <img class="thumb" width="235" height="235"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289832/s16/apple-watch-s8-lte-41mm-vien-thep-xanh-den-thumbtz-650x650.png"
                                alt="Apple Watch S8 LTE viền thép">
                        </div>



                        <div class="prods-group" data-mergename="Apple Watch S8 LTE viền thép"
                            data-lstarranged="289832,289836">
                            <ul>
                                <li data-url="/apple-watch/apple-watch-s8-lte-41mm-vien-thep" data-id="289832"
                                    data-index="0" class="merge__item item act">41mm</li>
                                <li data-url="//" data-id="289836" data-index="1" class="merge__item item ">45mm</li>
                            </ul>
                        </div>
                        <h3>
                            Apple Watch S8 LTE viền thép </h3>

                        <div class="box-p">
                            <strong class="price">17.990.000₫</strong>
                            <p class="price-old black">20.990.000₫</p>
                            <span class="percent">-14%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_7077" data-index="4" data-id="289806" data-issetup="0" data-maingroup="23"
                    data-subgroup="2391" data-type="1" data-vehicle="1" data-productcode="0232391001975" data-pos="4">


                    <a href="/apple-watch/apple-watch-s8-lte-41mm" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Apple Watch Series 8 GPS + Cellular 41mm"
                        data-id="289806" data-price="11990000.0" data-brand="Apple" data-cate="Watch" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_7077">
                            <img class="thumb" width="235" height="235"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289806/s16/apple-watch-s8-lte-41mm-den-xanh-thumbttz-650x650.png"
                                alt="Apple Watch S8 LTE">
                        </div>



                        <div class="prods-group" data-mergename="Apple Watch S8 LTE" data-lstarranged="289806,289825">
                            <ul>
                                <li data-url="/apple-watch/apple-watch-s8-lte-41mm" data-id="289806" data-index="0"
                                    class="merge__item item act">41mm</li>
                                <li data-url="//" data-id="289825" data-index="1" class="merge__item item ">45mm</li>
                            </ul>
                        </div>
                        <h3>
                            Apple Watch S8 LTE </h3>

                        <div class="box-p">
                            <strong class="price">11.990.000₫</strong>
                            <p class="price-old black">14.990.000₫</p>
                            <span class="percent">-20%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_7077" data-index="5" data-id="289804" data-issetup="0" data-maingroup="23"
                    data-subgroup="2391" data-type="1" data-vehicle="1" data-productcode="0232391001967" data-pos="5">


                    <a href="/apple-watch/apple-watch-s8-41mm" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Apple Watch Series 8 GPS" data-id="289804"
                        data-price="9190000.0" data-brand="Apple" data-cate="Watch" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_7077">
                            <img class="thumb" width="235" height="235"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289804/s16/apple-watch-s8-41mm-den-xanh-thumbtz-650x650.png"
                                alt="Apple Watch S8 GPS">
                        </div>



                        <div class="prods-group" data-mergename="Apple Watch S8 GPS" data-lstarranged="289804,289610">
                            <ul>
                                <li data-url="/apple-watch/apple-watch-s8-41mm" data-id="289804" data-index="0"
                                    class="merge__item item act">41mm</li>
                                <li data-url="//" data-id="289610" data-index="1" class="merge__item item ">45mm</li>
                            </ul>
                        </div>
                        <h3>
                            Apple Watch S8 GPS </h3>

                        <div class="box-p">
                            <strong class="price">9.190.000₫</strong>
                            <p class="price-old black">11.990.000₫</p>
                            <span class="percent">-23%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_7077" data-index="6" data-id="289799" data-issetup="0" data-maingroup="23"
                    data-subgroup="2391" data-type="1" data-vehicle="1" data-productcode="0232391001961" data-pos="6">


                    <a href="/apple-watch/apple-watch-se-2022-lte-40mm" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Apple Watch SE 2022 LTE" data-id="289799"
                        data-price="7290000.0" data-brand="Apple" data-cate="Watch" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_7077">
                            <img class="thumb" width="235" height="235"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289799/s16/apple-watch-se-2022-lte-40mm-trang-kem-thumbtz-650x650.png"
                                alt="Apple Watch SE 2022 LTE">
                        </div>



                        <div class="prods-group" data-mergename="Apple Watch SE 2022 LTE"
                            data-lstarranged="289799,289801">
                            <ul>
                                <li data-url="/apple-watch/apple-watch-se-2022-lte-40mm" data-id="289799" data-index="0"
                                    class="merge__item item act">40mm</li>
                                <li data-url="//" data-id="289801" data-index="1" class="merge__item item ">44mm</li>
                            </ul>
                        </div>
                        <h3>
                            Apple Watch SE 2022 LTE </h3>

                        <div class="box-p">
                            <strong class="price">7.290.000₫</strong>
                            <p class="price-old black">8.990.000₫</p>
                            <span class="percent">-18%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_7077" data-index="7" data-id="289612" data-issetup="0" data-maingroup="23"
                    data-subgroup="2391" data-type="1" data-vehicle="1" data-productcode="0232391001957" data-pos="7">


                    <a href="/apple-watch/apple-watch-se-2022" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Apple Watch SE 2022 GPS" data-id="289612"
                        data-price="6090000.0" data-brand="Apple" data-cate="Watch" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_7077">
                            <img class="thumb" width="235" height="235"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289612/s16/apple-watch-se-2022-gps-40mm-thumbtz-1-650x650.png"
                                alt="Apple Watch SE 2022 GPS">
                        </div>



                        <div class="prods-group" data-mergename="Apple Watch SE 2022 GPS"
                            data-lstarranged="289612,289798">
                            <ul>
                                <li data-url="/apple-watch/apple-watch-se-2022" data-id="289612" data-index="0"
                                    class="merge__item item act">40mm</li>
                                <li data-url="//" data-id="289798" data-index="1" class="merge__item item ">44mm</li>
                            </ul>
                        </div>
                        <h3>
                            Apple Watch SE 2022 GPS </h3>

                        <div class="box-p">
                            <strong class="price">6.090.000₫</strong>
                            <p class="price-old black">7.490.000₫</p>
                            <span class="percent">-18%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_7077" data-index="8" data-id="289818" data-issetup="0" data-maingroup="23"
                    data-subgroup="2391" data-type="1" data-vehicle="1" data-productcode="0232391001995" data-pos="8">


                    <a href="/apple-watch/apple-watch-ultra-cao-su" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15"
                        data-name="Apple Watch Ultra GPS + Cellular 49mm Ocean Band" data-id="289818"
                        data-price="18990000.0" data-brand="Apple" data-cate="Watch" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_7077">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289818/s16/apple-watch-s8-ultra-cao-su-trang-thumbtz-650x650.png"
                                alt="Apple Watch Ultra GPS + Cellular 49mm Ocean Band">
                        </div>



                        <h3>
                            Apple Watch Ultra GPS + Cellular 49mm Ocean Band </h3>

                        <div class="box-p">
                            <strong class="price">18.990.000₫</strong>
                            <p class="price-old black">23.990.000₫</p>
                            <span class="percent">-20%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_7077" data-index="9" data-id="249906" data-issetup="0" data-maingroup="23"
                    data-subgroup="2391" data-type="1" data-vehicle="1" data-productcode="0232391001713" data-pos="9">


                    <a href="/apple-watch/apple-watch-s7-41mm" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Apple Watch Series 7 GPS" data-id="249906"
                        data-price="5990000.0" data-brand="Apple" data-cate="Watch" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_7077">
                            <img class="lazyload thumb" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/249906/s16/apple-watch-s7-gps-41mm-vang-nhat-650x650.png"
                                alt="Apple Watch Series 7 GPS 41mm">
                        </div>
                        <h3>
                            Apple Watch Series 7 GPS 41mm </h3>
                        <strong class="price">5.990.000₫</strong>
                    </a>

                </li>
            </ul>

        </div>

        <!-- Khảo sát -->
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
