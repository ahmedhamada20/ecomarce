@extends('website.layouts.master')
@section('title')
{{getnameSite('name')}}
@endsection
@section('content')




<div role="main" id="maincontent">
  <div class="homepage-container">
    <h1 class="sr-only">
      Johnny's Selected Seeds - Superior Seeds &amp; Gardening Tools
    </h1>
    <div class="home-slot-a">
      <div class="html-slot-container">
        <div id="slider-home-slot-a" class="carousel slide slider-primary">
          <ol class="carousel-indicators d-xl-none">
            @foreach (App\Models\Silder::all() as $category)
            <li data-target="#slider-home-slot-a" data-slide-to="0"></li>
            @endforeach
            {{-- <li data-target="#slider-home-slot-a" data-slide-to="1" class=""></li>

            <li data-target="#slider-home-slot-a" data-slide-to="2" class=""></li> --}}
          </ol>

          <div class="carousel-inner">

            @foreach (App\Models\Silder::all() as $category)
            <div class="carousel-item {{ $loop->first ? 'active' : null }}">
              <div class="carousel-content d-block">
                <div>
                  <a href="{{ route('mincategory',$category->id) }}">

                    @if ($category->image)
                    <img src="{{ asset($category->image) }}" style="width: 50% !mpos" alt="Bin of red tomatoes"
                   />
                    @else
                    <img src="{{ asset('admin/pictures/category/'.rand(1,6).'/'.rand(1,6).".jpg") }}" alt="Hand touching basil leaves" style="width: 50% !mpos" alt="Bin of red tomatoes"
                   />
                    @endif


                    {{-- <img src="{{ asset($category->image) }}" style="width: 50% !mpos" alt="Bin of red tomatoes" /> --}}
                  </a>
                </div>
                <div class="hero-text-block p-2 p-xl-5 left" style="background-color: rgba(255, 255, 255, 0.75)">
                  <h2 class="brand-h2 mx-auto mx-xl-0 text-center text-xl-left">
                    {{ $category->name }}
                  </h2>

                  <p class="subtitle-1 mx-auto mx-xl-0 text-center text-xl-left">
                  {{ $category->notes }}
                  </p>

                  <div class="primaryText-link mx-auto mx-xl-0 text-center text-xl-left">
                    <ul>
                      <li>
                        <a href="{{ route('mincategory',$category->id) }}">Shop Now</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @endforeach


            {{--
            <div class="carousel-item">
              <div class="carousel-content d-block">
                <div>
                  <a href="vegetables/lettuce/index2554.html?src=home_slot-a-slide2_20221005">
                    <img
                      src="{{ asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dwab942969/images/homepage/fy23/oct22/20221005-lettuce-bn.jpg') }}"
                      alt="Lettuce growing in soil" />
                  </a>
                </div>
                <div class="hero-text-block p-2 p-xl-5 left" style="background-color: rgba(255, 255, 255, 0.75)">
                  <h2 class="brand-h2 mx-auto mx-xl-0 text-center text-xl-left">
                    Gorgeous Lettuce
                  </h2>

                  <p class="subtitle-1 mx-auto mx-xl-0 text-center text-xl-left">
                    Trial-tested and guaranteed to outperform the rest.
                  </p>

                  <div class="primaryText-link mx-auto mx-xl-0 text-center text-xl-left">
                    <ul>
                      <li>
                        <a href="vegetables/lettuce/index2554.html?src=home_slot-a-slide2_20221005">Shop</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-content d-block">
                <div>
                  <a href="tools-supplies/row-covers-and-accessories/index3b20.html?src=home_slide3_20221005">
                    <img
                      src="{{ asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dw38a104f6/images/homepage/fy23/oct22/20201005-row-cover-bn.jpg') }}"
                      alt="Male grower covering indoor crops" />
                  </a>
                </div>
                <div class="hero-text-block p-2 p-xl-5 left" style="background-color: rgba(255, 255, 255, 0.75)">
                  <h2 class="brand-h2 mx-auto mx-xl-0 text-center text-xl-left">
                    Floating Row Cover
                  </h2>

                  <p class="subtitle-1 mx-auto mx-xl-0 text-center text-xl-left">
                    Protect your crops from frosts and heavy freezes.
                  </p>

                  <div class="primaryText-link mx-auto mx-xl-0 text-center text-xl-left">
                    <ul>
                      <li>
                        <a
                          href="tools-supplies/row-covers-and-accessories/index3b20.html?src=home_slide3_20221005">Shop</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> --}}


          </div>

          <div class="slider-primary_actionBtns d-flex justify-content-between">
            <button class="carousel-control-prev" type="button" data-target="#slider-home-slot-a" data-slide="prev">
              <svg class="slider-prev-svg">
                <use xlink:href="#slider-prev"></use>
              </svg>
              <span class="sr-only">Previous</span>
            </button>
            <button id="carousel-control-pause" class="carousel-control-pause d-none d-lg-block" type="button"
              data-target="#slider-home-slot-a">
              <svg class="slider-pause-svg">
                <use xlink:href="#slider-pause"></use>
              </svg>
              <span class="sr-only">Pause</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#slider-home-slot-a" data-slide="next">
              <svg class="slider-next-svg">
                <use xlink:href="#slider-next"></use>
              </svg>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="home-slot-b">
      <div class="html-slot-container">
        <div class="brand-block">
          <div class="brand-block_elements row justify-content-xl-between m-0">
            <div class="brand-block_icon p-0 align-items-center">
              <div class="p-0">
                <a href="about-us/ownership.html">
                  <img
                    src="{{ asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dwef9b095b/images/icons/icon-employee-owned.svg') }}"
                    alt="Employee Owned Icon Block" class="mw-100" />
                </a>
              </div>
              <p class="p-0 m-0">
                <span class="d-block brand-block-title font-italic">
                  100%
                </span>
                <span class="d-block brand-block-body">
                  Employee Owned
                </span>
              </p>
            </div>

            <div class="brand-block_icon p-0 align-items-center">
              <div class="p-0">
                <a href="about-us/about-our-seed/safe-seed-pledge.html">
                  <img
                    src="{{ asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dwba5eb453/images/icons/icon-non-gmo.svg') }}"
                    alt="Non-GMO Icon Block" class="mw-100" />
                </a>
              </div>
              <p class="p-0 m-0">
                <span class="d-block brand-block-title font-italic">
                  Non-GMO
                </span>
                <span class="d-block brand-block-body">
                  Safe Seed Pledge
                </span>
              </p>
            </div>

            <div class="brand-block_icon p-0 align-items-center">
              <div class="p-0">
                <a href="customer-support/guarantee.html">
                  <img
                    src="{{ asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dwde7a8654/images/icons/icon-satisfaction-guaranteed.svg') }}"
                    alt="100% Satisfaction Guarantee" class="mw-100" />
                </a>
              </div>
              <p class="p-0 m-0">
                <span class="d-block brand-block-title font-italic">
                  100%
                </span>
                <span class="d-block brand-block-body">
                  Satisfaction Guarantee
                </span>
              </p>
            </div>

            <div class="brand-block_icon p-0 align-items-center">
              <div class="p-0">
                <a href="customer-support/shipping/shipping-usa.html">
                  <img
                    src="{{ asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dwb71d83e1/images/icons/icon-shipping.svg') }}"
                    alt="Same Day Shipping Icon Block" class="mw-100" />
                </a>
              </div>
              <p class="p-0 m-0">
                <span class="d-block brand-block-title font-italic">
                  Same-Day
                </span>
                <span class="d-block brand-block-body">
                  U.S. Shipping
                </span>
              </p>
            </div>
          </div>

          <div class="brand-block_body">
            <p class="body-1 text-center mb-0 mx-xl-auto">
              Our mission is helping families, friends, and communities to
              feed one another by providing superior seeds, tools,
              information, and service.
            </p>
          </div>
        </div>
      </div>
    </div>


    <div class="home-slot-c">
      <div class="html-slot-container">
        <div class="graphical-asset">
          <div class="graphical-asset_heading">
            <h3 class="brand-h3 text-center col-lg-8 mx-lg-auto">
              ABOUT OUR SEEDS
            </h3>

            <p class="body-1 text-center col-lg-7 mb-0 mx-lg-auto">
              For 49 years Johnny's has set the standard for high seed
              quality, meeting or exceeding federal minimum requirements
              for germination rates, pathogen testing, and traceability.
            </p>
          </div>

          <div class="graphical-asset_body d-flex flex-nowrap justify-content-start">

            @foreach (App\Models\SubCategory::inRandomOrder()->take(4)->get() as $row)
            <div class="graphical-asset_elements p-0">
              <div class="graphical-asset_image position-relative">
                <a href="{{ route('mincategory',rand(1,3)) }}">
                  @if ($row->image)
                  <img src="{{ asset($row->image) }}" alt="Hand touching basil leaves" width="700px" height="700px"
                  class="mw-100" />
                  @else
                  <img src="{{ asset('admin/pictures/subcategory/'.rand(1,6).'/'.rand(1,6).".jpg") }}" alt="Hand touching basil leaves" width="700px" height="700px"
                  class="mw-100" />
                  @endif
                  
                </a>
              </div>
              <h5 class="brand-h4">{{ $row->name }}</h5>
              <p class="d-none d-lg-block body-2 graphical-asset_body-text">
                {{$row->notes}}
              </p>
              <div class="primaryText-link col-12 col-lg-8 m-0 p-0 text-center graphical-asset_btn">
                <ul>
                  <li>
                    <a href="{{ route('mincategory',rand(1,2)) }}">SHOP NOW</a>
                  </li>
                </ul>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>



    <div class="home-slot-d">
      <div class="html-slot-container">
        <div class="graphical-asset">
          <div class="graphical-asset_heading">
            <h3 class="brand-h3 text-center col-lg-8 mx-lg-auto">
              ABOUT OUR TOOLS
            </h3>

            <p class="body-1 text-center col-lg-7 mb-0 mx-lg-auto">
              "We know a tool's success is only as good as the grower's
              success in using it."<br />
              — Jen Goff, Product Manager, Tools & Supplies
            </p>
          </div>
          <div class="graphical-asset_body d-flex flex-nowrap justify-content-start">

            @foreach (App\Models\SubCategory::inRandomOrder()->take(4)->get() as $row)
            <div class="graphical-asset_elements p-0">
              <div class="graphical-asset_image position-relative">
                <a
                  href="{{ route('mincategory',rand(1,3)) }}">
                  @if ($row->image)
                  <img src="{{ asset($row->image) }}" alt="Hand touching basil leaves" width="700px" height="700px"
                  class="mw-100" />
                  @else
                  <img src="{{ asset('admin/pictures/subcategory/'.rand(1,6).'/'.rand(1,6).".jpg") }}" alt="Hand touching basil leaves" width="700px" height="700px"
                  class="mw-100" />
                  @endif                </a>
              </div>
              <h3 class="brand-h4">{{ $row->name }}</h3>
              <p class="d-none d-lg-block body-2 graphical-asset_body-text">
                {{ $row->notes }}
              </p>
              <div class="primaryText-link col-12 col-lg-8 m-0 p-0 text-center graphical-asset_btn">
                <ul>
                  <li>
                    <a
                      href="{{ route('mincategory',rand(1,3)) }}">SHOP
                      NOW</a>
                  </li>
                </ul>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>


    <div class="home-slot-e">
      <div class="html-slot-container">
        <div id="slider-home-slot-a" class="carousel slide slider-primary">
          <ol class="carousel-indicators d-xl-none">
            @foreach (App\Models\Silder::all() as $category)
            <li data-target="#slider-home-slot-a" data-slide-to="0"></li>
            @endforeach
            {{-- <li data-target="#slider-home-slot-a" data-slide-to="1" class=""></li>

            <li data-target="#slider-home-slot-a" data-slide-to="2" class=""></li> --}}
          </ol>

          <div class="carousel-inner">

            @foreach (App\Models\Silder::all() as $category)
            <div class="carousel-item {{ $loop->last ? 'active' : null }}">
              <div class="carousel-content d-block">
                <div>
                  <a href="{{ route('mincategory',$category->id) }}">

                    @if ($category->image)
                    <img src="{{ asset($category->image) }}" style="width: 50% !mpos" alt="Bin of red tomatoes" />
                    @else
                    <img src="{{ asset('admin/pictures/category/'.rand(1,6).'/'.rand(1,6).".jpg") }}" alt="Hand touching basil leaves" style="width: 50% !mpos" alt="Bin of red tomatoes" />
                    @endif
                                    </a>
                </div>



                <div class="hero-text-block p-2 p-xl-5 left" style="background-color: rgba(255, 255, 255, 0.75)">
                  <h2 class="brand-h2 mx-auto mx-xl-0 text-center text-xl-left">
                    {{ $category->name }}
                  </h2>

                  <p class="subtitle-1 mx-auto mx-xl-0 text-center text-xl-left">
                    {{ $category->notes }}
                  </p>

                  <div class="primaryText-link mx-auto mx-xl-0 text-center text-xl-left">
                    <ul>
                      <li>
                        <a href="{{ route('mincategory',$category->id) }}">Shop Now</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @endforeach




          </div>

          <div class="slider-primary_actionBtns d-flex justify-content-between">
            <button class="carousel-control-prev" type="button" data-target="#slider-home-slot-a" data-slide="prev">
              <svg class="slider-prev-svg">
                <use xlink:href="#slider-prev"></use>
              </svg>
              <span class="sr-only">Previous</span>
            </button>
            <button id="carousel-control-pause" class="carousel-control-pause d-none d-lg-block" type="button"
              data-target="#slider-home-slot-a">
              <svg class="slider-pause-svg">
                <use xlink:href="#slider-pause"></use>
              </svg>
              <span class="sr-only">Pause</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#slider-home-slot-a" data-slide="next">
              <svg class="slider-next-svg">
                <use xlink:href="#slider-next"></use>
              </svg>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="home-slot-f"></div>
  </div>
</div>



@endsection