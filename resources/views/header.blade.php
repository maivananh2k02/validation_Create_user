<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i>Số nhà 11,ngõ 132 Cầu Diễn,phường Minh Khai</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 0387252044</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li><a href="{{route('page.login')}}">hello,{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
                        <li><a href="{{route('page.logOut')}}">Đăng xuat</a></li>
                    @else
                        <li><a href="{{route('page.login')}}">Đăng nhập</a></li>
                        <li><a href="{{route('page.rigister')}}">Đăng kí</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{route('page.home')}}" id="logo"><img src="shopping/assets/dest/images/logo-cake.png"
                                                                width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..."/>
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                   <a class="btn btn-success" href="{{route('page.cart')}}">cart({{count((array)session('cart'))}})</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span>
                <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{route('page.home')}}">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach($productType as $item)
                                <li><a href="{{route('page.productType',$item->id)}}">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="about.html">Giới thiệu</a></li>
                    <li><a href="contacts.html">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->
