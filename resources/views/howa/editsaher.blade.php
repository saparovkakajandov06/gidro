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
                <form autocomplete="off" action="{{route('uytgetsaher_id',['how_id'=>$how->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">



                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.city') }}</label>

                            <select name="saher_id" class="form-control">
                                <option > </option>
                                @foreach($saher as $sah)
                                    <option {{$sah->id==$how->saher->id?'selected':''}} class="form-control" value="{{$sah->id}}"> {{$sah->name}}  </option>

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



