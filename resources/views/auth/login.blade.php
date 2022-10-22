@extends('website.layouts.master')
@section('title')
تسجيل الدخول | {{getnameSite('name')}}
@endsection
@section('content')
<div role="main" id="maincontent">

    <div class="container login-page">
        <div class="row hidden-md-down breadcrumb-wrapper">
            <div class="col" role="navigation" aria-label="Breadcrumb">
                <ol class="breadcrumb">


                    <li class="breadcrumb-item">

                        <a href="{{route('site')}}" aria-current="page">
                            Home
                        </a>

                    </li>

                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h1 class="brand-h3 page-title">My Account</h1>
            </div>
        </div>


        <div class="d-none gtm-register-event register"></div>

        <div class="row justify-content-center equal-height">
            <div class="col-12 col-lg-6 login-register-col">
                <div class="card">
                    <div class="card-body">
                        <div class="login-form-nav">
                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" href="#login" data-toggle="tab" role="tab"
                                        aria-controls="login" aria-selected="true" id="login-tab">
                                        <h2 class="card-header-custom brand-h4 m-0">Login</h2>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#register" data-toggle="tab" role="tab"
                                        aria-controls="register" aria-selected="false" id="register-tab">
                                        <h2 class="card-header-custom brand-h4 m-0">Create Account</h2>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                    <span class="required-field-meaning">An asterisk (*) indicates a required
                                        field</span>
                                    <form action="{{route('login')}}" class="login" method="POST" name="login-form">
                                        @csrf
                                        <div class="form-group required">
                                            <label class="form-control-label" for="login-form-email">
                                                <span class="required" aria-label="Required field">*</span>
                                                Email Address
                                            </label>
                                            <input type="email" id="login-form-email" required aria-required="true"
                                                class="form-control required" aria-describedby="form-email-error"
                                                name="email" value="" pattern="^[\w.%+-]+@[\w.-]+\.[\w]{2,6}$"
                                                data-missing-error="This field is required."
                                                data-pattern-mismatch="Please enter a valid Email Address" />
                                            <div class="invalid-feedback" id="form-email-error"></div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="form-control-label" for="login-form-password">
                                                <span class="required" aria-label="Required field">*</span>
                                                Password
                                            </label>
                                            <input type="password" id="login-form-password" required
                                                aria-required="true" class="form-control required"
                                                aria-describedby="form-password-error" name="password"
                                                data-missing-error="This field is required." />
                                            <div class="invalid-feedback" id="form-password-error"></div>
                                        </div>

                                        <div class="clearfix d-flex justify-content-between w-100 align-items-center">
                                            <div class="form-group custom-control custom-checkbox remember-me w-50">
                                                <input type="checkbox" class="custom-control-input" id="rememberMe"
                                                    name="loginRememberMe" value="true">
                                                <label class="custom-control-label" for="rememberMe">
                                                    Remember Me
                                                </label>
                                            </div>

                                            <div class="w-50 forgot-password text-right">
                                                {{-- <a class="d-sm-none" --}} {{--
                                                    href="https://www.johnnyseeds.com/password-reset/" --}} {{--
                                                    title="Forgot Password?">--}}
                                                    {{-- Forgot Password?--}}
                                                    {{-- </a>--}}

                                                {{-- <a id="password-reset" class="hidden-xs-down" --}} {{--
                                                    title="Forgot Password?" data-toggle="modal" --}} {{--
                                                    href="https://www.johnnyseeds.com/on/demandware.store/Sites-JSS-Site/en_US/Account-PasswordResetDialogForm"
                                                    --}} {{-- data-target="#requestPasswordResetModal">--}}
                                                    {{-- Forgot Password?--}}
                                                    {{-- </a>--}}
                                            </div>
                                        </div>



                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </form>

                                    <div class="modal fade" id="requestPasswordResetModal" tabindex="-1" role="dialog"
                                        aria-labelledby="requestPasswordResetModal">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="modal-title request-password-title">Forgot your
                                                        Password</h2>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>

                                                <div class="modal-body">
                                                    <form class="reset-password-form" action="" method="POST"
                                                        name="dwfrm_requestpassword" id="dwfrm_requestpassword">
                                                        <div class="request-password-body">
                                                            <p>
                                                                Provide your account email address to receive an
                                                                email to reset your password.
                                                            </p>
                                                            <span class="required-field-meaning">An asterisk (*)
                                                                indicates a required field</span>
                                                            <div class="form-group required">
                                                                <label class="form-control-label"
                                                                    for="reset-password-email">
                                                                    <span class="required"
                                                                        aria-label="Required field">*</span>
                                                                    Email Address
                                                                </label>
                                                                <input id="reset-password-email" type="email"
                                                                    class="form-control" name="loginEmail"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Email Address">
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="send-email-btn">
                                                            <button type="submit" id="submitEmailButton"
                                                                class="btn btn-primary btn-block"
                                                                data-recaptchasitekey="6Lcl4psUAAAAALUOKktlaAV8JO1EaB5IEiG4cJZY"
                                                                data-recaptchaenabled="true">
                                                                Send
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane " id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <span class="required-field-meaning">An asterisk (*) indicates a required
                                        field</span>
                                    <span class="register-sub-title brand-h4">Account Information</span>


                                    <form action="{{ route('register') }}" class="registration" method="POST" name="">
                                        @csrf
                                        <div class="form-group required">
                                            <label class="form-control-label" for="dwfrm_profile_customer_firstname">

                                                <span class="required" aria-label="Required field">*</span>

                                                First Name
                                            </label>
                                            <input type="text" class="form-control"
                                                id="dwfrm_profile_customer_firstname" name="name" required
                                                data-missing-error="This field is required."
                                                data-range-error="Must be 50 characters or less."
                                                aria-describedby="form-fname-error"
                                                name="dwfrm_profile_customer_firstname" required aria-required="true"
                                                value="" maxLength="32" />
                                            <div class="invalid-feedback" id="form-fname-error"></div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="form-control-label" for="dwfrm_profile_customer_lastname">

                                                <span class="required" aria-label="Required field">*</span>

                                                Last Name
                                            </label>
                                            <input type="text" class="form-control" id="dwfrm_profile_customer_lastname"
                                                data-missing-error="This field is required."
                                                data-range-error="Must be 50 characters or less."
                                                aria-describedby="form-lname-error"
                                                name="dwfrm_profile_customer_lastname" required aria-required="true"
                                                value="" maxLength="32" />
                                            <div class="invalid-feedback" id="form-lname-error"></div>
                                        </div>

                                        <div class="form-group ">
                                            <label class="form-control-label" for="dwfrm_profile_customer_companyName">

                                                Company Name
                                            </label>
                                            <input type="text" class="form-control"
                                                id="dwfrm_profile_customer_companyName"
                                                data-missing-error="This field is required."
                                                data-range-error="Must be 50 characters or less."
                                                aria-describedby="form-cname-error"
                                                name="dwfrm_profile_customer_companyName" value="" maxLength="32" />
                                            <div class="invalid-feedback" id="form-cname-error"></div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="form-control-label" for="dwfrm_profile_customer_email">

                                                <span class="required" aria-label="Required field">*</span>

                                                Email
                                            </label>
                                            <input type="text" class="form-control" name="email" required
                                                id="dwfrm_profile_customer_email"
                                                data-missing-error="This field is required."
                                                data-pattern-mismatch="Please enter a valid E-Mail address"
                                                data-range-error="Must be 50 characters or less."
                                                aria-describedby="form-email-error" name="dwfrm_profile_customer_email"
                                                required aria-required="true" value="" maxLength="50"
                                                pattern="^[\w.%+-]+@[\w.-]+\.[\w]{2,6}$" />
                                            <div class="invalid-feedback" id="form-email-error"></div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="form-control-label" for="dwfrm_profile_customer_emailconfirm">

                                                <span class="required" aria-label="Required field">*</span>

                                                Confirm Email
                                            </label>
                                            <input type="text" class="form-control"
                                                id="dwfrm_profile_customer_emailconfirm"
                                                data-missing-error="This field is required."
                                                data-pattern-mismatch="Please enter a valid E-Mail address"
                                                data-range-error="Must be 50 characters or less."
                                                aria-describedby="form-email-confirm-error"
                                                name="dwfrm_profile_customer_emailconfirm" required aria-required="true"
                                                value="" maxLength="50" pattern="^[\w.%+-]+@[\w.-]+\.[\w]{2,6}$" />
                                            <div class="invalid-feedback" id="form-email-confirm-error"></div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="form-control-label password-label"
                                                for="dwfrm_profile_login_password">
                                                <span>

                                                    <span class="required" aria-label="Required field">*</span>

                                                    Password
                                                </span>
                                                <span class="label-hint">8 - 255 characters</span>
                                            </label>
                                            <input type="password" class="form-control" name="password" required
                                                id="dwfrm_profile_login_password"
                                                data-missing-error="This field is required."
                                                data-range-error="This field needs 8 to 255 characters"
                                                aria-describedby="form-password-error" autocomplete="off"
                                                name="dwfrm_profile_login_password" required aria-required="true"
                                                value="" maxLength="255" minLength="8" />
                                            <div class="invalid-feedback" id="form-password-error"></div>
                                        </div>

                                        <div class="form-group
        required">
                                            <label class="form-control-label password-label"
                                                for="dwfrm_profile_login_passwordconfirm">
                                                <span>

                                                    <span class="required" aria-label="Required field">*</span>

                                                    Confirm Password
                                                </span>
                                                <span class="label-hint">8 - 255 characters</span>
                                            </label>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                required id="dwfrm_profile_login_passwordconfirm"
                                                data-missing-error="This field is required."
                                                data-range-error="This field needs 8 to 255 characters"
                                                aria-describedby="form-password-confirm-error" autocomplete="off"
                                                name="dwfrm_profile_login_passwordconfirm" required aria-required="true"
                                                value="" maxLength="255" minLength="8" />
                                            <div class="invalid-feedback" id="form-password-confirm-error">
                                            </div>
                                        </div>

                                        <div class="password-hint">

                                        </div>


                                        <span class="register-sub-title brand-h4 mt-5">Grower's Profile</span>

                                        <div class="form-group
    required">
                                            <label class="form-control-label" for="dwfrm_profile_customer_growertype">

                                                <span class="required" aria-label="Required field">*</span>

                                                Grower Type
                                            </label>
                                            <select class="form-control grower-type custom-select"
                                                id="dwfrm_profile_customer_growertype"
                                                aria-describedby="grower-type-error"
                                                data-missing-error="This field is required."
                                                name="dwfrm_profile_customer_growertype" required aria-required="true"
                                                value="" maxLength="2147483647">
                                                <option value=""> Choose what best describes you</option>

                                                <option id="0" value="Home Gardener">
                                                    Home Gardener
                                                </option>

                                                <option id="1" value="Commercial Grower">
                                                    Commercial Grower
                                                </option>

                                                <option id="2" value="Government">
                                                    Government
                                                </option>

                                                <option id="3" value="School/University">
                                                    School/University
                                                </option>

                                            </select>
                                            <div class="invalid-feedback" id="grower-type-error"></div>
                                        </div>
                                        <div class="form-group
    ">
                                            <label class="form-control-label"
                                                for="dwfrm_profile_customer_primarygrowingmethod">

                                                Primary Growing Method
                                            </label>
                                            <select class="form-control primary-growing-method custom-select"
                                                id="dwfrm_profile_customer_primarygrowingmethod"
                                                aria-describedby="primary-growing-method-error"
                                                name="dwfrm_profile_customer_primarygrowingmethod" value=""
                                                maxLength="2147483647">
                                                <option value=""> Please select your primary growing method
                                                </option>

                                                <option id="0" value="Certified Organic">
                                                    Certified Organic
                                                </option>

                                                <option id="1" value="Conventional Farm or Garden">
                                                    Conventional Farm or Garden
                                                </option>

                                                <option id="2" value="Conventional Hydroponic">
                                                    Conventional Hydroponic
                                                </option>

                                                <option id="3" value="Field Grower">
                                                    Field Grower
                                                </option>

                                                <option id="4" value="Greenhouse Grower">
                                                    Greenhouse Grower
                                                </option>

                                                <option id="5" value="Landscaper">
                                                    Landscaper
                                                </option>

                                                <option id="6" value="Organic Hydroponic">
                                                    Organic Hydroponic
                                                </option>

                                                <option id="7" value="Organic Preferred">
                                                    Organic Preferred
                                                </option>

                                            </select>
                                            <div class="invalid-feedback" id="primary-growing-method-error">
                                            </div>
                                        </div>


                                        <div class="form-group custom-control custom-checkbox">
                                            <span class="register-sub-title brand-h4">Preferences</span>
                                            <input type="checkbox" class="custom-control-input"
                                                id="dwfrm_profile_customer_addtoemaillist"
                                                name="dwfrm_profile_customer_addtoemaillist" checked="true"
                                                value="true" />
                                            <label class="custom-control-label"
                                                for="dwfrm_profile_customer_addtoemaillist">
                                                Please send me the monthly grower&#x27;s e-newsletter, plus
                                                savings, product news and more.
                                            </label>
                                        </div>

                                        <input type="hidden" name="csrf_token"
                                            value="RJELk4dqqkWlznDIl6nqr43GuJTXQ1j4X7OxdbfyoQgDn-rRfA3MJk7sUjiR_U2M3CE8mW9vZqAv5Ww_KxtbT6zhbQFSYVket3Jv8j3cGrhUDpe8Lc6sFeq5CnY9UNNB9ANdJE4VQFCqAXtW1RyS3bhY1AKKHVWTHek2HVllu1O871c1onc=" />
                                        <div class="">
                                            <button type="button" class="privacy-policy privacy-policy-btn"
                                                data-toggle="modal" data-target="#privacyPolicyModal">
                                                Privacy Policy
                                            </button>
                                        </div>
                                        <button type="submit" name="save" class="btn btn-primary register"
                                            data-recaptchasitekey="6Lcl4psUAAAAALUOKktlaAV8JO1EaB5IEiG4cJZY"
                                            data-recaptchaenabled="true">
                                            Create Account
                                        </button>
                                    </form>

                                    <div class="modal fade" id="privacyPolicyModal" tabindex="-1" role="dialog"
                                        aria-labelledby="privacyPolicyTitle">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <span class="sr-only" id="privacyPolicyTitle">Privacy
                                                        Policy</span>
                                                    <button type="button" class="close close-btn" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <svg class="close-svg" aria-hidden="true">
                                                            <use xlink:href="#icon-close"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <div class="content-asset">
                                                        <!-- dwMarker="content" dwContentID="f54f077af124abb9a77593df19" -->
                                                        <style type="text/css">
                                                            .tha {
                                                                font-family: "Trebuchet MS", Verdana, sans-serif;
                                                                font-size: 18px;
                                                                font-size-adjust: none;
                                                                letter-spacing: 1px;
                                                                background-color: #dce1cc;
                                                                color: #337133;
                                                                text-align: left;
                                                                padding: 5px;
                                                            }

                                                            .thb {
                                                                font-family: "Trebuchet MS", Verdana, sans-serif;
                                                                font-size: 10px;
                                                                font-size-adjust: none;
                                                                letter-spacing: 1px;
                                                                background-color: #dce1cc;
                                                                color: #337133;
                                                                text-align: right;
                                                                padding: 5px;
                                                                font-weight: normal;
                                                            }

                                                            .thc {
                                                                font-family: "Trebuchet MS", Verdana, sans-serif;
                                                                font-size: 10px;
                                                                font-size-adjust: none;
                                                                letter-spacing: 1px;
                                                                background-color: #dce1cc;
                                                                color: #337133;
                                                                text-align: left;
                                                                padding: 5px;
                                                                font-weight: normal;
                                                            }

                                                            .th1 {
                                                                font-family: "Trebuchet MS", Verdana, sans-serif;
                                                                font-size: 12px;
                                                                font-size-adjust: none;
                                                                letter-spacing: 1px;
                                                                background-color: #faf2db;
                                                                color: #337133;
                                                                text-align: left;
                                                                padding: 5px;
                                                            }

                                                            .th2 {
                                                                font-family: "Trebuchet MS", Verdana, sans-serif;
                                                                font-size: 12px;
                                                                font-size-adjust: none;
                                                                color: #414141;
                                                                text-align: left;
                                                                padding: 3px 5px 3px 5px;
                                                                border-bottom: 1px solid #cecece;
                                                                border-left: 1px dotted #cecece;
                                                                text-decoration: none;
                                                            }

                                                            table {
                                                                border-collapse: collapse;
                                                                border-spacing: 0;
                                                                width: 100%;
                                                                border: 1px solid #ddd;
                                                            }

                                                            th,
                                                            td {
                                                                border: none;
                                                                text-align: left;
                                                                padding: 5px;
                                                            }

                                                            tr:nth-child(even) {
                                                                background-color: #f2f2f2
                                                            }
                                                        </style>
                                                        <style type="text/css">
                                                            <!--
                                                            p.MsoNormal {
                                                                margin-top: 0in;
                                                                margin-right: 0in;
                                                                margin-bottom: 8.0pt;
                                                                margin-left: 0in;
                                                                line-height: 107%;
                                                                font-size: 11.0pt;
                                                                font-family: "Calibri", sans-serif;
                                                            }
                                                            -->
                                                        </style>
                                                        <div class="main_copy">
                                                            <a name="top"> </a>
                                                            <div class="main-image"><img
                                                                    alt="Johnny's Selected Seeds Privacy Policy"
                                                                    src="https://www.johnnyseeds.com/on/demandware.static/-/Library-Sites-JSSSharedLibrary/default/dw062a1afc/images/landers/1hubpages/CustomerSupportHead.jpg"
                                                                    width="630"
                                                                    style="padding-bottom: 60px !important;" />
                                                                <div class="large-headTXT">
                                                                    <h1 class="h1-t" style="font-size: 1.8em;">
                                                                        Privacy Policy</h1>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="c-cta-link" style="margin-bottom: 5px;">
                                                                <a title="Back to Top" href="#top">Top
                                                                    <strong>&circ;</strong></a>
                                                            </div>
                                                            <a name="1" id="1"> </a>
                                                            <div class="careerBOX">
                                                                <h2 class="careertitle" style="font-size: 1.3em;">
                                                                    Information Usage
                                                                </h2>
                                                                <div class="careertext">
                                                                    <ul>
                                                                        <li><strong>Uses of Personal
                                                                                Information. </strong> We
                                                                            collect identifiers and personal
                                                                            information on our Web site when you
                                                                            make a purchase, create an online
                                                                            account, request a catalog, or
                                                                            subscribe to email. Identifiers and
                                                                            personal information may include
                                                                            your name, address, email address,
                                                                            and credit card number. We collect
                                                                            and use such information to enhance
                                                                            your customer experience with us and
                                                                            for marketing purposes such as to:
                                                                            <ul>
                                                                                <li>Process, track, and fill
                                                                                    your orders
                                                                                </li>
                                                                                <li>Help make the site easier
                                                                                    for you to use
                                                                                </li>
                                                                                <li>Provide you with relevant
                                                                                    information and content
                                                                                </li>
                                                                                <li>Market our products and
                                                                                    seeds
                                                                                </li>
                                                                                <li>Inform you of special offers
                                                                                    and promotions
                                                                                </li>
                                                                                <li>Include you in customer
                                                                                    surveys
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                    <blockquote>
                                                                        <p><em>Some special notes about
                                                                                e-mail:</em></p>
                                                                        <p>If you complete a Johnny's Selected
                                                                            Seeds survey, we may record your
                                                                            email address along with the
                                                                            information you provide us on the
                                                                            questionnaire. We use summaries of
                                                                            the data collected from our surveys
                                                                            to help us improve the service and
                                                                            products we offer you.</p>
                                                                        <p>Your email address also allows us to
                                                                            send you an order confirmation and
                                                                            customer service messages as
                                                                            necessary. If you have subscribed to
                                                                            our marketing and newsletter emails,
                                                                            we will also send you useful growing
                                                                            tips, special offers, customer
                                                                            surveys, and new product updates.
                                                                            <strong>We provide instructions on
                                                                                how to unsubscribe in each
                                                                                email.</strong>
                                                                        </p>
                                                                    </blockquote>
                                                                    <ul>
                                                                        <li><strong> Uses of Log Files.
                                                                            </strong> In addition, certain
                                                                            anonymous Information is collected
                                                                            automatically by our Web site. This
                                                                            information may include visitor
                                                                            domain name, IP address, and
                                                                            referring domain. The information is
                                                                            tracked in server logs, and may be
                                                                            used to troubleshoot problems, keep
                                                                            content relevant, examine traffic
                                                                            trends, and improve the Web site
                                                                            experience for visitors. This
                                                                            anonymous information is used only
                                                                            in aggregate form.
                                                                        </li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><strong>Uses of Cookies and Other
                                                                                Technology. </strong>We may
                                                                            assign your computer one or more
                                                                            Cookies, which are a standard
                                                                            Internet tool. A Cookie is a small
                                                                            data file stored as text files by
                                                                            your Web browser on your computer's
                                                                            hard drive. Most Internet browsers
                                                                            are initially set to accept Cookies.
                                                                            You can set your browser to refuse
                                                                            Cookies from Web sites or remove
                                                                            them from your device, but this will
                                                                            cause certain functions of our site
                                                                            to not work properly. We use
                                                                            Cookies, &quot;web beacons,&quot;
                                                                            and other similar technologies to
                                                                            collect information in connection
                                                                            with our Web site and advertising
                                                                            efforts.  For example, we use
                                                                            Cookies to enable you to save
                                                                            products in your shopping cart while
                                                                            you browse our Web site, and our Web
                                                                            site may use your browsing activity
                                                                            on our Web site to recommend other
                                                                            products you may be interested in. 
                                                                            We also use Cookies and other
                                                                            technology to analyze the
                                                                            effectiveness of our Web site and
                                                                            our advertising efforts, and we may
                                                                            use these technologies to display
                                                                            personalized advertising tailored to
                                                                            your interests as you browse the
                                                                            web, or to inform our efforts to
                                                                            identify and market to new
                                                                            customers, including by working with
                                                                            advertisers such as Google or
                                                                            Facebook to display advertising to
                                                                            custom audiences.&nbsp; Our website
                                                                            uses Google Analytics to analyze
                                                                            visits to our site and to help us
                                                                            improve our site and improve the
                                                                            effectiveness of our marketing
                                                                            efforts, including by personalizing
                                                                            advertisements you may be shown as
                                                                            you browse the web. To learn more
                                                                            about Google Analytics and your
                                                                            choices, please visit:&nbsp; <a
                                                                                title="Google Analytics"
                                                                                href="https://policies.google.com/technologies/partner-sites"
                                                                                target="_blank">https://policies.google.com/technologies/partner-sites</a>. 
                                                                            To learn more about interest-based
                                                                            advertising, and your choices about
                                                                            it, please see &quot;Your Choices
                                                                            About Interest-Based
                                                                            Advertising,&quot; below.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="c-cta-link" style="margin-bottom: 5px;">
                                                                <a title="Back to Top" href="#top">Top
                                                                    <strong>&circ;</strong></a>
                                                            </div>
                                                            <a name="2" id="2"> </a>
                                                            <div class="careerBOX">
                                                                <h2 class="careertitle" style="font-size: 1.3em;">Your
                                                                    Choices About
                                                                    Interest-Based Advertising</h2>
                                                                <div class="careertext">
                                                                    <p>We work with third-party advertising
                                                                        companies to more effectively target our
                                                                        advertising messages.  These third-party
                                                                        advertising platforms collect
                                                                        information about your browsing activity
                                                                        on our Web site and across the Internet,
                                                                        and analyze that information in order to
                                                                        display more relevant ads to you.  For
                                                                        example, if you search for a particular
                                                                        product on our Web site, you may be
                                                                        shown an advertisement for that product
                                                                        or a similar product when you are
                                                                        browsing a different Web site.</p>
                                                                    <p>Our Web site is not configured to
                                                                        recognize a &quot;do not track&quot;
                                                                        signal from a web browser.  If you would
                                                                        like to opt-out of interest-based
                                                                        advertising, you may visit the <a
                                                                            title="Network Advertising Initiative's Consumer Opt-out"
                                                                            href="http://optout.networkadvertising.org/"
                                                                            target="_blank">Network Advertising
                                                                            Initiative's Consumer Opt-Out
                                                                            Link</a> and/or the <a
                                                                            title="Digital Advertising Alliance's Consumer Opt-Out"
                                                                            href="http://optout.aboutads.info/"
                                                                            target="_blank">Digital Advertising
                                                                            Alliance's Consumer Opt-Out Link</a>
                                                                        and on those sites, you may opt-out of
                                                                        receiving tailored advertising from
                                                                        companies that help serve those ads. You
                                                                        can opt out of receiving personalized
                                                                        advertising from Google Ad Services by
                                                                        visiting: <a title="Google Ad Services"
                                                                            href="https://www.google.com/settings/ads/"
                                                                            target="_blank">https://www.google.com/settings/ads/</a>.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="c-cta-link" style="margin-bottom: 5px;">
                                                                <a title="Back to Top" href="#top">Top
                                                                    <strong>&circ;</strong></a>
                                                            </div>
                                                            <a name="3" id="3"> </a>
                                                            <div class="careerBOX">
                                                                <h2 class="careertitle" style="font-size: 1.3em;">
                                                                    Privacy of Minors
                                                                </h2>
                                                                <div class="careertext">
                                                                    <p>Our Web site is not intended for children
                                                                        under 16 years of age. No one under age
                                                                        16 may provide any personal information
                                                                        on the Web site. We do not knowingly
                                                                        collect personal information from
                                                                        children under 16. If you are under 16,
                                                                        do not use or provide any information on
                                                                        this Web site. If we learn we have
                                                                        collected or received personal
                                                                        information from a child under 16
                                                                        without verification of parental
                                                                        consent, we will delete that
                                                                        information.</p>
                                                                </div>
                                                            </div>
                                                            <div class="c-cta-link" style="margin-bottom: 5px;">
                                                                <a title="Back to Top" href="#top">Top
                                                                    <strong>&circ;</strong></a>
                                                            </div>
                                                            <a name="4" id="4"> </a>
                                                            <div class="careerBOX">
                                                                <h2 class="careertitle" style="font-size: 1.3em;"> Data
                                                                    Security and
                                                                    Safety</h2>
                                                                <div class="careertext">
                                                                    <p>We are committed to maintaining
                                                                        appropriate physical, electronic, and
                                                                        administrative measures to safeguard the
                                                                        security of your personal information.
                                                                    </p>
                                                                    <p>However, if you have any concerns about
                                                                        ordering electronically, feel free to
                                                                        call <strong> 1-877-564-6697 </strong>
                                                                        to place your order over the phone.</p>
                                                                    <p>You can also print your online shopping
                                                                        cart page and fax your order:</p>
                                                                    <blockquote>
                                                                        <p><strong> Attention: Customer Service
                                                                                <br />
                                                                                1-800-738-6314 (US Only) <br />
                                                                                1-207-238-5375 (Non-US)
                                                                            </strong></p>
                                                                    </blockquote>
                                                                    <p>Or, you can mail your order to us at the
                                                                        following address:</p>
                                                                    <blockquote>
                                                                        <p><strong> Johnny's Selected
                                                                                Seeds<br />
                                                                                ATTN: Catalog Order<br />
                                                                                PO Box 299<br />
                                                                                Waterville, ME 04903</strong>
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                            <div class="c-cta-link" style="margin-bottom: 40px;"><a
                                                                    title="Back to Top" href="#top">Top
                                                                    <strong>&circ;</strong></a></div>
                                                            <a name="5" id="5"> </a>
                                                            <div class="careerBOX">
                                                                <h1 class="h1-t"
                                                                    style="font-size: 1.7em; font-family: Arial, Helvetica, sans-serif; border-bottom-width: thin; border-bottom-style: groove;">
                                                                    YOUR CALIFORNIA PRIVACY RIGHTS</h1>
                                                                <div class="careertext">
                                                                    <p>If you are a California resident, the
                                                                        California Consumer Privacy Act (CCPA)
                                                                        provides you with certain rights
                                                                        regarding your personal information.
                                                                        This section describes your CCPA rights
                                                                        and how to exercise them.</p>
                                                                    <a name="6" id="6"> </a>
                                                                    <h2 class="careertitle" style="font-size: 1.3em;">
                                                                        Information We
                                                                        Collect and How It Is Used</h2>
                                                                    <p>We collect information from you in
                                                                        several different ways on this site,
                                                                        with the goal of improving your customer
                                                                        experience with Johnny's Selected Seeds.
                                                                        During the past 12 months, we have
                                                                        collected the following types of
                                                                        information:</p>
                                                                    <ul>
                                                                        <li><em>Identifiers,</em> such as a real
                                                                            names, aliases, postal addresses,
                                                                            unique personal identifiers, online
                                                                            identifiers, Internet Protocol (IP)
                                                                            addresses, email addresses, or other
                                                                            similar identifiers;
                                                                            <blockquote>
                                                                                <p><em>Collected from</em>:
                                                                                    Information you provide to
                                                                                    us, or we collect when you
                                                                                    use our services or Web
                                                                                    site.</p>
                                                                                <p><em>Business use</em>: To
                                                                                    enable the use of our Web
                                                                                    site, fulfill your orders,
                                                                                    market our products and
                                                                                    seeds, inform you of special
                                                                                    offers and promotions,
                                                                                    communicate directly with
                                                                                    you, and understand how
                                                                                    customers interact with our
                                                                                    Web site and offerings.</p>
                                                                            </blockquote>
                                                                        </li>
                                                                    </ul>
                                                                    <blockquote>
                                                                        <p>For our commercial customers applying
                                                                            for credit, we also collect
                                                                            identifiers such as social security
                                                                            numbers for the purpose of
                                                                            processing that application.</p>
                                                                    </blockquote>
                                                                    <ul>
                                                                        <li><em>C</em><em>ategories of personal
                                                                                information</em> (Section
                                                                            1798.80(e) of the Cal. Civil Code),
                                                                            such as telephone numbers, credit
                                                                            card numbers, debit card numbers,
                                                                            and other financial information;
                                                                            <blockquote>
                                                                                <p><em>Collected from</em>:
                                                                                    Information you provide to
                                                                                    us, or we collect when you
                                                                                    use our services or Web
                                                                                    site.</p>
                                                                                <p><em>Business use</em>: To
                                                                                    fulfill your orders,
                                                                                    communicate directly with
                                                                                    you, and prevent fraud.</p>
                                                                            </blockquote>
                                                                        </li>
                                                                        <li><em>Internet or other electronic
                                                                                network activity
                                                                                information</em>, including, but
                                                                            not limited to, browsing history,
                                                                            search history, and information
                                                                            regarding a consumer's interaction
                                                                            with an Internet Web site,
                                                                            application, or advertisement;
                                                                            <blockquote>
                                                                                <p><em>Collected from</em>:
                                                                                    Information we collect when
                                                                                    you use our services or Web
                                                                                    site.</p>
                                                                                <p><em>Business use</em>: To
                                                                                    enable the use of our Web
                                                                                    site, monitor and
                                                                                    troubleshoot Web site
                                                                                    performance, provide you
                                                                                    with relevant information
                                                                                    and content, market our
                                                                                    products and seeds, inform
                                                                                    you of special offers and
                                                                                    promotions, improve our
                                                                                    offerings, detect fraud, and
                                                                                    assist with your requests.
                                                                                </p>
                                                                            </blockquote>
                                                                        </li>
                                                                        <li><em>Commercial information,
                                                                            </em>including records of personal
                                                                            property, products or services
                                                                            purchased, obtained, or considered,
                                                                            or other purchasing or consuming
                                                                            histories or tendencies;
                                                                            <blockquote>
                                                                                <p><em>Collected from</em>:
                                                                                    Information you provide to
                                                                                    us, or we collect when you
                                                                                    use our services or Web
                                                                                    site.</p>
                                                                                <p><em>Business use</em>: To
                                                                                    enable the use of our Web
                                                                                    site, fulfill your orders,
                                                                                    market our products and
                                                                                    seeds, inform you of special
                                                                                    offers and promotions,
                                                                                    communicate directly with
                                                                                    you, and understand how
                                                                                    customers interact with our
                                                                                    Web site and offerings.</p>
                                                                            </blockquote>
                                                                            <p>For our commercial customers
                                                                                applying for credit, we also
                                                                                collect additional commercial
                                                                                information for the purposes of
                                                                                processing that application.</p>
                                                                        </li>
                                                                        <li><em>Geolocation data</em><em>;
                                                                            </em>and
                                                                            <blockquote>
                                                                                <p><em>Collected from</em>:
                                                                                    Information we collect when
                                                                                    you use our services or Web
                                                                                    site; information provided
                                                                                    by third parties.</p>
                                                                                <p><em>Business use</em>: To
                                                                                    enable the use of our Web
                                                                                    site and to personalize your
                                                                                    experience; and for fraud
                                                                                    detection.</p>
                                                                            </blockquote>
                                                                        </li>
                                                                        <li><em>Inferences,</em>
                                                                            system-generated predictions about
                                                                            your interests and preferences
                                                                            <blockquote>
                                                                                <p><em>Collected from</em>:
                                                                                    Created internally and with
                                                                                    the help of our business
                                                                                    partners.</p>
                                                                                <p><em>Business use</em>: To
                                                                                    personalize your experience
                                                                                    and improve our
                                                                                    offerings.<br />
                                                                                </p>
                                                                            </blockquote>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="c-cta-link" style="margin-bottom: 5px;">
                                                                <a title="Back to Top" href="#top">Top
                                                                    <strong>&circ;</strong></a>
                                                            </div>
                                                            <a name="7" id="7"> </a>
                                                            <div class="careerBOX">
                                                                <h2 class="careertitle" style="font-size: 1.3em;">How
                                                                    Information
                                                                    May Be Shared</h2>
                                                                <div class="careertext">
                                                                    <p>During the past 12 months, we have shared
                                                                        the following information for business
                                                                        purposes. Please note that for purposes
                                                                        of this notice, personal information
                                                                        does not include deidentified,
                                                                        aggregated, or anonymized information
                                                                        that is maintained in a form that is not
                                                                        capable of being associated with or
                                                                        linked to you.</p>
                                                                    <p><strong><em>Sale for a Business
                                                                                Purpose:</em></strong></p>
                                                                    <p>We do not sell your personal information
                                                                        for any monetary consideration. However,
                                                                        under some circumstances a transfer of
                                                                        personal information to a third party
                                                                        without monetary consideration may still
                                                                        be considered a &quot;sale&quot; under
                                                                        California law. If you purchase from us,
                                                                        Johnny's Selected Seeds may opt your
                                                                        name, address, email address, and order
                                                                        information into a cooperative marketing
                                                                        database used by other companies that
                                                                        may want to market goods or services to
                                                                        you. </p>
                                                                    <p><strong>If you wish to opt out of the
                                                                            sale of personal information, please
                                                                            use the following link: <a
                                                                                title="Do Not Sell My Personal Information"
                                                                                href="https://privacyportal.onetrust.com/webform/38c50ba5-804a-4d07-993e-d6b2186d16b6/e99ba859-3389-4427-b076-2341164193b5"
                                                                                target="_blank">DO&nbsp;NOT&nbsp;SELL
                                                                                MY
                                                                                PERSONAL&nbsp;INFORMATION</a>.</strong>
                                                                        You may authorize another to submit a
                                                                        request to opt out on your behalf, but
                                                                        only if you provide the authorized agent
                                                                        with signed, written permission to do
                                                                        so. So as to ensure your privacy, we
                                                                        reserve the right to deny a request from
                                                                        an authorized agent who does not submit
                                                                        proof that they have been authorized to
                                                                        act on your behalf. If exercised, the
                                                                        decision to opt out will be valid for 12
                                                                        months, at which time we may request
                                                                        that you authorize the sale of personal
                                                                        information again.</p>
                                                                    <p><strong><em>Disclosure for a Business
                                                                                Purpose:</em></strong></p>
                                                                    <div style="overflow-x:auto;">
                                                                        <table
                                                                            style="border-collapse: collapse; border-spacing: 0; width: 98%; border: 1px solid #ddd;">
                                                                            <tr
                                                                                style="background-color: #555f6b; color: font-color: #ffffff;">
                                                                                <td width="180" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    <font color="ffffff">THIRD
                                                                                        PARTY</font>
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    <font color="ffffff">PURPOSE
                                                                                    </font>
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    <font color="ffffff">
                                                                                        CATEGORY OF PERSONAL
                                                                                        INFORMATION</font>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Operating system and
                                                                                    platform
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Calculation of sales tax
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Identifiers: Name and
                                                                                    customer address<br />
                                                                                    Commercial information:
                                                                                    Order information
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Operating system and
                                                                                    platform
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Address validation and
                                                                                    correction
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Identifiers: Name and
                                                                                    customer address
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Operating system and
                                                                                    platform
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Credit card processing
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Identifiers: Name and
                                                                                    customer billing
                                                                                    address<br />
                                                                                    Commercial information:
                                                                                    Order information<br />
                                                                                    Personal information: Credit
                                                                                    card information
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Operating system and
                                                                                    platform<br />
                                                                                    Data analytics providers
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Fraud detection
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Geolocation data<br />
                                                                                    Internet information:
                                                                                    Browsing history
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Operating system and
                                                                                    platform
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Email marketing
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Identifiers: Name and
                                                                                    customer email address<br />
                                                                                    Commercial information:
                                                                                    Order information<br />
                                                                                    Internet information:
                                                                                    Browsing history
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Operating system and
                                                                                    platform
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Transactional emails (order
                                                                                    confirmations, password
                                                                                    resets, etc.) and order
                                                                                    management and fulfillment
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Identifiers: Name; bill-to
                                                                                    and ship-to addresses; email
                                                                                    address; and telephone
                                                                                    number.<br />
                                                                                    Commercial information:
                                                                                    Order information
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Operating system and
                                                                                    platform<br />
                                                                                    Drop-ship vendors
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Shipping
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Identifiers: Name and
                                                                                    customer address<br />
                                                                                    Commercial information:
                                                                                    Order information
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Operating system and
                                                                                    platform
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Customer support
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Identifiers: Customer email
                                                                                    address; name; telephone
                                                                                    number; and zip code
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Data analytics providers
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Web site analytics/improving
                                                                                    our products and services
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Internet information:
                                                                                    Browsing history and browser
                                                                                    information<br />
                                                                                    Commercial information:
                                                                                    Order information<br />
                                                                                    Geolocation data<br />
                                                                                    Identifiers: IP
                                                                                    address<br />
                                                                                    Inferences: System-generated
                                                                                    predictions about your
                                                                                    interests and preferences
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Social networks<br />
                                                                                    Advertising networks<br />
                                                                                    Data analytics
                                                                                    providers<br />
                                                                                    Operating system and
                                                                                    platform
                                                                                </td>
                                                                                <td width="190" valign="top"
                                                                                    style="border-right: 1px dotted #cecece;">
                                                                                    Online advertising and
                                                                                    product recommendations
                                                                                </td>
                                                                                <td width="371" valign="top">
                                                                                    Internet information:
                                                                                    Browsing history and browser
                                                                                    information<br />
                                                                                    Identifiers: IP address;
                                                                                    email address; unique
                                                                                    personal identifiers<br />
                                                                                    Geolocation data<br />
                                                                                    Commercial information:
                                                                                    Order information
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="c-cta-link" style="margin-bottom: 5px;">
                                                                <a title="Back to Top" href="#top">Top
                                                                    <strong>&circ;</strong></a>
                                                            </div>
                                                            <a name="8" id="8"> </a>
                                                            <div class="careerBOX">
                                                                <h2 class="careertitle" style="font-size: 1.3em;">
                                                                    Exercise of Your
                                                                    Data Rights</h2>
                                                                <div class="careertext">
                                                                    <ul>
                                                                        <li>You have the right to request that
                                                                            we disclose certain information to
                                                                            you about our collection and use of
                                                                            your personal information over the
                                                                            past 12 months. Once we receive and
                                                                            verify your request, we will
                                                                            disclose to you:
                                                                        </li>
                                                                    </ul>
                                                                    <ul>
                                                                        <ul>
                                                                            <li>The categories of personal
                                                                                information we collected about
                                                                                you.
                                                                            </li>
                                                                            <li>The categories of sources from
                                                                                which the personal information
                                                                                has been collected.
                                                                            </li>
                                                                            <li>The specific pieces of personal
                                                                                information we collected about
                                                                                you.
                                                                            </li>
                                                                            <li>Our business or commercial
                                                                                purpose for collecting or
                                                                                selling any personal
                                                                                information.
                                                                            </li>
                                                                            <li>The categories of personal
                                                                                information about you that was
                                                                                sold or disclosed for a business
                                                                                purpose.
                                                                            </li>
                                                                            <li>The categories of third parties
                                                                                to whom the personal information
                                                                                was sold or disclosed for a
                                                                                business purpose, by category or
                                                                                categories of personal
                                                                                information for each category of
                                                                                third parties to whom the
                                                                                personal information was sold.
                                                                            </li>
                                                                        </ul>
                                                                    </ul>
                                                                    <ul>
                                                                        <li>You have the right to request that
                                                                            we delete any of your personal
                                                                            information that we collected from
                                                                            you and retained, subject to certain
                                                                            exceptions. Once we receive and
                                                                            verify your request, we will delete
                                                                            (and direct our service providers to
                                                                            delete) your personal information
                                                                            from our records, unless an
                                                                            exception applies.<br />
                                                                            <br />
                                                                        </li>
                                                                        <ul>
                                                                            <li>We may deny your deletion
                                                                                request if retaining the
                                                                                information is necessary for us
                                                                                or our service providers
                                                                                to:<br />
                                                                                <br />
                                                                            </li>
                                                                            <ul>
                                                                                <li>Complete the transaction for
                                                                                    which we collected the
                                                                                    personal information,
                                                                                    provide a good or service
                                                                                    that you requested, take
                                                                                    actions reasonably
                                                                                    anticipated within the
                                                                                    context of our ongoing
                                                                                    business relationship with
                                                                                    you, or otherwise perform
                                                                                    our agreement with you.
                                                                                </li>
                                                                                <li>Detect security incidents;
                                                                                    protect against malicious,
                                                                                    deceptive, fraudulent, or
                                                                                    illegal activity; or
                                                                                    prosecute those responsible
                                                                                    for such activities.
                                                                                </li>
                                                                                <li>Debug products to identify
                                                                                    and repair errors that
                                                                                    impair existing intended
                                                                                    functionality.
                                                                                </li>
                                                                                <li>Exercise free speech, ensure
                                                                                    the right of another
                                                                                    consumer to exercise their
                                                                                    free speech rights, or
                                                                                    exercise another right
                                                                                    provided for by law.
                                                                                </li>
                                                                                <li>Comply with the California
                                                                                    Electronic Communications
                                                                                    Privacy Act.
                                                                                </li>
                                                                                <li>Enable internal uses that
                                                                                    are reasonably aligned with
                                                                                    consumer expectations based
                                                                                    on your relationship with
                                                                                    us.
                                                                                </li>
                                                                                <li>Comply with a legal
                                                                                    obligation.
                                                                                </li>
                                                                                <li>Make other internal and
                                                                                    lawful uses of that
                                                                                    information that are
                                                                                    compatible with the context
                                                                                    in which you provided it.
                                                                                </li>
                                                                            </ul>
                                                                        </ul>
                                                                    </ul>
                                                                   
                                                                    <p>Only you or a person whom you authorize
                                                                        to act on your behalf may make a
                                                                        verifiable consumer request related to
                                                                        your personal information. If you wish
                                                                        to authorize another to act on your
                                                                        behalf, please be advised that we may
                                                                        require that you provide the authorized
                                                                        agent with signed written permission to
                                                                        submit a request and verify your own
                                                                        identity and confirm your permission
                                                                        directly with us, unless the authorized
                                                                        agent has a power of attorney. However,
                                                                        you may also make a verifiable consumer
                                                                        request on behalf of your minor child.
                                                                    </p>
                                                                    <p>Our verification process works as
                                                                        follows. Before we may process a
                                                                        request, in order to protect your
                                                                        privacy, we will ask for you to confirm
                                                                        a few pieces of information that we have
                                                                        on our records about you, for example:
                                                                    </p>
                                                                    <ul>
                                                                        <li>Your address</li>
                                                                        <li>Your zip code</li>
                                                                        <li>Your most recent purchase</li>
                                                                        <li>Your email address</li>
                                                                    </ul>
                                                                    <p>If you make a request online to delete
                                                                        your personal information, we may need
                                                                        to confirm your request before we delete
                                                                        your information.</p>
                                                                    <p>You may make a verifiable consumer
                                                                        request up to two times within a
                                                                        12-month period, without charge.
                                                                        Unfortunately, we cannot respond to your
                                                                        request or provide you with personal
                                                                        information if we cannot verify your
                                                                        identity or authority to make the
                                                                        request and confirm that the personal
                                                                        information relates to you. Making a
                                                                        verifiable consumer request does not
                                                                        require you to create an account with
                                                                        us. We will only use personal
                                                                        information provided in a verifiable
                                                                        consumer request to verify the
                                                                        requestor's identity or authority to
                                                                        make the request.</p>
                                                                    <p>We try to respond to a verifiable
                                                                        consumer request within 45 days of its
                                                                        receipt. If we require more time, we
                                                                        will inform you of the reason and
                                                                        extension time period (up to 90 days).
                                                                        If you have an account with us, we will
                                                                        deliver our response to that account. If
                                                                        you do not have an account with us, we
                                                                        will deliver our response by mail or
                                                                        electronically, at your option. Any
                                                                        disclosures we provide will only cover
                                                                        the 12-month period preceding receipt.
                                                                        The response we provide will also
                                                                        explain any reasons we cannot comply
                                                                        with a request, if applicable.</p>
                                                                    <p>If you wish to opt out of the sale of
                                                                        personal information, please use the
                                                                        following link: <a
                                                                            title="Do Not Sell My Personal Information"
                                                                            href="https://privacyportal.onetrust.com/webform/38c50ba5-804a-4d07-993e-d6b2186d16b6/e99ba859-3389-4427-b076-2341164193b5"
                                                                            target="_blank">DO&nbsp;NOT&nbsp;SELL
                                                                            MY PERSONAL&nbsp;INFORMATION</a>.
                                                                        You may authorize another to submit a
                                                                        request to opt out on your behalf, but
                                                                        only if you provide the authorized agent
                                                                        with signed, written permission to do
                                                                        so. So as to ensure your privacy, we
                                                                        reserve the right to deny a request from
                                                                        an authorized agent who does not submit
                                                                        proof that they have been authorized to
                                                                        act on your behalf. If exercised, the
                                                                        decision to opt out will be valid for 12
                                                                        months, at which time we may request
                                                                        that you authorize the sale of personal
                                                                        information again.</p>
                                                                    <p>We will not discriminate against you for
                                                                        exercising any of your CCPA rights.</p>
                                                                </div>
                                                            </div>
                                                            <div class="c-cta-link" style="margin-bottom: 5px;">
                                                                <a title="Back to Top" href="#top">Top
                                                                    <strong>&circ;</strong></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End content-asset -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
                                    </script>


                                    <script src="https://edqprofservus.blob.core.windows.net/assets/edq-v1.1.1.js"
                                        integrity="sha512-L23hwvucqXSQX9r/bCvFq92VmCXUJqPfpvjwlP0AxFUtLR304o1U1RcGrgfiv0S83bt7s+T+0m82JFEIyPAH3g=="
                                        crossorigin="anonymous"></script>


                                    <link rel="stylesheet" type="text/css"
                                        href="https://edqprofservus.blob.core.windows.net/assets/1.6.3/global-intuitive-unicorn.css" />


                                    <link rel="stylesheet" type="text/css"
                                        href="https://edqprofservus.blob.core.windows.net/assets/1.6.3/pro-web.css" />




                                    <script type="text/javascript">
                                        edqSetPhoneValidationConfiguration();
                                    </script>


                                    <script
                                        src="https://edqprofservus.blob.core.windows.net/assets/v1.6.3/phone-unicorn.js"
                                        integrity="sha512-bc9l1EIExsh53R9AetplOnz6+B8YI8BJUr15C0TD8VnUI0BSpTu404Xcmc/fUB6JO/WPTsNadXad+qkRvWPYrg=="
                                        crossorigin="anonymous"></script>


                                    </iselseif>


                                    <script type="text/javascript">
                                        edqSetEmailValidationConfiguration();
                                    </script>


                                    <script
                                        src="https://edqprofservus.blob.core.windows.net/assets/v1.6.3/email-unicorn.js"
                                        integrity="sha512-cqOaq8x2ZH5Fywf4M5C7DYzBtlPCRZZ/AyFzlQqseyumNeX9MYaVKP3TYWoaxMfDUgeiNf3778mWbbp0TLaeNA=="
                                        crossorigin="anonymous"></script>


                                    </iselseif>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 track-order-col">
                <div class="card">
                    <form action="https://www.johnnyseeds.com/on/demandware.store/Sites-JSS-Site/en_US/Order-Track"
                        class="trackorder" method="POST" name="trackorder-form">
                        <h2 class="card-header card-header-custom track-order-header brand-h4 m-0">Order Status
                        </h2>
                        <div class="card-body">
                            <span class="required-field-meaning">An asterisk (*) indicates a required
                                field</span>


                            <div class="form-group required">
                                <label class="form-control-label" for="trackorder-form-number">
                                    <span class="required" aria-label="Required field">*</span>
                                    Order Number
                                    <span class="info-icon">
                                        <span class="icon">i</span>
                                        <span class="tooltip">
                                            Your order number can be found in your email order confirmation or
                                            in the My Account section under order history.
                                        </span>
                                    </span>
                                </label>
                                <input type="text" required class="form-control" aria-describedby="form-number-error"
                                    id="trackorder-form-number" name="trackOrderNumber" /
                                    data-missing-error="This field is required.">
                                <div class="invalid-feedback" id="form-number-error"></div>
                            </div>

                            <div class="form-group required">
                                <label class="form-control-label" for="trackorder-form-email">
                                    <span class="required" aria-label="Required field">*</span>
                                    Order Email
                                </label>
                                <input type="text" required class="form-control" id="trackorder-form-email"
                                    aria-describedby="form-email-error" name="trackOrderEmail"
                                    pattern="^[\w.%+-]+@[\w.-]+\.[\w]{2,6}$" maxlength="50" /
                                    data-pattern-mismatch="Please enter a valid email address."
                                    data-missing-error="This field is required.">
                                <div class="invalid-feedback" id="form-email-error"></div>
                            </div>
                            <!-- Billing Zip Code -->
                            <div class="form-group required">
                                <label class="form-control-label" for="trackorder-form-zip">
                                    <span class="required" aria-label="Required field">*</span>
                                    Billing ZIP code
                                </label>
                                <input type="text" required class="form-control" id="trackorder-form-zip"
                                    aria-describedby="form-zipcode-error" name="trackOrderPostal"
                                    pattern="(^\d{5}(-\d{4})?$)|(^[abceghjklmnprstvxyABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Za-z]{1} *\d{1}[A-Za-z]{1}\d{1}$)"
                                    data-missing-error="This field is required."
                                    data-pattern-mismatch="Please enter a valid zip code.">
                                <div class="invalid-feedback" id="form-zipcode-error"></div>
                            </div>


                            <input type="hidden" name="csrf_token"
                                value="RJELk4dqqkWlznDIl6nqr43GuJTXQ1j4X7OxdbfyoQgDn-rRfA3MJk7sUjiR_U2M3CE8mW9vZqAv5Ww_KxtbT6zhbQFSYVket3Jv8j3cGrhUDpe8Lc6sFeq5CnY9UNNB9ANdJE4VQFCqAXtW1RyS3bhY1AKKHVWTHek2HVllu1O871c1onc=" />

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="submit" value="submit">
                                    Check status
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection