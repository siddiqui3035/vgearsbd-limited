<x-front-app-layout>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Contact Us</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!--contact map start-->
    <div class="contact_map mt-70">
        <div class="map-area">
            <div id="googleMap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58388.1442038602!2d90.35677368706303!3d23.84493459284641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6c2ab936b87%3A0xcaa915c4069493be!2sECB%20Chattar%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1675706740545!5m2!1sen!2sbd"
                    width="2000" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--contact map end-->

    <!--contact area start-->
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact_message content">
                        <h3>contact us</h3>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                            est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                            formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : Tower 71, House 516/3, Flat E6, ECB Cantonment,
                                Dhaka - 1206, Bangladesh</li>
                            <li><i class="fa fa-phone"></i> <a href="#">info@vgearsbd.com</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:0(1234)567890">(+88) 01714 000000</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact_message form">
                        <h3>Tell us your query</h3>
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <p>
                                <label> Your Name <label class="text-danger">*</label></label>
                                <input name="name" placeholder="Enter your fullname" type="text">
                                <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                            </p>
                            <p>
                                <label> Your Email <label class="text-danger">*</label></label>
                                <input name="email" placeholder="Enter your email" type="email">
                                <p class="text-danger mt-2">{{ $errors->first('email') }}</p>
                            </p>
                            <p>
                                <label> Subject <label class="text-danger">*</label></label>
                                <input name="subject" placeholder="Enter a subject" type="text">
                                <p class="text-danger mt-2">{{ $errors->first('subject') }}</p>
                            </p>
                            <div class="contact_textarea">
                                <label> Your Message <label class="text-danger">*</label></label>
                                <textarea placeholder="Enter your message" name="message" class="form-control2"></textarea>
                                <p class="text-danger mt-2">{{ $errors->first('message') }}</p>
                            </div>
                            <button type="submit"> Send</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--contact area end-->
</x-front-app-layout>
