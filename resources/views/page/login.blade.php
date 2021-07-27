@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Đăng nhập</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="{{route('page.home')}}">Home</a> / <span>Đăng nhập</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <form action="{{route('page.postLogin')}}" method="post" class="beta-form-checkout">
                @csrf

                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <h4>Đăng nhập</h4>
                        <div class="space20">&nbsp;</div>


                        <div class="form-block">
                            <label for="email">Email address<span style="color: red">(*)</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-block">
                            <label for="phone">Password<span style="color: red">(*)</span></label>
                            <span><div class="input-group mb-2">
                                <input type="password" id="phone" name="password" style="width: 280px"/>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="btnPassword"
                                            style="margin-bottom: 5px;">
                                        <span class="fas fa-eye"></span>
                                    </button>
                                </div>
                            </div></span>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection

