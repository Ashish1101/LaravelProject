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
        <h1 class="text-3xl text-center pt-4 text-gray-200">Edit Contact</h1>
         <form class="grid gap-4 mx-4 my-4" action="/blog/{{ $post->id }}" method="POST">
             @csrf {{ csrf_field() }} @method('PUT')
             <input name="name" value={{$post->name}} type="text" class="py-2 outline-none" />
             <input name="email" value={{ $post->email }} type="email" class="py-2 outline-none"  />
             <input name="number" value={{ $post->number }} type="number" class="py-2 outline-none"  />
             <textarea rows="6" class="outline-none" name="description">
             {{$post->description}}</textarea>
              <!-- <div class="flex justify-around">
                <div>
                <input type="checkbox"  name="personal">
                <span><label for="personal">Personal </label></span>
                </div> 
              </div> -->
             <button type="submit" class="block bg-white h-8 shadow-sm hover:bg-blue-900 hover:text-white">Edit Contact</button>
        </form> 
     </div>
</div>

@endsection