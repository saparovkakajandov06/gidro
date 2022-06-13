

@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.mows') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('uytgetwel',['welayat_id'=>$welayat->id])}}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.date') }}</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="ady"  value="{{$welayat->ady}}">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.time') }}</label>
                            <input type="time" class="form-control" id="exampleInputEmail1" name="wagt"  value="{{$welayat->wagt}}">

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

{{--<form action=" {{route('uytgetwel',['welayat_id'=>$welayat->id])}}  " method="post">--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="text" placeholder="welayatyn adyny uytget" name="ady" value="{{$welayat->ady}}">--}}
{{--    <button> uytget </button>--}}
{{--</form>--}}
