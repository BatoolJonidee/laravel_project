{{-----top-----}}

@extends('include_user.top')
 <!-- header-start -->
    <!------------------------------------------ header-start --------------------------------------------->
    @include('include_user.header')
       <!---------------------------------------- /header-start ---------------------------------------------->
       @section('title','home')

    
    <!-- ---------------------------------Form Section-------------------------------- -->
    <div class="section2">
    <div class="contact-form">
        <h2>Contact Us</h2>
        <hr>
        <form action="#" method="post">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
                <input id="submit" type="submit"value="Submit" placeholder="comment" >
            </div>
        </form>
    </div>
</div>

                </div>
            </div>
        </section>
        <!-- ---------------------------------/contact-------------------------------- -->


    <!-------------------------------- Location Section ---------------------------------->

    <div class="Msection">

    <div id="Map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

     <div class="info">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <hr>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <hr>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>

    </div>
    <!-------------------------------- Location Section ---------------------------------->

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Our Departments
                            </h3>
                            <ul class="links">
                                <li><a href="#">Births</a></li>
                                <li><a href="#">Pulmonary</a></li>
                                <li><a href="#">Cardiology</a></li>
                                <li><a href="#">Neurology</a></li>
                                <li><a href="#">Traumatology</a></li>
                                <li><a href="#">Dental</a></li>
                                <li><a href="#">Nuclear</a></li>
                                <li><a href="#">magnetic</a></li>
                                <li><a href="#">Pregnancy</a></li>
                                <li><a href="#">For disabled</a></li>
                                <li><a href="#">X-ray</a></li>
                                <li><a href="#">Prostheses</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4  col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                We’re Available
                            </h3>
                            <ul class="meting_time">
                                <li class="d-flex justify-content-between "><span>Monday - Friday</span> <span>8.00 - 18.00</span></li>
                                <li class="d-flex justify-content-between "><span>Saturday	</span> <span>8.00 - 18.00</span></li>
                                <li class="d-flex justify-content-between "><span>Sunday</span> <span>8.00 - 13.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
        
    
 <!-------------------------------- footer Section ---------------------------------->

 @include('include_user.footer')
 
 <!-- -----------------------------------Java Script-------------------------------- -->

   <!-- --------------------------------font-awesome--------------------------------- -->

     @extends('include_user.js')