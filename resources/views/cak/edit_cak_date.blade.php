

@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.date') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('uytget_cak_date',['cak_id'=>$welayat->id])}}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.date') }}</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="date"  value="{{$welayat->ady}}">

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


