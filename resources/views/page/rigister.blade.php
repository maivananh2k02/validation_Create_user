@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Đăng kí</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="{{route('page.home')}}">Home</a> / <span>Đăng kí</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <form action="{{route('page.postRigister')}}" method="post" class="beta-form-checkout" >
                @csrf
                <div class="row">
                    <div class="col-sm-3">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    {{$error}}
                                @endforeach
                            </div>
                        @endif
                        @if(Session::has('thanhCong'))
                            <div class="alert alert-success">{{Session::get('thanhCong')}}</div>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <h4>Đăng kí</h4>
                        <div class="space20">&nbsp;</div>


                        <div class="form-block">
                            <label for="your_last_name">Fullname<span style="color: red">(*)</span></label>
                            <input type="text" id="your_last_name" name="name" required>
                        </div>
                        <div class="form-block">
                            <label for="email">Email address<span style="color: red">(*)</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-block">
                            <label for="ipnPassword">Password<span style="color: red">(*)</span></label>
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
                            <label for="phone">Re password<span style="color: red">(*)</span></label>
                            <span><div class="input-group mb-2">
                                <input type="password" id="phone" name="r_password" style="width: 280px"/>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="btnPassword"
                                            style="margin-bottom: 5px;">
                                        <span class="fas fa-eye"></span>
                                    </button>
                                </div>
                            </div></span>
                        </div>
                        <div class="form-block">
                            <label for="phone">Phone<span style="color: red">(*)</span></label>
                            <input type="text" id="phone" name="phone" required>
                        </div>
                        <div class="form-block">
                            <label for="address">Address<span style="color: red">(*)</span></label>
                            <input type="text" id="adress" name="address" required>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->

@endsection
