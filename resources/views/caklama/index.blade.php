
@include('administrator.admin')
<br>

<br>

<br>
<div class="container">
    <div class="row" >
        <div class="col">
            <div class="section_title_container text-center">

                @if(count($errors) > 0)

                    <div class="alert alert-danger">
                        Upload validation Error<br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>

                    </div>

                @endif

                <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <table id="example1" class="table  ">
                            <tr>
                                <td width="40%" align="right"><label>Ýüklemek üçin faýly saýla!</label></td>
                                <td width="30%"><input type="file" name="select_file" ></td>
                                <td width="30%" align="left">
                                    <input type="submit" name="upload" class="btn btn-primary" value="Ýükle">
                                </td>
                            </tr>
                            <tr>
                                <td width="40%" align="right"></td>
                                <td width="30%"><span class="text-muted">.xls, .xlsx</span></td>
                                <td width="30%" align="left"></td>
                            </tr>

                        </table>

                    </div>

                </form>




            </div>
        </div>
    </div>



    <div class="container" style="margin-top:40px;">
        <div class="row">
            <div class="col-12">

                <table class="table ">
                    <thead class="bg-blue-light-4">
                    <tr>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.time') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.hady') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.bas') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.temp') }} (C)</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.ugur') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.tiz') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.cyg') }}</th>
                        <th scope="col" style="color: black; font-size: 15px;">{{ __('lang.edit') }}</th>
                    </tr>
                    </thead>
                    <tbody style="color: black; font-size: large;" >
                    @foreach($caklamalar as $caklamas)
                                <tr>
                                    <th align="center"  >{{ $caklamas->time }} </th>
                                    <td align="center"><img style="width: 40px;height: 40px;" src="{{ url('storage/'.$caklamas->howayagday->images) }}"> </td>
                                    <td align="center">{{ $caklamas->basys }} {{ __('lang.mm') }} </td>
                                    <td align="center">{{ $caklamas->temp }}  </td>
                                    <td align="center"><img style="width: 40px;height: 40px;"  src="{{ url('storage/'.$caklamas->ugur->image) }}"> </td>
                                    <td align="center">{{ $caklamas->tizlik }}  {{ __('lang.ms') }}  </td>
                                    <td align="center">{{ $caklamas->cyg }} % </td>
                                    <td align="center"><a href=" {{route('editcak',['cak_id'=>$caklamas->id])}} "> <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;">   </a></td>
                                </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>





</div>
