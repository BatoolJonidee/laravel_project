    {{-- Top --}}
    @extends('include_user.top')


    <!------------------------------------------ header-start --------------------------------------------->
    @include('include_user.header')
       <!---------------------------------------- /header-start ---------------------------------------------->
       @section('title','home')

       <!---------------------------------------- slider_area_start  ---------------------------------------------->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <span>the best medical center</span>
                                <h3>Bringing health<br>
                                    to life for the whole family.</h3>

                                   <!---------------------- Search Box  ---------------------->

                                    <form onsubmit="event.preventDefault();" role="search" class="sea">
                                        <label for="search">Search for stuff</label>
                                        <input id="search" type="search" placeholder="Search..." autofocus required />
                                        <button type="submit" style="color: aliceblue;">Go</button>
                                      </form>
                            </div>
                                  <!---------------------- Search Box  ---------------------->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
           <!---------------------------------------- slider_area_start  ---------------------------------------------->


    <!---------------------------------------------- Secound Section ---------------------------------------------->
    <div id="Asection">
      <div class="welcome_clicnic_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="./img/about/1.webp" alt="about our clinic" height="500px">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h3>Welcome To
                            <span>Modern Clinic.</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni.</p>
                        <ul>
                            <li> <i class="flaticon-verified"></i> Lorem ipsum dolor sit amet </li>
                            <li> <i class="flaticon-verified"></i> Consectetur adipisicing elit, sed do</li>
                            <li> <i class="flaticon-verified"></i> Eiusmod tempor incididunt ut labore </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

        <!---------------------------------------------- /Secound Section ---------------------------------------------->



        <!---------------------------------------------- depertment_area---------------------------------------------->

    <div class="depertment_area">
        <div class="container">
            <div class="row custom_align align-items-end justify-content-between">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Specialties</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="learn_more_btn text-right">
                        <a href="#" class="boxed-btn">Learn more</a>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="depart_ment_tab mb-30"  style="display: flex; flex-wrap: wrap;justify-content: space-around">

                            @foreach ($sp as $item)
                                <div class="sp-div" style="width:30%; text-align: center;border:1px solid gray;border-radius: 10px;">
                                    <a href="{{route('specialty',$item->id)}}" style="cursor: pointer">
                                    <img src="{{ asset('storage/' . $item->photo) }}" alt="User Image" style="width:100%;border-radius: 50%;">
                                    <h3>{{$item->name}}</h3></a>

                                </div>
                            @endforeach

                    </div>
                </div>
            </div>
            <div class="dept_main_info white-bg">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- single_content  -->
                        {{-- <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="./img/department/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="boxed-btn">Make An Appointment</a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="img/department/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="boxed-btn">Make An Appointment</a>
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                <a href="#" class="boxed-btn">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="Astrology" role="tabpanel" aria-labelledby="Astrology-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="img/department/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="boxed-btn">Make An Appointment</a>
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="Neuroanatomy" role="tabpanel" aria-labelledby="Neuroanatomy-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="img/department/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="boxed-btn">Make An Appointment</a>
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="Blood" role="tabpanel" aria-labelledby="Blood-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                <a href="#" class="boxed-btn">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                    </div>
                  </div>
            </div>

        </div>
    </div>
        <!---------------------------------------------- /depertment_area---------------------------------------------->


        <!---------------------------------------------- expert doctors area start---------------------------------------------->

    {{-- <div class="expert_doctors_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title mb-55 text-center">
                        <h3>Our Doctors</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/experts/1.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Jhon Smith</h3>
                            <span>Dentist</span>
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="bi bi-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/experts/2.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Jhon Smith</h3>
                            <span>Dentist</span>
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="bi bi-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/experts/3.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Jhon Smith</h3>
                            <span>Dentist</span>
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="bi bi-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
   <!---------------------------------------------- /expert doctors area end ---------------------------------------------->


    <!-- ---------------------------------Appointment Section start--------------------------------- -->

    <div class="book_apointment_area">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>
                                Book an
                            <span>Appointment</span>
                            </h3>
                            <form action="{{route('reservation.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="sp-select" name="specialty_id">
                                            <option data-display="Please select the Specialty">Please select the Specialty </option>
                                            @foreach ($sp as $item )
                                                <option value={{$item->id}}>{{$item->name}}</option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="sp-select" class="" name="docter_id">
                                            <option data-display="Please select the Specialty">Please select the Specialty </option>
                                            @foreach ($docters as $doc )
                                                <option value={{$doc->id}}>{{$doc->fname}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="hidden" value="{{session()->get('user_id')}}" name="user_id">
                                        <input type="text" value="{{session()->get('name')}}" placeholder="Email Address">
                                    </div>
                                    <div class="col-xl-6">
                                        <input class="datepicker" placeholder="Appointment Date"   name="appointment_date" min="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="col-xl-6">
                                        <select name="time">
                                            <option value="">Select a time</option>
                                            @foreach ($times as $time)
                                                <option value="{{ $time->id }}">{{ $time->time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Make an Appointment</button>
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------Appointment Section end--------------------------------- -->



    <!-- -----------------------------------quality_area start----------------------------------- -->

    <div class="quality_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title mb-55 text-center">
                        <h3>Quality Health</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="fa-solid fa-user-doctor" style="color: #ffffff;"></i>
                        </div>
                        <h3>Health Consultation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="fa-solid fa-brain" style="color: #ffffff;"></i>
                        </div>
                        <h3>Find Health</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>

                        </div>
                        <h3>Search Deoctor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -----------------------------------quality_area end------------------------------------ -->



    <script>

          // Assume you've already fetched your time values and stored them in the times array
    const times = @json($times);

// Function to populate the time picker
function populateTimePicker() {
    const timePicker = document.getElementById('timePicker');

    // Clear existing options
    timePicker.innerHTML = '<option value="">Select a time</option>';

    // Populate options from the times array
    times.forEach((time) => {
        const option = document.createElement('option');
        option.value = time;
        option.textContent = time;
        timePicker.appendChild(option);
    });
}

window.onload = populateTimePicker;
   
    </script>


    <!-------------------------------- footer Section ---------------------------------->

     @include('include_user.footer')
    <!-- -----------------------------------Java Script-------------------------------- -->

      <!-- --------------------------------font-awesome--------------------------------- -->

        @extends('include_user.js')
