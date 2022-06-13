@extends('layouts.master')
@section('title') {{ __('lang.home') }} @endsection
@section('content')
    <div class="row" >
        <div class="col">
            <div class="section_title_container text-center">

                <div class="section_title">
                    <h1>
                       @if($caks->wel->id == '1')
                            {{ __('lang.ashgabat') }}
                        @endif
                           @if($caks->wel->id == '2')
                               {{ __('lang.ahal') }}
                           @endif
                           @if($caks->wel->id == '3')
                               {{ __('lang.mary') }}
                           @endif
                           @if($caks->wel->id == '4')
                               {{ __('lang.lebap') }}
                           @endif
                           @if($caks->wel->id == '5')
                               {{ __('lang.dashoguz') }}
                           @endif
                           @if($caks->wel->id == '6')
                               {{ __('lang.balkan') }}
                           @endif
                    </h1>
                </div>


            </div>
        </div>
    </div>

    <div class="row" >
        <div class="col">
            <div class="section_title_container text-center">

                <div class="section_title">
                    <h1>
                        @foreach($welayat_one as $wel)
                            {{ date('d.m.Y', strtotime($wel->ady)) }}

                        @endforeach
                    </h1>
                </div>


            </div>
        </div>
    </div>

    
   

<div class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-12">

            <table class="table ">
                <thead class="bg-blue-light-4">
                <tr>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.time') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.hady') }}</th>
                    {{--<th scope="col" style="color: black; font-size: 15px;">{{ __('lang.aht') }} (%)</th>--}}
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.bas') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.temp') }} (C)</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.ugur') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.tiz') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.cyg') }}</th>
                </tr>
                </thead>
                <tbody style="color: black; font-size: large;" >

                @foreach($welayat_caklamalar as $caklamas)


                    <tr>
                        <th align="center"  >{{ $caklamas->time }}</th>
                        <td align="center"><img style="width: 40px;height: 40px;" src="{{ url('storage/'.$caklamas->howayagday->images) }}"></td>
                        {{--<td align="center">{{ $caklamas->aht }} %</td>--}}
                        <td align="center">{{ $caklamas->basys }} {{ __('lang.mm') }}</td>
                        <td align="center">{{ $caklamas->temp }} </td>
                        <td align="center"><img style="width: 40px;height: 40px;"  src="{{ url('storage/'.$caklamas->ugur->image) }}"></td>
                        <td align="center">{{ $caklamas->tizlik }}  {{ __('lang.ms') }}</td>
                        <td align="center">{{ $caklamas->cyg }} %</td>
                    </tr>


                @endforeach


                </tbody>
            </table>

        </div>

    </div>
</div>


    <div class="row" >
        <div class="col">
            <div class="section_title_container text-center">

                <div class="section_title"><h1>

                        @foreach($welayat_two as $wel)
                            {{ date('d.m.Y', strtotime($wel->ady)) }}


                        @endforeach


                    </h1></div>


            </div>
        </div>
    </div>

    <div class="container" style="margin-top:40px;">
        <div class="row">
            <div class="col-12">

                <table class="table ">
                    <thead class="bg-blue-light-4">
                    <tr>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.time') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.hady') }}</th>
                        {{--<th scope="col" style="color: black; font-size: 15px;">{{ __('lang.aht') }} (%)</th>--}}
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.bas') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.temp') }} (C)</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.ugur') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.tiz') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.cyg') }}</th>
                    </tr>
                    </thead>
                    <tbody style="color: black; font-size: large;" >

                    @foreach($welayat_caklamalar_two as $caklamas)
                                <tr>
                                    <th align="center"  >{{ $caklamas->time }}</th>
                                    <td align="center"><img style="width: 40px;height: 40px;" src="{{ url('storage/'.$caklamas->howayagday->images) }}"></td>
                                    {{--<td align="center">{{ $caklamas->aht }} %</td>--}}
                                    <td align="center">{{ $caklamas->basys }} {{ __('lang.mm') }}</td>
                                    <td align="center">{{ $caklamas->temp }} </td>
                                    <td align="center"><img style="width: 40px;height: 40px;"  src="{{ url('storage/'.$caklamas->ugur->image) }}"></td>
                                    <td align="center"> {{ $caklamas->tizlik }} {{ __('lang.ms') }}</td>
                                    <td align="center">{{ $caklamas->cyg }} % </td>
                                </tr>
                    @endforeach


                    </tbody>
                </table>

            </div>

        </div>
    </div>


@endsection

