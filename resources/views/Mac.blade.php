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
    <h1 hidden="">Mac</h1>
    <section>
        <a href="javascript:;" class="catename">
            <i class="logo-category">
                <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Category/10199/WMac-120x50-1.png"
                    width="152" height="32" alt="Mac">
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
                <a href="/mac" data-id="0" class="active">
                    Tất cả
                </a>
                <a href="/macbook-pro" data-id="199753" class="">
                    MacBook Pro
                </a>
                <a href="/macbook-air" data-id="199754" class="">
                    MacBook Air
                </a>
                <a href="/imac" data-id="199215" class="">
                    iMac
                </a>
                <a href="/mac-mini" data-id="199214" class="">
                    Mac mini
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
                <li class=" item  __cate_44" data-index="1" data-id="302149" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042002199" data-pos="1">


                    <a href="/mac/macbook-pro-16-inch-m2-pro" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Pro 16 inch M2 Pro 2023"
                        data-id="302149" data-price="64990000.0" data-brand="MacBook" data-cate="MacBook"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/302149/s16/macbook-pro-16-inch-m2-pro-thumb-xam-650x650.png"
                                alt="MacBook Pro 16 inch M2 Pro 2023 12-core CPU/16GB/512GB/19-core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/302149/s16/macbook-pro-16-inch-m2-pro-thumb-xam-650x650.png">
                        </div>



                        <h3>
                            MacBook Pro 16 inch M2 Pro 2023 </h3>
                        <div class="item-compare">
                            <span>
                                RAM 16 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">64.990.000₫</strong>
                            <p class="price-old black">65.990.000₫</p>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="2" data-id="302146" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042002198" data-pos="2">


                    <a href="/mac/macbook-pro-14-inch-m2-pro" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Pro 14 inch M2 Pro 2023"
                        data-id="302146" data-price="51990000.0" data-brand="MacBook" data-cate="MacBook"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/302146/s16/macbook-pro-14-inch-m2-pro-thumb-xam-1-650x650.png"
                                alt="MacBook Pro 14 inch M2 Pro 2023 10-core CPU/16GB/512GB/16-core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/302146/s16/macbook-pro-14-inch-m2-pro-thumb-xam-1-650x650.png">
                        </div>



                        <h3>
                            MacBook Pro 14 inch M2 Pro 2023 </h3>
                        <div class="item-compare">
                            <span>
                                RAM 16 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">51.990.000₫</strong>
                            <p class="price-old black">52.990.000₫</p>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="3" data-id="289441" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042002084" data-pos="3">


                    <a href="/mac/apple-macbook-air-m2-2022-16gb" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Air M2 2022 10-core GPU"
                        data-id="289441" data-price="39990000.0" data-brand="MacBook" data-cate="MacBook"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/289441/s16/apple-macbook-air-m2-2022-16gb-xanh-650x650.png"
                                alt="MacBook Air M2 2022 16GB/512GB/10-core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/289441/s16/apple-macbook-air-m2-2022-16gb-xanh-650x650.png">
                        </div>



                        <h3>
                            MacBook Air M2 2022 10-core GPU </h3>
                        <div class="item-compare">
                            <span>
                                RAM 16 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">39.990.000₫</strong>
                            <p class="price-old black">46.990.000₫</p>
                            <span class="percent">-14%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="4" data-id="282847" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042001997" data-pos="4">


                    <a href="/mac/apple-macbook-air-m2-2022-10-core-gpu" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Air M2 2022 10-core GPU"
                        data-id="282847" data-price="30590000.0" data-brand="MacBook" data-cate="MacBook"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282847/s16/apple-macbook-air-m2-2022-10-core-gpu-xanh-650x650.png"
                                alt="MacBook Air M2 2022 8GB/512GB/10-core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282847/s16/apple-macbook-air-m2-2022-10-core-gpu-xanh-650x650.png">
                        </div>



                        <h3>
                            MacBook Air M2 2022 10-core GPU </h3>
                        <div class="item-compare">
                            <span>
                                RAM 8 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">30.590.000₫</strong>
                            <p class="price-old black">39.990.000₫</p>
                            <span class="percent">-23%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="5" data-id="282827" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042001992" data-pos="5">


                    <a href="/mac/macbook-air-m2-2022-8-core-gpu" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Air M2 2022 8-core GPU" data-id="282827"
                        data-price="27890000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-vang-650x650.png"
                                alt="MacBook Air M2 2022 8GB/256GB/8-core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-vang-650x650.png">
                        </div>



                        <h3>
                            MacBook Air M2 2022 8-core GPU </h3>
                        <div class="item-compare">
                            <span>
                                RAM 8 GB - SSD 256 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">27.890.000₫</strong>
                            <p class="price-old black">32.990.000₫</p>
                            <span class="percent">-15%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="6" data-id="282828" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042001999" data-pos="6">


                    <a href="/mac/apple-macbook-pro-13-inch-m2-2022" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Pro 13 inch M2 2022" data-id="282828"
                        data-price="29890000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-pro-m2-2022-bac-650x650.png"
                                alt="MacBook Pro 13 inch M2 2022 8GB/256GB/10-core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-pro-m2-2022-bac-650x650.png">
                        </div>



                        <h3>
                            MacBook Pro 13 inch M2 2022 </h3>
                        <div class="item-compare">
                            <span>
                                RAM 8 GB - SSD 256 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">29.890.000₫</strong>
                            <p class="price-old black">35.990.000₫</p>
                            <span class="percent">-16%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="7" data-id="282885" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042002000" data-pos="7">


                    <a href="/mac/apple-macbook-pro-m2-2022" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Pro 13 inch M2 2022" data-id="282885"
                        data-price="34490000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282885/s16/apple-pro-m2-2022-10-core-gpu-xam-650x650.png"
                                alt="MacBook Pro 13 inch M2 2022 8GB/512GB/10-core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282885/s16/apple-pro-m2-2022-10-core-gpu-xam-650x650.png">
                        </div>



                        <h3>
                            MacBook Pro 13 inch M2 2022 </h3>
                        <div class="item-compare">
                            <span>
                                RAM 8 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">34.490.000₫</strong>
                            <p class="price-old black">41.990.000₫</p>
                            <span class="percent">-17%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="8" data-id="283464" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042002005" data-pos="8">


                    <a href="/mac/apple-macbook-pro-m2-2022-16gb" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Pro 13 inch M2 2022" data-id="283464"
                        data-price="38390000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/283464/s16/apple-macbook-pro-m2-2022-16gb-bac-650x650.png"
                                alt="MacBook Pro 13 inch M2 2022 16GB/512GB/10-core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/283464/s16/apple-macbook-pro-m2-2022-16gb-bac-650x650.png">
                        </div>



                        <h3>
                            MacBook Pro 13 inch M2 2022 </h3>
                        <div class="item-compare">
                            <span>
                                RAM 16 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">38.390.000₫</strong>
                            <p class="price-old black">45.990.000₫</p>
                            <span class="percent">-16%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="9" data-id="264420" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042001741" data-pos="9">


                    <a href="/mac/macbook-air-m1-2020-8-core-gpu" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Air M1 2020 8-Core GPU" data-id="264420"
                        data-price="31590000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-spacegray-thumb-650x650.png"
                                alt="MacBook Air M1 2020 16GB/512GB/8-Core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-spacegray-thumb-650x650.png">
                        </div>



                        <h3>
                            MacBook Air M1 2020 8-Core GPU </h3>
                        <div class="item-compare">
                            <span>
                                RAM 16 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">31.590.000₫</strong>
                            <p class="price-old black">36.990.000₫</p>
                            <span class="percent">-14%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="10" data-id="253706" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042001648" data-pos="10">


                    <a href="/mac/apple-macbook-pro-16-m1-pro-2021-10-core-cpu" data-s="Nomal" data-site="16"
                        data-pro="3" data-cache="True" data-sv="tz-web15" data-name="MacBook Pro 16 inch M1 Pro 2021"
                        data-id="253706" data-price="48990000.0" data-brand="MacBook" data-cate="MacBook"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253706/s16/macbook-pro-16-m1-pro-2021-bac-650x650.png"
                                alt="MacBook Pro 16 inch M1 Pro 2021 16GB/1TB"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253706/s16/macbook-pro-16-m1-pro-2021-bac-650x650.png">
                        </div>



                        <h3>
                            MacBook Pro 16 inch M1 Pro 2021 </h3>
                        <div class="item-compare">
                            <span>
                                RAM 16 GB - SSD 1 TB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">48.990.000₫</strong>
                            <p class="price-old black">63.190.000₫</p>
                            <span class="percent">-22%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="11" data-id="253703" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042001643" data-pos="11">


                    <a href="/mac/apple-macbook-pro-14-m1-pro-2021-10-core-cpu" data-s="Nomal" data-site="16"
                        data-pro="3" data-cache="True" data-sv="tz-web15"
                        data-name="MacBook Pro 14 inch M1 Pro 2021 16-Core GPU" data-id="253703" data-price="44990000.0"
                        data-brand="MacBook" data-cate="MacBook" data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253703/s16/apple-macbook-pro-14-m1-pro-2021-xam-thumb-650x650.png"
                                alt="MacBook Pro 14 inch M1 Pro 2021 16GB/1TB/16-Core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253703/s16/apple-macbook-pro-14-m1-pro-2021-xam-thumb-650x650.png">
                        </div>



                        <h3>
                            MacBook Pro 14 inch M1 Pro 2021 16-Core GPU </h3>
                        <div class="item-compare">
                            <span>
                                RAM 16 GB - SSD 1 TB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">44.990.000₫</strong>
                            <p class="price-old black">58.490.000₫</p>
                            <span class="percent">-23%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_44" data-index="12" data-id="253636" data-issetup="0" data-maingroup="22"
                    data-subgroup="42" data-type="1" data-vehicle="1" data-productcode="0220042001646" data-pos="12">


                    <a href="/mac/apple-pro-16-m1-pro-2021-10-core-cpu" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="MacBook Pro 16 inch M1 Pro 2021 16-Core GPU"
                        data-id="253636" data-price="44990000.0" data-brand="MacBook" data-cate="MacBook"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_44">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253636/s16/macbook-pro-16-m1-pro-2021-bac-650x650.png"
                                alt="MacBook Pro 16 inch M1 Pro 2021 16GB/512GB/16-Core GPU"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253636/s16/macbook-pro-16-m1-pro-2021-bac-650x650.png">
                        </div>



                        <h3>
                            MacBook Pro 16 inch M1 Pro 2021 16-Core GPU </h3>
                        <div class="item-compare">
                            <span>
                                RAM 16 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">44.990.000₫</strong>
                            <p class="price-old black">58.490.000₫</p>
                            <span class="percent">-23%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_5698" data-index="13" data-id="238056" data-issetup="0" data-maingroup="364"
                    data-subgroup="3563" data-type="1" data-vehicle="1" data-productcode="3643563000185" data-pos="13">


                    <a href="/mac/imac-24-inch-45k-retina-m1-mgpl3saa" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="iMac 24 inch M1 2021 8-Core GPU"
                        data-id="238056" data-price="31990000.0" data-brand="Apple" data-cate="iMac, Mac mini"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_5698">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/238056/s16/imac-24inch-pink-650x650.png"
                                alt="iMac 24 inch M1 2021 8-Core GPU/8GB/512GB"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/238056/s16/imac-24inch-pink-650x650.png">
                        </div>



                        <h3>
                            iMac 24 inch M1 2021 8-Core GPU </h3>
                        <div class="item-compare">
                            <span>
                                RAM 8 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">31.990.000₫</strong>
                            <p class="price-old black">42.790.000₫</p>
                            <span class="percent">-25%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_5698" data-index="14" data-id="238053" data-issetup="0" data-maingroup="364"
                    data-subgroup="3563" data-type="1" data-vehicle="1" data-productcode="3643563000182" data-pos="14">


                    <a href="/mac/imac-24-inch-45k-retina-m1-mgph3saa" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="iMac 24 inch M1 2021 8-Core GPU"
                        data-id="238053" data-price="27990000.0" data-brand="Apple" data-cate="iMac, Mac mini"
                        data-box="BoxCate" class="main-contain">
                        <div class="item-img item-img_5698">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/238053/s16/imac-24inch-blue-650x650.png"
                                alt="iMac 24 inch M1 2021 8-Core GPU/8GB/256GB"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/238053/s16/imac-24inch-blue-650x650.png">
                        </div>



                        <h3>
                            iMac 24 inch M1 2021 8-Core GPU </h3>
                        <div class="item-compare">
                            <span>
                                RAM 8 GB - SSD 256 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">27.990.000₫</strong>
                            <p class="price-old black">39.990.000₫</p>
                            <span class="percent">-30%</span>
                        </div>
                    </a>

                </li>
                <li class=" item  __cate_5698" data-index="15" data-id="251248" data-issetup="0" data-maingroup="364"
                    data-subgroup="3563" data-type="1" data-vehicle="1" data-productcode="3643563000198" data-pos="15">


                    <a href="/mac/mac-mini-m1-2020-8gb-512gb" data-s="Nomal" data-site="16" data-pro="3"
                        data-cache="True" data-sv="tz-web15" data-name="Mac mini M1 2020" data-id="251248"
                        data-price="13990000.0" data-brand="Apple" data-cate="iMac, Mac mini" data-box="BoxCate"
                        class="main-contain">
                        <div class="item-img item-img_5698">
                            <img class="thumb lazyloaded" width="235" height="235"
                                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/251248/s16/mac-mini-m1-2020-8gb-512gb-ab-thumb-1-650x650.png"
                                alt="Mac mini M1 2020 8GB/512GB"
                                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/251248/s16/mac-mini-m1-2020-8gb-512gb-ab-thumb-1-650x650.png">
                        </div>



                        <h3>
                            Mac mini M1 2020 </h3>
                        <div class="item-compare">
                            <span>
                                RAM 8 GB - SSD 512 GB </span>
                        </div>

                        <div class="box-p">
                            <strong class="price">13.990.000₫</strong>
                            <p class="price-old black">19.290.000₫</p>
                            <span class="percent">-27%</span>
                        </div>
                    </a>

                </li>
            </ul>
        </div>

    <footer>
        <div class="foot">
            <div class="logo-foot">
                <a href="/">
                    <i class="topzone-logo"></i>
                </a>
                <a href="/tekzone/khac-biet-aar-va-apr-tieu-chuan-cua-hang-uy-quyen-apple-1411356">
                    <i class="topzone-autho"></i>
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
                    <a rel="nofollow" href="https://www.topzone.vn/mac?sclient=mobile">Xem bản mobile</a>
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
</body>

</html>
