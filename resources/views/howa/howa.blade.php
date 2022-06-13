


@include('administrator.admin')


<br> <br> <br>


        <div align="center" style="margin-top: 50px; "> {{ __('lang.weather') }}<h4 style="font-size: large;"> </h4>  </div>
        <hr>

        <div align="center"> <a href=" {{route('creathowa')}}  "> <button class="btn btn-primary"> +{{ __('lang.create') }}</button>  </a> </div>
        <br> <br> <br>

        <div align="center">
            <div class="col-md-9">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                        <tr align="center">
                            <th style="width: 10px;">№ </th>
                            <th style="width: 300px;"> {{ __('lang.temp') }} (C)</th>
                            <th style="width: 300px;">{{ __('lang.bas') }} (mm.pt.st)</th>
                            <th style="width: 100px;"> {{ __('lang.cyg') }} (%) </th>
                            <th style="width: 100px;"> {{ __('lang.tiz') }} (m/s) </th>
                            <th style="width: 300px;"> {{ __('lang.city') }} </th>
                            <th style="width: 300px;">{{ __('lang.hady') }} </th>
                            <th style="width: 100px;"> {{ __('lang.ugur') }} </th>
                            <th style="width: 100px;"> {{ __('lang.edit') }} </th>
                            <th style="width: 100px;"> {{ __('lang.delete') }} </th>
                        </tr>

                        </thead>


                        <tbody>

                        @php $i=1 @endphp

                        @foreach($how as $how)


                            <tr align="center">

                                <td style="width: 10px;"> {{$i++}}  </td>
                                <td style="width: 300px;">  {{$how->temp}} <a href="{{route('edittemp',['how_id'=>$how->id])}}">  <img src="{{asset('icon/1.png')}}" style="width: 20px;height: 20px;"> </a> </td>

                                <td style="width: 300px;"> {{$how->basys}} <a href="{{route('editbasys',['how_id'=>$how->id])}}"> <img src="{{asset('icon/1.png')}}" style="width: 20px;height: 20px;">   </a> </td>

                                <td style="width: 300px;"> {{$how->cyg}}  <a href="{{route('editcyg',['how_id'=>$how->id])}}"> <img src="{{asset('icon/1.png')}}" style="width: 20px;height: 20px;">   </a> </td>

                                <td style="width: 300px;"> {{$how->tizlik}}   <a href="{{route('edittizlik',['how_id'=>$how->id])}}"> <img src="{{asset('icon/1.png')}}" style="width: 20px;height: 20px;">   </a></td>

                                <td style="width: 300px;"> {{$how->saher->name}}  <a href="{{route('editsaher_id',['how_id'=>$how->id])}}"> <img src="{{asset('icon/1.png')}}" style="width: 20px;height: 20px;">   </a>  </td>

                                <td style="width: 300px;">  <img
                                        style="width: 40px;height: 40px;"
                                        src="{{ url('storage/'.$how->howayagday->images) }}">  <a href="{{route('edithowayagday_id',['how_id'=>$how->id])}}"> <img src="{{asset('icon/1.png')}}" style="width: 20px;height: 20px;">   </a> </td>

                                <td style="width: 300px;">  <img style="width: 100px;height: 50px;"
                                                                 src="{{ url('storage/'.$how->ugur->image) }}">  <a href="{{route('editugur_id',['how_id'=>$how->id])}}"> <img src="{{asset('icon/1.png')}}" style="width: 20px;height: 20px;">   </a> </td>


                                <td style="width: 100px;"> <a href=" {{route('edithowa',['how_id'=>$how->id])}} "> <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;">   </a>  </td>
                                <td style="width: 100px;"> <a href=" {{route('deletehowa',['how_id'=>$how->id])}} ">  <img src="{{asset('icon/2.png')}}" >   </a>  </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>




















