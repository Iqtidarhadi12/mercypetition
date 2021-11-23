<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="./">

    <title>Mercy petition</title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets\npm\bootstrap@4.5.2\dist\css\bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('adminassets\npm\fontawesome-5.14.0\css\fontawesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets\npm\fontawesome-5.14.0\css\regular.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets\npm\fontawesome-5.14.0\css\brands.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets\npm\fontawesome-5.14.0\css\solid.min.css')}}">



    <!-- include vendor stylesheets used in "Accordions" page. see "application/views/default/pages/partials/accordions/@vendor-stylesheets.hbs" -->


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets/dist\css\ace.min.css')}}">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{asset('adminassets/assets\favicon.png')}}">

    <!-- "Dashboard 2" page styles, specific to this page for demo only -->
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets/dist\css\ace-themes.min.css')}}">

  </head>

  <body>
    <div class="body-container">
      <div class="main-container">

        <div id="sidebar" class="sidebar sidebar-white sidebar-fixed sidebar-backdrop expandable" data-swipe="true" data-dismiss="true">
          <div class="sidebar-inner">

            <!-- .navbar-brand inside sidebar, only show in desktop view -->
            @include('layouts.nav')
              <!-- optional `nav` tag -->
             

            </div><!-- /.ace-scroll -->


           @include('layouts.menu')


            <!-- stat boxes -->
            <div class="row px-2">
              <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">
                <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                  <div class="mb-1">
                    <span class="d-inline-block bgc-success-l2 p-3 radius-round">
                <i class="fab fa-twitter text-success-m1 text-180 w-4"></i>
            </span>
                  </div>

        @yield('content')

          <footer class="footer d-none d-sm-block">
            <div class="footer-inner">
              <div class="h-100 pt-3 border-t-1 brc-secondary-l3 bgc-white">
                <span class="text-primary-m2 font-bolder text-120">Ace</span>
                <span class="text-muted">Application &copy; 2020</span>

                <span class="mx-3 action-buttons">
                      <a href="#" class="text-blue-m3 text-140"><i class="fab fa-twitter-square"></i></a>
                      <a href="#" class="text-blue-d1 text-140"><i class="fab fa-facebook"></i></a>
                      <a href="#" class="text-orange text-140"><i class="fa fa-rss-square"></i></a>
                   </span>
              </div>
            </div><!-- .footer-inner -->
          </footer>

          <div class="footer-tools">
            <a id="btn-scroll-up" href="#" class="btn-scroll-up btn btn-white brc-black-tp7 px-25 py-2 text-95 border-2 radius-round mb-2 mr-2">
              <i class="fa fa-angle-double-up w-2 h-2"></i>
            </a>
          </div>
        </div>

        <div id="id-ace-settings-modal" class="my-1 my-lg-2 modal modal-nb ace-aside aside-right aside-offset aside-below-nav" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">

          <div class="modal-dialog" role="document">
            <div class="modal-content w-auto flex-grow-1 pb-1px radius-0 radius-l-2 border-y-2 border-l-1 brc-default-m3 bgc-white-tp1 shadow">

              <div class="modal-header p-0 radius-0 mx-3">
                <h4 class="modal-title text-primary-d1 text-140 pt-2 pl-1">Demo Settings</h4>

                <button type="button" class="close m-0 mr-n2" data-dismiss="modal" aria-label="Close">
                  <i class="fa fa-times text-70" aria-hidden="true"></i>
                </button>
              </div>

              <div class="modal-body mx-md-2" data-ace-scroll='{"smooth": true, "lock": true}'>
                <form autocomplete="off">
                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                    <h5 class="text-default-d2">
                      Zoom
                    </h5>

                    <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                        90%
                        <input type="radio" name="zoom-level" value="90">
                      </label>

                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary active">
                        100%
                        <input type="radio" name="zoom-level" value="none" checked="">
                      </label>

                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                        110%
                        <input type="radio" name="zoom-level" value="110">
                      </label>

                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                        120%
                        <input type="radio" name="zoom-level" value="120">
                      </label>
                    </div>
                  </div>


                  <hr class="border-double my-md-3">


                  <h5 class="text-purple-d1">
                    Themes
                  </h5>

                  <div id="auto-match-div" class="d-none bgc-secondary-l4 py-1 radius-1 mb-3 border-1 radius-1 border-l-3 brc-secondary-m4">
                    <label class="mt-1 pr-2 d-flex align-items-center" for="id-auto-match">
                      <input type="checkbox" class="input-lg mx-15" id="id-auto-match">

                      <span class="pl-0 text-secondary-d1 text-90 font-bolder">
                        Match sidebar & navbar themes
                      </span>
                    </label>
                  </div>


                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mt-3">
                    <h6 class="text-95 pl-1 text-grey-d1">Sidebar</h6>

                    <div class="btn-group btn-group-toggle align-self-end flex-wrap px-0  col-10 col-sm-7" data-toggle="buttons">
                      <label class="btn btn-sm btn-light-default btn-text-default btn-bgc-white btn-a-default btn-h-default">
                        Dark
                        <input type="radio" name="sidebar-theme" value="dark">
                      </label>

                      <label class="btn btn-sm btn-light-default btn-text-default btn-bgc-white btn-a-default btn-h-default">
                        Light
                        <input type="radio" name="sidebar-theme" value="light">
                      </label>
                    </div>
                  </div>



                  <div>
                    <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-sidebar-themes-dark">
                      <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">
                        <label class="btn btn-xs sidebar-color border-0 sidebar-dark d-style active m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="dark" checked="">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-dark2 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="dark2">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkblue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslategrey d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkslategrey">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-cadetblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="cadetblue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-plum d-style my-1px m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="plum">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslateblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkslateblue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-purple d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="purple">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-steelblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="steelblue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-blue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="blue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-teal d-style m-1px d-none">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="teal">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-green d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="green">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkcrimson d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkcrimson">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient1 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient1">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient2 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient2">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient3 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient3">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient4 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient4">
                        </label>

                        <!--
                      <label class="btn btn-xs sidebar-color border-0 sidebar-gradient5 d-style m-1px d-none">
                        <i class="fa fa-check text-white v-active"></i>
                        <input type="radio" name="sidebar-dark" value="gradient5"  />
                      </label>
                      -->

                      </div>
                    </div><!-- #id-sidebar-themes-dark -->


                    <div class="d-none" id="id-sidebar-themes-light">
                      <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                        <div class="d-flex btn-group btn-group-toggle align-self-end flex-wrap justify-content-center mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                          <label class="active btn btn-xs border-0 sidebar-white2 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white" checked="">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-white2 d-style m-1px d-none">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white2">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-white3 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white3">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-white4 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white4">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-light d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="light">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-lightblue d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="lightblue">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-lightblue2 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="lightblue2">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-lightpurple d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="lightpurple">
                          </label>


                        </div>
                      </div>
                    </div><!-- #id-sidebar-themes-light -->

                  </div>

                  <hr class="border-dotted">

                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                    <h6 class="text-95 pl-1 text-grey-d1">Navbar</h6>

                    <div id="navbar-themes-show" class="d-none btn-group btn-group-toggle align-self-end flex-wrap px-0 col-10 col-sm-7" data-toggle="buttons">
                      <label class="btn btn-sm btn-light-green btn-text-green btn-bgc-white btn-a-green btn-h-green">
                        Light
                        <input type="radio" name="navbar-theme" value="light">
                      </label>

                      <label class="btn btn-sm btn-light-green btn-text-green btn-bgc-white btn-a-green btn-h-green">
                        Dark
                        <input type="radio" name="navbar-theme" value="dark">
                      </label>
                    </div>

                    <div id="navbar-themes-show-msg" class="text-95 px-3 py-15 bgc-secondary-l3 border-1 brc-secondary-m4 border-dotted ml-3 radius-1">
                      Navbar themes can be viewed in<br> <span>Dashboard <a class="btn-h-dark no-underline px-2px" href="dashboard-3.html">3</a> & <a class="btn-h-dark no-underline px-2px" href="dashboard-4.html">4</a></span>
                    </div>

                  </div>

                  <div>
                    <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-navbar-themes-dark">
                      <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                        <label class="btn btn-xs border-0 navbar-blue d-style active m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="blue" checked="">
                        </label>

                        <label class="btn btn-xs border-0 navbar-darkblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="darkblue">
                        </label>

                        <label class="btn btn-xs border-0 navbar-teal d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="teal">
                        </label>

                        <label class="btn btn-xs border-0 navbar-green d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="green">
                        </label>

                        <label class="btn btn-xs border-0 navbar-cadetblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="cadetblue">
                        </label>



                        <label class="btn btn-xs border-0 navbar-plum d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="plum">
                        </label>

                        <label class="btn btn-xs border-0 navbar-purple d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="purple">
                        </label>

                        <label class="btn btn-xs border-0 navbar-orange d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="orange">
                        </label>


                        <label class="btn btn-xs border-0 navbar-brown d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="brown">
                        </label>

                        <label class="btn btn-xs border-0 navbar-darkgreen d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="darkgreen">
                        </label>

                        <label class="btn btn-xs border-0 navbar-skyblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="skyblue">
                        </label>

                        <label class="btn btn-xs border-0 navbar-secondary d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="secondary">
                        </label>

                      </div>
                    </div><!-- #id-navbar-themes-dark -->

                    <div class="d-none" id="id-navbar-themes-light">
                      <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                        <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                          <label class="active btn btn-xs border-0 navbar-white d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="white" checked="">
                          </label>

                          <label class="btn btn-xs border-0 navbar-white2 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="white2">
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightblue d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightblue">
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightpurple d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightpurple">
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightgreen d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightgreen">
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightgrey d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightgrey">
                          </label>

                          <!--
                        <label class="btn btn-xs border-0 navbar-lightyellow d-style m-1px">
                          <i class="fa fa-check text-muted v-active"></i>
                          <input type="radio" name="navbar-light" value="lightyellow"  />
                        </label>
        
                        <label class="btn btn-xs border-0 navbar-khaki d-style m-1px">
                          <i class="fa fa-check text-muted v-active"></i>
                          <input type="radio" name="navbar-light" value="khaki"  />
                        </label>
                        -->

                        </div>
                      </div>

                    </div><!-- #id-navbar-themes-light -->

                  </div>


                  <hr class="border-dotted">


                  <div class="text-95">
                    <h5 class="text-success">Layout</h5>

                    <div class="mt-3 d-flex justify-content-between align-items-center">
                      <label for="id-navbar-fixed" class="pl-1 text-grey-d1">Fixed Navbar</label>
                      <input type="checkbox" class="ace-switch" id="id-navbar-fixed" checked="">
                    </div>

                    <div class="mt-2 d-flex justify-content-between align-items-center">
                      <label for="id-sidebar-fixed" class="pl-1 text-grey-d1">Fixed Sidebar</label>
                      <input type="checkbox" class="ace-switch" id="id-sidebar-fixed" checked="">
                    </div>

                    <div class="mt-2 d-flex justify-content-between align-items-center">
                      <label for="id-footer-fixed" class="pl-1 text-grey-d1">Fixed Footer</label>
                      <input type="checkbox" class="ace-switch" id="id-footer-fixed">
                    </div>

                    <div class="mt-2 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                      <div class="pl-1 text-grey-d1">Boxed Layout</div>

                      <div class="w-50 btn-group btn-group-toggle flex-row flex-wrap fl1ex-md-nowrap" data-toggle="buttons">
                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                          None
                          <input type="radio" name="boxed-layout" value="none">
                        </label>

                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                          All
                          <input type="radio" name="boxed-layout" value="all">
                        </label>

                        <label class="d-none btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                          Not Navbar
                          <input type="radio" name="boxed-layout" value="not-navbar">
                        </label>

                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary active">
                          Only Content
                          <input type="radio" name="boxed-layout" value="only-content" checked="">
                        </label>
                      </div>
                    </div>

                    <div id="id-body-bg" class="collapse">
                      <div class="mt-3 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                        <h6 class="text-95 pl-1 text-grey-d1">Body Background:</h6>

                        <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                          <label class="btn btn-sm btn-outline-purple active  mb-1">
                            None
                            <input type="radio" name="body-theme" value="auto" checked="">
                          </label>

                          <label class="btn btn-sm btn-outline-purple mb-1">
                            Image 1
                            <input type="radio" name="body-theme" value="img1">
                          </label>

                          <label class="btn btn-sm btn-outline-purple mb-1">
                            Image 2
                            <input type="radio" name="body-theme" value="img2">
                          </label>
                        </div>
                      </div>
                    </div>



                    <hr class="border-dotted my-2">

                    <div class="mt-1 d-flex justify-content-between align-items-center">
                      <label for="id-rtl" class="pl-1 text-grey-d1">RTL (right to left)</label>

                      <input type="checkbox" class="ace-switch" id="id-rtl">
                    </div>


                  </div>

                  <hr class="border-double my-md-4">

                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                    <h5 class="text-info">Font</h5>

                    <div class="align-self-end w-75">
                      <select id="id-change-font" class="ace-select radius-round w-100 text-grey brc-h-info-m2">
                        <option value="lato">Lato</option>
                        <option value="manrope">Manrope</option>
                        <option value="montserrat">Montserrat</option>
                        <option value="noto-sans">Noto Sans</option>
                        <option value="open-sans" selected="">Open Sans</option>
                        <option value="poppins">Poppins</option>
                        <option value="raleway">Raleway</option>
                        <option value="roboto" class="text-primary-d2 text-600">Roboto (popular)</option>
                        <option value="">----</option>
                        <option value="markazi">Markazi (for RTL languages)</option>
                      </select>
                    </div>
                  </div>


                  <hr class="border-double my-md-4">

                  <div class="text-95">
                    <h5 class="text-orange-d2 ml-n2px">Sidebar</h5>
                    <!--
                  <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                      <label for="id-sidebar-compact" class="pl-1 text-grey-d2">Compact</label>
        
                      <div class="custom-control custom-switch d-inline-block">
                        <input type="checkbox" class="custom-control-input" id="id-sidebar-compact"  />
                        <label class="custom-control-label" for="id-sidebar-compact"></label>
                      </div>
                  </div>
                  -->

                    <div class="mt-2 d-none d-xl-flex justify-content-between align-items-center">
                      <div class="pl-1 text-grey-d1">Collapsed Mode</div>

                      <div class="btn-group btn-group-toggle flex-row" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-red active">
                          Expand
                          <input type="radio" name="sidebar-collapsed" value="expandable" checked="">
                        </label>

                        <label class="btn btn-sm btn-outline-red">
                          Popup
                          <input type="radio" name="sidebar-collapsed" value="hoverable">
                        </label>

                        <label class="btn btn-sm btn-outline-red">
                          Hide
                          <input type="radio" name="sidebar-collapsed" value="hideable">
                        </label>
                      </div>
                    </div>

                    <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                      <label for="id-sidebar-hover" class="pl-1 text-grey-d1">Submenu on Hover</label>

                      <label>
                        <input type="checkbox" class="ace-switch" id="id-sidebar-hover">
                      </label>
                    </div>

                    <div class="mt-2 d-flex d-xl-none justify-content-between align-items-center">
                      <label for="id-push-content" class="pl-1 text-grey-d1">Push Content</label>

                      <label>
                        <input type="checkbox" class="ace-switch" id="id-push-content">
                      </label>
                    </div>

                  </div>

                  <div class="my-1"></div>
                </form>
              </div>

              <div class="modal-footer d-none justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  <i class="fa fa-times mr-1"></i>
                  Close
                </button>
                <button type="button" class="btn btn-info">
                  <i class="fa fa-check mr-1"></i>
                  Keep changes
                </button>
              </div>

            </div><!-- .modal-content -->

            <div class="aside-header align-self-start mt-1 mt-lg-5 text-right d-style">
              <button type="button" class="btn btn-orange btn-lg shadow-sm pl-2 radius-l-2 f-n-hover py-1 py-md-2" data-toggle="modal" data-target="#id-ace-settings-modal">
                <i class="fa fa-cog text-110 ml-1"></i>
              </button>
            </div>
          </div><!-- .modal-dialog -->
        </div><!-- .modal-aside -->
      </div>
    </div>

    <!-- include common vendor scripts used in demo pages -->
    <script src="{{asset('adminassets\npm\jquery@3.5.1\dist\jquery.min.js')}}"></script>
    <script src="{{asset('adminassets\npm\popper.js@1.16.1\dist\umd\popper.min.js')}}"></script>
    <script src="{{asset('adminassets\npm\bootstrap@4.5.2\dist\js\bootstrap.min.js')}}"></script>



    <!-- include vendor scripts used in "Dashboard 2" page. see "application/views/default/pages/partials/dashboard-2/@vendor-scripts.hbs" -->
    <script src="{{asset('adminassets\npm\chart.js@2.9.3\dist\Chart.min.js')}}"></script>



    <!-- include ace.js -->
    <script src="{{asset('adminassets\dist\js\ace.min.js')}}"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="{{asset('adminassets\assets\js\demo.min.js')}}"></script>



    <!-- "Dashboard 2" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {
        //show tooltips
        $('.page-tools .btn').tooltip({
          container: 'body',
          template: '<div class="tooltip" role="tooltip"><div class="arrow brc-secondary"></div><div class="tooltip-inner text-600 text-110 pb-2 bgc-secondary-d1"></div></div>',
          trigger: 'hover',
          placement: 'top'
        })

        //////////////////////////////////////////////

        var _animate = !AceApp.Util.isReducedMotion()


        //the small pageview chart
        new Chart(document.getElementById("chart-1"), {
          type: 'bar',
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
              type: 'line',
              label: '',

              data: [107, 122, 136, 112, 139, 120, 134, 128, 108, 122, 119, 125],

              spanGaps: true,

              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: 'rgba(93, 170, 201, 0.75)',
              borderWidth: 2,

              fill: true,
              backgroundColor: 'rgba(89, 182, 218, 0.25)',

              pointRadius: 5,
              pointBorderColor: 'transparent',
              pointBackgroundColor: 'transparent',
              pointBorderWidth: 5,

              pointHoverBackgroundColor: 'rgb(93, 170, 201)',
              pointHoverBorderColor: 'rgb(93, 170, 201)'
            }]
          },
          options: {
            responsive: true,
            animation: {
              duration: _animate ? 1000 : false
            },
            legend: {
              display: false
            },
            scales: {
              yAxes: [{
                ticks: {
                  display: false,
                  min: 80, // minimum value
                  max: 200 // maximum value
                },
                gridLines: {
                  display: false,
                  drawBorder: false
                }
              }],

              xAxes: [{
                barThickness: 4,
                gridLines: {
                  display: false,
                  drawBorder: false
                },
                ticks: {
                  display: false //this will remove only the label
                }
              }, ]
            },

            tooltips: {
              // Disable the on-canvas tooltip, because canvas area is small and tooltips will be cut (clipped)
              enabled: false,

              //use bootstrap tooltip instead
              custom: function(tooltipModel) {
                var title = '';
                var canvas = this._chart.canvas;

                if (tooltipModel.body) {
                  title = tooltipModel.title[0] + ': ' + Number(tooltipModel.body[0].lines[0]).toLocaleString();
                }
                canvas.setAttribute('data-original-title', title); //will be used by bootstrap tooltip

                $(canvas)
                  .tooltip({
                    placement: 'bottom',
                    template: '<div class="tooltip" role="tooltip"><div class="bgc-info tooltip-inner font-bolder text-110"></div></div>'
                  })
                  .tooltip('show')
                  .on('hidden.bs.tooltip', function() {
                    canvas.setAttribute('data-original-title', ''); //so that when mouse is back over canvas's blank area, no tooltip is shown
                  });

              }
            } //tooltips
          }
        })



        // small pie chart
        new Chart(document.getElementById('piechart'), {
          type: 'doughnut',
          data: {
            datasets: [{
              label: 'Traffic Sources',
              data: [38.7, 24.5, 8.2, 18.6, 10],
              backgroundColor: [
                "#ea5d6a",
                "#718ff1",
                "#12d18f",
                "#ff7124",
                "#ffc688",
              ],
            }],
            labels: [
              'social networks',
              'search engines',
              'ad campaigns',
              'direct traffic',
              'other'
            ]
          },

          options: {
            responsive: true,

            cutoutPercentage: 50,
            legend: {
              display: false
            },
            animation: {
              // animateScale: true,
              animateRotate: true,
              duration: _animate ? 1000 : false
            },
            tooltips: {
              enabled: true,
              cornerRadius: 0,
              bodyFontColor: '#fff',
              bodyFontSize: 14,
              fontStyle: 'bold',

              backgroundColor: 'rgba(34, 34, 34, 0.73)',
              borderWidth: 0,

              caretSize: 5,

              xPadding: 12,
              yPadding: 12,

              callbacks: {
                label: function(tooltipItem, data) {
                  var label = data.labels[tooltipItem.index]
                  return ' ' + label + ": " + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]
                }
              }
            }
          }
        })


        ////////////////////////////////////////

        //the big sales chart
        var canvas = document.getElementById("saleschart")
        var ctx = canvas.getContext("2d");

        /*** Gradient ***/
        var gradient1 = ctx.createLinearGradient(0, 0, 0, 300);
        gradient1.addColorStop(0, 'rgba(89, 182, 218, 0.3)');
        gradient1.addColorStop(1, 'rgba(89, 182, 218, 0)');

        var gradient2 = ctx.createLinearGradient(0, 0, 0, 250);
        gradient2.addColorStop(0, 'rgba(112, 187, 112, 0.4)');
        gradient2.addColorStop(1, 'rgba(112, 187, 112, 0)');

        var gradients = [];
        gradients.push(gradient1, gradient2);


        var chartOptions1 = {
          lineTenstion: 0.3,
          borderWidth: 2,
          pointRadius: 2
        };
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Twitter",
                data: [150, 320, 250, 300, 450, 380, 360, 490, 480, 790, 720, 910],

                borderColor: 'rgba(89, 182, 218, 0.7)',
                pointBorderColor: 'rgba(89, 182, 218, 0.67)',

                fill: true,
                backgroundColor: gradients[0],
                pointBackgroundColor: '#FFF',

                borderWidth: chartOptions1.borderWidth,
                pointRadius: chartOptions1.pointRadius,
                lineTension: chartOptions1.lineTension,
              },
              {
                label: "Facebook",
                data: [600, 700, 520, 450, 580, 650, 720, 850, 650, 500, 350, 400],

                borderColor: 'rgba(112, 187, 112, 0.7)',
                pointBorderColor: 'rgba(112, 187, 112, 0.67)',

                fill: true,
                backgroundColor: gradients[1],
                pointBackgroundColor: '#FFF',

                borderWidth: chartOptions1.borderWidth,
                pointRadius: chartOptions1.pointRadius,
                lineTension: chartOptions1.lineTension,
              }
            ]
          },
          options: {
            responsive: true,
            animation: {
              duration: _animate ? 1000 : false
            },

            datasetStrokeWidth: 3,
            pointDotStrokeWidth: 4,

            tooltips: {
              enabled: true,
              cornerRadius: 0,

              titleFontColor: 'rgba(0, 0, 0, 0.8)',
              titleFontSize: 16,
              titleFontStyle: 'normal',

              bodyFontColor: 'rgba(0, 0, 0, 0.8)',
              bodyFontSize: 14,
              fontFamily: 'Open Sans',

              backgroundColor: 'rgba(255, 255, 255, 0.73)',
              borderWidth: 2,
              borderColor: 'rgba(254, 224, 116, 0.73)',

              caretSize: 5,

              xPadding: 12,
              yPadding: 12,

            },

            scales: {
              yAxes: [{
                ticks: {
                  fontFamily: "Open Sans",
                  fontColor: "#85808e",
                  fontStyle: "bolder",
                  fontSize: "13",
                  beginAtZero: false,
                  maxTicksLimit: 3,
                  padding: 16
                },
                gridLines: {
                  drawTicks: false,
                  display: false
                }
              }],
              xAxes: [{
                gridLines: {
                  zeroLineColor: "transparent"
                },
                ticks: {
                  fontFamily: "Open Sans",
                  fontColor: "#85808e",
                  fontSize: "14",
                  padding: 12
                }
              }]
            },

            legend: {
              display: true,
              position: 'top'
            }
          }
        })

      })
    </script>
  </body>

</html>