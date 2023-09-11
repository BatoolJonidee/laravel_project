    {{-- Top --}}
    @extends('include_user.top')

    <!-- header-start -->
    <!------------------------------------------ header-start --------------------------------------------->
    @include('include_user.header')
       <!---------------------------------------- /header-start ---------------------------------------------->
       @section('title','home')

        
        {{-- --------------------------Content------------------------ --}}

        {{-- ------------------------------depatment------------------------ --}}
        
        <div class="Fsection">
            <h1><span>Doc</span>tors</h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                 Repudiandae iure, ducimus molestias modi eligendi <br>
                  dolorem quibusdam iste culpa </h4>
        </div>

        <!-- depertment_area_end  -->

        <div class="cards1">

        <!---------------------  Card 1  --------------------->

        <div class="doctor-card">
            <div class="doctor-card-header">
                Doctors
            </div>
            <div class="doctor-card-body">
                <h2 class="card-title">Doctor Name</h2>
                <img class="card-img2" src="./img/experts/1.png" alt="Sample Image">
                <p class="card-text">This is a larger and stylish card with an image. You can customize it to fit your needs.</p>
            </div>
        </div>
        <!---------------------  /Card 1  --------------------->

        <!---------------------  Card 2  --------------------->
        <div class="doctor-card">
            <div class="doctor-card-header">
                Doctors
            </div>
            <div class="doctor-card-body">
                <h2 class="card-title">Doctor Name</h2>
                <img class="card-img2" src="./img/experts/2.png" alt="Sample Image">
                <p class="card-text">This is a larger and stylish card with an image. You can customize it to fit your needs.</p>
            </div>
        </div>
        <!---------------------  /Card 2  --------------------->

        <!---------------------  Card 3  --------------------->
        <div class="doctor-card">
            <div class="doctor-card-header">
                Doctors
            </div>
            <div class="doctor-card-body">
                <h2 class="card-title">Doctor Name</h2>
                <img class="card-img2" src="./img/experts/3.png" alt="Sample Image">
                <p class="card-text">This is a larger and stylish card with an image. You can customize it to fit your needs.</p>
            </div>
        </div>
        <!---------------------  /Card 3  --------------------->

        </div>

        {{-- ------------------------------depatment------------------------ --}}

        {{-- --------------------------Content------------------------ --}}

  

    
 <!-------------------------------- footer Section ---------------------------------->

 @include('include_user.footer')
 <!-- -----------------------------------Java Script-------------------------------- -->

   <!-- --------------------------------font-awesome--------------------------------- -->

     @extends('include_user.js')
    