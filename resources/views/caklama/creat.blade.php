
@include('administrator.admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Çaklama goşmak</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form autocomplete="off" action="{{route('creatcaklama.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body" style="background-color: white;">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Sene</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="sene" placeholder="Sene">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Welaýat</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="welayat" placeholder="welayat">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Surat saýla!</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Ýükle!</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" style="background-color: white;">
                        <button type="submit" class="btn btn-primary">Goş</button>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div>



{{--<form action="{{route('creatcaklama.store')}}" method="post" enctype="multipart/form-data">--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="date" name="sene">--}}
{{--    <input type="file" name="image">--}}

{{--    <select name="welayat_id" >--}}
{{--        <option> </option>--}}
{{--@foreach($welayat as $wel)--}}
{{--    <option  value="{{$wel->id}}"> {{$wel->ady}}  </option>--}}

{{--        @endforeach--}}

{{--    </select>--}}

{{--    <button> Gosh </button>--}}
{{--</form>--}}
