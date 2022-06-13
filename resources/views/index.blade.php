@extends('layouts.master')
@section('title') {{ __('lang.home') }} @endsection
@section('content')
<div class="row" >
    <div class="col">
        <div class="section_title_container text-center">

            <div class="section_title"><h1>{{ __('lang.weather') }}</h1></div>



        </div>
    </div>
</div>

<!-- <div class="row" >
    <div class="col">
        <div class="section_title_container text-center">

            <div class="section_title"><h1>
                 
            @if($ashgabat)
            {{ __('lang.ashgabat') }}
            @endif

            

           
                </h1></div>


        </div>
    </div>
</div> -->



 <div class="row" >
    <div class="col">
        <div class="section_title_container text-center">

            <div class="section_title"><h1>
         
            <!-- {!! date('d.m.Y', strtotime($today)) !!}   -->

            @foreach($welayat as $welayat)
             
            <!-- {!! date('d.m.Y', strtotime($welayat->ady)) !!}   -->
            {!! date('d.m.Y', strtotime($today)) !!}

              {{$welayat->wagt}}
           
              
             @endforeach
           
                </h1></div>


        </div>
    </div>
</div>   



<!-- <div class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-12">

            <table class="table ">
                <thead class="bg-blue-light-4">
                <tr>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.time') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.hady') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.bas') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.temp') }} (C)</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.ugur') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.tiz') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.cyg') }}</th>
                </tr>
                </thead>
                <tbody style="color: black; font-size: large;" >

           

             @foreach($ashgabat as $ashgabat)

                     <tr>
                        <th align="center"  >{{ $ashgabat->time }}</th>
                        <td align="center"><img style="width: 40px;height: 40px;" src="{{ url('storage/'.$ashgabat->howayagday->images) }}"></td>
                        <td align="center">{{ $ashgabat->basys }} {{ __('lang.mm') }}</td>
                        <td align="center">{{ $ashgabat->temp }} </td>
                        <td align="center"><img style="width: 40px;height: 40px;"  src="{{ url('storage/'.$ashgabat->ugur->image) }}"></td>
                        <td align="center">{{ $ashgabat->tizlik }}  {{ __('lang.ms') }}</td>
                        <td align="center">{{ $ashgabat->cyg }} %</td>
                    </tr> 

            @endforeach


                </tbody>
            </table>

        </div>

    </div>
</div> -->



<div class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-12">

            <table class="table ">
                <thead class="bg-blue-light-4">
                <tr>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.city') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.temp') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.hady') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.bas') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.cyg') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.ugur') }}</th>
                    <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.tiz') }}</th>
                </tr>
                </thead>
                <tbody style="color: black; font-size: large;" >
                @foreach($how as $how)
                <tr>
                    <th align="center"  >{{ $how->saher->name }}</th>
                    <td align="center">{{ $how->temp }} C</td>
                    <td align="center"><img  height="40px" src="{{ url('storage/'.$how->howayagday->images) }}"></td>
                    <td align="center">{{$how->basys}} {{ __('lang.mm') }}</td>
                    <td align="center">{{$how->cyg}} %</td>
                    <td align="center"><img height="40px" src="{{ url('storage/'.$how->ugur->image) }}"></td>
                    <td align="center">{{$how->tizlik}}  {{ __('lang.ms') }}</td>

                </tr>
                @endforeach


                </tbody>
            </table>

        </div>

    </div>
</div>





@endsection