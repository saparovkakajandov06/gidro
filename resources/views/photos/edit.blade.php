
@include('administrator.admin')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('lang.photos') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('uytgetphoto',['photo_id'=>$photo->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.photos') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Ady" value="{{$photo->title}}">



                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile"></label>
                            <div class="input-group">
                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" name="image" tabindex="1" id="image">


                                    <label class="custom-file-label" for="exampleInputFile">{{ __('lang.photo_select') }}</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">{{ __('lang.upload') }}</span>
                                </div>
                            </div>
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








