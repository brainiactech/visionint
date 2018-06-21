@extends('layouts.app-admin')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">John's Portfolio</span></h3>
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
                            <th>Scheme</th>
                            <th>Starting Class</th>
                            <th>Stage</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($portfolios as $index => $portfolio)
                        <?php
                        $scheme = "";
                        switch ($portfolio->scheme_id):
                            case ($portfolio->scheme_id == App\Schemes::$KEKEANDMOTOCYCLEOWNERSHIPSCHEME):
                                $scheme = "Keke And Motocycle Ownership Scheme";
                                break;
                            case ($portfolio->scheme_id == App\Schemes::$HOUSEOWNERSHIPSCHEME):
                                $scheme = "House Ownership Scheme";
                                break;
                            case ($portfolio->scheme_id == App\Schemes::$FINANCIALEMPOWERMENTSCHEME):
                                $scheme = "Financial Empowerment Scheme";
                                break;
                        endswitch;

                        $startingClass = "";
                        $startingClassId = $portfolio->scheme_id;
                        switch ($startingClassId):
                            case ($startingClassId == \App\StartingClasses::$CLASSIC):
                                $startingClass = "Classic Starting Class";
                                break;
                            case ($startingClassId == \App\StartingClasses::$PREMIUM):
                                $startingClass = "Premium Starting Class";
                                break;
                            case ($startingClassId == \App\StartingClasses::$PLATINUM):
                                $startingClass = "Platinum Staring Class";
                                break;
                        endswitch;
                        
                        $backgroundColor = (($index + 1) % 2) == 0 ? "#FFFFFF" : "#EDF1F5";
                        ?>
                        <tr style="background-color: {{ $backgroundColor }};">
                            <td>{{ $index + 1 }}</td>
                            <td class="txt-oflo"> &nbsp;
                                {{ $scheme }}
                            </td>
                            <td class="">
                                {{ $startingClass }}
                            </td>
                            
                            <td class="">{!! \App\Stages::determineStage($portfolio->stage_id) !!}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
          

        </div>
    </div>
</div>
@endsection