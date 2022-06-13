

@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.cyg') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action=" {{route('uytget_cak_cyg',['cak_id'=>$cak->id])}}  " method="post" enctype="multipart/form-data">


                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.cyg') }}</label>


                            @php $i=1 @endphp
                            @foreach($caklama as $caklama)

                                <input type="text" class="form-control" id="exampleInputEmail1" name="cyg_{{$i++}}"  value="{{$caklama->cyg}}">
                            @endforeach

                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" style="background-color: white;">
                        <button type="submit" class="btn btn-primary">{{ __('lang.update') }} </button>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div>


{{--<form action=" {{route('uytgetcyg',['how_id'=>$how->id])}} " method="post" >--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="text" placeholder="temp" name="cyg" value="{{$how->cyg}}">--}}


{{--    <button type="submit"> Uytget  </button>--}}
{{--</form>--}}
