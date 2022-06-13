

@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.tiz') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action=" {{route('uytget_cak_tizlik',['cak_id'=>$cak->id])}}  " method="post" enctype="multipart/form-data">


                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.tiz') }}</label>
                            @php $i=1 @endphp
                            @foreach($caklama as $caklama)

                                <input type="text" class="form-control" id="exampleInputEmail1" name="tizlik_{{$i++}}"  value="{{$caklama->tizlik}}">
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


{{--<form action=" {{route('uytgettizlik',['how_id'=>$how->id])}} " method="post" >--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="text" placeholder="temp" name="tizlik" value="{{$how->tizlik}}">--}}


{{--    <button type="submit"> Uytget  </button>--}}
{{--</form>--}}
