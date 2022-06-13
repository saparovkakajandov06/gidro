

@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.city') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('uytgetsaher',['saher_id'=>$saher->id])}}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.city') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"  value="{{$saher->name}}">




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

{{--<form action=" {{route('uytgetsaher',['saher_id'=>$saher->id])}} " method="post">--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="text" name="name" placeholder="saherin ady uyget..." value="{{$saher->name}}">--}}
{{--    <button type="submit"> uyget </button>--}}
{{--</form>--}}
