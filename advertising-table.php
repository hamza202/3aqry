<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>عقاري | الإعلانات</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Tajawal:300,400,500,700,900"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <!--<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />-->

    <link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />-->

    <link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->

    <link href="assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico"/>
    <link rel="stylesheet" href="assets/custome.css">
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/images/inline-logo-wight.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->


                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <?php include 'top_bar.php' ?>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <?php include 'menu.php' ?>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">الإعلانات</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    الإعلانات جداول
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <a href="advertising.php" class="btn btn-info m-btn m-btn--custom m-btn--icon">
                                <span>
                                    <i class="la la-chain"></i>
                                    <span>الإعلانات (خرائط)</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <ul class="nav nav-tabs  m-tabs-line m-tabs-line--success" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_1" role="tab">
                                    كل الإعلانات</a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_2" role="tab"> اعلانات
                                    عادية</a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_3" role="tab">
                                    اعلانات مميزة</a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_4" role="tab">
                                    اعلى مشاهدة</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="m_tabs_1" role="tabpanel">
                                <table class="table table-striped- table-bordered table-hover table-checkable"
                                       id="m_table_1">
                                    <thead>
                                    <tr>
                                        <th>رقم الإعلان</th>
                                        <th>نص اعلان مصغر</th>
                                        <th>اسم الناشر</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#201801</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    <tr>
                                        <td>#201802</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    <tr>
                                        <td>#201802</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="m_tabs_2" role="tabpanel">
                                <table class="table table-striped- table-bordered table-hover table-checkable"
                                       id="m_table_2">
                                    <thead>
                                    <tr>
                                        <th>رقم الإعلان</th>
                                        <th>نص اعلان مصغر</th>
                                        <th>اسم الناشر</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#201801</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    <tr>
                                        <td>#201802</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    <tr>
                                        <td>#201802</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="m_tabs_3" role="tabpanel">
                                <table class="table table-striped- table-bordered table-hover table-checkable"
                                       id="m_table_3">
                                    <thead>
                                    <tr>
                                        <th>رقم الإعلان</th>
                                        <th>نص اعلان مصغر</th>
                                        <th>اسم الناشر</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#201801</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    <tr>
                                        <td>#201802</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    <tr>
                                        <td>#201802</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="m_tabs_4" role="tabpanel">
                                <table class="table table-striped- table-bordered table-hover table-checkable"
                                       id="m_table_4">
                                    <thead>
                                    <tr>
                                        <th>رقم الإعلان</th>
                                        <th>نص اعلان مصغر</th>
                                        <th>اسم الناشر</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#201801</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    <tr>
                                        <td>#201802</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    <tr>
                                        <td>#201802</td>
                                        <td>نص اعلان مصغر</td>
                                        <td>اسم الناشر</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>

    <!-- end:: Body -->
    <?php include 'footer.php' ?>
</div>

<!-- end:: Page -->


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>


<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script src="assets/demo/default/custom/crud/datatables/basic/headers.js" type="text/javascript"></script>
<script>
    $("#m_table_2").DataTable();
    $("#m_table_3").DataTable();
    $("#m_table_4").DataTable();
</script>
</body>

<!-- end::Body -->
</html>