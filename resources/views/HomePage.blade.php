<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <!-- Link our CSS file -->
    <!-- <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.2-web/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/owlcarousel/owl.carousel.js">
    <link rel="stylesheet" href="/public/owlcarousel/owl.carousel.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="/css/style.css" />
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
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="library//assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="library/assets/owl.theme.default.min.css"
    />
</head>

<body>
    <!-- Navbar Section Starts Here -->
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
    <!-- header -->
    <!-- Start Slide -->
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
          <img
            src="./images/slides/2880-800-1920x533.png"
            alt="Los Angeles"
            style="width: 100%"
          />
        </div>

        <div class="item">
          <img
            src="./images/slides/AW-S8-2880-800-1920x533.png"
            alt="Chicago"
            style="width: 100%"
          />
        </div>

        <div class="item">
          <img
            src="./images/slides/GTN2880-800-1920x533.png"
            alt="New york"
            style="width: 100%"
          />
        </div>
        <div class="item">
          <img
            src="./images/slides/iPad-102880-800-1920x533.png"
            alt="New york"
            style="width: 100%"
          />
        </div>
        <div class="item">
          <img
            src="./images/slides/iPhone-2880-800-1920x533.png"
            alt="New york"
            style="width: 100%"
          />
        </div>
        <div class="item">
          <img
            src="./images/slides/MacBook-Air-M1-2880-800-1920x533.png"
            alt="New york"
            style="width: 100%"
          />
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

    <!-- End Slide -->
    <!--Start list product -->

    <div class="box-cate-product">
      <!-- start list -->
      <ul class="choose-cate">
        <li>
          <a href="/iphone">
            <div class="img-catesp cateiphone">
              <img
                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-cateiphone-1.png"
                alt=""
                width="102"
                height="112"
              />
            </div>
            <span>iPhone</span>
          </a>
        </li>
        <li>
          <a href="/mac">
            <div class="img-catesp catemac">
              <img
                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-catemac-1.png"
                alt=""
                width="150"
                height="97"
              />
            </div>
            <span>Mac</span>
          </a>
        </li>
        <li>
          <a href="/ipad">
            <div class="img-catesp cateipad">
              <img
                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-cateipad.png?v=3"
                alt=""
                width="116"
                height="102"
              />
            </div>
            <span>iPad</span>
          </a>
        </li>
        <li>
          <a href="/apple-watch">
            <div class="img-catesp catewatch">
              <img
                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-catewatch-1.png?v=2"
                alt=""
                width="169"
                height="110"
              />
            </div>
            <span>Watch</span>
          </a>
        </li>
        <li>
          <a href="/am-thanh">
            <div class="img-catesp cateisound">
              <img
                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-catesound.png"
                alt=""
                width="169"
                height="124"
              />
            </div>
            <span>Âm thanh</span>
          </a>
        </li>
        <li>
          <a href="/phu-kien">
            <div class="img-catesp catephukien">
              <img
                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-catephukien-1.png?v=2"
                alt=""
                width="71"
                height="100"
              />
            </div>
            <span>Phụ kiện</span>
          </a>
        </li>
      </ul>
      <!--end list -->
      <!-- start iphone-->
      <div class="box-slide">
        <a href="iphone" class="logo-cate">
          <i class="topzone-iconapple"></i>
          <h2 class="title-text">iPhone</h2>
        </a>
        <div
          class="slide-cate owl-carousel owl-theme owl-loaded owl-drag"
          data-block="iPhone"
        >
          <div class="owl-stage-outer">
            <div
              class="owl-stage"
              style="
                transform: translate3d(0px, 0px, 0px);
                transition: all 1s ease 0s;
                width: 6050px;
              "
            >

            @foreach($iphones as $iphone)
                        <div class="owl-item active" style="width: 292.5px; margin-right: 10px;">
                            <div class="item" data-pos="1" data-block="iPhone">


                                <a href="/iphone/iphone-14-pro-max" class="main-contain" data-s="Nomal" data-site="16"
                                    data-pro="3" data-cache="True" data-name="iPhone 14 Pro Max" data-id="251192"
                                    data-price="26440000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                    data-box="BoxHome">
                                    <label class="no-label"></label>
                                    <div class="img-slide">
                                    <img
                                            class=" ls-is-cached lazyloaded" alt="iPhone 14 Pro Max 128GB" width="300"
                                            height="300"
                                            src="/insertDB/img/{{$iphone->hinhAnh}}">
                                    </div>
                                    <h3>{{$iphone->tenSP}}</h3>
                                    <span class="box-price">
                                    {{$iphone->gia}}.000đ;
                                        <strike>29.740.000₫</strike>
                                        <small>-11%</small>
                                    </span>
                                </a>

                            </div>
                        </div>
                        @endforeach

              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
                    >

                <div class="item" data-pos="1" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-pro-max"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14 Pro Max"
                    data-id="251192"
                    data-price="26440000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/251192/s16/iphone-14-pro-max-128gb-black-thumb-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPhone 14 Pro Max 128GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/251192/s16/iphone-14-pro-max-128gb-black-thumb-650x650.png"
                      />
                    </div>
                    <h3>iPhone 14 Pro Max 128GB</h3>
                    <span class="box-price">
                      26.440.000₫
                      <strike>29.740.000₫</strike>
                      <small>-11%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="2" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-pro-max-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14 Pro Max"
                    data-id="289700"
                    data-price="29690000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/289700/s16/iphone-14-pro-max-black-thumbnew-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPhone 14 Pro Max 256GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/289700/s16/iphone-14-pro-max-black-thumbnew-650x650.png"
                      />
                    </div>
                    <h3>iPhone 14 Pro Max 256GB</h3>
                    <span class="box-price">
                      29.690.000₫
                      <strike>32.890.000₫</strike>
                      <small>-9%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="3" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-pro"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14 Pro"
                    data-id="247508"
                    data-price="24790000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/247508/s16/iphone-14-pro-gold-thumb-1-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPhone 14 Pro 128GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/247508/s16/iphone-14-pro-gold-thumb-1-650x650.png"
                      />
                    </div>
                    <h3>iPhone 14 Pro 128GB</h3>
                    <span class="box-price">
                      24.790.000₫
                      <strike>27.790.000₫</strike>
                      <small>-10%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="4" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14"
                    data-id="240259"
                    data-price="19290000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/240259/s16/iphone-14-red-thumb-1-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPhone 14 128GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/240259/s16/iphone-14-red-thumb-1-650x650.png"
                      />
                    </div>
                    <h3>iPhone 14 128GB</h3>
                    <span class="box-price">
                      19.290.000₫
                      <strike>21.790.000₫</strike>
                      <small>-11%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="5" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-plus"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="False"
                    data-name="iPhone 14 Plus"
                    data-id="245545"
                    data-price="21790000"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/245545/s16/iphone-14-plus-red-thumb-1-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPhone 14 Plus 128GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/245545/s16/iphone-14-plus-red-thumb-1-650x650.png"
                      />
                    </div>
                    <h3>iPhone 14 Plus 128GB</h3>
                    <span class="box-price">
                      21.790.000₫
                      <strike>24.890.000₫</strike>
                      <small>-12%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="6" data-block="iPhone">
                  <a
                    href="/iphone/iphone-13"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 13"
                    data-id="223602"
                    data-price="16990000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/223602/s16/iphone-13-blue-1-1-2-3-4-5-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPhone 13 128GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/223602/s16/iphone-13-blue-1-1-2-3-4-5-650x650.png"
                      />
                    </div>
                    <h3>iPhone 13 128GB</h3>
                    <span class="box-price">
                      16.990.000₫
                      <strike>18.890.000₫</strike>
                      <small>-10%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="7" data-block="iPhone">
                  <a
                    href="/iphone/iphone-11"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 11"
                    data-id="153856"
                    data-price="10290000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/153856/s16/iphone-11-black-1-1-2-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPhone 11 64GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/153856/s16/iphone-11-black-1-1-2-650x650.png"
                      />
                    </div>
                    <h3>iPhone 11 64GB</h3>
                    <span class="box-price">
                      10.290.000₫
                      <strike>11.890.000₫</strike>
                      <small>-13%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="8" data-block="iPhone">
                  <a
                    href="/iphone/iphone-12"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 12"
                    data-id="213031"
                    data-price="14990000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/213031/s16/iphone-12-red-3-1-650x650.png"
                        class="lazyload"
                        alt="iPhone 12 64GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 12 64GB</h3>
                    <span class="box-price">
                      14.990.000₫
                      <strike>17.990.000₫</strike>
                      <small>-16%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="9" data-block="iPhone">
                  <a
                    href="/iphone/iphone-11-128gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 11"
                    data-id="210644"
                    data-price="11990000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/210644/s16/iphone-11-black-1-1-2-3-650x650.png"
                        class="lazyload"
                        alt="iPhone 11 128GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 11 128GB</h3>
                    <span class="box-price">
                      11.990.000₫
                      <strike>13.890.000₫</strike>
                      <small>-13%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="10" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-pro-max-512gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14 Pro Max"
                    data-id="289702"
                    data-price="35790000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/289702/s16/iphone-14-pro-max-purple-thumbnew-650x650.png"
                        class="lazyload"
                        alt="iPhone 14 Pro Max 512GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 14 Pro Max 512GB</h3>
                    <span class="box-price">
                      35.790.000₫
                      <strike>37.990.000₫</strike>
                      <small>-5%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="11" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-pro-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14 Pro"
                    data-id="289691"
                    data-price="27690000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/289691/s16/iphone-14-pro-purple-thumb-650x650.png"
                        class="lazyload"
                        alt="iPhone 14 Pro 256GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 14 Pro 256GB</h3>
                    <span class="box-price">
                      27.690.000₫
                      <strike>29.890.000₫</strike>
                      <small>-7%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="12" data-block="iPhone">
                  <a
                    href="/iphone/iphone-12-128gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 12"
                    data-id="228736"
                    data-price="15990000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/228736/s16/iphone-12-green-3-650x650.png"
                        class="lazyload"
                        alt="iPhone 12 128GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 12 128GB</h3>
                    <span class="box-price">
                      15.990.000₫
                      <strike>18.990.000₫</strike>
                      <small>-15%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="13" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-pro-max-1tb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14 Pro Max"
                    data-id="289705"
                    data-price="41790000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/289705/s16/iphone-14-pro-max-gold-avt-650x650.png"
                        class="lazyload"
                        alt="iPhone 14 Pro Max 1TB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 14 Pro Max 1TB</h3>
                    <span class="box-price">
                      41.790.000₫
                      <strike>43.790.000₫</strike>
                      <small>-4%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="14" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14"
                    data-id="289663"
                    data-price="22290000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/289663/s16/iphone-14-blue-thumb-1-650x650.png"
                        class="lazyload"
                        alt="iPhone 14 256GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 14 256GB</h3>
                    <span class="box-price">
                      22.290.000₫
                      <strike>24.890.000₫</strike>
                      <small>-10%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="15" data-block="iPhone">
                  <a
                    href="/iphone/iphone-13-mini"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 13 mini"
                    data-id="236780"
                    data-price="15990000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/236780/s16/iphone-13-mini-pink-thumb-650x650.png"
                        class="lazyload"
                        alt="iPhone 13 mini 128GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 13 mini 128GB</h3>
                    <span class="box-price">
                      15.990.000₫
                      <strike>16.890.000₫</strike>
                      <small>-5%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="16" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-plus-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14 Plus"
                    data-id="289710"
                    data-price="24490000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/289710/s16/iphone-14-plus-red-thumb-1-650x650.png"
                        class="lazyload"
                        alt="iPhone 14 Plus 256GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 14 Plus 256GB</h3>
                    <span class="box-price">
                      24.490.000₫
                      <strike>27.890.000₫</strike>
                      <small>-12%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="17" data-block="iPhone">
                  <a
                    href="/iphone/iphone-13-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 13"
                    data-id="250258"
                    data-price="19990000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/250258/s16/iphone-13-blue-1-1-2-3-4-5-650x650.png"
                        class="lazyload"
                        alt="iPhone 13 256GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 13 256GB</h3>
                    <span class="box-price">
                      19.990.000₫
                      <strike>20.490.000₫</strike>
                      <small>-2%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="18" data-block="iPhone">
                  <a
                    href="/iphone/iphone-14-pro-512gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 14 Pro"
                    data-id="289694"
                    data-price="33490000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/289694/s16/iphone-14-pro-purple-thumb-650x650.png"
                        class="lazyload"
                        alt="iPhone 14 Pro 512GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 14 Pro 512GB</h3>
                    <span class="box-price">
                      33.490.000₫
                      <strike>35.990.000₫</strike>
                      <small>-6%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="19" data-block="iPhone">
                  <a
                    href="/iphone/iphone-13-mini-512gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 13 mini"
                    data-id="250255"
                    data-price="16990000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/250255/s16/iphone-13-mini-red-thumb-650x650.png"
                        class="lazyload"
                        alt="iPhone 13 mini 512GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 13 mini 512GB</h3>
                    <span class="box-price">
                      16.990.000₫
                      <strike>20.990.000₫</strike>
                      <small>-19%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="20" data-block="iPhone">
                  <a
                    href="/iphone/iphone-13-pro-max-1tb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPhone 13 Pro Max"
                    data-id="250728"
                    data-price="27990000.0"
                    data-brand="iPhone (Apple)"
                    data-cate="iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/42/250728/s16/iphone-13-pro-max-gold-1-2-3-4-5-650x650.png"
                        class="lazyload"
                        alt="iPhone 13 Pro Max 1TB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPhone 13 Pro Max 1TB</h3>
                    <span class="box-price">
                      27.990.000₫
                      <strike>31.990.000₫</strike>
                      <small>-12%</small>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev disabled">
              <span aria-label="Previous">‹</span></button
            ><button type="button" role="presentation" class="owl-next">
              <span aria-label="Next">›</span>
            </button>
          </div>
          <div class="owl-dots disabled"></div>
        </div>
      </div>
      <!-- end Iphone -->
      <!-- start Mac -->
      <div class="box-slide">
        <a href="mac" class="logo-cate">
          <i class="topzone-iconapple"></i>
          <h2 class="title-text">Mac</h2>
        </a>
        <div
          class="slide-cate owl-carousel owl-theme owl-loaded owl-drag"
          data-block="Mac"
        >
          <div class="owl-stage-outer">
            <div
              class="owl-stage"
              style="
                transform: translate3d(0px, 0px, 0px);
                transition: all 1s ease 0s;
                width: 5445px;
              "
            >
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="1" data-block="Mac">
                  <a
                    href="/mac/apple-macbook-air-2020-mgn63saa"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Air M1 2020 7-Core GPU"
                    data-id="231244"
                    data-price="18490000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/231244/s16/macbook-air-m1-2020-spacegray-thumb-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="MacBook Air M1 2020 8GB/256GB/7-Core GPU"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/231244/s16/macbook-air-m1-2020-spacegray-thumb-650x650.png"
                      />
                    </div>
                    <h3>MacBook Air M1 2020 8GB/256GB/7-Core GPU</h3>
                    <span class="box-price">
                      18.490.000₫
                      <strike>22.990.000₫</strike>
                      <small>-19%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="2" data-block="Mac">
                  <a
                    href="/mac/macbook-air-m2-2022-8-core-gpu"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Air M2 2022 8-core GPU"
                    data-id="282827"
                    data-price="27890000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-vang-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="MacBook Air M2 2022 8GB/256GB/8-core GPU"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-vang-650x650.png"
                      />
                    </div>
                    <h3>MacBook Air M2 2022 8GB/256GB/8-core GPU</h3>
                    <span class="box-price">
                      27.890.000₫
                      <strike>32.990.000₫</strike>
                      <small>-15%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="3" data-block="Mac">
                  <a
                    href="/mac/apple-pro-16-m1-pro-2021-10-core-cpu"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 16 inch M1 Pro 2021 16-Core GPU"
                    data-id="253636"
                    data-price="44990000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253636/s16/macbook-pro-16-m1-pro-2021-bac-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="MacBook Pro 16 inch M1 Pro 2021 16GB/512GB/16-Core GPU"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253636/s16/macbook-pro-16-m1-pro-2021-bac-650x650.png"
                      />
                    </div>
                    <h3>
                      MacBook Pro 16 inch M1 Pro 2021 16GB/512GB/16-Core GPU
                    </h3>
                    <span class="box-price">
                      44.990.000₫
                      <strike>58.490.000₫</strike>
                      <small>-23%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="4" data-block="Mac">
                  <a
                    href="/mac/imac-24-inch-45k-retina-m1-mgph3saa"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iMac 24 inch M1 2021 8-Core GPU"
                    data-id="238053"
                    data-price="29990000.0"
                    data-brand="Apple"
                    data-cate="iMac, Mac mini"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/238053/s16/imac-24inch-blue-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iMac 24 inch M1 2021 8-Core GPU/8GB/256GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/238053/s16/imac-24inch-blue-650x650.png"
                      />
                    </div>
                    <h3>iMac 24 inch M1 2021 8-Core GPU/8GB/256GB</h3>
                    <span class="box-price">
                      29.990.000₫
                      <strike>39.990.000₫</strike>
                      <small>-25%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="5" data-block="Mac">
                  <a
                    href="/mac/apple-macbook-pro-13-inch-m2-2022"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 13 inch M2 2022"
                    data-id="282828"
                    data-price="29890000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-pro-m2-2022-bac-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="MacBook Pro 13 inch M2 2022 8GB/256GB/10-core GPU"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-pro-m2-2022-bac-650x650.png"
                      />
                    </div>
                    <h3>MacBook Pro 13 inch M2 2022 8GB/256GB/10-core GPU</h3>
                    <span class="box-price">
                      29.890.000₫
                      <strike>35.990.000₫</strike>
                      <small>-16%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="6" data-block="Mac">
                  <a
                    href="/mac/apple-macbook-air-m2-2022-16gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Air M2 2022 10-core GPU"
                    data-id="289441"
                    data-price="39990000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/289441/s16/apple-macbook-air-m2-2022-16gb-vàng-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="MacBook Air M2 2022 16GB/512GB/10-core GPU"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/289441/s16/apple-macbook-air-m2-2022-16gb-vàng-650x650.png"
                      />
                    </div>
                    <h3>MacBook Air M2 2022 16GB/512GB/10-core GPU</h3>
                    <span class="box-price">
                      39.990.000₫
                      <strike>46.990.000₫</strike>
                      <small>-14%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="7" data-block="Mac">
                  <a
                    href="/mac/apple-macbook-pro-m2-2022-16gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 13 inch M2 2022"
                    data-id="283464"
                    data-price="38390000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/283464/s16/apple-macbook-pro-m2-2022-16gb-bac-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="MacBook Pro 13 inch M2 2022 16GB/512GB/10-core GPU"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/283464/s16/apple-macbook-pro-m2-2022-16gb-bac-650x650.png"
                      />
                    </div>
                    <h3>MacBook Pro 13 inch M2 2022 16GB/512GB/10-core GPU</h3>
                    <span class="box-price">
                      38.390.000₫
                      <strike>45.990.000₫</strike>
                      <small>-16%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="8" data-block="Mac">
                  <a
                    href="/mac/mac-mini-m1-2020-8gb-512gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Mac mini M1 2020"
                    data-id="251248"
                    data-price="13990000.0"
                    data-brand="Apple"
                    data-cate="iMac, Mac mini"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/251248/s16/mac-mini-m1-2020-8gb-512gb-ab-thumb-1-650x650.png"
                        class="lazyloaded"
                        alt="Mac mini M1 2020 8GB/512GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/251248/s16/mac-mini-m1-2020-8gb-512gb-ab-thumb-1-650x650.png"
                      />
                    </div>
                    <h3>Mac mini M1 2020 8GB/512GB</h3>
                    <span class="box-price">
                      13.990.000₫
                      <strike>19.290.000₫</strike>
                      <small>-27%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="9" data-block="Mac">
                  <a
                    href="/mac/imac-24-inch-45k-retina-m1-mgpl3saa"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iMac 24 inch M1 2021 8-Core GPU"
                    data-id="238056"
                    data-price="34990000.0"
                    data-brand="Apple"
                    data-cate="iMac, Mac mini"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/238056/s16/imac-24inch-pink-650x650.png"
                        class="lazyloaded"
                        alt="iMac 24 inch M1 2021 8-Core GPU/8GB/512GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/5698/238056/s16/imac-24inch-pink-650x650.png"
                      />
                    </div>
                    <h3>iMac 24 inch M1 2021 8-Core GPU/8GB/512GB</h3>
                    <span class="box-price">
                      34.990.000₫
                      <strike>42.790.000₫</strike>
                      <small>-18%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="10" data-block="Mac">
                  <a
                    href="/mac/apple-macbook-pro-14-m1-pro-2021-10-core-cpu"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 14 inch M1 Pro 2021 16-Core GPU"
                    data-id="253703"
                    data-price="44990000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253703/s16/apple-macbook-pro-14-m1-pro-2021-xam-thumb-650x650.png"
                        class="lazyloaded"
                        alt="MacBook Pro 14 inch M1 Pro 2021 16GB/1TB/16-Core GPU"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253703/s16/apple-macbook-pro-14-m1-pro-2021-xam-thumb-650x650.png"
                      />
                    </div>
                    <h3>
                      MacBook Pro 14 inch M1 Pro 2021 16GB/1TB/16-Core GPU
                    </h3>
                    <span class="box-price">
                      44.990.000₫
                      <strike>58.490.000₫</strike>
                      <small>-23%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="11" data-block="Mac">
                  <a
                    href="/mac/macbook-air-m1-2020-8-core-gpu"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Air M1 2020 8-Core GPU"
                    data-id="264420"
                    data-price="31590000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-spacegray-thumb-650x650.png"
                        class="lazyloaded"
                        alt="MacBook Air M1 2020 16GB/512GB/8-Core GPU"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-spacegray-thumb-650x650.png"
                      />
                    </div>
                    <h3>MacBook Air M1 2020 16GB/512GB/8-Core GPU</h3>
                    <span class="box-price">
                      31.590.000₫
                      <strike>36.990.000₫</strike>
                      <small>-14%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="12" data-block="Mac">
                  <a
                    href="/mac/apple-macbook-air-m2-2022-10-core-gpu"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Air M2 2022 10-core GPU"
                    data-id="282847"
                    data-price="30590000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282847/s16/apple-macbook-air-m2-2022-10-core-gpu-xanh-650x650.png"
                        class="lazyloaded"
                        alt="MacBook Air M2 2022 8GB/512GB/10-core GPU"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282847/s16/apple-macbook-air-m2-2022-10-core-gpu-xanh-650x650.png"
                      />
                    </div>
                    <h3>MacBook Air M2 2022 8GB/512GB/10-core GPU</h3>
                    <span class="box-price">
                      30.590.000₫
                      <strike>39.990.000₫</strike>
                      <small>-23%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="13" data-block="Mac">
                  <a
                    href="/mac/apple-macbook-pro-2020-z11c"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 13 inch M1 2020"
                    data-id="231255"
                    data-price="34990000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/231255/s16/macbook-pro-13-spgry-m1-thumb-650x650.png"
                        class="lazyload"
                        alt="MacBook Pro 13 inch M1 2020 16GB/512GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>MacBook Pro 13 inch M1 2020 16GB/512GB</h3>
                    <span class="box-price">
                      34.990.000₫
                      <strike>42.690.000₫</strike>
                      <small>-18%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="14" data-block="Mac">
                  <a
                    href="/mac/macbook-pro-14-inch-m2-pro"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 14 inch M2 Pro 2023"
                    data-id="302146"
                    data-price="51990000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/302146/s16/macbook-pro-14-inch-m2-pro-thumb-xam-1-650x650.png"
                        class="lazyload"
                        alt="MacBook Pro 14 inch M2 Pro 2023 10-core CPU/16GB/512GB/16-core GPU"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>
                      MacBook Pro 14 inch M2 Pro 2023 10-core
                      CPU/16GB/512GB/16-core GPU
                    </h3>
                    <span class="box-price">
                      51.990.000₫
                      <strike>52.990.000₫</strike>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="15" data-block="Mac">
                  <a
                    href="/mac/apple-macbook-pro-16-m1-pro-2021-10-core-cpu"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 16 inch M1 Pro 2021"
                    data-id="253706"
                    data-price="48990000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/253706/s16/macbook-pro-16-m1-pro-2021-bac-650x650.png"
                        class="lazyload"
                        alt="MacBook Pro 16 inch M1 Pro 2021 16GB/1TB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>MacBook Pro 16 inch M1 Pro 2021 16GB/1TB</h3>
                    <span class="box-price">
                      48.990.000₫
                      <strike>63.190.000₫</strike>
                      <small>-22%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="16" data-block="Mac">
                  <a
                    href="/mac/apple-macbook-pro-m2-2022"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 13 inch M2 2022"
                    data-id="282885"
                    data-price="34490000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/282885/s16/apple-pro-m2-2022-10-core-gpu-xam-650x650.png"
                        class="lazyload"
                        alt="MacBook Pro 13 inch M2 2022 8GB/512GB/10-core GPU"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>MacBook Pro 13 inch M2 2022 8GB/512GB/10-core GPU</h3>
                    <span class="box-price">
                      34.490.000₫
                      <strike>41.990.000₫</strike>
                      <small>-17%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="17" data-block="Mac">
                  <a
                    href="/mac/macbook-pro-16-inch-m2-pro-1-tb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 16 inch 2023 M2 Pro 19-core GPU"
                    data-id="302150"
                    data-price="65990000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/302150/s16/macbook-pro-16-inch-m2-pro-1-tb-xam-thumb-650x650.png"
                        class="lazyload"
                        alt="MacBook Pro 16 inch 2023 M2 Pro 12-core CPU/16GB/1TB/19-core GPU"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>
                      MacBook Pro 16 inch 2023 M2 Pro 12-core
                      CPU/16GB/1TB/19-core GPU
                    </h3>
                    <span class="box-price">
                      65.990.000₫
                      <strike>70.990.000₫</strike>
                      <small>-7%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="18" data-block="Mac">
                  <a
                    href="/mac/macbook-pro-16-inch-m2-pro"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="MacBook Pro 16 inch M2 Pro 2023"
                    data-id="302149"
                    data-price="64990000.0"
                    data-brand="MacBook"
                    data-cate="MacBook"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/44/302149/s16/macbook-pro-16-inch-m2-pro-thumb-xam-650x650.png"
                        class="lazyload"
                        alt="MacBook Pro 16 inch M2 Pro 2023 12-core CPU/16GB/512GB/19-core GPU"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>
                      MacBook Pro 16 inch M2 Pro 2023 12-core
                      CPU/16GB/512GB/19-core GPU
                    </h3>
                    <span class="box-price">
                      64.990.000₫
                      <strike>65.990.000₫</strike>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev disabled">
              <span aria-label="Previous">‹</span></button
            ><button type="button" role="presentation" class="owl-next">
              <span aria-label="Next">›</span>
            </button>
          </div>
          <div class="owl-dots disabled"></div>
        </div>
      </div>
      <!-- end mac -->
      <!-- start ipad -->
      <div class="box-slide">
        <a href="ipad" class="logo-cate">
          <i class="topzone-iconapple"></i>
          <h2 class="title-text">iPad</h2>
        </a>
        <div
          class="slide-cate owl-carousel owl-theme owl-loaded owl-drag"
          data-block="iPad"
        >
          <div class="owl-stage-outer">
            <div
              class="owl-stage"
              style="
                transform: translate3d(0px, 0px, 0px);
                transition: all 1s ease 0s;
                width: 6050px;
              "
            >
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="1" data-block="iPad">
                  <a
                    href="/ipad/ipad-gen-9"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad 9 WiFi"
                    data-id="247517"
                    data-price="7190000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/247517/s16/ipad-gen-9-silver-1-2-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPad 9 WiFi 64GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/247517/s16/ipad-gen-9-silver-1-2-650x650.png"
                      />
                    </div>
                    <h3>iPad 9 WiFi 64GB</h3>
                    <span class="box-price">
                      7.190.000₫
                      <strike>7.590.000₫</strike>
                      <small>-5%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="2" data-block="iPad">
                  <a
                    href="/ipad/ipad-gen-10"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad 10 WiFi 64GB"
                    data-id="294103"
                    data-price="11090000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/294103/s16/iPad-gen-10-sliver-thumb-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPad 10 WiFi 64GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/294103/s16/iPad-gen-10-sliver-thumb-650x650.png"
                      />
                    </div>
                    <h3>iPad 10 WiFi 64GB</h3>
                    <span class="box-price">
                      11.090.000₫
                      <strike>11.390.000₫</strike>
                      <small>-2%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="3" data-block="iPad">
                  <a
                    href="/ipad/ipad-pro-m2-11-inch"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Pro M2 11 inch WiFi 128GB"
                    data-id="294104"
                    data-price="20690000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/294104/s16/iPad-Pro-M2-11-sliver-thumb-1-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPad Pro M2 11 inch WiFi 128GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/294104/s16/iPad-Pro-M2-11-sliver-thumb-1-650x650.png"
                      />
                    </div>
                    <h3>iPad Pro M2 11 inch WiFi 128GB</h3>
                    <span class="box-price">
                      20.690.000₫
                      <strike>21.190.000₫</strike>
                      <small>-2%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="4" data-block="iPad">
                  <a
                    href="/ipad/ipad-air-5"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Air 5 WiFi"
                    data-id="248096"
                    data-price="14190000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/248096/s16/ipad-air-5-wifi-startlight-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPad Air 5 WiFi 64GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/248096/s16/ipad-air-5-wifi-startlight-650x650.png"
                      />
                    </div>
                    <h3>iPad Air 5 WiFi 64GB</h3>
                    <span class="box-price">
                      14.190.000₫
                      <strike>15.190.000₫</strike>
                      <small>-6%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="5" data-block="iPad">
                  <a
                    href="/ipad/ipad-mini-6-cellular-64gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad mini 6 WiFi + Cellular"
                    data-id="250734"
                    data-price="15690000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/250734/s16/ipad-mini-6-5g-pink-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPad mini 6 WiFi + Cellular 64GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/250734/s16/ipad-mini-6-5g-pink-650x650.png"
                      />
                    </div>
                    <h3>iPad mini 6 WiFi + Cellular 64GB</h3>
                    <span class="box-price">
                      15.690.000₫
                      <strike>16.390.000₫</strike>
                      <small>-4%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="6" data-block="iPad">
                  <a
                    href="/ipad/ipad-pro-m1-129-inch-wifi-128gb-2021"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Pro M1 12.9 inch WiFi"
                    data-id="237699"
                    data-price="25490000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/237699/s16/ipad-pro-m1-129-inch-wifi-silver-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPad Pro M1 12.9 inch WiFi 128GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/237699/s16/ipad-pro-m1-129-inch-wifi-silver-650x650.png"
                      />
                    </div>
                    <h3>iPad Pro M1 12.9 inch WiFi 128GB</h3>
                    <span class="box-price">
                      25.490.000₫
                      <strike>30.990.000₫</strike>
                      <small>-17%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="7" data-block="iPad">
                  <a
                    href="/ipad/ipad-9-wifi-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad 9 WiFi"
                    data-id="250730"
                    data-price="11190000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/250730/s16/ipad-gen-9-silver-1-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="iPad 9 WiFi 256GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/250730/s16/ipad-gen-9-silver-1-650x650.png"
                      />
                    </div>
                    <h3>iPad 9 WiFi 256GB</h3>
                    <span class="box-price">
                      11.190.000₫
                      <strike>11.990.000₫</strike>
                      <small>-6%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="8" data-block="iPad">
                  <a
                    href="/ipad/ipad-10-wifi-cellular-64gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad 10 WiFi + Cellular"
                    data-id="295453"
                    data-price="14290000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/295453/s16/iPad-gen-10-5G-pink-thumb-650x650.png"
                        class="lazyloaded"
                        alt="iPad 10 WiFi + Cellular 64GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/295453/s16/iPad-gen-10-5G-pink-thumb-650x650.png"
                      />
                    </div>
                    <h3>iPad 10 WiFi + Cellular 64GB</h3>
                    <span class="box-price">
                      14.290.000₫
                      <strike>15.290.000₫</strike>
                      <small>-6%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="9" data-block="iPad">
                  <a
                    href="/ipad/ipad-mini-6"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad mini 6 WiFi"
                    data-id="248091"
                    data-price="12090000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/248091/s16/ipad-mini-6-startlight-650x650.png"
                        class="lazyloaded"
                        alt="iPad mini 6 WiFi 64GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/248091/s16/ipad-mini-6-startlight-650x650.png"
                      />
                    </div>
                    <h3>iPad mini 6 WiFi 64GB</h3>
                    <span class="box-price">
                      12.090.000₫
                      <strike>12.390.000₫</strike>
                      <small>-2%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="10" data-block="iPad">
                  <a
                    href="/ipad/ipad-air-5-m1-wifi-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Air 5 WiFi"
                    data-id="274154"
                    data-price="17990000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/274154/s16/air-5-m1-wifi-hong-thumb-650x650.png"
                        class="lazyloaded"
                        alt="iPad Air 5 WiFi 256GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/274154/s16/air-5-m1-wifi-hong-thumb-650x650.png"
                      />
                    </div>
                    <h3>iPad Air 5 WiFi 256GB</h3>
                    <span class="box-price">
                      17.990.000₫
                      <strike>18.990.000₫</strike>
                      <small>-5%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="11" data-block="iPad">
                  <a
                    href="/ipad/ipad-pro-m1-129-inch-wifi-cellular-128gb-2021"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Pro M1 12.9 inch WiFi + Cellular"
                    data-id="238649"
                    data-price="29290000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/238649/s16/ipad-pro-m1-129-inch-wifi-cellular-silver-650x650.png"
                        class="lazyloaded"
                        alt="iPad Pro M1 12.9 inch WiFi + Cellular 128GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/238649/s16/ipad-pro-m1-129-inch-wifi-cellular-silver-650x650.png"
                      />
                    </div>
                    <h3>iPad Pro M1 12.9 inch WiFi + Cellular 128GB</h3>
                    <span class="box-price">
                      29.290.000₫
                      <strike>34.990.000₫</strike>
                      <small>-16%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="12" data-block="iPad">
                  <a
                    href="/ipad/pro-m1-129-inch-wifi-512gb-2021"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Pro M1 12.9 inch WiFi"
                    data-id="259650"
                    data-price="32690000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/259650/s16/ipad-pro-m1-129-inch-wifi-gray-1-2-650x650.png"
                        class="lazyloaded"
                        alt="iPad Pro M1 12.9 inch WiFi 512GB"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/259650/s16/ipad-pro-m1-129-inch-wifi-gray-1-2-650x650.png"
                      />
                    </div>
                    <h3>iPad Pro M1 12.9 inch WiFi 512GB</h3>
                    <span class="box-price">
                      32.690.000₫
                      <strike>38.990.000₫</strike>
                      <small>-16%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="13" data-block="iPad">
                  <a
                    href="/ipad/ipad-air-5-m1-wifi-cellular-64gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Air 5 WiFi + Cellular"
                    data-id="274155"
                    data-price="17490000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/274155/s16/air-5-m1-wifi-cellular-xanh-thumb-650x650.png"
                        class="lazyload"
                        alt="iPad Air 5 WiFi + Cellular 64GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPad Air 5 WiFi + Cellular 64GB</h3>
                    <span class="box-price">
                      17.490.000₫
                      <strike>18.990.000₫</strike>
                      <small>-7%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="14" data-block="iPad">
                  <a
                    href="/ipad/ipad-9-wifi-cellular-64gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad 9 WiFi + Cellular"
                    data-id="250731"
                    data-price="9990000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/250731/s16/ipad-9-wifi-cellular-silver-1-650x650.png"
                        class="lazyload"
                        alt="iPad 9 WiFi + Cellular 64GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPad 9 WiFi + Cellular 64GB</h3>
                    <span class="box-price">
                      9.990.000₫
                      <strike>11.490.000₫</strike>
                      <small>-13%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="15" data-block="iPad">
                  <a
                    href="/ipad/ipad-air-5-m1-wifi-cellular-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Air 5 WiFi + Cellular"
                    data-id="274156"
                    data-price="21890000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/274156/s16/air-5-m1-wifi-cellular-xanh-thumb-650x650.png"
                        class="lazyload"
                        alt="iPad Air 5 WiFi + Cellular 256GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPad Air 5 WiFi + Cellular 256GB</h3>
                    <span class="box-price">
                      21.890.000₫
                      <strike>23.390.000₫</strike>
                      <small>-6%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="16" data-block="iPad">
                  <a
                    href="/ipad/ipad-10"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad 10 WiFi 256GB"
                    data-id="293543"
                    data-price="15090000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/293543/s16/iPad-gen-10-pink-thumb-650x650.png"
                        class="lazyload"
                        alt="iPad 10 WiFi 256GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPad 10 WiFi 256GB</h3>
                    <span class="box-price">
                      15.090.000₫
                      <strike>15.390.000₫</strike>
                      <small>-1%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="17" data-block="iPad">
                  <a
                    href="/ipad/ipad-9-wifi-cellular-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad 9 WiFi + Cellular"
                    data-id="250732"
                    data-price="14290000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/250732/s16/ipad-9-wifi-cellular-grey-1-2-650x650.png"
                        class="lazyload"
                        alt="iPad 9 WiFi + Cellular 256GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPad 9 WiFi + Cellular 256GB</h3>
                    <span class="box-price">
                      14.290.000₫
                      <strike>18.290.000₫</strike>
                      <small>-21%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="18" data-block="iPad">
                  <a
                    href="/ipad/pro-m1-129-inch-wifi-2tb-2021"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Pro M1 12.9 inch WiFi 2TB (2021)"
                    data-id="269332"
                    data-price="54990000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/269332/s16/ipad-pro-m1-129-inch-wifi-silver-650x650.png"
                        class="lazyload"
                        alt="iPad Pro M1 12.9 inch WiFi 2TB (2021)"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPad Pro M1 12.9 inch WiFi 2TB (2021)</h3>
                    <span class="box-price">
                      54.990.000₫
                      <strike>59.990.000₫</strike>
                      <small>-8%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="19" data-block="iPad">
                  <a
                    href="/ipad/ipad-pro-m1-129-inch-wifi-256gb-2021"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Pro M1 12.9 inch WiFi"
                    data-id="238645"
                    data-price="27990000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/238645/s16/ipad-pro-m1-129-inch-wifi-silver-650x650.png"
                        class="lazyload"
                        alt="iPad Pro M1 12.9 inch WiFi 256GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPad Pro M1 12.9 inch WiFi 256GB</h3>
                    <span class="box-price">
                      27.990.000₫
                      <strike>33.990.000₫</strike>
                      <small>-17%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="20" data-block="iPad">
                  <a
                    href="/ipad/ipad-mini-6-wifi-256gb"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="iPad Mini 6 WiFi"
                    data-id="250733"
                    data-price="16390000.0"
                    data-brand="iPad (Apple)"
                    data-cate="iPad"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/522/250733/s16/ipad-mini-6-startlight-650x650.png"
                        class="lazyload"
                        alt="iPad mini 6 WiFi 256GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>iPad mini 6 WiFi 256GB</h3>
                    <span class="box-price">
                      16.390.000₫
                      <strike>16.690.000₫</strike>
                      <small>-1%</small>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev disabled">
              <span aria-label="Previous">‹</span></button
            ><button type="button" role="presentation" class="owl-next">
              <span aria-label="Next">›</span>
            </button>
          </div>
          <div class="owl-dots disabled"></div>
        </div>
      </div>
      <!-- end ipad -->
      <!-- start phu kien -->
      <div class="box-slide">
        <a href="apple-watch" class="logo-cate">
          <i class="topzone-iconapple"></i>
          <h2 class="title-text">WATCH</h2>
        </a>
        <div
          class="slide-cate owl-carousel owl-theme owl-loaded owl-drag"
          data-block="WATCH"
        >
          <div class="owl-stage-outer">
            <div
              class="owl-stage"
              style="
                transform: translate3d(0px, 0px, 0px);
                transition: all 1s ease 0s;
                width: 4235px;
              "
            >
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="1" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-s8-41mm"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch Series 8 GPS"
                    data-id="289804"
                    data-price="9190000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289804/s16/apple-watch-s8-41mm-den-xanh-thumbtz-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="Apple Watch Series 8 GPS 41mm"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289804/s16/apple-watch-s8-41mm-den-xanh-thumbtz-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch Series 8 GPS 41mm</h3>
                    <span class="box-price">
                      9.190.000₫
                      <strike>11.990.000₫</strike>
                      <small>-23%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="2" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-se-2022-44mm-vien-nhom"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch SE 2022 GPS 44mm"
                    data-id="289798"
                    data-price="6790000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289798/s16/apple-watch-se-2022-44mm-vien-nhom-trang-thumbtz-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="Apple Watch SE 2022 GPS 44mm"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289798/s16/apple-watch-se-2022-44mm-vien-nhom-trang-thumbtz-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch SE 2022 GPS 44mm</h3>
                    <span class="box-price">
                      6.790.000₫
                      <strike>8.490.000₫</strike>
                      <small>-20%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="3" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-se-2022"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch SE 2022 GPS"
                    data-id="289612"
                    data-price="6090000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289612/s16/apple-watch-se-2022-gps-40mm-thumbtz-1-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="Apple Watch SE 2022 GPS 40mm"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289612/s16/apple-watch-se-2022-gps-40mm-thumbtz-1-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch SE 2022 GPS 40mm</h3>
                    <span class="box-price">
                      6.090.000₫
                      <strike>7.490.000₫</strike>
                      <small>-18%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="4" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-ultra-size-m"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch Ultra GPS + Cellular 49mm Alpine Loop"
                    data-id="289814"
                    data-price="18990000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289814/s16/apple-watch-s8-ultra-size-m-cam-thumbtz-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="Apple Watch Ultra GPS + Cellular 49mm Alpine Loop size M"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289814/s16/apple-watch-s8-ultra-size-m-cam-thumbtz-650x650.png"
                      />
                    </div>
                    <h3>
                      Apple Watch Ultra GPS + Cellular 49mm Alpine Loop size M
                    </h3>
                    <span class="box-price">
                      18.990.000₫
                      <strike>23.990.000₫</strike>
                      <small>-20%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="5" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-ultra-cao-su"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch Ultra GPS + Cellular 49mm Ocean Band"
                    data-id="289818"
                    data-price="18990000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289818/s16/apple-watch-s8-ultra-cao-su-trang-thumbtz-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="Apple Watch Ultra GPS + Cellular 49mm Ocean Band"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289818/s16/apple-watch-s8-ultra-cao-su-trang-thumbtz-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch Ultra GPS + Cellular 49mm Ocean Band</h3>
                    <span class="box-price">
                      18.990.000₫
                      <strike>23.990.000₫</strike>
                      <small>-20%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="6" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-s8"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch Series 8 GPS 45mm"
                    data-id="289610"
                    data-price="10190000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289610/s16/apple-watch-s8-gps-45mm-trang-kem-thumbtz-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="Apple Watch Series 8 GPS 45mm"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289610/s16/apple-watch-s8-gps-45mm-trang-kem-thumbtz-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch Series 8 GPS 45mm</h3>
                    <span class="box-price">
                      10.190.000₫
                      <strike>12.990.000₫</strike>
                      <small>-21%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="7" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-se-2022-lte-40mm"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch SE 2022 LTE"
                    data-id="289799"
                    data-price="7290000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289799/s16/apple-watch-se-2022-lte-40mm-trang-kem-thumbtz-650x650.png"
                        class="ls-is-cached lazyloaded"
                        alt="Apple Watch SE 2022 LTE 40mm"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289799/s16/apple-watch-se-2022-lte-40mm-trang-kem-thumbtz-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch SE 2022 LTE 40mm</h3>
                    <span class="box-price">
                      7.290.000₫
                      <strike>8.990.000₫</strike>
                      <small>-18%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="8" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-s8-lte-41mm"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch Series 8 GPS + Cellular 41mm"
                    data-id="289806"
                    data-price="11990000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289806/s16/apple-watch-s8-lte-41mm-den-xanh-thumbttz-650x650.png"
                        class="lazyloaded"
                        alt="Apple Watch Series 8 GPS + Cellular 41mm"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289806/s16/apple-watch-s8-lte-41mm-den-xanh-thumbttz-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch Series 8 GPS + Cellular 41mm</h3>
                    <span class="box-price">
                      11.990.000₫
                      <strike>14.990.000₫</strike>
                      <small>-20%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="9" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-se-2022-lte-44mm"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch SE 2022 LTE 44mm"
                    data-id="289801"
                    data-price="7990000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289801/s16/apple-watch-se-2022-lte-44mm-trang-thumbtz-650x650.png"
                        class="lazyloaded"
                        alt="Apple Watch SE 2022 LTE 44mm"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289801/s16/apple-watch-se-2022-lte-44mm-trang-thumbtz-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch SE 2022 LTE 44mm</h3>
                    <span class="box-price">
                      7.990.000₫
                      <strike>9.990.000₫</strike>
                      <small>-20%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="10" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-s8-lte-45mm"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch Series 8 GPS + Cellular 45mm"
                    data-id="289825"
                    data-price="11990000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289825/s16/apple-watch-s8-lte-45mm-trang-thumb-650x650.png"
                        class="lazyloaded"
                        alt="Apple Watch Series 8 GPS + Cellular 45mm"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289825/s16/apple-watch-s8-lte-45mm-trang-thumb-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch Series 8 GPS + Cellular 45mm</h3>
                    <span class="box-price">
                      11.990.000₫
                      <strike>15.990.000₫</strike>
                      <small>-25%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="11" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-s8-lte-45mm-day-thep"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch S8 GPS + Cellular 45mm"
                    data-id="289844"
                    data-price="19490000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289844/s16/apple-watch-s8-lte-45mm-day-thep-den-thumbtz-650x650.png"
                        class="lazyloaded"
                        alt="Apple Watch S8 GPS + Cellular 45mm dây thép"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289844/s16/apple-watch-s8-lte-45mm-day-thep-den-thumbtz-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch S8 GPS + Cellular 45mm dây thép</h3>
                    <span class="box-price">
                      19.490.000₫
                      <strike>22.990.000₫</strike>
                      <small>-15%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="12" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-s8-lte-41mm-day-thep"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch S8 GPS + Cellular 41mm"
                    data-id="289840"
                    data-price="18990000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289840/s16/apple-watch-s8-lte-41mm-day-thep-bac-thumbtz-650x650.png"
                        class="lazyloaded"
                        alt="Apple Watch S8 GPS + Cellular 41mm dây thép"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289840/s16/apple-watch-s8-lte-41mm-day-thep-bac-thumbtz-650x650.png"
                      />
                    </div>
                    <h3>Apple Watch S8 GPS + Cellular 41mm dây thép</h3>
                    <span class="box-price">
                      18.990.000₫
                      <strike>21.990.000₫</strike>
                      <small>-13%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="13" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-s8-lte-41mm-vien-thep"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch S8 GPS + Cellular 41mm"
                    data-id="289832"
                    data-price="17990000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289832/s16/apple-watch-s8-lte-41mm-vien-thep-xanh-den-thumbtz-650x650.png"
                        class="lazyload"
                        alt="Apple Watch S8 GPS + Cellular 41mm"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Apple Watch S8 GPS + Cellular 41mm</h3>
                    <span class="box-price">
                      17.990.000₫
                      <strike>20.990.000₫</strike>
                      <small>-14%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="14" data-block="WATCH">
                  <a
                    href="/apple-watch/apple-watch-s8-lte-45mm-vien-thep"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Watch S8 GPS + Cellular 45mm"
                    data-id="289836"
                    data-price="18490000.0"
                    data-brand="Apple"
                    data-cate="Watch"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7077/289836/s16/apple-watch-s8-lte-45mm-vien-thep-den-xanh-thumbtz-650x650.png"
                        class="lazyload"
                        alt="Apple Watch S8 GPS + Cellular 45mm"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Apple Watch S8 GPS + Cellular 45mm</h3>
                    <span class="box-price">
                      18.490.000₫
                      <strike>21.990.000₫</strike>
                      <small>-15%</small>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev disabled">
              <span aria-label="Previous">‹</span></button
            ><button type="button" role="presentation" class="owl-next">
              <span aria-label="Next">›</span>
            </button>
          </div>
          <div class="owl-dots disabled"></div>
        </div>
      </div>
      <!-- end phu kien -->
      <!-- start am thanh -->
      <div class="box-slide">
        <a href="am-thanh" class="logo-cate">
          <h2 class="title-text-amthanh">Âm thanh</h2>
        </a>
        <div
          class="slide-cate owl-carousel owl-theme owl-loaded owl-drag"
          data-block="Âm thanh"
        >
          <div class="owl-stage-outer">
            <div
              class="owl-stage"
              style="
                transform: translate3d(0px, 0px, 0px);
                transition: all 1s ease 0s;
                width: 6050px;
              "
            >
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="1" data-block="Âm thanh">
                  <a
                    href="/am-thanh/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="AirPods 2 Hộp sạc thường"
                    data-id="236016"
                    data-price="2640000.0"
                    data-brand="Apple"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/236016/s16/airpods-2-650x650.png"
                        class="lazyloaded"
                        alt="AirPods 2 Hộp sạc thường"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/236016/s16/airpods-2-650x650.png"
                      />
                    </div>
                    <h3>AirPods 2 Hộp sạc thường</h3>
                    <span class="box-price">
                      2.640.000₫
                      <strike>4.390.000₫</strike>
                      <small>-39%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="2" data-block="Âm thanh">
                  <a
                    href="/am-thanh/airpods-pro-2"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="AirPods Pro (2nd Gen)"
                    data-id="289781"
                    data-price="5990000.0"
                    data-brand="Apple"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/289781/s16/airpods-pro-2-thumb-650x650.png"
                        class="lazyloaded"
                        alt="AirPods Pro (2nd Gen)"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/289781/s16/airpods-pro-2-thumb-650x650.png"
                      />
                    </div>
                    <h3>AirPods Pro (2nd Gen)</h3>
                    <span class="box-price">
                      5.990.000₫
                      <strike>6.990.000₫</strike>
                      <small>-14%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="3" data-block="Âm thanh">
                  <a
                    href="/am-thanh/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="AirPods Pro Hộp sạc MagSafe"
                    data-id="253802"
                    data-price="4590000.0"
                    data-brand="Apple"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/253802/s16/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-261121-033421-650x650.png"
                        class="lazyloaded"
                        alt="AirPods Pro Hộp sạc MagSafe"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/253802/s16/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-261121-033421-650x650.png"
                      />
                    </div>
                    <h3>AirPods Pro Hộp sạc MagSafe</h3>
                    <span class="box-price">
                      4.590.000₫
                      <strike>6.790.000₫</strike>
                      <small>-32%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="4" data-block="Âm thanh">
                  <a
                    href="/am-thanh/airpods-3"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="AirPods 3 sạc Lightning"
                    data-id="290053"
                    data-price="4150000.0"
                    data-brand="Apple"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/290053/s16/airpods-3-hop-sac-khong-day-thumb-650x650.png"
                        class="lazyloaded"
                        alt="AirPods 3 sạc Lightning"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/290053/s16/airpods-3-hop-sac-khong-day-thumb-650x650.png"
                      />
                    </div>
                    <h3>AirPods 3 sạc Lightning</h3>
                    <span class="box-price">
                      4.150.000₫
                      <strike>5.390.000₫</strike>
                      <small>-23%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="5" data-block="Âm thanh">
                  <a
                    href="/am-thanh/airpods-3-hop-sac-khong-day"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="AirPods 3"
                    data-id="250701"
                    data-price="4590000.0"
                    data-brand="Apple"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/250701/s16/airpods-3-thumb-650x650.png"
                        class="lazyloaded"
                        alt="AirPods 3"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/250701/s16/airpods-3-thumb-650x650.png"
                      />
                    </div>
                    <h3>AirPods 3</h3>
                    <span class="box-price">
                      4.590.000₫
                      <strike>5.490.000₫</strike>
                      <small>-16%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="6" data-block="Âm thanh">
                  <a
                    href="/am-thanh/beats-studio-buds-mj4x3"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Tai nghe True Wireless Beats Studio Buds"
                    data-id="247432"
                    data-price="2390000.0"
                    data-brand="Beats"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/247432/s16/trang-1-650x650.png"
                        class="lazyloaded"
                        alt="Tai nghe True Wireless Beats Studio Buds"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/247432/s16/trang-1-650x650.png"
                      />
                    </div>
                    <h3>Tai nghe True Wireless Beats Studio Buds</h3>
                    <span class="box-price">
                      2.390.000₫
                      <strike>3.990.000₫</strike>
                      <small>-40%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="7" data-block="Âm thanh">
                  <a
                    href="/am-thanh/khong-day-powerbeats-pro"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Tai nghe True Wireless Beats Powerbeats Pro"
                    data-id="263811"
                    data-price="3590000.0"
                    data-brand="Beats"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/263811/s16/khong-day-powerbeats-pro-thumb-1-2-650x650.png"
                        class="lazyloaded"
                        alt="Tai nghe True Wireless Beats Powerbeats Pro"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/263811/s16/khong-day-powerbeats-pro-thumb-1-2-650x650.png"
                      />
                    </div>
                    <h3>Tai nghe True Wireless Beats Powerbeats Pro</h3>
                    <span class="box-price">
                      3.590.000₫
                      <strike>5.990.000₫</strike>
                      <small>-40%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="8" data-block="Âm thanh">
                  <a
                    href="/am-thanh/bluetooth-airpods-max-apple"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="AirPods Max"
                    data-id="236331"
                    data-price="12490000.0"
                    data-brand="Apple"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/236331/s16/airpods-max-select-hong-thumb-650x650.png"
                        class="lazyloaded"
                        alt="AirPods Max"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/236331/s16/airpods-max-select-hong-thumb-650x650.png"
                      />
                    </div>
                    <h3>AirPods Max</h3>
                    <span class="box-price">
                      12.490.000₫
                      <strike>13.990.000₫</strike>
                      <small>-10%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="9" data-block="Âm thanh">
                  <a
                    href="/am-thanh/tai-nghe-earpods-cong-lightning-apple-mmtn2"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="EarPods jack cắm Lightning"
                    data-id="88053"
                    data-price="590000.0"
                    data-brand="Apple"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/88053/s16/earpod-lightning-trang-thumb-1-650x650.png"
                        class="lazyloaded"
                        alt="EarPods jack cắm Lightning"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/88053/s16/earpod-lightning-trang-thumb-1-650x650.png"
                      />
                    </div>
                    <h3>EarPods jack cắm Lightning</h3>
                    <span class="box-price">
                      590.000₫
                      <strike>790.000₫</strike>
                      <small>-25%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="10" data-block="Âm thanh">
                  <a
                    href="/am-thanh/bluetooth-true-wireless-jbl-t115twswhtas"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Tai nghe True Wireless JBL Tune 115TWS"
                    data-id="243041"
                    data-price="980000.0"
                    data-brand="JBL"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/243041/s16/tai-nghe-bluetooth-jbl-t115tws-trang-thumb-2-650x650.png"
                        class="lazyloaded"
                        alt="Tai nghe True Wireless JBL Tune 115TWS"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/243041/s16/tai-nghe-bluetooth-jbl-t115tws-trang-thumb-2-650x650.png"
                      />
                    </div>
                    <h3>Tai nghe True Wireless JBL Tune 115TWS</h3>
                    <span class="box-price">
                      980.000₫
                      <strike>1.490.000₫</strike>
                      <small>-34%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="11" data-block="Âm thanh">
                  <a
                    href="/am-thanh/tai-nghe-chup-tai-bluetooth-sony-wh-ch510-bc-den"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Tai nghe chụp tai Bluetooth Sony WH-CH510"
                    data-id="212136"
                    data-price="990000.0"
                    data-brand="Sony"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/212136/s16/1-650x650.png"
                        class="lazyloaded"
                        alt="Tai nghe chụp tai Bluetooth Sony WH-CH510"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/212136/s16/1-650x650.png"
                      />
                    </div>
                    <h3>Tai nghe chụp tai Bluetooth Sony WH-CH510</h3>
                    <span class="box-price">
                      990.000₫
                      <strike>1.190.000₫</strike>
                      <small>-16%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="12" data-block="Âm thanh">
                  <a
                    href="/am-thanh/sony-srs-xb13"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Loa Bluetooth Sony SRS-XB13"
                    data-id="249767"
                    data-price="1190000.0"
                    data-brand="Sony"
                    data-cate="Loa"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/2162/249767/s16/sony-srs-xb13-den-thumb-650x650.png"
                        class="lazyloaded"
                        alt="Loa Bluetooth Sony SRS-XB13"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/2162/249767/s16/sony-srs-xb13-den-thumb-650x650.png"
                      />
                    </div>
                    <h3>Loa Bluetooth Sony SRS-XB13</h3>
                    <span class="box-price">
                      1.190.000₫
                      <strike>1.290.000₫</strike>
                      <small>-7%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="13" data-block="Âm thanh">
                  <a
                    href="/am-thanh/bluetooth-jbl-go-3-xanh-den"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Loa Bluetooth JBL Go 3"
                    data-id="242826"
                    data-price="990000.0"
                    data-brand="JBL"
                    data-cate="Loa"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/2162/242826/s16/bluetooth-jbl-go-3-xanh-duong-thumb-650x650.png"
                        class="lazyload"
                        alt="Loa Bluetooth JBL Go 3"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Loa Bluetooth JBL Go 3</h3>
                    <span class="box-price">
                      990.000₫
                      <strike>1.090.000₫</strike>
                      <small>-9%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="14" data-block="Âm thanh">
                  <a
                    href="/am-thanh/tai-nghe-bluetooth-sony-wi-c200-den"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Tai nghe nhét tai Bluetooth Sony WI-C200"
                    data-id="207725"
                    data-price="750000.0"
                    data-brand="Sony"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/207725/s16/1-650x650.png"
                        class="lazyload"
                        alt="Tai nghe nhét tai Bluetooth Sony WI-C200"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Tai nghe nhét tai Bluetooth Sony WI-C200</h3>
                    <span class="box-price">
                      750.000₫
                      <strike>990.000₫</strike>
                      <small>-24%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="15" data-block="Âm thanh">
                  <a
                    href="/am-thanh/tai-nghe-earpods-apple-mnhf2"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="EarPods jack cắm 3.5 mm"
                    data-id="76061"
                    data-price="590000.0"
                    data-brand="Apple"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/76061/s16/earpod-trang-thumb-1-650x650.png"
                        class="lazyload"
                        alt="EarPods jack cắm 3.5 mm"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>EarPods jack cắm 3.5 mm</h3>
                    <span class="box-price">
                      590.000₫
                      <strike>790.000₫</strike>
                      <small>-25%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="16" data-block="Âm thanh">
                  <a
                    href="/am-thanh/bluetooth-harman-kardon-go-play-mini"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Loa Bluetooth Harman Kardon Go + Play mini"
                    data-id="242842"
                    data-price="5190000.0"
                    data-brand="Harman Kardon"
                    data-cate="Loa"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/2162/242842/s16/bluetooth-harman-kardon-go-play-mini-thumb-1-650x650.png"
                        class="lazyload"
                        alt="Loa Bluetooth Harman Kardon Go + Play mini"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Loa Bluetooth Harman Kardon Go + Play mini</h3>
                    <span class="box-price">
                      5.190.000₫
                      <strike>5.990.000₫</strike>
                      <small>-13%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="17" data-block="Âm thanh">
                  <a
                    href="/am-thanh/bluetooth-tws-jbl-t225tws"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Tai nghe True Wireless JBL Tune 225TWS"
                    data-id="243958"
                    data-price="2590000.0"
                    data-brand="JBL"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/243958/s16/18-650x650.png"
                        class="lazyload"
                        alt="Tai nghe True Wireless JBL Tune 225TWS"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Tai nghe True Wireless JBL Tune 225TWS</h3>
                    <span class="box-price">2.590.000₫</span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="18" data-block="Âm thanh">
                  <a
                    href="/am-thanh/tai-nghe-sony-mdr-zx110ap"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Tai nghe chụp tai Sony MDR-ZX110AP"
                    data-id="75430"
                    data-price="450000.0"
                    data-brand="Sony"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/75430/s16/tai-nghe-sony-mdr-zx110ap-den-thumb1-650x650.png"
                        class="lazyload"
                        alt="Tai nghe chụp tai Sony MDR-ZX110AP"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Tai nghe chụp tai Sony MDR-ZX110AP</h3>
                    <span class="box-price">
                      450.000₫
                      <strike>540.000₫</strike>
                      <small>-16%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="19" data-block="Âm thanh">
                  <a
                    href="/am-thanh/tai-nghe-bluetooth-tws-belkin-soundform-auc001"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Tai nghe True Wireless Belkin Soundform AUC001"
                    data-id="232656"
                    data-price="895000.0"
                    data-brand="Belkin"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/232656/s16/1-1-650x650.png"
                        class="lazyload"
                        alt="Tai nghe True Wireless Belkin Soundform AUC001"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Tai nghe True Wireless Belkin Soundform AUC001</h3>
                    <span class="box-price">
                      895.000₫
                      <strike>1.790.000₫</strike>
                      <small>-50%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="20" data-block="Âm thanh">
                  <a
                    href="/am-thanh/tai-nghe-bluetooth-true-wireless-sony-wf-c500-den"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Tai nghe Bluetooth True Wireless Sony WF-C500"
                    data-id="272013"
                    data-price="1880000.0"
                    data-brand="Sony"
                    data-cate="Tai nghe"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/54/272013/s16/tai-nghe-bluetooth-true-wireless-sony-wf-c500-den-061222-043550-650x650.png"
                        class="lazyload"
                        alt="Tai nghe Bluetooth True Wireless Sony WF-C500"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Tai nghe Bluetooth True Wireless Sony WF-C500</h3>
                    <span class="box-price">
                      1.880.000₫
                      <strike>2.290.000₫</strike>
                      <small>-17%</small>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev disabled">
              <span aria-label="Previous">‹</span></button
            ><button type="button" role="presentation" class="owl-next">
              <span aria-label="Next">›</span>
            </button>
          </div>
          <div class="owl-dots disabled"></div>
        </div>
      </div>
      <!-- end am thanh -->
      <!-- start phu kien -->
      <div class="box-slide">
        <a href="phu-kien" class="logo-cate">
          <h2 class="title-text-phukien">Phụ kiện</h2>
        </a>
        <div
          class="slide-cate owl-carousel owl-theme owl-loaded owl-drag"
          data-block="Phụ kiện"
        >
          <div class="owl-stage-outer">
            <div
              class="owl-stage"
              style="
                transform: translate3d(0px, 0px, 0px);
                transition: all 1s ease 0s;
                width: 6050px;
              "
            >
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="1" data-block="Phụ kiện">
                  <a
                    href="/adapter-sac/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Adapter sạc Apple USB-C 20W"
                    data-id="230315"
                    data-price="520000.0"
                    data-brand="Apple"
                    data-cate="Adapter sạc, chuyển đổi"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/9499/230315/s16/114.34.03-650x650.png"
                        class="lazyloaded"
                        alt="Adapter sạc Apple USB-C 20W"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/9499/230315/s16/114.34.03-650x650.png"
                      />
                    </div>
                    <h3>Adapter sạc Apple USB-C 20W</h3>
                    <span class="box-price">
                      520.000₫
                      <strike>690.000₫</strike>
                      <small>-24%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="2" data-block="Phụ kiện">
                  <a
                    href="/op-lung-iphone/op-lung-magsafe-iphone-14-pro-max-nhua-trong-apple-mpu73"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Ốp lưng Magsafe cho iPhone 14 Pro Max Nhựa trong Apple MPU73"
                    data-id="290326"
                    data-price="950000.0"
                    data-brand="Apple"
                    data-cate="Ốp lưng, ví da iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290326/s16/op-lung-magsafe-iphone-14-pro-max-nhua-trong-apple-mpu73-thumb-650x650.png"
                        class="lazyloaded"
                        alt="Ốp lưng Magsafe cho iPhone 14 Pro Max Nhựa trong Apple MPU73"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290326/s16/op-lung-magsafe-iphone-14-pro-max-nhua-trong-apple-mpu73-thumb-650x650.png"
                      />
                    </div>
                    <h3>
                      Ốp lưng Magsafe cho iPhone 14 Pro Max Nhựa trong Apple
                      MPU73
                    </h3>
                    <span class="box-price">
                      950.000₫
                      <strike>1.590.000₫</strike>
                      <small>-40%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="3" data-block="Phụ kiện">
                  <a
                    href="/cap-sac/cap-type-c-lightning-1m-apple-mm0a3-trang"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Cáp sạc USB-C - Lightning 1m"
                    data-id="259283"
                    data-price="490000.0"
                    data-brand="Apple"
                    data-cate="Cáp sạc, chuyển đổi"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/58/259283/s16/cap-type-c-lightning-1m-apple-mm0a3-trang-650x650.png"
                        class="lazyloaded"
                        alt="Cáp sạc USB-C - Lightning 1m"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/58/259283/s16/cap-type-c-lightning-1m-apple-mm0a3-trang-650x650.png"
                      />
                    </div>
                    <h3>Cáp sạc USB-C - Lightning 1m</h3>
                    <span class="box-price">
                      490.000₫
                      <strike>590.000₫</strike>
                      <small>-16%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div
                class="owl-item active"
                style="width: 292.5px; margin-right: 10px"
              >
                <div class="item" data-pos="4" data-block="Phụ kiện">
                  <a
                    href="/phim-but/magic-keyboard"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Magic Keyboard"
                    data-id="251881"
                    data-price="2230000.0"
                    data-brand="Apple"
                    data-cate="Bàn phím &amp; Bút"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/251881/s16/magic-keyboard-thumb-650x650.png"
                        class="lazyloaded"
                        alt="Magic Keyboard"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/251881/s16/magic-keyboard-thumb-650x650.png"
                      />
                    </div>
                    <h3>Magic Keyboard</h3>
                    <span class="box-price">
                      2.230.000₫
                      <strike>3.190.000₫</strike>
                      <small>-30%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="5" data-block="Phụ kiện">
                  <a
                    href="/phim-but/but-cam-ung-apple-pencil-1-mk0c2"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple Pencil (thế hệ 1)"
                    data-id="237414"
                    data-price="2090000.0"
                    data-brand="Apple"
                    data-cate="Bàn phím &amp; Bút"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/237414/s16/17-650x650.png"
                        class="lazyloaded"
                        alt="Apple Pencil (thế hệ 1)"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/237414/s16/17-650x650.png"
                      />
                    </div>
                    <h3>Apple Pencil (thế hệ 1)</h3>
                    <span class="box-price">
                      2.090.000₫
                      <strike>2.890.000₫</strike>
                      <small>-27%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="6" data-block="Phụ kiện">
                  <a
                    href="/phim-but/magic-keyboard-voi-phim-so"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Magic Keyboard với phím số"
                    data-id="255340"
                    data-price="2720000.0"
                    data-brand="Apple"
                    data-cate="Bàn phím &amp; Bút"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/255340/s16/magic-keyboard-with-numeric-keypad-mq052-thumb-1-650x650.png"
                        class="lazyloaded"
                        alt="Magic Keyboard với phím số"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1882/255340/s16/magic-keyboard-with-numeric-keypad-mq052-thumb-1-650x650.png"
                      />
                    </div>
                    <h3>Magic Keyboard với phím số</h3>
                    <span class="box-price">
                      2.720.000₫
                      <strike>3.890.000₫</strike>
                      <small>-30%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="7" data-block="Phụ kiện">
                  <a
                    href="/chuot-may-tinh/chuot-bluetooth-apple-mk2e3-trang"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Magic Mouse"
                    data-id="251787"
                    data-price="1890000.0"
                    data-brand="Apple"
                    data-cate="Chuột máy tính"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/86/251787/s16/1-650x650.png"
                        class="lazyloaded"
                        alt="Magic Mouse"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/86/251787/s16/1-650x650.png"
                      />
                    </div>
                    <h3>Magic Mouse</h3>
                    <span class="box-price">
                      1.890.000₫
                      <strike>2.490.000₫</strike>
                      <small>-24%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="8" data-block="Phụ kiện">
                  <a
                    href="/sac-du-phong/pin-apple-magsafe-battery-pack"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Pin Dự Phòng MagSafe"
                    data-id="266084"
                    data-price="2540000.0"
                    data-brand="Apple"
                    data-cate="Sạc dự phòng"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/57/266084/s16/pin-apple-magsafe-battery-pack-211221-090310-650x650.png"
                        class="lazyloaded"
                        alt="Pin Dự Phòng MagSafe"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/57/266084/s16/pin-apple-magsafe-battery-pack-211221-090310-650x650.png"
                      />
                    </div>
                    <h3>Pin Dự Phòng MagSafe</h3>
                    <span class="box-price">
                      2.540.000₫
                      <strike>2.990.000₫</strike>
                      <small>-15%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="9" data-block="Phụ kiện">
                  <a
                    href="/op-lung-iphone/op-lung-magsafe-iphone-14-pro-da-apple-mppk3"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Ốp lưng Magsafe cho iPhone 14 Pro Da Apple MPPK3"
                    data-id="290325"
                    data-price="970000.0"
                    data-brand="Apple"
                    data-cate="Ốp lưng, ví da iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290325/s16/op-lung-magsafe-iphone-14-pro-da-apple-mppk3-thumb-650x650.png"
                        class="lazyloaded"
                        alt="Ốp lưng Magsafe cho iPhone 14 Pro Da Apple MPPK3"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290325/s16/op-lung-magsafe-iphone-14-pro-da-apple-mppk3-thumb-650x650.png"
                      />
                    </div>
                    <h3>Ốp lưng Magsafe cho iPhone 14 Pro Da Apple MPPK3</h3>
                    <span class="box-price">
                      970.000₫
                      <strike>1.790.000₫</strike>
                      <small>-45%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="10" data-block="Phụ kiện">
                  <a
                    href="/mieng-dan-man-hinh/mieng-dan-camera-iphone-14-pro-14-pro-max-uniq-bac"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Miếng dán camera iPhone 14 Pro | 14 Pro Max UniQ"
                    data-id="291765"
                    data-price="300000.0"
                    data-brand="iPhone, iPad"
                    data-cate="Dán màn hình"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1363/291765/s16/mieng-dan-camera-iphone-14-pro-14-pro-max-uniq-bac-thumb-650x650.png"
                        class="lazyloaded"
                        alt="Miếng dán camera iPhone 14 Pro | 14 Pro Max UniQ"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1363/291765/s16/mieng-dan-camera-iphone-14-pro-14-pro-max-uniq-bac-thumb-650x650.png"
                      />
                    </div>
                    <h3>Miếng dán camera iPhone 14 Pro | 14 Pro Max UniQ</h3>
                    <span class="box-price">
                      300.000₫
                      <strike>400.000₫</strike>
                      <small>-25%</small>
                    </span>
                    <p class="item-txt-online">
                      Sản phẩm chỉ nhận tại cửa hàng
                    </p>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="11" data-block="Phụ kiện">
                  <a
                    href="/op-lung-iphone/op-lung-magsafe-iphone-14-pro-max-da-apple-mppm3"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Ốp lưng Magsafe cho iPhone 14 Pro Max Da Apple MPPM3"
                    data-id="290327"
                    data-price="1070000.0"
                    data-brand="Apple"
                    data-cate="Ốp lưng, ví da iPhone"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290327/s16/op-lung-magsafe-iphone-14-pro-max-da-apple-mppm3-thumb-650x650.png"
                        class="lazyloaded"
                        alt="Ốp lưng Magsafe cho iPhone 14 Pro Max Da Apple MPPM3"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/60/290327/s16/op-lung-magsafe-iphone-14-pro-max-da-apple-mppm3-thumb-650x650.png"
                      />
                    </div>
                    <h3>
                      Ốp lưng Magsafe cho iPhone 14 Pro Max Da Apple MPPM3
                    </h3>
                    <span class="box-price">
                      1.070.000₫
                      <strike>1.790.000₫</strike>
                      <small>-40%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="12" data-block="Phụ kiện">
                  <a
                    href="/mieng-dan-man-hinh/mieng-dan-kinh-iphone-14-pro-max-jcpal"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Miếng dán kính iPhone 14 Pro Max Jcpal"
                    data-id="291825"
                    data-price="360000.0"
                    data-brand="iPhone, iPad"
                    data-cate="Dán màn hình"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1363/291825/s16/mieng-dan-kinh-iphone-14-pro-max-jcpal-thumb1-650x650.png"
                        class="lazyloaded"
                        alt="Miếng dán kính iPhone 14 Pro Max Jcpal"
                        width="300"
                        height="300"
                        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1363/291825/s16/mieng-dan-kinh-iphone-14-pro-max-jcpal-thumb1-650x650.png"
                      />
                    </div>
                    <h3>Miếng dán kính iPhone 14 Pro Max Jcpal</h3>
                    <span class="box-price">
                      360.000₫
                      <strike>400.000₫</strike>
                      <small>-10%</small>
                    </span>
                    <p class="item-txt-online">
                      Sản phẩm chỉ nhận tại cửa hàng
                    </p>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="13" data-block="Phụ kiện">
                  <a
                    href="/cap-sac/cap-type-c-type-c-1m-apple-muf72-trang"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Cáp sạc USB-C 1m"
                    data-id="203760"
                    data-price="530000.0"
                    data-brand="Apple"
                    data-cate="Cáp sạc, chuyển đổi"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/58/203760/s16/122-650x650.png"
                        class="lazyload"
                        alt="Cáp sạc USB-C 1m"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Cáp sạc USB-C 1m</h3>
                    <span class="box-price">
                      530.000₫
                      <strike>590.000₫</strike>
                      <small>-10%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="14" data-block="Phụ kiện">
                  <a
                    href="/mieng-dan-man-hinh/mieng-dan-kinh-iphone-14-pro-max-belkin"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Miếng dán kính iPhone 14 Pro Max Belkin"
                    data-id="291958"
                    data-price="490000.0"
                    data-brand="iPhone, iPad"
                    data-cate="Dán màn hình"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/1363/291958/s16/mieng-dan-kinh-iphone-14-pro-max-belkin-thumb-1-650x650.png"
                        class="lazyload"
                        alt="Miếng dán kính iPhone 14 Pro Max Belkin"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Miếng dán kính iPhone 14 Pro Max Belkin</h3>
                    <span class="box-price">490.000₫</span>
                    <p class="item-txt-online">
                      Sản phẩm chỉ nhận tại cửa hàng
                    </p>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="15" data-block="Phụ kiện">
                  <a
                    href="/airtag/thiet-bi-dinh-vi-thong-minh-airtag-1-pack-mx532"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="AirTag"
                    data-id="238092"
                    data-price="790000.0"
                    data-brand="Apple"
                    data-cate="Airtag"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/10618/238092/s16/airtag-650x650.png"
                        class="lazyload"
                        alt="AirTag"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>AirTag</h3>
                    <span class="box-price">790.000₫</span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="16" data-block="Phụ kiện">
                  <a
                    href="/tv-box/apple-tv-4k-64gb-mxh02"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Apple TV 4K 64GB"
                    data-id="238124"
                    data-price="2395000.0"
                    data-brand="Apple"
                    data-cate="Apple TV"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/9118/238124/s16/apple-tv-4k-64gb-mxh02-650x650.png"
                        class="lazyload"
                        alt="Apple TV 4K 64GB"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Apple TV 4K 64GB</h3>
                    <span class="box-price">
                      2.395.000₫
                      <strike>5.990.000₫</strike>
                      <small>-60%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="17" data-block="Phụ kiện">
                  <a
                    href="/cap-sac/adapter-sac-magsafe-cho-iphone"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Cáp sạc không dây Apple MagSafe Charger"
                    data-id="266077"
                    data-price="1430000.0"
                    data-brand="Apple"
                    data-cate="Cáp sạc, chuyển đổi"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/58/266077/s16/adapter-sac-magsafe-cho-iphone-thumb-650x650.png"
                        class="lazyload"
                        alt="Cáp sạc không dây Apple MagSafe Charger"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Cáp sạc không dây Apple MagSafe Charger</h3>
                    <span class="box-price">
                      1.430.000₫
                      <strike>1.590.000₫</strike>
                      <small>-10%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="18" data-block="Phụ kiện">
                  <a
                    href="/cap-sac/cap-sac-apple-watch-magnetic-1m-apple-mx2e2"
                    class="main-contain"
                    data-s="Nomal"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Cáp sạc MagSafe cho Apple Watch MX2E2 1m"
                    data-id="215984"
                    data-price="710000.0"
                    data-brand="Apple"
                    data-cate="Cáp sạc, chuyển đổi"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/58/215984/s16/cap-sac-apple-watch-magnetic-1m-apple-mx2e2-thumb-1-650x650.png"
                        class="lazyload"
                        alt="Cáp sạc MagSafe cho Apple Watch MX2E2 1m"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Cáp sạc MagSafe cho Apple Watch MX2E2 1m</h3>
                    <span class="box-price">
                      710.000₫
                      <strike>790.000₫</strike>
                      <small>-10%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="19" data-block="Phụ kiện">
                  <a
                    href="/tv-box/apple-tv-siri-remote-mjfn3-bac"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Remote Siri Apple TV MJFN3"
                    data-id="251913"
                    data-price="300000.0"
                    data-brand="Apple"
                    data-cate="Apple TV"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/9118/251913/s16/1-1-650x650.png"
                        class="lazyload"
                        alt="Remote Siri Apple TV MJFN3"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Remote Siri Apple TV MJFN3</h3>
                    <span class="box-price">
                      300.000₫
                      <strike>1.690.000₫</strike>
                      <small>-82%</small>
                    </span>
                  </a>
                </div>
              </div>
              <div class="owl-item" style="width: 292.5px; margin-right: 10px">
                <div class="item" data-pos="20" data-block="Phụ kiện">
                  <a
                    href="/tui-chong-soc/bao-da-macbook-pro-13-inch-apple-mrql2-xanh-navy"
                    class="main-contain"
                    data-s="OnlineSavingCMS"
                    data-site="16"
                    data-pro="3"
                    data-cache="True"
                    data-name="Bao da MacBook Pro 13 inch"
                    data-id="251694"
                    data-price="3530000.0"
                    data-brand="Apple"
                    data-cate="Balo, túi chống sốc"
                    data-box="BoxHome"
                  >
                    <label class="no-label"></label>
                    <div class="img-slide">
                      <img
                        data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_300x300/https://cdn.tgdd.vn/Products/Images/7923/251694/s16/bao-da-macbook-pro-13-inch-apple-mrql2-thumb-650x650.png"
                        class="lazyload"
                        alt="Bao da MacBook Pro 13 inch"
                        width="300"
                        height="300"
                      />
                    </div>
                    <h3>Bao da MacBook Pro 13 inch</h3>
                    <span class="box-price">
                      3.530.000₫
                      <strike>5.890.000₫</strike>
                      <small>-40%</small>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev disabled">
              <span aria-label="Previous">‹</span></button
            ><button type="button" role="presentation" class="owl-next">
              <span aria-label="Next">›</span>
            </button>
          </div>
          <div class="owl-dots disabled"></div>
        </div>
      </div>
      <!-- end phu kien -->
    </div>
    <!--End list product -->
    <!-- Navbar Section Start Here -->
    <div class="policy">
      <ul class="pr-policy">
        <li>
          <i class="fa-sharp fa-regular fa-circle-check homeDiver"></i>
          <span>Mẫu mã đa dạng, <br />chính hãng</span>
        </li>
        <li>
          <i class="fa-solid fa-car-side homeDeli"></i>
          <span>Giao hàng toàn quốc</span>
        </li>
        <li>
          <i class="fa-solid fa-shield-halved homeInsur"></i>
          <span>Bảo hành có cam kết <br />tới 12 tháng</span>
        </li>
        <li>
          <i class="fa-solid fa-arrow-rotate-left homeReturn"></i>
          <span>Có thể đổi trả tại <br />Thegioididong và DienmayXANH</span>
        </li>
      </ul>
    </div>
    <!-- Navbar Section Ends Here -->
    <!-- start footer -->
    <footer>
      <div class="foot">
        <div class="logo-foot">
          <a href="index.html" title="Logo" style="margin-right: 22px">
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
              <a
                href="https://www.facebook.com/topzone.vn"
                target="_blank"
                class="link-social"
              >
                <i class="iconsocial-facebook"></i>
              </a>
              <a
                href="https://www.youtube.com/channel/UCoWdPNr8jSr7JM0OFlKvQHw"
                target="_blank"
                class="link-social"
              >
                <i class="iconsocial-youtube"></i>
              </a>
              <a
                href="https://zalo.me/2040551312124557463"
                target="_blank"
                class="link-social"
              >
                <i class="iconsocial-zalo"></i>
              </a>
            </div>
          </li>
          <li>
            <span>Hệ thống cửa hàng</span>
            <a href="/he-thong-cua-hang"> Xem 100 cửa hàng </a>
            <a href="/noi-quy-cua-hang"> Nội quy cửa hàng </a>
            <a href="/chat-luong-phuc-vu"> Chất lượng phục vụ </a>
            <a href="/bao-hanh-doi-tra"> Chính sách bảo hành &amp; đổi trả </a>
          </li>
          <li>
            <span>Hỗ trợ khách hàng</span>
            <a href="/dieu-kien-giao-dich"> Điều kiện giao dịch chung </a>
            <a href="/huong-dan-mua-hang"> Hướng dẫn mua hàng online </a>
            <a href="/giao-hang"> Chính sách giao hàng </a>
            <a href="/thanh-toan"> Hướng dẫn thanh toán </a>
          </li>
          <li>
            <span>Về thương hiệu TopZone</span>

            <a
              href="/tekzone/tat-tan-tat-thong-tin-ve-app-tich-diem-hoan-toan-moi-1480642#gioithieu"
              class="color-link"
            >
              Tích điểm Quà tặng VIP
            </a>
            <a href="/gioi-thieu"> Giới thiệu TopZone </a>
            <a href="https://www.thegioididong.com/b2b">
              Bán hàng doanh nghiệp
            </a>
            <a href="/bao-mat-thong-tin"> Chính sách bảo mật thông tin </a>
            <a
              rel="nofollow"
              href="https://www.topzone.vn/iphone?sclient=mobile"
              >Xem bản mobile</a
            >
          </li>
          <li>
            <span>Trung tâm bảo hành TopCare</span>
            <a href="/topcare"> Giới thiệu TopCare </a>
          </li>
        </ul>
      </div>
    </footer>
    <!-- end footer -->

    <!-- start modal search -->
    <div id="dim"></div>
    <!-- end modal search -->

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="library/owl.carousel.min.js"></script>

    <script src="search.js"></script>
    <script src="slider.js"></script>
  </body>

</html>
