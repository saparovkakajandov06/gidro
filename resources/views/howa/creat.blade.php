
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
                <form autocomplete="off" action="{{route('creathowa.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="card-body" style="background-color: white;">

                        <div class="container">
                            <div class="row">

                        <div class="col-xl-6 col-lg-6 footer_col">

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('lang.city') }}</label>

                                <select name="saher_id" class="form-control">
                                    <option > </option>
                                    @foreach($saher as $sah)
                                        <option class="form-control" value="{{$sah->id}}"> {{$sah->name}}  </option>

                                    @endforeach

                                </select>

                            </div>

                        <div class="form-group " >
                            <label for="exampleInputEmail1">{{ __('lang.temp') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="temp" >

                        </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('lang.hady') }}</label>

                                <select name="hyagday_id" class="form-control">
                                    <option > </option>
                                    @foreach($howayagday as $howayag)
                                        <option class="form-control" value="{{$howayag->id}}"> {{$howayag->ady}}  </option>

                                    @endforeach

                                </select>
                            </div>

                        <div class="form-group ">
                            <label for="exampleInputEmail1">{{ __('lang.bas') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="basys" >
                        </div>




                        </div>




                        <div class="col-xl-6 col-lg-6 footer_col">

                            <div class="form-group ">
                                <label for="exampleInputEmail1">{{ __('lang.cyg') }}</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="cyg" >
                            </div>








                            <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.ugur') }}</label>


                        <select name="ugur_id" class="form-control">
                            <option> </option>

                            @foreach($ugur as $ug)
                                <option value="{{$ug->id}}"> {{$ug->ady}}  <img
                                        style=""
                                        src="{{ url('storage/'.$ug->image) }}"> </option>
                            @endforeach
                        </select>
                        </div>

                            <div class="form-group ">
                                <label for="exampleInputEmail1">{{ __('lang.tiz') }}</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik" >

                            </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.mows') }}</label>


                            <select name="ady_id" class="form-control">
                                <option> </option>

                                @foreach($ady as $ad)
                                    <option value="{{$ad->id}}"> {{date('d.m.Y', strtotime($ad->ady))}}  {{$ad->wagt}}  <img
                                            style=""
                                            src="{{ url('storage/'.$ug->image) }}"> </option>
                                @endforeach
                            </select>
                        </div>

                            </div>
                        </div>

                        </div>
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



{{--<form action="{{route('creathowa.store')}}" method="post" enctype="multipart/form-data">--}}
{{--       {{csrf_field()}}--}}





{{--    <input type="text" placeholder="temp" name="temp">--}}
{{--    <input type="text" placeholder="basys" name="basys">--}}
{{--    <input type="text" placeholder="cyg" name="cyg">--}}
{{--    <input type="text" placeholder="tizlik" name="tizlik">--}}

{{--     <select name="saher_id">--}}
{{--         <option> </option>--}}
{{--          @foreach($saher as $sah)--}}
{{--        <option  value="{{$sah->id}}">{{$sah->name}} </option>--}}
{{--         @endforeach--}}

{{--    </select>--}}

{{--    <select name="hyagday_id">--}}
{{--        <option> </option>--}}
{{-- @foreach($howayagday as $howayag)--}}


{{--        <option value="{{$howayag->id}}"  >     {{$howayag->images}}  </option>--}}
{{--        @endforeach--}}
{{--    </select>--}}

{{--    <select name="ugur_id">--}}
{{--        <option> </option>--}}

{{--        @foreach($ugur as $ug)--}}
{{--        <option value="{{$ug->id}}"> {{$ug->image}}  <img--}}
{{--                style=""--}}
{{--                src="{{ url('storage/'.$ug->image) }}"> </option>--}}
{{--        @endforeach--}}
{{--    </select>--}}









{{--      <button type="submit"> Gosh  </button>--}}
{{--</form>--}}
