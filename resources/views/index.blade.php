@extends('layouts.app')

@section('content')
  <div class="background-image grid grid-cols-1 m-auto bg-blue-900 h-96">
     <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
           <h1 class="sm:text-white text-5xl uppercase font-bold pb-14">
               Add You Favourite Contacts Here
           </h1>
           <a 
            href="/blog"
            class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase"
            >
              Read More
           </a>
        </div>
     </div>
  <div>
  <div class="w-full bg-gray-200">
  <div class="sm:grid md:mx-auto md:mt-40 md:flex md:justify-around  sm:grid-cols-2 sm: gap-20 w-4/5 mx-auto sm:py-15 border-b border-gray-200">
      <div>
         <img width="700" src="https://images.pexels.com/photos/1999463/pexels-photo-1999463.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" /> 
     </div>

     <div class="m-auto sm:m-auto text-left w-4/5 block">
          <h2 class="text-3xl font-extrabold text-gray-600">
              Struggling in manage your contacts..
          </h2>
          <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Ipsam eaque eveniet hic sunt ad et, similique quis, 
               doloremque libero mollitia excepturi
               corrupti ex earum. Minus totam nostrum blanditiis asperiores dolor.
          </p>
     </div>
  <div>
</div>
@endsection
