@extends('layouts.app-admin')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">All Members</span></h3>
            <div class="table-responsive">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $member)
                        @if($member->user() != null)
                        <tr style="background-color: #EDF1F5;">
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->member_id }}</td>
                            <td class="txt-oflo"> &nbsp;{{ $member->full_name }}</td>
                            <td class="">{{ $member->user()->email }}</td>
                            <td class="">{{ $member->phone }}</td>
                            <td>{{ $member->location }}</td>
                            <td><a href="{{ url('/admin/members/'.$member->id)}}" class="btn btn-default"><span class="">View</span></a></td>
                        </tr>
                        @endif
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <ul class="pagination">
             
                {{ $members->links() }}
            </ul>
        </div>
    </div>
</div>
@endsection