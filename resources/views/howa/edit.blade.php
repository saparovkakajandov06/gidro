
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
                <form autocomplete="off" action="{{route('uytgethowa',['how_id'=>$how->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.city') }}</label>

                            <select name="saher_id" class="form-control">
                                <option > </option>
                                @foreach($saher as $sah)
                                    <option {{$sah->id==$how->saher->id?'selected':''}} class="form-control" value="{{$sah->id}}"> {{$sah->name}}  </option>
                                @endforeach

                            </select>

                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.temp') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="temp" placeholder="Temperatura" value="{{$how->temp}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.bas') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="basys" placeholder="Basyş" value="{{$how->basys}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.cyg') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="cyg" placeholder="Çyglylyk" value="{{$how->cyg}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.tiz') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik" placeholder="Tizlik" value="{{$how->tizlik}}">
                        </div>




                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.hady') }}</label>

                            <select name="hyagday_id" class="form-control">
                                <option > </option>
                                @foreach($howayagday as $howayag)
                                    <option {{$howayag->id==$how->howayagday->id?'selected':''}} class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>
                                @endforeach
                            </select>

                        </div>



                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.ugur') }}</label>
                            <select name="ugur_id" class="form-control">
                                <option> </option>
                                @foreach($ugur as $ug)
                                    <option {{$ug->id==$how->ugur->id?'selected':''}} value="{{$ug->id}}"> {{$ug->ady}}  <img
                                            style=""
                                            src="{{ url('storage/'.$ug->image) }}"> </option>
                                @endforeach
                            </select>
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







{{--<form action=" {{route('uytgethowa',['how_id'=>$how->id])}} " method="post" enctype="multipart/form-data">--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="text" placeholder="temp" name="temp" value="{{$how->temp}}">--}}
{{--    <input type="text" placeholder="basys" name="basys" value="{{$how->basys}}">--}}
{{--    <input type="text" placeholder="cyg" name="cyg" value="{{$how->cyg}}">--}}
{{--    <input type="text" placeholder="tizlik" name="tizlik" value="{{$how->tizlik}}">--}}
{{--    <select name="saher_id">--}}
{{--        <option> </option>--}}

{{--        @foreach($saher as $sah)--}}

{{--            <option {{$sah->id==$how->saher->id?'selected':''}} class="form-control" value="{{$sah->id}}"> {{$sah->name}} </option>--}}

{{--        @endforeach--}}


{{--    </select>--}}

{{--    <select name="hyagday_id">--}}
{{--        <option> </option>--}}

{{--        @foreach($howayagday as $howayag)--}}
{{--            <option {{$howayag->id==$how->howayagday->id?'selected':''}} class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}} </option>--}}

{{--        @endforeach--}}

{{--    </select>--}}

{{--    <select name="ugur_id">--}}
{{--        @foreach($ugur as $ug)--}}
{{--            <option {{$ug->id==$how->ugur->id?'selected':''}} class="form-control" value="{{$ug->id}}"> {{$ug->ady}}   </option>--}}

{{--        @endforeach--}}


{{--    </select>--}}



{{--    <button type="submit"> Uytget  </button>--}}
{{--</form>--}}
