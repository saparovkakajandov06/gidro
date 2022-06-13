


<footer class="footer" style="font-family: 'Arial '; ">
    <div class="footer_content" style="background-image:url({{ asset('images/footer.jpeg') }}); height: 400px;">

        <div class="container">
            <div class="row">

                <div class="col-md-10 offset-md-1 ">
                    <ul class="d-flex flex-row align-items-center justify-content-start">


                <span style="font-size: large; text-align: center; color: white; font-family: Arial; ">
                        {{ __('lang.main') }}

                </span>

                    </ul>

                </div>


                <div class="footer_info" style="color: white; font-size: large; margin: auto; margin-top: 5%; font-family: Arial;"  >

                    <ul>
                        <li style="display: inline; float: left;"><a href="{{ route('index') }}" style="color: white;">| {{ __('lang.home') }} |</a></li>
                        <li style="display: inline; float: left;"><a href="{{ route('about') }}" style="color: white;">| {{ __('lang.about') }} |</a></li>
                        <li style="display: inline; float: left;"> <a href="{{ route('contact') }}" style="color: white;">| {{ __('lang.contact') }} |</a></li>
                        <!-- Phone -->
                        <li style="margin: auto;" > <h6 align="center" style="color: white;">Developed by "Takyk çeşme" </h6></li>

                    </ul>

                </div>













            </div>
        </div>
    </div>

</footer>
