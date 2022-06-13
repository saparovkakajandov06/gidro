@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.hady') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('uytget_cak_howayagday_two',['cak_id'=>$cak->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">


                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.hady') }}</label>



                            <select name="hyagday_7" class="form-control">
                                <option > </option>
                                @foreach($howayag_gije as $howa)
                                    <option {{$howa->id==$cak_7->howayagday->id?'selected':''}} class="form-control" value="{{$howa->id}}"> {{$howa->ady}}  </option>

                                @endforeach

                            </select>

                            <select name="hyagday_6" class="form-control">
                                <option > </option>
                                @foreach($howayag as $howa)
                                    <option {{$howa->id==$cak_6->howayagday->id?'selected':''}} class="form-control" value="{{$howa->id}}"> {{$howa->ady}}  </option>

                                @endforeach

                            </select>

                            <select name="hyagday_5" class="form-control">
                                <option > </option>
                                @foreach($howayag_gundiz as $howa)
                                    <option {{$howa->id==$cak_5->howayagday->id?'selected':''}} class="form-control" value="{{$howa->id}}"> {{$howa->ady}}  </option>

                                @endforeach

                            </select>

                            <select name="hyagday_4" class="form-control">
                                <option > </option>
                                @foreach($howayag_gundiz as $howa)
                                    <option {{$howa->id==$cak_4->howayagday->id?'selected':''}} class="form-control" value="{{$howa->id}}"> {{$howa->ady}}  </option>

                                @endforeach

                            </select>

                            <select name="hyagday_3" class="form-control">
                                <option > </option>
                                @foreach($howayag_gundiz as $howa)
                                    <option {{$howa->id==$cak_3->howayagday->id?'selected':''}} class="form-control" value="{{$howa->id}}"> {{$howa->ady}}  </option>

                                @endforeach

                            </select>

                            <select name="hyagday_2" class="form-control">
                                <option > </option>
                                @foreach($howayag as $howa)
                                    <option {{$howa->id==$cak_2->howayagday->id?'selected':''}} class="form-control" value="{{$howa->id}}"> {{$howa->ady}}  </option>

                                @endforeach

                            </select>

                            <select name="hyagday_1" class="form-control">
                                <option > </option>
                                @foreach($howayag_gije as $howa)
                                    <option {{$howa->id==$cak_1->howayagday->id?'selected':''}} class="form-control" value="{{$howa->id}}"> {{$howa->ady}}  </option>

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
