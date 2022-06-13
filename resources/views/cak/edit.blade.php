
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
                <form autocomplete="off" action="{{route('uytgetcak',['cak_id'=>$cak->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="card-body" style="background-color: white;">

                        <div class="container">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 footer_col">

                                    <div class="form-group " >
                                        <label for="exampleInputEmail1">{{ __('lang.time') }}</label>
                                        <input type="time" class="form-control" id="exampleInputEmail1" name="time" value="{{$cak->time}}" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('lang.hady') }}</label>

                                        <select name="hyagday_id" class="form-control">
                                         
                                            @foreach($howayagday as $howayag)
                                                <option {{$howayag->id==$cak->howayagday->id?'selected':''}} class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group ">
                                        <label for="exampleInputEmail1">{{ __('lang.aht') }}</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="aht" value="{{$cak->aht}}" >

                                    </div>

                                    <div class="form-group ">
                                        <label for="exampleInputEmail1">{{ __('lang.bas') }}</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="basys" value="{{$cak->basys}}">
                                    </div>

                                    <div class="form-group " >
                                        <label for="exampleInputEmail1">{{ __('lang.temp') }}</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="temp" value="{{$cak->temp}}">
                                    </div>








                                </div>




                                <div class="col-xl-6 col-lg-6 footer_col">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('lang.ugur') }}</label>


                                        <select name="ugur_id" class="form-control">
                                            <option> </option>

                                            @foreach($ugur as $ug)
                                                <option {{$ug->id==$cak->ugur->id?'selected':''}} value="{{$ug->id}}"> {{$ug->ady}}  <img
                                                            style=""
                                                            src="{{ url('storage/'.$ug->image) }}"> </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group ">
                                        <label for="exampleInputEmail1">{{ __('lang.tiz') }}</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik" value="{{$cak->tizlik}}">

                                    </div>

                                    <div class="form-group ">
                                        <label for="exampleInputEmail1">{{ __('lang.cyg') }}</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="cyg" value="{{$cak->cyg}}">
                                    </div>





                                    {{--<div class="form-group ">--}}
                                        {{--<label for="exampleInputEmail1">{{ __('lang.date') }}</label>--}}
                                        {{--<input type="date" class="form-control" id="exampleInputEmail1" name="date"  value="{{$cak->date}}">--}}

                                    {{--</div>--}}


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('lang.welayat') }}</label>

                                        <select name="wel_id" class="form-control">
                                            <option > </option>
                                            @foreach($wel as $we)
                                                <option {{$we->id==$cak->wel->id?'selected':''}} class="form-control" value="{{$we->id}}"> {{$we->name}}  </option>

                                            @endforeach

                                        </select>

                                    </div>










                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- /.card-body -->

                    <div class="card-footer" style="background-color: white;">
                        <button type="submit" class="btn btn-primary">{{ __('lang.update') }}</button>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div>
