@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">{{$productType4->name}}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('page.home')}}">Home</a> / <span>Sản phẩm</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            @foreach($productType3 as $i)
                                <li><a href="{{route('page.productType',$i->id)}}">{{$i->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">{{count($productType)}} styles found</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($productType as $item)
                                    <div class="col-sm-4">

                                        <div class="single-item">

                                            <div class="ribbon-wrapper">
                                                @if($item->unit_price>$item->promotion_price)
                                                    <div class="ribbon sale">Sale</div>
                                                @endif
                                            </div>
                                            <div class="single-item-header">
                                                <a href="{{route('page.detail',$item->id)}}"><img
                                                        src="shopping/image/product/{{$item->image}}"
                                                        alt="" style="height: 250px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$item->name}}</p>
                                                <p class="single-item-price" style="font-size: 14px">
                                                    @if($item->unit_price>$item->promotion_price)
                                                        <span
                                                            class="flash-del">{{number_format($item->unit_price)}} VND</span>
                                                        <span class="flash-sale">{{number_format($item->promotion_price)}} VND</span>
                                                    @else
                                                        <span class="flash-sale">{{number_format($item->promotion_price)}} VND</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('page.detail',$item->id)}}">Details
                                                    <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->

        <div class="inner-header">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="beta-products-list">
                        <h4>Top Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{count($productType2)}} styles found</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($productType2 as $item)
                                <div class="col-sm-3">

                                    <div class="single-item">

                                        <div class="ribbon-wrapper">
                                            @if($item->unit_price>$item->promotion_price)
                                                <div class="ribbon sale">Sale</div>
                                            @endif
                                        </div>
                                        <div class="single-item-header">
                                            <a href="{{route('page.detail',$item->id)}}"><img
                                                    src="shopping/image/product/{{$item->image}}"
                                                    alt="" style="height: 250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$item->name}}</p>
                                            <p class="single-item-price" style="font-size: 14px">
                                                @if($item->unit_price>$item->promotion_price)
                                                    <span
                                                        class="flash-del">{{number_format($item->unit_price)}} VND</span>
                                                    <span
                                                        class="flash-sale">{{number_format($item->promotion_price)}} VND</span>
                                                @else
                                                    <span
                                                        class="flash-sale">{{number_format($item->promotion_price)}} VND</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{route('page.detail',$item->id)}}">Details <i
                                                    class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">{{$productType2->links()}}</div>
                        <div class="space40">&nbsp;</div>

                    </div> <!-- .beta-products-list -->
                </div>
            </div>
        </div>
    </div> <!-- .container -->
@endsection
