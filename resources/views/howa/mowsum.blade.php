

@include('administrator.admin')


<br> <br> <br>

<div align="center" style="margin-top: 50px; "> <h4 style="font-size: large;"> </h4>  </div>
<hr>



<div align="center">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">
                    <th style="width: 10px;">№ </th>
                    <th style="width: 300px;"> {{ __('lang.temp') }} </th>
                    <th style="width: 300px;">{{ __('lang.bas') }} </th>
                    <th style="width: 100px;"> {{ __('lang.cyg') }} </th>
                    <th style="width: 100px;"> {{ __('lang.tiz') }} </th>
                    <th style="width: 300px;"> {{ __('lang.city') }} </th>
                    <th style="width: 300px;">{{ __('lang.hady') }} </th>
                    <th style="width: 100px;"> {{ __('lang.ugur') }} </th>

                </tr>

                </thead>


                <tbody>

                @php $i=1 @endphp
                @foreach($how as $how)

                    @if($how->ady_id == $wel->id)







                    <tr align="center">

                        <td style="width: 10px;"> {{$i++}}  </td>
                        <td style="width: 300px;">  {{$how->temp}}  </td>

                        <td style="width: 300px;"> {{$how->basys}}  </td>

                        <td style="width: 300px;"> {{$how->cyg}}   </td>

                        <td style="width: 300px;"> {{$how->tizlik}}   </td>

                        <td style="width: 300px;"> {{$how->saher->name}}   </td>

                        <td style="width: 300px;">  <img
                                style="width: 100px;height: 90px;"
                                src="{{ url('storage/'.$how->howayagday->images) }}">   </td>

                        <td style="width: 300px;">  <img
                                style="width: 100px;height: 90px;"
                                src="{{ url('storage/'.$how->ugur->image) }}">   </td>


                    </tr>
                    @endif
                @endforeach
                </tbody>








            </table> </div> </div> </div>




