@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.ugur') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('uytget_cak_ugur',['cak_id'=>$cak->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.ugur') }}</label>

                            <select name="ugur_7" class="form-control">
                                <option> </option>

                                @foreach($ugur as $ug)
                                    <option {{$ug->id==$cak_7->ugur->id?'selected':''}} value="{{$ug->id}}"> {{$ug->ady}}  </option>
                                @endforeach
                            </select>

                            <select name="ugur_6" class="form-control">
                                <option> </option>

                                @foreach($ugur as $ug)
                                    <option {{$ug->id==$cak_6->ugur->id?'selected':''}} value="{{$ug->id}}"> {{$ug->ady}}  </option>
                                @endforeach
                            </select>

                            <select name="ugur_5" class="form-control">
                                <option> </option>

                                @foreach($ugur as $ug)
                                    <option {{$ug->id==$cak_5->ugur->id?'selected':''}} value="{{$ug->id}}"> {{$ug->ady}}  </option>
                                @endforeach
                            </select>

                            <select name="ugur_4" class="form-control">
                                <option> </option>

                                @foreach($ugur as $ug)
                                    <option {{$ug->id==$cak_4->ugur->id?'selected':''}} value="{{$ug->id}}"> {{$ug->ady}}  </option>
                                @endforeach
                            </select>

                            <select name="ugur_3" class="form-control">
                                <option> </option>

                                @foreach($ugur as $ug)
                                    <option {{$ug->id==$cak_3->ugur->id?'selected':''}} value="{{$ug->id}}"> {{$ug->ady}}  </option>
                                @endforeach
                            </select>

                            <select name="ugur_2" class="form-control">
                                <option> </option>

                                @foreach($ugur as $ug)
                                    <option {{$ug->id==$cak_2->ugur->id?'selected':''}} value="{{$ug->id}}"> {{$ug->ady}}  </option>
                                @endforeach
                            </select>
                            <select name="ugur_1" class="form-control">
                                <option> </option>

                                @foreach($ugur as $ug)
                                    <option {{$ug->id==$cak_1->ugur->id?'selected':''}} value="{{$ug->id}}"> {{$ug->ady}}  </option>
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
