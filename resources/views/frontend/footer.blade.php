
<footr>
    <!-- contact -->
    <div class="contact">
        <div class="container border-top border-left border-right">
            <div class="row">
                <div class="col-md-12">
                    <div class="right">
                        <h2>Request for Quotation to Integra-Dahe-Industries Ltd.</h2>

                        @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                        @endif
                    </div>

                    <form class="main_form" action="/contact" method="post", enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="form-control" placeholder="Enter your name" type="text" name="name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Enter your phone number:+880" type="tel" name="phone">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Select Brand" type="text" name="brand" list="exampleList">
                                <datalist id="exampleList">
                                    <option value="ITL">ITL</option>
                                    <option value="Xtech">Xtech</option>
                                </datalist>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Type" type="text" name="type" list="typeList">
                                <datalist id="typeList">
                                    <option value="Cat5">Cat5</option>
                                    <option value="Cat6">Cat6</option>
                                </datalist>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Color" type="text" name="color">
                            </div>
{{--                            <div class="col-md-12 ">--}}
{{--                                <input class="form-control" placeholder="Type" type="text" name="type">--}}
{{--                            </div>--}}
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Enter your inquiry details, size, quantity, materials, etc." name="message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <div class="footer">

        <div class="container">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3>CONTACT US</h3>
                        <span>Address: 506, Uttar para, Shatarkul Road, Shatarkul<br>
                        Phone: 09638-028028<br>
                        Email: info@integra-dahe.com </span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3>ADDITIONAL LINKS</h3>
                        <ul class="lik">
                            <li> <a href="/profile">About us</a></li>
{{--                            <li> <a href="#">Terms and conditions</a></li>--}}
{{--                            <li> <a href="#">Privacy policy</a></li>--}}
{{--                            <li> <a href="#">News</a></li>--}}
                            <li> <a href="/contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3>Brands</h3>
                        <ul class="lik">
                            <li> <a href="https://www.integra-bd.com/"> ITL</a></li>
                            <li> <a href="https://xtechcorporation.com/">Xtech</a></li>
{{--                            <li> <a href="#">Mobile service</a></li>--}}
{{--                            <li> <a href="#">Network solutions</a></li>--}}
{{--                            <li> <a href="#">Technical support</a></li>--}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                       <div class="contact">
                         <h3>About Integra Dahe Industries</h3>
                          <span>Manufacture all Types of Networking Accessories, UTP Cable, Fiber Optical Cable & Accessories etc.</span>
                       </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2020 Integra Dahe Industries Ltd.| All Rights Reserved</p>
        </div>

    </div>
</footr>
