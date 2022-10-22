<footer id="footercontent" aria-hidden="false" class="bg-albastar footercontent">
    <div class="row no-gutters footer-container-top d-flex justify-content-between">
        <div class="footer-item store col-12 col-lg-4 bottom-divider-none bottom-divider-md">
            <div class="content-asset">
                <!-- dwMarker="content" dwContentID="be477c744d323805f6a9795382" -->
                <div class="social-action-block d-flex flex-column align-items-center align-items-lg-start">
                    <h3 class="footer-top-title">Connect with Us</h3>
                    <a class="connect-number" href="tel:{{ getnameSite('phone') }}">{{ getnameSite('phone') }}</a>
                    <ul>
                        <li>
                            <a data-id="Facebook" href="{{ getnameSite('facebook') }}"><img alt="Like Johnny's Seeds on Facebook" class="social-icon" src="{{asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dw67a0db74/images/icons/icon-facebook.svg')}}" title="Johnny's Seeds on Facebook" /></a>
                        </li>
                        <li>
                            <a data-id="Twitter" href="{{ getnameSite('twitter') }}"><img alt="Follow Johnny's Seeds on Twitter" class="social-icon" src="{{asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dwb51bfbc0/images/icons/icon-twitter.svg')}}" title="Johnny's Seeds on Twitter" /></a>
                        </li>
                        <li>
                            <a data-id="YouTube" href="{{ getnameSite('youtube') }}"><img alt="Subscribe to Johnny's Seeds on YouTube" class="social-icon" src="{{asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dw4f3ea3b5/images/icons/icon-youtube.svg')}}" title="Johnny's Seeds on YouTube" /></a>
                        </li>
                        <li>
                            <a data-id="Instagram" href="{{ getnameSite('instagram') }}"><img alt="Follow Johnny's Seeds on Instagram" class="social-icon" src="{{asset('front/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dw1cdbd804/images/icons/icon-instagram.svg')}}" title="Johnny's Seeds on Instagram" /></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <!-- End content-asset -->
        </div>
        <div class="footer-item col-12 col-lg-4 bottom-divider-none bottom-divider-md">
            <div class="content-asset">
                <!-- dwMarker="content" dwContentID="f869207b61de297cfd54a4c9ef" -->
                <div class="email-signup-block d-flex flex-column align-items-center align-items-lg-start">
                    <h3 class="footer-top-title">Get Email Updates</h3>
                    <p>
                        Sign up for growing tips, exclusive offers, and new product
                        info.
                    </p>

                    <form action="https://www.johnnyseeds.com/on/demandware.store/Sites-JSS-Site/en_US/EmailSubscribe-Subscribe" class="w-100 subscribe-email">
                        <div class="d-flex flex-column flex-lg-row">
                            <div class="form-group">
                                <label class="d-none form-control-label" for="input-id" aria-hidden="true">Sign up email form</label>
                                <input type="email" id="input-id" class="form-control" placeholder="Email" name="dwfrm_emailsignup_email" aria-label="Enter your Email" />
                                <div class="invalid-feedback"></div>
                            </div>
                            <button type="submit" class="btn btn-secondary sign-up-btn footer-top-btn align-self-lg-baseline">
                                Sign Up
                            </button>
                            <div class="email-signup-message"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End content-asset -->
        </div>


        <div class="footer-item col-12 col-lg-4">
            <div class="content-asset">
                <!-- dwMarker="content" dwContentID="8acb25e90064fe532be37d4b5c" -->
                <div class="action-block-right d-flex flex-column align-items-center align-items-lg-start">
                    <h3 class="footer-top-title" style="bottom-padding: 0 !important">
                        Request a Catalog
                    </h3>
                    <p>Request a free copy of Johnny’s latest catalog.</p>
                    <a href="catalog-request/index.html" class="btn btn-secondary footer-top-btn">Request</a>
                </div>
            </div>
            <!-- End content-asset -->
        </div>
    </div>
    <div class="footer-container-middle d-flex flex-column flex-lg-row justify-content-around">
        <div class="content-asset">
            <!-- dwMarker="content" dwContentID="c7c5d3651e8665e9363da19d0b" -->
            <div class="footer-item collapsible-md">
                <div>
                    <button class="title btn text-left btn-block d-lg-none" aria-expanded="false" aria-controls="collapsible-customer-support">
                        <h4>Customer Support</h4>
                    </button>
                    <span class="d-none d-lg-block">
                        <a href="{{route('customer_support')}}">
                            <h4>Customer Support</h4>
                        </a>
                    </span>
                </div>

                <ul id="collapsible-customer-support" class="menu-footer content">
                    <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                    <li>
                        <a href="{{ route('guarantee') }}">Satisfaction Guarantee</a>
                    </li>
                    <li>
                        <a href="{{ route('shipping') }}">Shipping</a>
                    </li>
                </ul>
            </div>
        </div>
     

       

        <div class="content-asset">
            <!-- dwMarker="content" dwContentID="c03d12030b0b600943089d4bcf" -->
            <div class="footer-item collapsible-md">
                <div>
                    <button class="title btn text-left btn-block d-lg-none" aria-expanded="false" aria-controls="collapsible-shop-at-johnnys">
                        <h4>Shop at Johnny's</h4>
                    </button>
                    <span class="d-none d-lg-block">
                        <a href="shop-johnnys/shop-at-johnnys.html">
                            <h4>Shop at Johnny's</h4>
                        </a>
                    </span>
                </div>

                <ul id="collapsible-shop-at-johnnys" class="menu-footer content">
                    <li>
                        <a href="{{ route('representatives') }}">Commercial Sales</a>
                    </li>
                    <li><a href="{{ route('oders') }}">Quick Order</a></li>
                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                
                  
                </ul>
            </div>
        </div>
        <!-- End content-asset -->
    </div>

    
    <div class="footer-bottom bg-dark-green color-white d-flex justify-content-around flex-wrap">
        <div class="footer-bottom-inner row">
            <div class="col-12 col-md-6 footer-bottom-center">
                <div class="content-asset">
                    <!-- dwMarker="content" dwContentID="25f73b228f2a7e768790eaadc3" -->
                    <script>
                        var today = new Date();
                        var year = today.getFullYear();

                    </script>

                    Copyright &copy;
                    <script>
                        document.write(year);

                    </script>
                    {{ getnameSite('name') }}
                </div>
                <!-- End content-asset -->
            </div>
            <div class="col-12 col-md-6 footer-bottom-right">
                <div class="content-asset">
                    <!-- dwMarker="content" dwContentID="d3a15a9f3de32633551d67fe99" -->
                    <ul>
                        {{-- <li>
                            <a title="Privacy Policy" href="customer-support/privacy-policy.html">Privacy &amp; Security</a><span class="px-1">|</span>
                        </li>
                        <li>
                            <a title="Do Not Sell My Personal Information" href="https://privacyportal.onetrust.com/webform/38c50ba5-804a-4d07-993e-d6b2186d16b6/e99ba859-3389-4427-b076-2341164193b5" target="_blank">Do Not Sell My Personal Information</a><span class="px-1">|</span>
                        </li>
                        <li>
                            <a title="Site Map" href="sitemap/index.html">Sitemap</a>
                        </li> --}}
                    </ul>
                </div>
                <!-- End content-asset -->
            </div>
        </div>
    </div>

    <script src="{{asset('front/on/demandware.static/Sites-JSS-Site/-/en_US/v1665292595578/js/ltkJS.js')}}" ltk-data="OuUzF37HjJHB"></script>

    <script src="{{asset('front/on/demandware.static/Sites-JSS-Site/-/en_US/v1665292595578/js/ltkClickTracking.js')}}"></script>

    <script src="{{asset('front/on/demandware.static/Sites-JSS-Site/-/en_US/v1665292595578/js/ltkActivityTracking.js')}}" ltk-data-clearurl="{{asset('front/on/demandware.store/Sites-JSS-Site/en_US/ltkActivityTracking-ClearTracker')}}" ltk-data-sku="" ltk-data-qvsku="" ltk-data-category=""></script>

    <script src="{{asset('front/on/demandware.static/Sites-JSS-Site/-/en_US/v1665292595578/js/ltkSubPoints.js')}}" ltk-data="[dwfrm_emailsignup_email, dwfrm_profile_customer_email, dwfrm_catalogrequest_email, dwfrm_billing_billingAddress_email_emailAddress, emailsignup_email, dwfrm_shipping_shippingAddress_addressFields_email, dwfrm_catalogrequest, dwfrm_profile, dwfrm_requestpassword]"></script>

    <div class="modal fade" id="growingexperiencepopupModal" tabindex="-1" role="dialog" aria-labelledby="growingexperiencepopupModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="brand-h2">
                        Thank you for joining the Johnny's community!
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body"></div>
            </div>
        </div>
    </div>
</footer>