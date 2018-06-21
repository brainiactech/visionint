@extends('layouts.app-admin')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">Executives</span></h3>
            <div class="table-responsive">
                @if(session('success'))
                <span style="color: green">{{ session('success') }}</span>
                @endif
                @if(session('error'))
                <span style="color: red">{{ session('error') }}</span>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Activatated Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coordinators as $index => $coordinator)
                        <tr style="background-color: #EDF1F5;">
                            <td>{{ $index + 1 }}</td>
                            <td class="txt-oflo"> &nbsp;
                                {{ $coordinator->name }}
                            </td>
                            <td class="">
                                {{ $coordinator->email }}
                            </td>
                            <td class="">
                                {{ !$coordinator->is_deactivate }}
                            </td>
                            <td>
                                @if(!$coordinator->is_deactivate)
                                <a href="{{ url('/admin/deactivateaccount/'.$coordinator->id) }}" class="btn btn-default">
                                    Deactivate Account
                                </a>
                                @else
                                <a href="{{ url('/admin/activateaccount/'.$coordinator->id) }}" class="btn btn-default">
                                    Activate Account
                                </a>
                                @endif
                            </td>
                         
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
         <ul class="pagination">
             
                {{ $coordinators->links() }}
            </ul>
        </div>
    </div>
</div>
@endsection