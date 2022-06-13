

@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    {{ __('lang.bas') }}

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action=" {{route('uytgetbasys',['how_id'=>$how->id])}}  " method="post" enctype="multipart/form-data">


                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.bas') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="basys" placeholder="welaýatyň adyny üytget" value="{{$how->basys}}">






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






{{--<form action=" {{route('uytgetbasys',['how_id'=>$how->id])}} " method="post" >--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="text" placeholder="temp" name="basys" value="{{$how->basys}}">--}}


{{--    <button type="submit"> Uytget  </button>--}}
{{--</form>--}}
