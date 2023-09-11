{{-- Top --}}
@extends('include_user.top')


<!------------------------------------------ header-start --------------------------------------------->
@include('include_user.header')
<!---------------------------------------- /header-start ---------------------------------------------->
@section('title', 'Specialty')

<div class="row">
    <div class="col-lg-12">
        <div class="depart_ment_tab mb-30" style="display: flex; flex-wrap: wrap;justify-content: space-around">
            <h1>{{ $sp->name }}</h1>
            @foreach ($doc as $item)
                {{-- <h1>{{ $item->specialties->name }}</h1><br> --}}
                <div class="sp-div" style="width:30%; text-align: center;border:1px solid gray;border-radius: 10px;">
                    <a href="{{route('specialty',$item->id)}}" style="cursor: pointer">
                    <img src="{{ asset('storage/' . $item->photo) }}" alt="User Image"
                        style="width:100%;border-radius: 50%;">
                    <h3>{{ $item->fname }}&nbsp;{{ $item->lname }}</h3></a>
                </div>
            @endforeach
        </div>
    </div>
</div>



@include('include_user.footer')
<!-- -----------------------------------Java Script-------------------------------- -->

<!-- --------------------------------font-awesome--------------------------------- -->

@extends('include_user.js')
