@extends('layouts.app-admin')

@section('main-content')

<div class="row">


    <div class="col-md-8 col-xs-12">
        <div class="white-box">
            <form class="form-horizontal form-material" method="post" action="{{ url('/admin/coordinators') }}">
                @if ($errors)
                @foreach ($errors->all() as $error)
                <span class="help-block" style="color: red;"> {{ $error }}</span>
                @endforeach
                @endif
                @if(session('success'))
                <span style="color: green">{{ session('success') }}</span>
                @endif
                @if(session('error'))
                <span style="color: red">{{ session('error') }}</span>
                @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-12">Name</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="" name="name" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="email" placeholder="" value="" name="email" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input type="password" placeholder="" value="" name="password" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Confirm Password</label>
                    <div class="col-md-12">
                        <input type="password" placeholder="" value="" name="password_confirmation" class="form-control form-control-line"> </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection