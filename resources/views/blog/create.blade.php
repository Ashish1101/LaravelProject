@extends('layouts.app')

@section('content')

@if ($errors->any())

<div class="w-4/5">
 <ul>
    @foreach ($errors->all() as $error)
        <li class="w-1/5 mb-4 text-red-500">{{$error}}</li>
    @endforeach
 </ul>
</div>

@endif

<div class="flex justify-around items-start mt-20 w-full h-screen bg-gray-100">
     <div class=" bg-blue-800 rounded-sm w-5/12 shadow-lg">
        <h1 class="text-3xl text-center pt-4 text-gray-200">Add Your favorite contacts here!!!</h1>
         <form class="grid gap-4 mx-4 my-4" action="/blog" method="POST" @csrf {{ csrf_field() }}>
             <input name="name" placeholder="enter name" type="text" class="py-2 outline-none" />
             <input name="email" placeholder="enter Email" type="email" class="py-2 outline-none"  />
             <input name="number" placeholder="enter Phone" type="number" class="py-2 outline-none"  />
             <textarea rows="6" class="outline-none" name="description">
             </textarea>
              <!-- <div class="flex justify-around">
                <div>
                <input type="checkbox"  name="personal">
                <span><label for="personal">Personal </label></span>
                </div> 
              </div> -->
             <button type="submit" class="block bg-white h-8 shadow-sm hover:bg-blue-900 hover:text-white">Add Contact</button>
        </form> 
     </div>
</div>

@endsection