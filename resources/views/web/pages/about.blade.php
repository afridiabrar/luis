
@extends('web.layout.app')
@section('content')

 <!-- breadcrumb-area start -->
 <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Page Conttent -->
    <main class="page-content section-pb mt-30">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-sm-12">
                    <div class="contact-infor">
                        <div class="contact-title">
                            <h3>About Us</h3>
                        </div>
                        <div class="contact-dec">
                                <p>
                                    About
                                    Ever needed custom formatted sample / test data, like, bad? Well, that's the idea of this script. It's a free, open source tool written in JavaScript, PHP and MySQL that lets you quickly generate large volumes of custom data in a variety of formats for use in testing software, populating databases, and... so on and so forth.
                                    This site offers an online demo where you're welcome to tinker around to get a sense of what the script does, what features it offers and how it works. Then, once you've whet your appetite, there's a free, fully functional, GNU-licensed version available for download. Alternatively, if you want to avoid the hassle of setting it up on your own server, you can donate $20 or more to get an account on this site, letting you generate up to 5,000 records at a time (instead of the maximum 100), and let you save your data sets. Click on the Donate tab for more information.
                                    Extend it
                                </p>
                            <p>
                                    The out-the-box script contains the sort of functionality you generally need. But nothing's ever complete - maybe you need to generate random esoteric math equations, pull random tweets or display random images from Flickr with the word "Red-backed vole" in the title. Who knows. Everyone's use-case is different.

                                    With this in mind, the new version of the script (3.0.0+) was designed to be fully extensible: developers can write their own Data Types to generate new types of random data, and even customize the Export Types - i.e. the format in which the data is output. For people interested in generating more accurate localized geographical data, they can add new Country plugins that supply region names (states, provinces, territories etc), city names and postal/zip code formats for their country of choice. For more information on all this, visit the</p>


                            </div>

                    </div>
                </div>


            </div>

        </div>
    </main>
    <!--// Page Conttent -->

@endsection
