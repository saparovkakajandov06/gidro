
@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.welayat') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('creatwel.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.welayat') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" >


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