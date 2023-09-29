@extends('layouts.contact')
@section('contact.content')
    <!-- wrapper -->
    <div id="wrapper">

        <!-- parallax -->
        <div class="parallax"
             style="background-image: url({{asset('assets/images/parallax-2.jpg')}}); margin-bottom: 0;">
            <div class="info">
                <h2 data-in-effect="wow fadeIn">MELBOURNE, AUSTRALIA</h2>
            </div>
        </div>
        <!-- /parallax -->

        <div class="container">
            <div class="row">

                <div class="col-md-6">

                    <!-- google map -->
                    <div id="google-map" style="margin-top: 60px;">
                        <div id="google-container" style="height: 700px;"></div>
                        <div id="zoom-in"></div>
                        <div id="zoom-out"></div>
                    </div>
                    <!-- /google map -->

                </div>

                <div class="col-md-6">

                    <h3 style="margin-top: 60px; margin-bottom: 15px;">Get in touch</h3>

                    <p>Together had said given day spirit. Land years upon, created winged all. Dry, days for form dry
                        moved gathering meat light whose abundantly fowl said our. Have green. Cattle. Called i that
                        waters dry one said firmament his after their night. Likeness.</p>

                    <p>A divide rule that second said Two deep. Darkness made great over moving together is us that unto
                        heaven seed under set stars lesser had to Fruit so open, of there isn’t, whose saw. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit, sed dusmod tempor incididunt ut labore et dolore
                        magna aliqua. Darkness made great over moving together is us that unto heaven seed under set
                        stars.</p>

                    <div class="contact-form" style="margin-top: 35px;">
                        <div id="note"></div>
                        <div id="fields">
                            <form id="ajax-contact-form">
                                <p><input type="text" name="name" id="name" placeholder="Name" value=""/></p>
                                <p><input type="email" name="email" id="email" placeholder="Email" value=""/></p>
                                <p><input type="text" name="phone" id="phone" placeholder="Phone" value=""/></p>
                                <p><textarea name="msg" id="msg" placeholder="Message"></textarea></p>
                                <input type="submit" name="submit" id="submit" value="Send message"/>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /wrapper -->
@endsection
