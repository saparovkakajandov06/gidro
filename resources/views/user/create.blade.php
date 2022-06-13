
@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.user') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('store_user')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="card-body" style="background-color: white;">

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.user') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" >

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.email') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="email" >

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.password') }}</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" name="password" >

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

{{--<form action="{{route('creatsaher.store')}}" method="post">--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="text" name="name" placeholder="saherin ady giriz...">--}}
{{--    <button type="submit"> Gosh </button>--}}


{{--</form>--}}
