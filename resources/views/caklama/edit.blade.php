
@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('uytgetcaklama',['caklama_id'=>$caklama->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">

                        <div class="form-group">
                            <label for="exampleInputEmail1"> {{ __('lang.date') }}</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="sene"  value="{{$caklama->sene}}">


                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('lang.welayat') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="welayat"  value="{{$caklama->welayat}}">


                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" name="image" tabindex="1">
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
                        <button type="submit" class="btn btn-primary">{{ __('lang.update') }}</button>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div>


{{--<form action="{{route('uytgetcaklama',['caklama_id'=>$caklama->id])}}" method="post" enctype="multipart/form-data">--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="date" name="sene" value="{{$caklama->sene}}">--}}
{{--    <input type="file" name="image" id="image" tabindex="1">--}}
{{--    <select name="welayat_id" >--}}
{{--        <option> </option>--}}
{{--        @foreach($welayat as $wel)--}}
{{--            <option {{$wel->id==$caklama->welayat->id?'selected':''}} value="{{$wel->id}}"> {{$wel->ady}} </option>--}}
{{--        @endforeach--}}

{{--    </select>--}}

{{--    <button> Gosh </button>--}}
{{--</form>--}}
