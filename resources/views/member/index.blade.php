@extends('layouts.app')

@section('main-content')

@if($member == null)
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">Sorry Member Not Found</span></h3>
        </div>
    </div>
</div>

@else
<div class="row">
    <div class="col-md-5 col-xs-12">
        <div class="white-box">
            <div class="user-bg"> <img width="100%" alt="user" src="/plugins/images/logo.png">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)"><img src="/plugins/images/prof.png" class="thumb-lg img-circle" alt="img"></a>
                        <h4 class="text-white">{{ $member->full_name }}  </h4>
                        <h1 class="text-white">{{ $member->member_id }}</h1> </div>
                </div>
            </div>
            <div class="user-btm-box">
                <div class="col-md-12 col-sm-12 text-center">
                    <a href="{{ url('/member/portfolio')}}" class="btn btn-default">View Portfolio</a>
                </div><div class="visible-xs"><br/></div>
                


            </div>
        </div>
       
    </div>

    <div class="col-md-7 col-xs-12">
        <div class="white-box">
            <form class="form-horizontal form-material" method="post" action="{{ url('/profile') }}">
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
                    <label class="col-md-12">Full Name</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="{{ $member->full_name }}" name="fullName" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Phone Number</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="{{ $member->phone }}" name="phone" class="form-control form-control-line"> </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-12">Email Address</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="{{ $member->user()->email }}" name="email" class="form-control form-control-line"> </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-12">Location</label>
                    <div class="col-md-12">
                        <textarea type="text" placeholder="" value="{{ $member->location }}" name="address" class="form-control form-control-line">{{ $member->location }}</textarea> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Teller Id</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="{{ $member->teller_id }}" name="tellerId" class="form-control form-control-line"> </div>
                </div>
                 <div class="form-group">
                    <label class="col-md-12">Transaction Id</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="{{ $member->transaction_id }}" name="transactionId" class="form-control form-control-line"> </div>
                </div>
               
              
            </form>
        </div>
    </div>
</div>

<div id="approveMember" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Approve {{ $member->full_name }}</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/admin/approvemember') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $member->id }}"/>
                    <div class="form-group">
                        <label class="col-sm-12">Set Password For {{ $member->full_name }}</label>
                        <div class="col-sm-12">
                            <input type="password" name="password" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group"><br/><br/>
                        <label class="col-sm-12"><br/><br/>Confirm Password For {{ $member->full_name }}</label>
                         <div class="col-sm-12">
                            <input type="password" name="password_confirmation" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <br/>

                            <input type="submit" class="btn btn-warning" value="Submit"/>  
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>



@endif

@endsection