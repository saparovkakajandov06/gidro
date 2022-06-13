
@include('administrator.admin')





<br> <br> <br>

<div align="center" style="margin-top: 50px; "> <h4 style="font-size: large;">{{ __('lang.welayat') }} </h4>  </div>
<hr>

<div align="center"> <a href=" {{route('creatwel')}} "> <button class="btn btn-primary"> +{{ __('lang.create') }}</button>  </a> </div>

<div align="center">
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr align="center">
                    <th style="width: 10px;">№ </th>
                    <th style="width: 300px;"> {{ __('lang.welayat') }} </th>
                    <th style="width: 100px;"> {{ __('lang.edit') }} </th>
                    <th style="width: 100px;"> {{ __('lang.delete') }} </th>
                </tr>

                </thead>


                <tbody>

                @php $i=1 @endphp
                @foreach($wels as $wel)

                    <tr align="center">

                        <td style="width: 10px;"> {{$i++}}  </td>
                        <td style="width: 300px;"> {{$wel->name}} </td>
                        <td  style="width: 100px;"> <a href="{{route('editwels',['wels_id'=>$wel->id])}} "> <img src="{{asset('icon/1.png')}}" style="width: 30px;height: 30px;">   </a>  </td>
                        <td style="width: 100px;"> <a href=" {{route('deletewels',['wels_id'=>$wel->id])}} ">  <img src="{{asset('icon/2.png')}}" >   </a>  </td>

                    </tr>
                @endforeach
                </tbody>

            </table> </div> </div> </div>