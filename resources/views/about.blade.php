@extends('layouts.master')
@section('title') {{ __('lang.about') }}  @endsection
@section('content')

    <div class="featured" style="margin-top: -50px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">


                        <div class="row featured_row">

                            <div style="font-size: large; margin-bottom: 100px; margin-top: -100px;">  <h5 style="color: black; font-family: 'Arial Black'">  {{ __('lang.main') }}  </h5> </div>

                            <br>

                            <!-- Featured Item -->
                            <div class="col-md-6 ">

                                        <div  style=" font-size: 17px; color: black; text-align: justify;">
                                            {{ __('lang.about_one') }}
                                        </div>


                            </div>

                            <!-- Featured Item -->
                            <div class="col-lg-6">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="{{ asset('images/4.jpg') }}" >
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container">
                                            <img src="{{ asset('images/6.png') }}" height="500px;">
                                        </div>

                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container" style=" font-size: 17px; color: black; text-align: justify;">
                                            {{ __('lang.about_two') }}

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- Featured Item -->
                            <div class="col-lg-12">
                                <div class="listing">
                                    <div class="listing_image">
                                        <div class="listing_image_container" style=" font-size: 17px; color: black; text-align: justify;">
                                            {{ __('lang.about_three') }}

                                        </div>


                                    </div>

                                </div>
                            </div>



                        </div>







                        <div class="section_title"><h1 style="color: black;">{{ __('lang.photogalery') }}</h1></div>
                    </div>
                </div>
            </div>


            <div class="row featured_row">

           @foreach($photo as $pho)
                <!-- Featured Item -->
                <div class="col-lg-4">
                    <div class="listing">
                        <div class="listing_image">
                            <div class="listing_image_container">

                             <img  src="{{ url('storage/'.$pho->image) }}" style="width: 500px;height: 300px;">

                    <p > <br><h4 align="center"> {{$pho->title}} </h4> </p>
                            </div>


                        </div>

                    </div>
                </div>

               @endforeach </div>




            </div>
    </div>



@endsection

