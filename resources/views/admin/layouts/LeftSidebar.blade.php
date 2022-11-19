<!-- ========== LeftSidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">

            <a href="{{route('home')}}" class="logo"><img src="{{ asset('dash/assets/images/logo (2).png') }}"
                    width="100" height="45" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">مرحبا بعودتك في لوحه التحكم </li>

                <li>
                    <a href="{{route('home')}}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span> الصفحه الرئسيه </span>
                    </a>
                </li>


                <li>
                    <a href="{{route('setting.index')}}" class="waves-effect">
                        <i class="dripicons-document-edit"></i>
                        <span> الاعدادات الرئسيه </span>
                    </a>
                </li>


                @can('سليدر سليدر')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span> السليدر
                        </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('silder.index')}}">جميع السليدر</a></li>
                        <li><a href="{{route('silder.create')}}">اضافه سليدر جديده</a></li>

                    </ul>
                </li>
                @endcan

                @can('سليدر الفئات')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span> الفئات
                        </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('category.index')}}">جميع الفئات</a></li>
                        <li><a href="{{route('category.create')}}">اضافه فئه جديده</a></li>

                    </ul>
                </li>
                @endcan

                @can('سليدر العناصر')

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-rocket"></i> <span> العناصر
                        </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('subcategory.index')}}">جميع العناصر</a></li>
                        <li><a href="{{route('subcategory.create')}}">اضافه عنصر جديد</a></li>

                    </ul>
                </li>
                @endcan


                @can('سليدر المنتجات')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span>
                            المنتجات </span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('product.index')}}">جميع المنتجات</a></li>
                        <li><a href="{{route('product.create')}}">اضافه منتج جديد</a></li>

                    </ul>
                </li>

                @endcan

                @can('سليدر الخصومات')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span>
                        الخصومات </span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('coupon.index')}}">جميع الخصومات</a></li>
                        <li><a href="{{route('coupon.create')}}">اضافه خصم جديد</a></li>

                    </ul>
                </li>

                @endcan

                @can('سليدر الطلبات')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span>
                            الطلبات </span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('order.index') }}">جميع الطلبات</a></li>

                    </ul>
                </li>
                @endcan


                @can('سليدر المستخدمين والصلاحيات')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span>
                            الصلاحيات </span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('roles.index') }}">جميع الصلاحيات</a></li>

                    </ul>
                </li>
                @endcan


                @can('سليدر المستخدمين والصلاحيات')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span>  
                        المستخدمين </span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                       
                        <li><a href="{{ route('users.index') }}">جميع المستخدمين</a></li>

                    </ul>
                </li>
                @endcan


                @can('تعين الطلبات')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span>  
                        تعين الطلبات </span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                       
                        <li><a href="{{ route('assgin_order') }}">جميع التعينات</a></li>

                    </ul>
                </li>
                @endcan


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span>  
                        لزاهو</span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                       
                        <li><a href="{{ route('link_get') }}">زاهو</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span>  
                        الشحن</span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                       
                        <li><a href="{{ route('link_get') }}">الشحن</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span>  
                        بوابة الدفع</span> <span class="menu-arrow float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                       
                        <li><a href="{{ route('link_get') }}">بوابة الدفع</a></li>

                    </ul>
                </li>


            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->