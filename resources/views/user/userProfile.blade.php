{{-- Top --}}
@extends('include_user.top')


<!------------------------------------------ header-start --------------------------------------------->
@include('include_user.header')
   <!---------------------------------------- /header-start ---------------------------------------------->
   @section('title','Profile')


    {{-- <div class="section__content section__content--p30" > --}}
        {{-- <div class="container-fluid"> --}}
            {{-- <div class="col-lg-12"> --}}
                <!-- USER DATA-->
                {{-- <div class="user-data m-b-30" style="background-color: white;padding:2%;"> --}}
                    {{-- <div class="row justify-content-between mb-3"> --}}
                        {{-- <div class="table-responsive table-data"> --}}
                            <table class="table table-striped"  style="margin-top:10%;tr:nth-child(even) {background-color: #f2f2f2;!important}">
                                <tbody>
                                    {{-- Fname and deit it --}}
                                    <tr id="fname-show">
                                        <td>First Name</td>
                                        <td></td>
                                        <td >{{$user->fname}}</td>
                                        <td><i class="fa-solid fa-pen-to-square" onclick="editfname()"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr id="fname-edit" style="display: none">
                                        <form method="post" action="/fname">
                                            @csrf
                                            <td style="display: none"><input type="text" value="{{$user->id}}" name="id"></td>
                                            <td>First Name</td>
                                            <td><input type="text" value="{{$user->fname}}" name="fname" ></td>
                                            <td><input type="submit" id="fnamebtn" value="Save" style="width:200px;!important"></td>
                                            <td>&nbsp;<input type="button" id="fnamecancel" value="cancel" onclick="canclefname()" style="width:200px;important"></td>
                                        </form>
                                    </tr>

                                    {{-- Lname and edit it --}}
                                    <tr id="lname-show">
                                        <td>Last Name</td>
                                        <td></td>
                                        <td>{{$user->lname}}</td>
                                        <td><i class="fa-solid fa-pen-to-square" onclick="editlname()"></i></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr id="lname-edit" style="display: none">
                                        <form method="post" action="/lname">
                                            @csrf
                                            <td style="display: none"><input type="text" value="{{$user->id}}" name="id"></td>
                                            <td>Last Name</td>
                                            <td><input type="text" value="{{$user->lname}}" name="lname"></td>
                                            <td><input type="submit" id="lnamebtn" value="Save" style="width:200px;!important"></td>
                                            <td><input type="button" id="lnamecancel" value="cancel" onclick="canclelname()" style="width:200px;!important"></td>
                                        </form>
                                    </tr>

                                    {{-- Email and edit it --}}
                                    <tr id="email-show">
                                        <td>Email</td>
                                        <td></td>
                                        <td>{{$user->email}}</td>
                                        <td><i class="fa-solid fa-pen-to-square" onclick="editemail()"></i></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr id="email-edit" style="display: none">
                                        <form method="post" action="/email">
                                            @csrf
                                            <td style="display: none"><input type="text" value="{{$user->id}}" name="id"></td>
                                            <td>Email</td>
                                            <td><input type="text" value="{{$user->email}}" name="email"></td>
                                            <td><input type="submit" id="emailbtn" value="Save" style="width:200px;!important"></td>
                                            <td><input type="button" id="emailcancel" value="cancel" onclick="cancleemail()" style="width:200px;!important"></td>
                                        </form>
                                    </tr>

                                    {{-- Password and edit it --}}
                                    <tr id="password-show">
                                        <td>Password</td>
                                        <td></td>
                                        <td>********</td>
                                        <td><i class="fa-solid fa-pen-to-square" onclick="editpassword()"></i></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr id="password-edit" style="display: none">
                                        <form method="post" action="/password">
                                            @csrf
                                            <td style="display: none"><input type="text" value="{{$user->id}}" name="id"></td>
                                            <td>Password</td>
                                            <td><input type="text" value="{{$user->password}}" name="password"></td>
                                            <td><input type="submit" id="passwordbtn" value="Save" style="width:200px;!important"></td>
                                            <td><input type="button" id="passwordcancel" value="cancel" onclick="canclepassword()" style="width:200px;!important"></td>
                                        </form>
                                    </tr>

                                    {{-- Mobile and edit it --}}
                                    <tr id="mobile-show">
                                        <td>Mobile</td>
                                        <td></td>
                                        <td>0{{$user->phone}}</td>
                                        <td><i class="fa-solid fa-pen-to-square" onclick="editmobile()"></i></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr id="mobile-edit" style="display: none">
                                        <form method="post" action="/mobile">
                                            @csrf
                                            <td style="display: none"><input type="text" value="{{$user->id}}" name="id"></td>
                                            <td>Mobile</td>
                                            <td><input type="text" value="0{{$user->phone}}" name="phone"></td>
                                            <td><input type="submit" id="mobilebtn" value="Save" style="width:200px;!important"></td>
                                            <td><input type="button" id="mobilecancel" value="cancel" onclick="canclemobile()"style="width:200px;!important"></td>
                                        </form>
                                    </tr>

                                    {{-- bdate and edit it --}}
                                    <tr id="bdate-show">
                                        <td>BirthDate</td>
                                        <td></td>
                                        <td>{{$user->bdate}}</td>
                                        <td><i class="fa-solid fa-pen-to-square" onclick="editbdate()"></i></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr id="bdate-edit" style="display: none">
                                        <form method="post" action="/bdate">
                                            @csrf
                                            <td style="display: none"><input type="text" value="{{$user->id}}" name="id"></td>
                                            <td>BirthDate</td>
                                            <td><input type="date" value="{{$user->bdate}}" name="bdate"></td>
                                            <td><input type="submit" id="bdatebtn" value="Save"style="width:200px;!important"></td>
                                            <td><input type="button" id="bdatecancel" value="cancel" onclick="canclebdate()"style="width:200px;!important"></td>
                                        </form>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- END USER DATA-->
                </div>
            </div>

        </div>
    </div>
    <script>
        function editfname(){
            document.getElementById('fname-show').style.display='none';
            document.getElementById('fname-edit').style.display='block';
        }
        function canclefname(){
            document.getElementById('fname-show').style.display='block';
            document.getElementById('fname-edit').style.display='none';
        }
        function editlname(){
            document.getElementById('lname-show').style.display='none';
            document.getElementById('lname-edit').style.display='block';
        }
        function canclelname(){
            document.getElementById('lname-show').style.display='block';
            document.getElementById('lname-edit').style.display='none';
        }
        function editemail(){
            document.getElementById('email-show').style.display='none';
            document.getElementById('email-edit').style.display='block';
        }
        function cancleemail(){
            document.getElementById('email-show').style.display='block';
            document.getElementById('email-edit').style.display='none';
        }
        function editpassword(){
            document.getElementById('password-show').style.display='none';
            document.getElementById('password-edit').style.display='block';
        }
        function canclepassword(){
            document.getElementById('password-show').style.display='block';
            document.getElementById('password-edit').style.display='none';
        }
        function editmobile(){
            document.getElementById('mobile-show').style.display='none';
            document.getElementById('mobile-edit').style.display='block';
        }
        function canclemobile(){
            document.getElementById('mobile-show').style.display='block';
            document.getElementById('mobile-edit').style.display='none';
        }
        function editbdate(){
            document.getElementById('bdate-show').style.display='none';
            document.getElementById('bdate-edit').style.display='block';
        }
        function canclebdate(){
            document.getElementById('bdate-show').style.display='block';
            document.getElementById('bdate-edit').style.display='none';
        }
    </script>

@include('include_user.footer')
    <!-- -----------------------------------Java Script-------------------------------- -->

      <!-- --------------------------------font-awesome--------------------------------- -->

        @extends('include_user.js')
