@extends('layouts.master')
@section('title') {{ __('lang.contact') }}@endsection
@section('content')

<div class="container"  style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row">

        <div class="col-lg-6 footer_col">
            <div class="footer_links" style="font-size: large; font-family: 'Arial Black';">


                <p style=" color: black;">{{ __('lang.address') }}</p>
                <p style=" color: black;">{{ __('lang.tel') }}</p>
                <p style=" color: black;">{{ __('lang.faks') }}</p>
                <p style=" color: black;">{{ __('lang.mail') }}</p>

            </div>

        </div>
        <div class="col-lg-6">
            <div class="listing">
                <div class="listing_image">
                    <div class="listing_image_container">
                        <img  src="{{ asset('images/gidro.JPG') }}" style="width: 500px;height: 300px;">


                    </div>
                </div>

            </div>

        </div>


        <div class="col-lg-12 footer_col">
            <div class="footer_links" style="font-size: large; font-family: 'Arial Black';">

                <h2 style=" color: black;">{{ __('lang.wel') }}</h2>




                <p style=" color: black;">{{ __('lang.lebap_info') }}</p>
                <p style=" color: black;">{{ __('lang.mary_info') }}</p>
                <p style=" color: black;">{{ __('lang.balkan_info') }}</p>
                <p style=" color: black;">{{ __('lang.dashoguz_info') }}</p>



            </div>

        </div>









    </div>
</div>

@endsection
