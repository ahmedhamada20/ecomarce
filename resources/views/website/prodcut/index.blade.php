@extends('website.layouts.master')
@section('content')
    <div role="main" id="maincontent">


        <!-- CQuotient Activity Tracking (viewProduct-cquotient.js) -->
        <script type="text/javascript">
            //<!--
            /* <![CDATA[ */
            (function () {
                try {
                    if (window.CQuotient) {
                        var cq_params = {};
                        cq_params.product = {
                            id: '4449JP',
                            sku: '4449JP.11',
                            type: '',
                            alt_id: ''
                        };
                        cq_params.realm = "BJGJ";
                        cq_params.siteId = "JSS";
                        cq_params.instanceType = "prd";
                        window.CQuotient.trackViewProduct(cq_params);
                    }
                } catch (err) {
                }
            })();
            /* ]]> */
            // -->
        </script>
        <script type="text/javascript">
            //<!--
            /* <![CDATA[ (viewProduct-active_data.js) */
            dw.ac._capture({
                id: "4449JP.11",
                type: "detail"
            });
            /* ]]> */
            // -->
        </script>
        <div class="container product-detail product-wrapper" data-pid="4449JP.11">
            <div class="row">
                <div class="col-12">
                    <!--Breadcrumbs-->
                    <div class="product-breadcrumb">
                        <div class="row hidden-md-down breadcrumb-wrapper">
                            <div class="col" role="navigation" aria-label="Breadcrumb">
                                <ol class="breadcrumb">


                                    <li class="breadcrumb-item">

                                        <a href="../../index.html">
                                            Vegetables
                                        </a>

                                    </li>

                                    <li class="breadcrumb-item">

                                        <a href="../index.html">
                                            Lettuce
                                        </a>

                                    </li>

                                    <li class="breadcrumb-item">

                                        <a href="index.html" aria-current="page">
                                            Salanova&reg; Lettuce
                                        </a>

                                    </li>

                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 mb-lg-5">
                    <div class="row product-header mb-2 align-items-end d-lg-none">
                        <!-- Product Name -->
                        <div class="col-12">
                            <h1 class="brand-h2 product-name" itemprop="name">Salanova&reg; Hydroponic Red Butter
                                <span class="brand-h4 d-block mt-1 mb-1 mt-lg-1 mb-lg-4 product-alternate-name"
                                      itemprop="alternateName">Pelleted Lettuce Seed</span>
                            </h1>
                        </div>
                        <div class="col-12 mb-lg-2">
                            <!-- Product Number -->
                            <span class="caption-1">
                            <span>Product ID:</span><span class="product-id d-none">4449JP.11</span><span
                                    class="master-product-id">4449JP</span>

                        </span>
                        </div>
                        <!-- Applicable Promotions -->
                        <span class="col-12 promotions mt-1 d-lg-none">




                    </span>
                    </div>
                    <!-- Product Images Carousel -->


                    <div class="primary-images">
                        <div id="pdpCarousel-4449JP" class="carousel slide has-video" data-interval="0"
                             data-prev="Previous"
                             data-next="Next">
                            <div class="carousel-inner" role="listbox">
                                <div class="zoom-image">Zoom Image</div>


                                <div class="c-image-gallery__main-image-badge c-image-gallery__main-image-badge--new">
                                    New
                                </div>


                                <div data-slide="0" class='carousel-item active'>
                                    <img src="{{ asset('admin/pictures/subcategory/'.rand(1,6).'/'.rand(1,6).".jpg") }}" class="d-block img-fluid"
                                         alt="Salanova&reg; Hydroponic Red Butter Salanova&reg; Lettuce"
                                         itemprop="image"/>
                                </div>

                            </div>

                            <div class="thumbnail-images-inner">
                                <ol class="carousel-indicators">


                                </ol>

                            </div>

                        </div>
                    </div>
                    <div class="row product-attributes d-none d-lg-block col-12">


                        <div class="o-layout-zipper__left layout-zipper-line-pdp">
                            <div class="c-facts layout-zipper-line-pdp-social-icon">
                                <h2 class="c-facts__heading ">Quick Facts</h2>

                                <img class="c-facts__supplementary_image"
                                     src="{{ asset('front/on/demandware.static/-/Sites-jss-master/default/dw62133de0/products/germintation_guides/lettuce.jpg') }}"
                                     alt="null"/>


                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row product-header align-items-end align-items-lg-start d-none d-lg-flex">
                        <!-- Product Name -->
                        <div class="col-6">
                            <h1 class="brand-h2 product-name" itemprop="name">{{ $data->name }}
                                <span class="brand-h4 d-block mt-1 mb-1 mt-lg-1 mb-lg-4 product-alternate-name"
                                      itemprop="alternateName">{{ $data->sub_category->name }}</span>
                            </h1>
                        </div>
                        <div class="col-6 text-right">
                            <!-- Product Number -->
                            <span class="caption-1 mb-2 mb-md-4 mb-lg-0 d-flex justify-content-end">
                            <span>Product ID:</span><span class="product-id d-none">4449JP.11</span><span
                                    class="master-product-id">4449JP</span>

                        </span>
                            <!-- Applicable Promotions -->
                            <span class="promotions text-md-right justify-content-lg-end">




                        </span>
                        </div>
                    </div>

                    <div class="row mt-2 mt-lg-3">

                        <div class="description-and-detail col-12">

                            <div class="description collapsible-xs ">

                                <p id="collapsible-description-1">
                                    {{ $data->notes }}
                                </p>


                            </div>


                            <div class="details collapsible-xs ">

                                <p id="collapsible-details-1">
                                <span style="color: #000000;">
                                    Soft, delicate leaves have traditional butterhead
                                    appearance but are more numerous and remain small through maturity. Density
                                    and leaf count increase greatly as heads mature. Leaves have a folded
                                    presentation, particularly the inner leaves, which provides nice loft for
                                    boxed salad mix. Improved vigor, tipburn tolerance, and bolt tolerance
                                    compared to other butterleaf one-cuts. Note: Days to maturity will vary
                                    depending on your target weight and growing practices, but you can expect a
                                    range of 40&ndash;45 days for hydroponically grown, full-size heads. High
                                    resistance to downy mildew races EU 16&ndash;32, 34, 36, and </span><span
                                        style="color: #000000;font-style:italic;">Nasonovia ribisnigri </span><span
                                        style="color: #000000;">aphid. MT0-30. Pelleted seed. Avg. 11,400 seeds/lb.
                                    Packet: 25 seeds.

                                </span>
                                </p>


                            </div>
                            <button type="button" class="c-content-toggle-trigger js-ct-trigger d-none"
                                    data-active-content="Less">
                                Read More
                            </button>

                        </div>

                    </div>

                    <div class="row w-100 shipping-alerts">


                        <div class="c-pills-wrap mb-4">
                            <ul class="c-pills d-flex m-0 flex-column flex-lg-row">

                                <li class="c-pills__item"><a href="#shipping-info"
                                                             class="c-pills__link js-accordion-scroll-to">View Shipping
                                        Restrictions</a>
                                </li>


                            </ul>
                        </div>

                    </div>
                    <div class="row">


                    </div>


                    <div class="attributes">
                        <!-- Attributes and Quantity -->
                        <div class="row">
                            <div class="col">

                                <div class="main-attributes">


                                </div>

                            </div>
                        </div>


                        <div class="row" data-attr="sizecode">
                            <div class="col-12 pr-lg-0 attributes-wrap pt-lg-4">


                                <div class="attribute">

                                    <!-- Select <Attribute> Label -->
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <!-- Select <Attribute> Label -->
                                        <div class="sizecode-label d-flex">
                                            <label class="sizecode mb-0 text-uppercase" for="sizecode-1">
                                                Size:
                                            </label>


                                            <span class="selected-sizecode font-weight-normal ml-1 d-none"></span>
                                        </div>
                                    </div>
                                    <!-- Rectangular Swatch Attribute Values -->
                                    <div class="sizecode-select">
                                        <ul class="sizecode-swatches sizecode-attribute d-flex pt-sm-1 flex-wrap">

                                            <li data-attr-value="11"
                                                class="swatch-square position-relative size-swatch active selectable"
                                                value="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variation7e43.json?dwvar_4449JP_sizecode=&amp;pid=4449JP&amp;quantity=1">
                                                <a data-attr-value="11" data-product="4449JP.11"
                                                   href="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variation7e43.json?dwvar_4449JP_sizecode=&amp;pid=4449JP&amp;quantity=1"
                                                   title="11"
                                                   class="sizecode-value swatch-square-value d-flex justify-content-center align-items-center selected">
                                                    <div
                                                        class="attribute-display attribute-availability product-availability"
                                                        data-ready-to-order="true" data-available="true">
                                                        <!-- Attribute displayValue -->
                                                        <span class="font-weight-bold">Packet</span>
                                                        <!-- Product Availability -->


                                                        <div class="availability-inner-wrapper">
                                                            <span class="in-stock-msg">In Stock</span>

                                                        </div>

                                                    </div>
                                                    <!-- Prices -->
                                                    <div class="attribute-price">
                                                        <div class="prices-new">


                                                            <div class="price">

                                                            <span>





                                                                <span class="sales ">



                                                                    <span class="value" content="6.70">

                                                                        6.70 AED


                                                                    </span>
                                                                </span>
                                                            </span>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li data-attr-value="51"
                                                class="swatch-square position-relative size-swatch  selectable"
                                                value="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variation4367.json?dwvar_4449JP_sizecode=51&amp;pid=4449JP&amp;quantity=1">
                                                <a data-attr-value="51" data-product="4449JP.51"
                                                   href="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variation4367.json?dwvar_4449JP_sizecode=51&amp;pid=4449JP&amp;quantity=1"
                                                   title="51"
                                                   class="sizecode-value swatch-square-value d-flex justify-content-center align-items-center ">
                                                    <div
                                                        class="attribute-display attribute-availability product-availability"
                                                        data-ready-to-order="true" data-available="true">
                                                        <!-- Attribute displayValue -->
                                                        <span class="font-weight-bold">250 Seeds</span>
                                                        <!-- Product Availability -->


                                                        <div class="availability-inner-wrapper">
                                                            <span class="in-stock-msg">In Stock</span>

                                                        </div>

                                                    </div>
                                                    <!-- Prices -->
                                                    <div class="attribute-price">
                                                        <div class="prices-new">


                                                            <div class="price">

                                                            <span>





                                                                <span class="sales ">



                                                                    <span class="value" content="19.05">

                                                                        19.05 AED


                                                                    </span>
                                                                </span>
                                                            </span>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li data-attr-value="53"
                                                class="swatch-square position-relative size-swatch  selectable"
                                                value="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variation7ecf.json?dwvar_4449JP_sizecode=53&amp;pid=4449JP&amp;quantity=1">
                                                <a data-attr-value="53" data-product="4449JP.53"
                                                   href="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variation7ecf.json?dwvar_4449JP_sizecode=53&amp;pid=4449JP&amp;quantity=1"
                                                   title="53"
                                                   class="sizecode-value swatch-square-value d-flex justify-content-center align-items-center ">
                                                    <div
                                                        class="attribute-display attribute-availability product-availability"
                                                        data-ready-to-order="true" data-available="true">
                                                        <!-- Attribute displayValue -->
                                                        <span class="font-weight-bold">1,000 Seeds</span>
                                                        <!-- Product Availability -->


                                                        <div class="availability-inner-wrapper">
                                                            <span class="in-stock-msg">In Stock</span>

                                                        </div>

                                                    </div>
                                                    <!-- Prices -->
                                                    <div class="attribute-price">
                                                        <div class="prices-new">


                                                            <div class="price">

                                                            <span>





                                                                <span class="sales ">



                                                                    <span class="value" content="54.40">

                                                                        54.40 AED


                                                                    </span>
                                                                </span>
                                                            </span>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li data-attr-value="54"
                                                class="swatch-square position-relative size-swatch  selectable"
                                                value="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variationc807.json?dwvar_4449JP_sizecode=54&amp;pid=4449JP&amp;quantity=1">
                                                <a data-attr-value="54" data-product="4449JP.54"
                                                   href="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variationc807.json?dwvar_4449JP_sizecode=54&amp;pid=4449JP&amp;quantity=1"
                                                   title="54"
                                                   class="sizecode-value swatch-square-value d-flex justify-content-center align-items-center ">
                                                    <div
                                                        class="attribute-display attribute-availability product-availability"
                                                        data-ready-to-order="true" data-available="true">
                                                        <!-- Attribute displayValue -->
                                                        <span class="font-weight-bold">5,000 Seeds</span>
                                                        <!-- Product Availability -->


                                                        <div class="availability-inner-wrapper">
                                                            <span class="in-stock-msg">In Stock</span>

                                                        </div>

                                                    </div>
                                                    <!-- Prices -->
                                                    <div class="attribute-price">
                                                        <div class="prices-new">


                                                            <div class="price">

                                                            <span>





                                                                <span class="sales ">



                                                                    <span class="value" content="233.50">

                                                                        233.50 AED


                                                                    </span>
                                                                </span>
                                                            </span>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li data-attr-value="55"
                                                class="swatch-square position-relative size-swatch  selectable"
                                                value="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variation75ca.json?dwvar_4449JP_sizecode=55&amp;pid=4449JP&amp;quantity=1">
                                                <a data-attr-value="55" data-product="4449JP.55"
                                                   href="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variation75ca.json?dwvar_4449JP_sizecode=55&amp;pid=4449JP&amp;quantity=1"
                                                   title="55"
                                                   class="sizecode-value swatch-square-value d-flex justify-content-center align-items-center ">
                                                    <div
                                                        class="attribute-display attribute-availability product-availability"
                                                        data-ready-to-order="true" data-available="true">
                                                        <!-- Attribute displayValue -->
                                                        <span class="font-weight-bold">10,000 Seeds</span>
                                                        <!-- Product Availability -->


                                                        <div class="availability-inner-wrapper">
                                                            <span class="in-stock-msg">In Stock</span>

                                                        </div>

                                                    </div>
                                                    <!-- Prices -->
                                                    <div class="attribute-price">
                                                        <div class="prices-new">


                                                            <div class="price">

                                                            <span>





                                                                <span class="sales ">



                                                                    <span class="value" content="439.70">

                                                                        439.70 AED


                                                                    </span>
                                                                </span>
                                                            </span>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li data-attr-value="56"
                                                class="swatch-square position-relative size-swatch  unselectable"
                                                disabled
                                                value="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variationfa7b.json?dwvar_4449JP_sizecode=56&amp;pid=4449JP&amp;quantity=1">
                                                <a data-attr-value="56" data-product="4449JP.56"
                                                   href="../../../on/demandware.store/Sites-JSS-Site/en_US/Product-Variationfa7b.json?dwvar_4449JP_sizecode=56&amp;pid=4449JP&amp;quantity=1"
                                                   title="56"
                                                   class="sizecode-value swatch-square-value d-flex justify-content-center align-items-center ">
                                                    <div
                                                        class="attribute-display attribute-availability product-availability"
                                                        data-ready-to-order="true" data-available="true">
                                                        <!-- Attribute displayValue -->
                                                        <span class="font-weight-bold">25,000 Seeds</span>
                                                        <!-- Product Availability -->


                                                        <div class="availability-inner-wrapper highlight">
                                                            <span class="not-available-msg">Out of Stock</span>

                                                        </div>

                                                    </div>
                                                    <!-- Prices -->
                                                    <div class="attribute-price">
                                                        <div class="prices-new">


                                                            <div class="price">

                                                            <span>





                                                                <span class="sales ">



                                                                    <span class="value" content="1046.00">

                                                                        1,046.00 AED


                                                                    </span>
                                                                </span>
                                                            </span>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>

                            </div>
                            <div
                                class="col-12 pl-lg-0 buttons-wrap flex-column align-items-center d-flex pb-lg-2 pt-lg-1">
                                <div class="row w-100">
                                    <div class="col col-12 col-lg-6 pt-lg-2">

                                        <!-- Quantity Drop Down Menu -->
                                        <span class="attribute quantity col-md-4 pl-0 w-50 w-md-auto">
                                        <div class="d-none">
                                            <select class="quantity-select custom-select form-control" id="quantity-1">

                                                <option value="1"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=1"
                                                        selected>
                                                    1
                                                </option>

                                                <option value="2"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=2">
                                                    2
                                                </option>

                                                <option value="3"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=3">
                                                    3
                                                </option>

                                                <option value="4"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=4">
                                                    4
                                                </option>

                                                <option value="5"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=5">
                                                    5
                                                </option>

                                                <option value="6"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=6">
                                                    6
                                                </option>

                                                <option value="7"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=7">
                                                    7
                                                </option>

                                                <option value="8"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=8">
                                                    8
                                                </option>

                                                <option value="9"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=9">
                                                    9
                                                </option>

                                                <option value="10"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=10">
                                                    10
                                                </option>

                                                <option value="11"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=11">
                                                    11
                                                </option>

                                                <option value="12"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=12">
                                                    12
                                                </option>

                                                <option value="13"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=13">
                                                    13
                                                </option>

                                                <option value="14"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=14">
                                                    14
                                                </option>

                                                <option value="15"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=15">
                                                    15
                                                </option>

                                                <option value="16"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=16">
                                                    16
                                                </option>

                                                <option value="17"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=17">
                                                    17
                                                </option>

                                                <option value="18"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=18">
                                                    18
                                                </option>

                                                <option value="19"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=19">
                                                    19
                                                </option>

                                                <option value="20"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=20">
                                                    20
                                                </option>

                                                <option value="21"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=21">
                                                    21
                                                </option>

                                                <option value="22"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=22">
                                                    22
                                                </option>

                                                <option value="23"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=23">
                                                    23
                                                </option>

                                                <option value="24"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=24">
                                                    24
                                                </option>

                                                <option value="25"
                                                        data-url="/on/demandware.store/Sites-JSS-Site/en_US/Product-Variation?pid=4449JP.11&amp;quantity=25">
                                                    25
                                                </option>

                                            </select>
                                        </div>
                                        <div class="wrap d-flex align-items-center align-items-lg-end flex-column">
                                            <label for="quantity-1">Quantity</label>
                                            <div class="d-flex">

                                                <input type="number" class="count" placeholder="1" value="1" min="1">

                                                {{-- <button type="button" id="sub" class="sub">-</button>
                                                <input class="count" type="text" readonly id="quantity-1" value="1"
                                                    min="1" aria-label="Quantity" />
                                                <button type="button" id="add" class="add">+</button> --}}
                                            </div>
                                        </div>

                                    </span>

                                    </div>
                                    <div class="col col-12 col-lg-6 d-lg-flex flex-lg-column pl-lg-0">
                                        <div class="prices-add-to-cart-actions order-2">
                                            <!-- Cart and [Optionally] Apple Pay -->
                                            <div class="row cart-and-ipay">
                                                <div class="col-sm-12 p-0 pl-lg-3">
                                                    <input type="hidden" class="add-to-cart-url"
                                                           value="/on/demandware.store/Sites-JSS-Site/en_US/Cart-AddProduct">
                                                    <input type="hidden" class="perishable-url"
                                                           value="/on/demandware.store/Sites-JSS-Site/en_US/Cart-ValidatePerishableProduct">


                                                    @isset($cart)

                                                        @if ($done =$cart->where('id',$data->id)->first())

                                                            <form action="{{ route('deletedCart') }}" method="POST">
                                                                @csrf

                                                                <input type="hidden" value="{{ $done->rowId }}"
                                                                       name="cart_id">
                                                                <button
                                                                    class="btn btn-danger  btn btn-primary w-100">
                                                                    Deleted
                                                                    Cart
                                                                </button>

                                                            </form>
                                                        @else
                                                            <form action="{{ route('addToCart') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="product_id"
                                                                       value="{{ $data->id }}">
                                                                <button class="btn btn-primary w-100">
                                                                    <i class="fa fa-shopping-bag"></i>
                                                                    Add to Cart
                                                                </button>
                                                            </form>
                                                        @endif

                                                    @endisset


                                                </div>
                                            </div>

                                        </div>
                                        <!-- Add Product To Wishlist -->

                                        <div class="add-to-wishlist-wrapper">
                                            <button type="submit" class="btn btn-block add-to-wish-list p-0"
                                                    data-href="/on/demandware.store/Sites-JSS-Site/en_US/Wishlist-AddProduct">
                                                <span>Add to Wishlist</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-options">

                        </div>

                        <!-- Size Chart -->

                    </div>

                    <div class="col-12 p-0">
                        <div class="product-attributes d-lg-none">


                            <div class="o-layout-zipper__left layout-zipper-line-pdp">
                                <div class="c-facts layout-zipper-line-pdp-social-icon">
                                    <h2 class="c-facts__heading ">Quick Facts</h2>

                                    <img class="c-facts__supplementary_image"
                                         src="../../../on/demandware.static/-/Sites-jss-master/default/dw62133de0/products/germintation_guides/lettuce.jpg"
                                         alt="null"/>

                                    <dl class="c-facts__list">


                                        <dt class="c-facts__term">
                                            <h3 title="Latin Name">Latin Name</h3>

                                        </dt>
                                        <dd class="c-facts__definition">


                                            <h4>Lactuca sativa</h4>


                                        </dd>


                                        <dt class="c-facts__term js-facts-dialog">
                                            <h3 title="Days To Maturity">Days To Maturity</h3>

                                            <button type="button" class="c-facts__term__info js-facts-dialog__trigger">
                                                About
                                                Quick
                                                Fact Days To Maturity
                                            </button>
                                            <div class="c-facts-dialog__content js-facts-dialog__content"
                                                 data-dialog-title="Days To Maturity">
                                                <h3><span class="c-facts-dialog__term-heading">Days To
                                                    Maturity</span></h3>
                                                <p>Average number of days from seeding date to harvest, within a
                                                    specific crop group. If a transplanted crop: average number of
                                                    days from transplant date. Not sure if crop is direct-seeded or
                                                    transplanted? Check the Growing Information box for details. If
                                                    crop can be both direct-seeded or transplanted, days to maturity
                                                    refers to direct seeding. Days to maturity for all flowers and
                                                    herbs is calculated from seeding date.
                                                <p>
                                                    <span class="close-modal">Close</span>
                                            </div>


                                        </dt>
                                        <dd class="c-facts__definition">
                                            <h4>see product description</h4>
                                        </dd>


                                        <dt class="c-facts__term js-facts-dialog">
                                            <h3 title="Disease Resistance Codes">Disease Resistance Codes</h3>

                                            <button type="button" class="c-facts__term__info js-facts-dialog__trigger">
                                                About
                                                Quick
                                                Fact Disease Resistance Codes
                                            </button>
                                            <div class="c-facts-dialog__content js-facts-dialog__content"
                                                 data-dialog-title="Disease Resistance Codes">
                                                <h3><span class="c-facts-dialog__term-heading">Disease Resistance
                                                    Codes</span></h3>

                                                <dl class="c-facts-dialog__list">
                                                    <dt class="c-facts-dialog__term"><span
                                                            class="c-facts-dialog__term-heading">DM</dt>
                                                    <dd class="c-facts-dialog__definition">

                                                        Downy Mildew
                                                    </dd>

                                                    <dl class="c-facts-dialog__list">
                                                        <dt class="c-facts-dialog__term"><span
                                                                class="c-facts-dialog__term-heading">Nr</dt>
                                                        <dd class="c-facts-dialog__definition">

                                                            Lettuce Leaf Aphid Nasonovia ribisnigri
                                                        </dd>

                                                    </dl>
                                                    <span class="close-modal">Close</span>
                                            </div>

                                        </dt>
                                        <dd class="c-facts__definition">


                                            <h4><abbr class="tooltip-title" data-dialog-title="Downy Mildew">DM
                                                </abbr>, </h4>


                                            <h4><abbr class="tooltip-title"
                                                      data-dialog-title="Lettuce Leaf Aphid Nasonovia ribisnigri">Nr
                                                </abbr></h4>

                                        </dd>


                                        <dt class="c-facts__term js-facts-dialog">
                                            <h3 title="Product Features">Product Features</h3>

                                            <button type="button" class="c-facts__term__info js-facts-dialog__trigger">
                                                About
                                                Quick
                                                Fact Product Features
                                            </button>
                                            <div class="c-facts-dialog__content js-facts-dialog__content">
                                                <h3><span class="c-facts-dialog__term-heading">Product
                                                    Features</span></h3>
                                                <dl class="c-facts-dialog__list">

                                                    <dt class="c-facts-dialog__term has-icon">
                                                        <img
                                                            src="../../../on/demandware.static/Sites-JSS-Site/-/default/dw570f98f3/images/svgs/product_feature/10.svg"
                                                            class="c-facts-dialog__term-icon" alt="Johnny's Exclusive"/>
                                                        <span class="c-facts-dialog__term-heading">Johnny's
                                                        Exclusive</span>
                                                    </dt>
                                                    <dd class="c-facts-dialog__definition">

                                                        Johnny's Exclusive

                                                    </dd>

                                                    <dt class="c-facts-dialog__term has-icon">
                                                        <img
                                                            src="../../../on/demandware.static/Sites-JSS-Site/-/default/dw730545ba/images/svgs/product_feature/110.svg"
                                                            class="c-facts-dialog__term-icon"
                                                            alt="Hydroponic Performer"/>
                                                        <span class="c-facts-dialog__term-heading">Hydroponic
                                                        Performer</span>
                                                    </dt>
                                                    <dd class="c-facts-dialog__definition">

                                                        Variety that can be grown successfully using hydroponic
                                                        growing methods, such as NFT (Nutrient Film Technique), DWC
                                                        (Deep Water Culture), or other soilless growing systems.

                                                    </dd>

                                                </dl>
                                                <span class="close-modal">Close</span>
                                            </div>

                                        </dt>
                                        <dd class="c-facts__definition">
                                            <h4>


                                                <img
                                                    src="../../../on/demandware.static/Sites-JSS-Site/-/default/dw570f98f3/images/svgs/product_feature/10.svg"
                                                    class="tooltip-img-alt c-facts__icon" alt="Johnny's Exclusive"/>


                                                <img
                                                    src="../../../on/demandware.static/Sites-JSS-Site/-/default/dw730545ba/images/svgs/product_feature/110.svg"
                                                    class="tooltip-img-alt c-facts__icon" alt="Hydroponic Performer"/>


                                            </h4>
                                        </dd>


                                    </dl>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="u-margin-top-xs col-12 p-0">


                        <div class="c-accordion s-notice-list js-accordion">

                            <div id="shipping-info" class="c-accordion__item js-accordion__item">
                                <div role="tablist" id="tabheading_1"
                                     class="c-accordion__header c-accordion__header--alert js-accordion__header">
                                    <h2 class="c-accordion__heading">
                                        <a role="button" href="#tabpanel_1" class="c-accordion__heading__link"
                                           aria-expanded="false" aria-controls="tabpanel_1">
                                            Shipping Information &amp; Notes
                                        </a>
                                    </h2>
                                </div>
                                <div role="tabpanel" id="tabpanel_1" class="c-accordion__body js-accordion__body"
                                     aria-labelledby="tabheading_1">

                                    <ul class="c-restrictions-list">


                                        <li class="c-restrictions-list__item">This product does not ship to the
                                            following countries:


                                            United Arab Emirates,&nbsp;


                                            Austria,&nbsp;


                                            Australia,&nbsp;


                                            Barbados,&nbsp;


                                            Belgium,&nbsp;


                                            Bulgaria,&nbsp;


                                            Bermuda,&nbsp;


                                            Bahamas,&nbsp;


                                            Switzerland,&nbsp;


                                            Cyprus,&nbsp;


                                            Czech Republic,&nbsp;


                                            Germany,&nbsp;


                                            Denmark,&nbsp;


                                            Estonia,&nbsp;


                                            Spain,&nbsp;


                                            Finland,&nbsp;


                                            France,&nbsp;


                                            United Kingdom,&nbsp;


                                            Greece,&nbsp;


                                            Hong Kong,&nbsp;


                                            Croatia,&nbsp;


                                            Hungary,&nbsp;


                                            Ireland,&nbsp;


                                            Iceland,&nbsp;


                                            Italy,&nbsp;


                                            Japan,&nbsp;


                                            KR,&nbsp;


                                            Kuwait,&nbsp;


                                            Cayman Islands,&nbsp;


                                            Lithuania,&nbsp;


                                            Luxembourg,&nbsp;


                                            Latvia,&nbsp;


                                            MY,&nbsp;


                                            Netherlands,&nbsp;


                                            Norway,&nbsp;


                                            New Zealand,&nbsp;


                                            Oman,&nbsp;


                                            Poland,&nbsp;


                                            Portugal,&nbsp;


                                            Qatar,&nbsp;


                                            Romania,&nbsp;


                                            Saudi Arabia,&nbsp;


                                            Sweden,&nbsp;


                                            Singapore,&nbsp;


                                            Slovenia,&nbsp;


                                            Slovakia,&nbsp;


                                            San Marino,&nbsp;


                                            Thailand,&nbsp;


                                            Trinidad,&nbsp;


                                            Taiwan,&nbsp;


                                            Ukraine.


                                        </li>


                                        <li class="c-restrictions-list__item">This product does not ship to the
                                            following states:


                                            PR.


                                        </li>

                                    </ul>


                                    <span style="">Many (though not all) of our pelleted lettuce varieties are
                                    primed to increase germination uniformity, and to break thermal and/or light
                                    dormancy. However, the priming process decreases the storage life of the
                                    seed, so pelleted seed must be kept cool and dry prior to planting, and
                                    should be used within one year of purchase.</span>
                                </div>
                            </div>


                            <div id="shipping-info" class="c-accordion__item js-accordion__item">
                                <div role="tablist" id="tabheading_0"
                                     class="c-accordion__header c-accordion__header--alert js-accordion__header">
                                    <h2 class="c-accordion__heading">
                                        <a role="button" href="#tabpanel_0" class="c-accordion__heading__link"
                                           aria-expanded="false" aria-controls="tabpanel_0">
                                            Shipping Information
                                        </a>
                                    </h2>
                                </div>
                                <div role="tabpanel" id="tabpanel_0" class="c-accordion__body js-accordion__body"
                                     aria-labelledby="tabheading_0">

                                    <ul class="c-restrictions-list">


                                        <li class="c-restrictions-list__item">This product does not ship to the
                                            following countries:


                                            United Arab Emirates,&nbsp;


                                            Austria,&nbsp;


                                            Australia,&nbsp;


                                            Barbados,&nbsp;


                                            Belgium,&nbsp;


                                            Bulgaria,&nbsp;


                                            Bermuda,&nbsp;


                                            Bahamas,&nbsp;


                                            Switzerland,&nbsp;


                                            Cyprus,&nbsp;


                                            Czech Republic,&nbsp;


                                            Germany,&nbsp;


                                            Denmark,&nbsp;


                                            Estonia,&nbsp;


                                            Spain,&nbsp;


                                            Finland,&nbsp;


                                            France,&nbsp;


                                            United Kingdom,&nbsp;


                                            Greece,&nbsp;


                                            Hong Kong,&nbsp;


                                            Croatia,&nbsp;


                                            Hungary,&nbsp;


                                            Ireland,&nbsp;


                                            Iceland,&nbsp;


                                            Italy,&nbsp;


                                            Japan,&nbsp;


                                            KR,&nbsp;


                                            Kuwait,&nbsp;


                                            Cayman Islands,&nbsp;


                                            Lithuania,&nbsp;


                                            Luxembourg,&nbsp;


                                            Latvia,&nbsp;


                                            MY,&nbsp;


                                            Netherlands,&nbsp;


                                            Norway,&nbsp;


                                            New Zealand,&nbsp;


                                            Oman,&nbsp;


                                            Poland,&nbsp;


                                            Portugal,&nbsp;


                                            Qatar,&nbsp;


                                            Romania,&nbsp;


                                            Saudi Arabia,&nbsp;


                                            Sweden,&nbsp;


                                            Singapore,&nbsp;


                                            Slovenia,&nbsp;


                                            Slovakia,&nbsp;


                                            San Marino,&nbsp;


                                            Thailand,&nbsp;


                                            Trinidad,&nbsp;


                                            Taiwan,&nbsp;


                                            Ukraine.


                                        </li>


                                        <li class="c-restrictions-list__item">This product does not ship to the
                                            following states:


                                            PR.


                                        </li>

                                    </ul>


                                </div>
                            </div>


                            <div class="c-accordion__item js-accordion__item">
                                <div role="tablist" id="tabheading_2-1"
                                     class="c-accordion__header js-accordion__header">
                                    <h2 class="c-accordion__heading">
                                        <a role="button" href="#tabpanel_2-1" class="c-accordion__heading__link"
                                           aria-expanded="false" aria-controls="tabpanel_2-1">
                                            Growing Information
                                        </a>
                                    </h2>
                                </div>
                                <div role="tabpanel" id="tabpanel_2-1"
                                     class="c-accordion__body s-lgc-pdp-content js-accordion__body"
                                     aria-labelledby="tabheading_2-1">
                                    <span style="font-weight: bold;">SCIENTIFIC NAME:</span><span style=""> Lactuca
                                    sativa<br/></span><span style="font-weight: bold;">CULTURE:</span><span style="">
                                    Lettuce is a hardy, cool-weather crop and can be planted with your
                                    earliest worked soil. It grows best at 60&ndash;65&deg;F (16&ndash;18&deg;C)
                                    and germinates best below 70&deg;F (21&deg;C), so careful variety selection
                                    is key for success in hotter weather. Sow every 2&ndash;3 weeks for a
                                    continuous supply of either full heads or salad mix.<br/></span><span
                                        style="font-weight: bold;">PELLETED SEED:</span><span style=""> Pelleted
                                    seed requires a little extra attention when it comes to watering, as it
                                    performs best with consistent, moderate soil moisture throughout the
                                    germination period. An initial watering will split or dissolve the pellet,
                                    but if the soil is allowed to dry out before the germination period is over,
                                    the seed may receive insufficient moisture for optimal
                                    germination.<br/></span><span style="font-weight: bold;">PELLET
                                    STORAGE:</span><span style=""> Pelleting offers many advantages, but the
                                    pelleting process also shortens the shelf life of the seed. We recommend
                                    using pelleted seed within one year of purchase. If you need to store
                                    pelleted seeds until planting, protect them from heat and humidity in a
                                    cool, dark, dry place. If you prefer to store your seed in the refrigerator,
                                    be sure to place the seed in an air-tight container to protect it from
                                    fluctuations in humidity.<br/></span><span style="font-weight: bold;">THERMAL
                                    DORMANCY:</span><span style=""> Lettuce
                                    seed can enter <a class="tooltip-title"
                                                      title="In thermal dormancy, a seed becomes dormant and fails to germinate due to exposure to sub-optimal temperatures">thermal
                                        dormancy</a> when exposed to high temperatures. Optimum germination
                                    results at soil temperatures of 60&ndash;68&deg;F (15.5&ndash;20&deg;C). The
                                    priming process in pelleted lettuce seeds broadens the temperature range in
                                    which the seeds will germinate, overcoming some of their thermal
                                    dormancy.<br/></span><span style="font-weight: bold;">TRANSPLANTING for
                                    HEAD LETTUCE:</span><span style=""> 3&ndash;4 weeks before field planting,
                                    sow in 128-cell trays barely covered with vermiculite or fine soil. If
                                    necessary, utilize shade and frequent misting to keep trays cooled below
                                    75&deg;F (25&deg;C) during germination. Young plants properly hardened at
                                    least 3&ndash;5 days before planting can survive temperatures as low as
                                    20&deg;F (-6&deg;C). Transplant iceberg, romaine, and butterhead lettuce
                                    10&ndash;12&quot; apart in rows 15&ndash;18&quot; apart, other types
                                    8&ndash;10&quot; apart in rows 12&ndash;18&quot;, and mini heads as close as
                                    6&quot; in a grid. <br/></span><span style="font-weight: bold;">DIRECT
                                    SEEDING for BABY LEAF:</span><span style=""> Seeds can germinate well in
                                    soils as low as 40&deg;F (4&deg;C) but often poorly above 75&deg;F
                                    (24&deg;C). Sow 4&ndash;6 seeds/inch in rows at least 2&quot; apart. Cover
                                    lightly to 1/8&quot; and firm gently. Dry soil must be watered to ensure
                                    coolness and moisture for uniform germination. <br/></span><span
                                        style="font-weight: bold;">HARVEST:</span><span style=""> Head Lettuce: Cut
                                    at base, keeping wrapper leaves for handling loss. Consider cutting
                                    alternating plants to extend harvest window, allowing remaining plants to
                                    continue to grow. Pack heads in layers facing cut ends away. Wash off sap
                                    and cool immediately to prevent staining and dehydration. Baby Leaf: Harvest
                                    about 1&quot; above the growing point when leaves reach desired harvestable
                                    length, about 3&ndash;4&quot; long. Remove harvest debris to improve
                                    regrowth quality. <br/></span><span style="font-weight: bold;">STORAGE:</span><span
                                        style=""> Keep cold at
                                    35&ndash;40&deg;F (1&ndash;4&deg;C) with high humidity but free of standing
                                    water. Head Lettuce: Keep 14&ndash;20 days, less for delicate types like
                                    butterhead and oakleaf, and longer for lettuce grown slowly in cooler
                                    temperatures. For one-cut types, extend season in cold weather by holding
                                    cut heads in cooler up to two weeks to process into salad
                                    mix.<br/></span><span style="font-weight: bold;">MT0 SEEDS:</span><span style=""> A
                                    variety's description followed by &quot;MT0-30&quot; indicates
                                    that the seed offered for sale has been tested for the presence of Lettuce
                                    Mosaic Virus and that no LMV was found in a sample of at least 30,000
                                    seeds.<br/></span><span style="font-weight: bold;">DAYS TO
                                    MATURITY:</span><span style=""> Head Lettuce: from transplant; Baby Leaf:
                                    from direct seeding. <br/></span><span style="font-weight: bold;">AVG.
                                    DIRECT SEEDING RATE:</span><span style=""> For baby leaf: 1,000 seeds/16', 1
                                    oz./400', 1 lb./6,400' at 60 seeds/ft.<br/></span><span
                                        style="font-weight: bold;">TRANSPLANTS:</span><span style=""> Avg. 16,000
                                    plants/oz.<br/></span><span style="font-weight: bold;">SEED
                                    SPECS:</span><span style=""> SEEDS/OZ: Avg. 17,800.<br/></span><span
                                        style="font-weight: bold;">PACKET:</span><span style=""> 500 seeds, unless
                                    otherwise indicated.</span>
                                </div>
                            </div>


                            <div class="c-accordion__item js-accordion__item">
                                <div role="tablist" id="tabheading_4" class="c-accordion__header js-accordion__header">
                                    <h2 class="c-accordion__heading">
                                        <a role="button" href="#tabpanel_4" class="c-accordion__heading__link"
                                           aria-expanded="false" aria-controls="tabpanel_4">
                                            Satisfaction Guarantee
                                        </a>
                                    </h2>
                                </div>
                                <div role="tabpanel" id="tabpanel_4" class="c-accordion__body js-accordion__body"
                                     aria-labelledby="tabheading_4">
                                    <p>Johnny's is committed to your success, every step of the way.</p>

                                    <p>We want you, our customer, to be 100% satisfied with all of our seeds, tools,
                                        and supplies.&nbsp;</p>

                                    <p>If anything you purchase from us proves unsatisfactory, we will either
                                        replace the item or refund the purchase price.</p>
                                </div>
                            </div>


                        </div>


                    </div>

                </div>
            </div>
        </div>
        <div>


        </div>

        <div class="recommendations">


        </div>
    </div>


    <div class="related-products-wrapper">
        <div class="container">
            <div>


            </div>
            <div class="u-margin-top-xs u-margin-bottom-lg">


                <div class="c-related-resources-block">
                    <div class="c-related-resources-block__section c-related-resources-block__section--first">
                        <h3 class="c-related-resources-block__heading">From the Grower's Library</h3>

                        <ul class="c-related-resources-block__list">

                            <li
                                class="c-related-resources-block__list-item c-related-resources-block__list-item--comparisonchart">
                                <a class="c-related-resources-block__list-item-link"
                                   href="../../../growers-library/vegetables/lettuce/lettuce-salanova-comparison-chart-pdf.html">
                                    <svg class="c-related-resources-block__icons-svg" alt="comparisonchart icon">
                                        <use xlink:href="#icon-comparisonchart"></use>
                                    </svg>
                                    Individual Salanova&reg; Varieties | Comparison Chart &#40;PDF&#41;
                                </a>
                            </li>

                            <li class="c-related-resources-block__list-item c-related-resources-block__list-item--document">
                                <a class="c-related-resources-block__list-item-link"
                                   href="../../../shop-johnnys/hydroponic-lettuce-varieties-brochure.html">
                                    <svg class="c-related-resources-block__icons-svg" alt="document icon">
                                        <use xlink:href="#icon-document"></use>
                                    </svg>
                                    Hydroponic Lettuce Varieties from Johnny&#39;s | Printable 4-pp Brochure
                                    &#40;PDF&#41;
                                </a>
                            </li>

                            <li class="c-related-resources-block__list-item c-related-resources-block__list-item--document">
                                <a class="c-related-resources-block__list-item-link"
                                   href="../../../about-us/about-our-seed/pelleted-seed-tech-sheet.html">
                                    <svg class="c-related-resources-block__icons-svg" alt="document icon">
                                        <use xlink:href="#icon-document"></use>
                                    </svg>
                                    About Pelleted Seed | Tech Sheet &#40;PDF&#41;
                                </a>
                            </li>

                        </ul>

                    </div>


                    <!-- dwMarker="content" dwContentID="38852757d948a813926a1c13d3" -->
                    <div class="c-related-resources-block__section c-related-resources-block__section--last">
                        <h3 class="c-related-resources-block__heading">Questions?</h3>
                        <p class="c-related-resources-block__contact">Talk to a Johnny's Grower<br/>
                            <a title="Call us today..." href="tel:+{{ getnameSite('phone') }}"
                               class="c-related-resources-block__phone">
                                
                                {{ getnameSite('phone') }}
                                </a>
                        </p>
                        <p class="c-related-resources-block__hours">
                            Monday&ndash;Friday&nbsp; 8am&ndash;5pm ET</p>
                        <a title="Send us a email..." href="../../../contact-us/index.html"
                           class="c-related-resources-block__button">Email us</a>
                    </div>
                    <!-- End content-asset -->


                </div>

            </div>
        </div>
    </div>
@endsection
