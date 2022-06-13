
@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{ route('creatcak.store') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}



                    <div class="card-body" style="background-color: white;">

                        <div class="container" style="margin-top:40px;">
                            <div class="row">
                                <div class="col-12">

                                    <table class="table ">
                                        <thead class="bg-blue-light-4">
                                        <tr>
                                            <th scope="col" style="color: black; font-size: 15px; width: 300px;">{{ __('lang.time') }}</th>
                                            <th scope="col" style="color: black; font-size: 15px; width: 300px;">{{ __('lang.hady') }}</th>
                                            <th scope="col" style="color: black; font-size: 15px; width: 30px;">{{ __('lang.aht') }} (%)</th>
                                            <th scope="col" style="color: black; font-size: 15px; width: 30px;">{{ __('lang.bas') }}</th>
                                            <th scope="col" style="color: black; font-size: 15px; width: 30px;">{{ __('lang.temp') }} (C)</th>
                                            <th scope="col" style="color: black; font-size: 15px; width: 300px;">{{ __('lang.ugur') }}</th>
                                            <th scope="col" style="color: black; font-size: 15px; width: 150px;">{{ __('lang.tiz') }}</th>
                                            <th scope="col" style="color: black; font-size: 15px; width: 30px;">{{ __('lang.cyg') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody style="color: black; font-size: large;" >




                                        <tr>
                                            <th align="center">
                                                <select name="time" class="form-control">

                                                    <option class="form-control" value="05:00"> 05:00  </option>

                                                </select>

                                            <td align="center">
                                                <select name="hyagday_id" class="form-control">
                                                    <option > </option>
                                                    @foreach($howayagday as $howayag)
                                                        <option class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>

                                                    @endforeach

                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="aht" value="-" ></td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="basys" > </td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="temp" > </td>
                                            <td align="center"> <select name="ugur_id" class="form-control">
                                                    <option> </option>

                                                    @foreach($ugur as $ug)
                                                        <option value="{{$ug->id}}"> {{$ug->ady}}  <img
                                                                    style=""
                                                                    src="{{ url('storage/'.$ug->image) }}"> </option>
                                                    @endforeach
                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik" ></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="cyg" > </td>
                                        </tr>

                                        <tr>
                                            <th align="center">
                                                <select name="time_one" class="form-control">

                                                    <option class="form-control" value="08:00"> 08:00  </option>

                                                </select>

                                            <td align="center">
                                                <select name="hyagday_id_one" class="form-control">
                                                    <option > </option>
                                                    @foreach($howayagday as $howayag)
                                                        <option class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>

                                                    @endforeach

                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="aht_one" value="-" ></td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="basys_one" > </td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="temp_one" > </td>
                                            <td align="center"> <select name="ugur_id_one" class="form-control">
                                                    <option> </option>

                                                    @foreach($ugur as $ug)
                                                        <option value="{{$ug->id}}"> {{$ug->ady}}  <img
                                                                    style=""
                                                                    src="{{ url('storage/'.$ug->image) }}"> </option>
                                                    @endforeach
                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik_one" ></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="cyg_one" > </td>
                                        </tr>

                                        <tr>
                                            <th align="center">
                                                <select name="time_two" class="form-control">

                                                    <option class="form-control" value="11:00"> 11:00  </option>

                                                </select>

                                            <td align="center">
                                                <select name="hyagday_id_two" class="form-control">
                                                    <option > </option>
                                                    @foreach($howayagday as $howayag)
                                                        <option class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>

                                                    @endforeach

                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="aht_two" value="-" ></td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="basys_two" > </td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="temp_two" > </td>
                                            <td align="center"> <select name="ugur_id_two" class="form-control">
                                                    <option> </option>

                                                    @foreach($ugur as $ug)
                                                        <option value="{{$ug->id}}"> {{$ug->ady}}  <img
                                                                    style=""
                                                                    src="{{ url('storage/'.$ug->image) }}"> </option>
                                                    @endforeach
                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik_two" ></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="cyg_two" > </td>
                                        </tr>

                                        <tr>
                                            <th align="center">
                                                <select name="time_three" class="form-control">

                                                    <option class="form-control" value="14:00"> 14:00  </option>

                                                </select>

                                            <td align="center">
                                                <select name="hyagday_id_three" class="form-control">
                                                    <option > </option>
                                                    @foreach($howayagday as $howayag)
                                                        <option class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>

                                                    @endforeach

                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="aht_three" value="-" ></td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="basys_three" > </td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="temp_three" > </td>
                                            <td align="center"> <select name="ugur_id_three" class="form-control">
                                                    <option> </option>

                                                    @foreach($ugur as $ug)
                                                        <option value="{{$ug->id}}"> {{$ug->ady}}  <img
                                                                    style=""
                                                                    src="{{ url('storage/'.$ug->image) }}"> </option>
                                                    @endforeach
                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik_three" ></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="cyg_three" > </td>
                                        </tr>

                                        <tr>
                                            <th align="center">
                                                <select name="time_four" class="form-control">

                                                    <option class="form-control" value="17:00"> 17:00  </option>

                                                </select>

                                            <td align="center">
                                                <select name="hyagday_id_four" class="form-control">
                                                    <option > </option>
                                                    @foreach($howayagday as $howayag)
                                                        <option class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>

                                                    @endforeach

                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="aht_four" value="-" ></td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="basys_four" > </td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="temp_four" > </td>
                                            <td align="center"> <select name="ugur_id_four" class="form-control">
                                                    <option> </option>

                                                    @foreach($ugur as $ug)
                                                        <option value="{{$ug->id}}"> {{$ug->ady}}  <img
                                                                    style=""
                                                                    src="{{ url('storage/'.$ug->image) }}"> </option>
                                                    @endforeach
                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik_four" ></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="cyg_four" > </td>
                                        </tr>

                                        <tr>
                                            <th align="center">
                                                <select name="time_five" class="form-control">

                                                    <option class="form-control" value="20:00"> 20:00  </option>

                                                </select>

                                            <td align="center">
                                                <select name="hyagday_id_five" class="form-control">
                                                    <option > </option>
                                                    @foreach($howayagday as $howayag)
                                                        <option class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>

                                                    @endforeach

                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="aht_five" value="-" ></td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="basys_five" > </td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="temp_five" > </td>
                                            <td align="center"> <select name="ugur_id_five" class="form-control">
                                                    <option> </option>

                                                    @foreach($ugur as $ug)
                                                        <option value="{{$ug->id}}"> {{$ug->ady}}  <img
                                                                    style=""
                                                                    src="{{ url('storage/'.$ug->image) }}"> </option>
                                                    @endforeach
                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik_five" ></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="cyg_five" > </td>
                                        </tr>

                                        <tr>
                                            <th align="center">
                                                <select name="time_six" class="form-control">

                                                    <option class="form-control" value="23:00"> 23:00  </option>
                                                </select>

                                            <td align="center">
                                                <select name="hyagday_id_six" class="form-control">
                                                    <option > </option>
                                                    @foreach($howayagday as $howayag)
                                                        <option class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>

                                                    @endforeach

                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="aht_six" value="-" ></td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="basys_six" > </td>
                                            <td align="center"> <input type="text" class="form-control" id="exampleInputEmail1" name="temp_six" > </td>
                                            <td align="center"> <select name="ugur_id_six" class="form-control">
                                                    <option> </option>

                                                    @foreach($ugur as $ug)
                                                        <option value="{{$ug->id}}"> {{$ug->ady}}  <img
                                                                    style=""
                                                                    src="{{ url('storage/'.$ug->image) }}"> </option>
                                                    @endforeach
                                                </select></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik_six" ></td>
                                            <td align="center">  <input type="text" class="form-control" id="exampleInputEmail1" name="cyg_six" > </td>
                                        </tr>








                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">{{ __('lang.date') }}</label>
                                            <input type="date" class="form-control" id="exampleInputEmail1" name="date" >

                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('lang.welayat') }}</label>

                                            <select name="wel_id" class="form-control">
                                                <option > </option>
                                                @foreach($wel as $we)
                                                    <option class="form-control" value="{{$we->id}}"> {{$we->name}}  </option>

                                                @endforeach

                                            </select>

                                        </div>




                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>

                        {{--<div class="container">--}}
                            {{--<div class="row">--}}

                                {{--<div class="col-xl-6 col-lg-6 footer_col">--}}

                                    {{--<div class="form-group " >--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.time') }}</label>--}}
                                        {{--<input type="time" class="form-control" id="exampleInputEmail1" name="time" >--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.hady') }}</label>--}}

                                        {{--<select name="hyagday_id" class="form-control">--}}
                                            {{--<option > </option>--}}
                                            {{--@foreach($howayagday as $howayag)--}}
                                                {{--<option class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>--}}

                                            {{--@endforeach--}}

                                        {{--</select>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group ">--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.aht') }}</label>--}}
                                        {{--<input type="text" class="form-control" id="exampleInputEmail1" name="aht" value="-" >--}}

                                    {{--</div>--}}

                                    {{--<div class="form-group ">--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.bas') }}</label>--}}
                                        {{--<input type="text" class="form-control" id="exampleInputEmail1" name="basys" >--}}
                                    {{--</div>--}}



                                    {{--<div class="form-group " >--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.temp') }}</label>--}}
                                        {{--<input type="text" class="form-control" id="exampleInputEmail1" name="temp" >--}}
                                    {{--</div>--}}










                                {{--</div>--}}




                                {{--<div class="col-xl-6 col-lg-6 footer_col">--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.ugur') }}</label>--}}


                                        {{--<select name="ugur_id" class="form-control">--}}
                                            {{--<option> </option>--}}

                                            {{--@foreach($ugur as $ug)--}}
                                                {{--<option value="{{$ug->id}}"> {{$ug->ady}}  <img--}}
                                                            {{--style=""--}}
                                                            {{--src="{{ url('storage/'.$ug->image) }}"> </option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}
                                    {{--</div>--}}





                                    {{--<div class="form-group ">--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.tiz') }}</label>--}}
                                        {{--<input type="text" class="form-control" id="exampleInputEmail1" name="tizlik" >--}}

                                    {{--</div>--}}

                                    {{--<div class="form-group ">--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.cyg') }}</label>--}}
                                        {{--<input type="text" class="form-control" id="exampleInputEmail1" name="cyg" >--}}
                                    {{--</div>--}}




                                    {{--<div class="form-group ">--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.date') }}</label>--}}
                                        {{--<input type="date" class="form-control" id="exampleInputEmail1" name="date" >--}}

                                    {{--</div>--}}


                                    {{--<div class="form-group">--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.welayat') }}</label>--}}

                                        {{--<select name="wel_id" class="form-control">--}}
                                            {{--<option > </option>--}}
                                            {{--@foreach($wel as $we)--}}
                                                {{--<option class="form-control" value="{{$we->id}}"> {{$we->name}}  </option>--}}

                                            {{--@endforeach--}}

                                        {{--</select>--}}

                                    {{--</div>--}}




                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    </div>



                    <!-- /.card-body -->

                    <div class="card-footer" style="background-color: white;">
                        <button type="submit" class="btn btn-primary">{{ __('lang.create') }}</button>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div>
