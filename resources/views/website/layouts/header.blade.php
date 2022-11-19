<header class="header-content">
    <a href="#maincontent" class="skip" aria-label="Skip to main content">Skip to main content</a>
    <a href="#footercontent" class="skip" aria-label="Skip to footer content">Skip to footer content</a>
    <div class="header-banner slide-up bg-dark-green d-flex justify-content-center">
        <div class="html-slot-container">
            <div style="margin: -12px !important; padding: 10px !important">
                <a style="color: #ffffff" title="International Shipping Information" href="customer-support/shipping/shipping-international.html">View International Shipping Information &raquo;</a>
            </div>
        </div>
    </div>
    <div class="d-none d-lg-block container">
        <div class="logged-out-user">
            <div class="user hidden-md-down">
                @guest
                <a href="{{route('login')}}">
                    <span class="user-message">Login / Register</span>
                </a>
                    @else

                    <a href="{{ route('show_cart') }}">
                        <span class="user-message h2"> مرحبا بك  : {{ Auth::user()->name }}</span>
                        </a>
                        
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                           تسجيل الخروج
                        </x-dropdown-link>
                    </form>



                   
                @endguest
               
            </div>
        </div>
    </div>
    <div class="global-header-container">
        <div class="container">
            <div class="row">
                <div class="logo-container col-7 d-flex justify-content-lg-end justify-content-sm-start">
                    <a class="logo-home" href="{{route('site')}}" title="Johnny's Selected Seeds">
                        <img src="{{ getnameSite('name') != null ? getphotoSite()->image : null }}" class="logo-svg" alt="Johnny's Selected Seeds" />
                    </a>
                </div>
                <div class="action-item-container col-5 d-flex justify-content-end align-items-center">
                    <div class="search-container d-none d-lg-flex">
                        <div class="site-search search">
                            <form role="search" action="{{ route('search','test') }}" method="get" class="simple-search"
                              name="simpleSearch">
                              <input class="form-control search-field" type="text" name="q" value="" placeholder="Search Mig Farm"
                                role="combobox" aria-describedby="search-assistive-text" aria-haspopup="listbox"
                                aria-owns="search-results" aria-expanded="false" aria-autocomplete="list" aria-activedescendant=""
                                aria-controls="search-results" aria-label="Enter Keyword or Item No." autocomplete="off" />
                              <button type="submit" name="search-button" role="button" class="search-icon"
                                aria-label="Submit search keywords">
                                <svg class="search-svg">
                                  <use xlink:href="#icon-search"></use>
                                </svg>
                              </button>
                              <div class="suggestions-wrapper"
                                data-url="/on/demandware.store/Sites-JSS-Site/en_US/SearchServices-GetSuggestions?q="></div>
                              <input type="hidden" value="en_US" name="lang" />
                            </form>
                          </div>
                    </div>
                    <div class="minicart-container d-flex align-items-center">
                        <div class="minicart" data-action-url="{{asset('front/on/demandware.store/Sites-JSS-Site/en_US/Cart-MiniCartShow')}}">
                            <div class="minicart-total">
                                <a href="{{ route('show_cart') }}" class="minicart-link" data-href="{{ route('show_cart') }}" title="Cart 0 Items" aria-label="Cart 0 Items" tabindex="0" role="button">
                                    <span class="minicart-quantity"> {{ Cart::count() }} </span>
                                    <img src="{{asset('front/on/demandware.static/Sites-JSS-Site/-/default/dw18e42703/images/svgs/minicart.svg')}}" class="minicart-svg" alt="View Cart" />
                                </a>
                            </div>

                            <div class="popover"></div>
                            <div id="minicart-backdrop" class="alternative-backdrop"></div>
                        </div>
                    </div>
                    <button class="navbar-toggler d-lg-none" type="button" aria-controls="sg-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="{{asset('front/on/demandware.static/Sites-JSS-Site/-/default/dw88780bf0/images/svgs/Hamburger_Menu.svg')}}" class="menu-svg" alt="Hamburger Menu" />
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex d-lg-none col-12 search-mobile-wrapper">
        <div class="search-mobile w-100">
            <div class="site-search search">
                <form role="search" action="https://www.johnnyseeds.com/search/" method="get" class="simple-search" name="simpleSearch">
                    <input class="form-control search-field" type="text" name="q" value="" placeholder="Search Johnny&rsquo;s" role="combobox" aria-describedby="search-assistive-text" aria-haspopup="listbox" aria-owns="search-results" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="" aria-controls="search-results" aria-label="Enter Keyword or Item No." autocomplete="off" />
                    <button type="submit" name="search-button" role="button" class="search-icon" aria-label="Submit search keywords">
                        <svg class="search-svg">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                    <div class="suggestions-wrapper" data-url="{{asset('front/on/demandware.store/Sites-JSS-Site/en_US/SearchServices-GetSuggestions?q=')}}"></div>
                    <input type="hidden" value="en_US" name="lang" />
                </form>
            </div>
        </div>
    </div>
    <nav class="main-menu-wrapper" aria-label="Primary Navigation" role="navigation">
        <div class="main-menu navbar-toggleable navbar-toggleable-lg menu-toggleable-right multilevel-dropdown d-none d-lg-block" id="sg-navbar-collapse">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-expand-lg bg-inverse navbar-main col-12" aria-label="Menu Navigation Links">
                        <div class="close-menu d-lg-none">
                            <div class="back">
                                <button role="button" class="back-btn" aria-label="Back to previous menu">
                                    <svg class="caret-left-svg" alt="Johnny's Selected Seeds">
                                        <use xlink:href="#icon-caret-left"></use>
                                    </svg>
                                    Back
                                </button>
                            </div>
                            <div class="close-button">
                                <button role="button" class="close-btn" aria-label="Close Menu">
                                    <svg class="close-svg" role="button">
                                        <use xlink:href="#icon-close"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="menu-group">
                            <ul class="nav navbar-nav nav-categories main-level" aria-label="Categories List">
                             @foreach (App\Models\Category::all() as $category )
                             <li class="nav-item dropdown dropdown-left">
                                <a href="{{ route('site') }}" id="vegetables" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $category->name }}</a>
                                <div class="dropdown-menu" aria-hidden="true" aria-label="vegetables">
                                    <div class="mega-nav-content-left">
                                        <a href="{{ route('site') }}" class="featured-category-title">{{ $category->name }}</a>


                                
                                    </div>
                                  
                                    <div class="menu-item-wrapper d-none d-lg-block">
                                        <ul role="menu" class="nav navbar-nav nav-categories">
                                            <li class="nav-categories-column">
                                                <ul>
                                                    @foreach ($category->subCategory as $row)
                                                    <li class="dropdown-item" role="presentation">
                                                        <a href="{{ route('mincategory',$row->id) }}" id="artichokes" role="menuitem" class="dropdown-link">{{ $row->name }}</a>
                                                    </li>

                                                    @endforeach
                                                  
                                              

                                                </ul>
                                            </li>

                                          
                                        </ul>
                                    </div>

                                    <div class="mega-nav-content-right d-none d-lg-flex flex-column">
                                        <div class="menu-featured-a-wrapper">
                                            <a href="vegetables/lettuce/lettuce-mixes/five-star-greenhouse-lettuce-mix-vegetable-seed-192fd0e.html?vegmmfeatsq_20221005" class="featured-a-main-link">
                                                <div class="featured-a-img-wrapper">
                                                    @if ($category->image)
                                                    <img alt="Five Star Greenhouse Lettuce Mix Seed" width="100px" height="100px" src="{{ asset('admin/pictures/category/'.rand(1,6).'/'.rand(1,6).".jpg") }}" />

                                                    @else

                                                    <img alt="Five Star Greenhouse Lettuce Mix Seed" width="100px" height="100px" src="{{ asset('admin/pictures/category/'.rand(1,6).'/'.rand(1,6).".jpg") }}" />

                                                
                                                    @endif

                                                    
                                                </div>

                                                <span class="featured-a-title font-merriweather">Five Star Greenhouse Lettuce Mix Seed</span>
                                            </a>
                                        </div>

                                        <div class="menu-featured-b-wrapper">
                                            <a href="about-us/about-our-seed/safe-seed-pledge.html">
                                                <div class="featured-b-img-wrapper">
                                                    <img src="{{asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dwba5eb453/images/icons/icon-non-gmo.svg')}}" alt="Non-GMO" />
                                                </div>
                                                <span class="featured-b-title">Non-GMO</span>

                                                <span class="featured-b-subtitle font-merriweather">
                                                    Safe Seed Pledge
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                             @endforeach
                             
                              

                            </ul>
                            <ul class="nav navbar-nav bg-dark-green d-lg-none nav-my-account" aria-label="My Account Links">
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">
                                        <span class="user-message">Login / Register</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="wishlist/index.html" class="nav-link">
                                        Wishlist
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="customer-support/contact-us.html" class="nav-link">
                                        Contact Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="email-signup/index.html" class="nav-link">
                                        Email Signup
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="catalog-request/index.html" class="nav-link">
                                        Request a Catalog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="quick-order/index.html" class="nav-link">
                                        Quick Order
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="connect-number nav-link" href="tel:1.877.564.6697">1.877.564.6697</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="nav-modal-background"></div>
    </nav>
</header>