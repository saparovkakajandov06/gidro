


@include('administrator.admin')


<br> <br> <br>

<div align="center" style="margin-top: 50px; "> {{ __('lang.caklama') }}<h4 style="font-size: large;"> </h4>  </div>
<hr>

{{--<div align="center"> <a href=" {{route('creatcak')}}  "> <button class="btn btn-primary"> +{{ __('lang.create') }}</button>  </a> </div>--}}
<br> <br> <br>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('lang.ashgabat') }}
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile',[$ashgabat->wel_id])}}">   @foreach($welayat_one as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile_two',[$ashgabat->wel_id])}}">   @foreach($welayat_two as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                </div>
            </div>

            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('lang.ahal') }}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile',[$ahal->wel_id])}}"> @foreach($welayat_one as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile_two',[$ahal->wel_id])}}"> @foreach($welayat_two as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                </div>
            </div>

            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('lang.mary') }}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile',[$mary->wel_id])}}"> @foreach($welayat_one as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile_two',[$mary->wel_id])}}"> @foreach($welayat_two as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                </div>
            </div>

            <br> <br> <br>

            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('lang.lebap') }}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile',[$lebap->wel_id])}}"> @foreach($welayat_one as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile_two',[$lebap->wel_id])}}"> @foreach($welayat_two as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                </div>
            </div>


            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('lang.dashoguz') }}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile',[$dashoguz->wel_id])}}"> @foreach($welayat_one as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile_two',[$dashoguz->wel_id])}}"> @foreach($welayat_two as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                </div>
            </div>


            <div class="col-md-3 btn btn-sm btn-primary m-4  ">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('lang.balkan') }}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile',[$balkan->wel_id])}}"> @foreach($welayat_one as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                    <a class="dropdown-item" href="{{action('CaksController@caks_detaile_two',[$balkan->wel_id])}}"> @foreach($welayat_two as $wel){{ date('d.m.Y', strtotime($wel->ady)) }}   @endforeach  </a>
                </div>
            </div>


        </div>
    </div>
</div>




{{--<div align="center">--}}
    {{--<div class="col-md-9">--}}
        {{--<div class="table-responsive">--}}
            {{--<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
                {{--<thead>--}}
                {{--<tr align="center">--}}
                    {{--<th style="width: 10px;">№ </th>--}}
                    {{--<th style="width: 50px;">{{ __('lang.time') }} </th>--}}
                    {{--<th style="width: 50px;"> {{ __('lang.aht') }} </th>--}}
                    {{--<th style="width: 50px;"> {{ __('lang.date') }} </th>--}}

                    {{--<th style="width: 50px;"> {{ __('lang.temp') }} (C)</th>--}}
                    {{--<th style="width: 50px;">{{ __('lang.bas') }} (mm.pt.st)</th>--}}
                    {{--<th style="width: 50px;"> {{ __('lang.cyg') }} (%) </th>--}}
                    {{--<th style="width: 50px;"> {{ __('lang.tiz') }} (m/s) </th>--}}
                    {{--<th style="width: 50px;"> {{ __('lang.welayat') }} </th>--}}
                    {{--<th style="width: 50px;">{{ __('lang.hady') }} </th>--}}
                    {{--<th style="width: 50px;"> {{ __('lang.ugur') }} </th>--}}
                    {{--<th style="width: 50px;"> {{ __('lang.edit') }} </th>--}}
                    {{--<th style="width: 50px;"> {{ __('lang.delete') }} </th>--}}
                {{--</tr>--}}

                {{--</thead>--}}


                {{--<tbody>--}}

                {{--@php $i=1 @endphp--}}
                {{--@foreach($cak as $ca)--}}


                    {{--<tr align="center">--}}

                        {{--<td style="width: 10px;"> {{$i++}}  </td>--}}

                        {{--<td style="width: 50px;">  {{$ca->time}}  </td>--}}
                        {{--<td style="width: 50px;"> {{$ca->aht}} </td>--}}
                        {{--<td style="width: 50px;">  {{date('d.m.Y', strtotime($ca->date))}} </td>--}}
                        {{--<td style="width: 50px;">  {{$ca->temp}}  </td>--}}
                        {{--<td style="width: 50px;"> {{$ca->basys}} </td>--}}
                        {{--<td style="width: 50px;"> {{$ca->cyg}}  </td>--}}
                        {{--<td style="width: 50px;"> {{$ca->tizlik}} </td>--}}
                        {{--<td style="width: 50px;">  {{$ca->wel->name}} </td>--}}

                        {{--<td style="width: 50px;"> <img--}}
                                    {{--style="width: 40px;height: 40px;"--}}
                                    {{--src="{{ url('storage/'.$ca->howayagday->images) }}"> </td>--}}

                        {{--<td style="width: 50px;">  <img--}}
                                    {{--style="width: 45px;height: 25px;"--}}
                                    {{--src="{{ url('storage/'.$ca->ugur->image) }}"></td>--}}


                        {{--<td  style="width: 50px;"> <a href=" {{route('editcak',['cak_id'=>$ca->id])}} "> <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;">   </a>  </td>--}}
                        {{--<td style="width: 50px;"> <a href=" {{route('deletecak',['cak_id'=>$ca->id])}} ">  <img src="{{asset('icon/2.png')}}" >   </a>  </td>--}}

                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--</tbody>--}}








            {{--</table> </div> </div> </div>--}}
















