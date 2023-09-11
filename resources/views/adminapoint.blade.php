@extends('blank')
@extends('includes.top')

@section('title', 'Doctors')

<?php use Carbon\Carbon;
?>

@section('main')
    {{-- <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="container border-radius">
                <div id="editdiv" style="background-color: white; text-align: center; padding:1%; display:none">
                    <form method="post" action="{{ route('doctors.update',5) }}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="id-input" name="id">
                        <label class="col-2">First Name:</label>
                        <input class="col-5" id="fname-input" type="text"  name="fname"><br>
                        <label class="col-2">Last Name:</label>
                        <input class="col-5" id="lname-input" type="text" name="lname"><br>
                        <label class="col-2">Description:</label>
                        <textarea class="col-5" name="description" id="desc-input"></textarea><br>
                        <label class="col-2">photo:</label>
                        <input class="col-5" id="photo-input" type="file" name="photo"><br>
                        <label class="col-2">Specialties</label>
                        <select name="specialties_id" id="spec-input">
                        @foreach ($sp as $major)
                        <option value="{{$major->id}}">{{$major->name}}</option>
                        
                            @endforeach
                        <input type="submit" class="btn btn-outline-secondary" value="Save">
                    </form>
                </div>
                <div id="adddiv" style="background-color: white; text-align: center; padding:1%; display:none">
                    <form method="post" action="{{route('doctors.store')}}" enctype="multipart/form-data">
                        @csrf
                       
                        <label class="col-2">First Name:</label>
                        <input class="col-5" id="fname-input" type="text"  name="fname"><br>
                        <label class="col-2">Last Name:</label>
                        <input class="col-5" id="lname-input" type="text" name="lname"><br>
                        <label class="col-2">Description:</label>
                        <textarea class="col-5" name="description" id="desc-input"></textarea><br>
                        <label class="col-2">photo:</label>
                        <input class="col-5" id="photo-input" type="file" name="photo"><br>
                        <label class="col-2">Specialties</label>
                        <select name="specialties_id">
                        @foreach ($sp as $major)
                        <option value="{{$major->id}}">{{$major->name}}</option>
                        
                            @endforeach
                        </select><br><br>
                        <input type="submit" class="btn btn-outline-secondary" value="Add">
                    </form>
                </div>
            </div>
            <hr>
            <div class="col-lg-12">
                <!-- USER DATA-->
                <div class="user-data m-b-30" style="background-color: white;padding:2%">
                    <div class="row justify-content-between mb-3">
                        <div class="col-lg-8">
                            <h3 class="title-3">
                                <i class="zmdi zmdi-account-calendar"></i> Doctors
                            </h3>
                        </div>
                        <div class="col mb-2" >

                            <form method="post">
                                <p style="text-align: left; color: #888">Total number of Doctors: {{$sum}} &nbsp;
                                <input type="button" id="addUser-btn" class="btn btn btn-secondary" value="Add New Doctor" name="adding">
                            </form>
                        </div>

                        <div class="table-responsive table-data">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Picture</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Description</td>
                                        <td>Specialties</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docters as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            
                                            <img src="{{ asset('storage/' . $item->photo) }}" alt="User Image" style="height: 50px">
                                        </td>
                                        <td>{{$item->fname}}</td>
                                        <td>{{$item->lname}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>@foreach($sp as $spec)
                                            @if($spec->id == $item->specialties_id) 
                                                {{$spec->name}}
                                            
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <form method="post" action="{{ route('doctors.edit',$item->id) }}" >
                                                <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro" onclick="editDoc({{$item}})">
                                            </form>
                                        </td>
                                        <td>
                                            <form method="post"action="{{ route('doctors.destroy',$item->id) }}" >
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-outline-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- END USER DATA-->
                </div>
            </div>

        </div>
    </div> --}}
    <div class="container">
        <h1>Manage Appointments</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                    
                        <td>{{ Carbon::parse($appointment->appointment_time)->format('Y-m-d') }}</td>
                        <td>{{ Carbon::parse($appointment->appointment_time)->format('H:i A') }}</td>
                        <td>{{ $appointment->status }}</td>
                        <td>
                            <a href="{{ route('appointments.edit', $appointment->id) }}">Edit</a>
                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link">Cancel</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
