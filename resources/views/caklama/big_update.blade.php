
@include('administrator.admin')
<br>

<br>

<br>
<div class="container">
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
                            <a href="{{route('editwel',['wel_id'=>$wel->id])}}">  <img src="{{asset('icon/1.png')}}" style="width: 20px;height: 20px;"> </a>

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
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.bas') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.temp') }} (C)</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.ugur') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.tiz') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.cyg') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.edit') }}</th>
                    </tr>
                    </thead>
                    <tbody style="color: black; font-size: large;" >



                            @foreach($welayat_caklamalar as $caklamas)
                                <tr>
                                    <th align="center"  >{{ $caklamas->time }} </th>
                                    <td align="center"><img style="width: 40px;height: 40px;" src="{{ url('storage/'.$caklamas->howayagday->images) }}"> </td>
                                    <td align="center">{{ $caklamas->basys }} {{ __('lang.mm') }} </td>
                                    <td align="center">{{ $caklamas->temp }} </td>
                                    <td align="center"><img style="width: 40px;height: 40px;"  src="{{ url('storage/'.$caklamas->ugur->image) }}"> </td>
                                    <td align="center">{{ $caklamas->tizlik }}  {{ __('lang.ms') }}  </td>
                                    <td align="center">{{ $caklamas->cyg }} % </td>
                                    <td align="center"><a href=" {{route('editcak',['cak_id'=>$caklamas->id])}} "> <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;">   </a></td>
                                </tr>
                            @endforeach
                            
                                <tr>
                                    <th align="center"> {{ __('lang.edit') }} </th>
                                    <td align="center"> <a href="{{route('edit_cak_howayagday',['cak_id'=>$caklamas->id])}}">  <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;"> </a></td>
                                    <td align="center"> <a href="{{route('edit_cak_basys',['cak_id'=>$caklamas->id])}}">  <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;"> </a></td>
                                    <td align="center"> <a href="{{route('edit_cak_temp',['cak_id'=>$caklamas->id])}}">  <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;"> </a> </td>
                                    <td align="center"> <a href="{{route('edit_cak_ugur',['cak_id'=>$caklamas->id])}}">  <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;"> </a></td>
                                    <td align="center"> <a href="{{route('edit_cak_tizlik',['cak_id'=>$caklamas->id])}}">  <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;"> </a> </td>
                                    <td align="center"> <a href="{{route('edit_cak_cyg',['cak_id'=>$caklamas->id])}}">  <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;"> </a></td>

                                </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>

