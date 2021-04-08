@extends('layouts.app')

@section('content')
<!-- <div class="flex justify-around items-start mt-20 w-full h-screen bg-gray-100">
     <div class=" bg-blue-800 rounded-sm h-96 shadow-lg w-96">
         <form class="grid gap-4 mx-4 my-4" action="/" method="POST" @csrf>
             <input name="name" placeholder="enter name" type="text" class="py-2 outline-none" />
             <input name="email" placeholder="enter Email" type="email" class="py-2 outline-none"  />
             <input name="phone" placeholder="enter Phone" type="number" class="py-2 outline-none"  />
             <textarea  name="w3review" rows="6" class="outline-none" name="description">
             </textarea>
              <div class="flex justify-around">
                <div>
                <input type="checkbox" id="vehicle1" name="Personal" value="Bike">
                <span><label for="vehicle1">Personal </label></span>
                </div> 
              </div>
             <button type="submit" class="block bg-white h-8 shadow-sm hover:bg-blue-900 hover:text-white">Add Contact</button>
        </form> 
     </div> -->
     
     @if (session()->has('message'))
      
      <div class="w-full mx-auto mt-10">
         <p class="w-1/6 text-gray-50 bg-green-400 rouded-2xl py-4">
         {{session()->get('message')}}
         </p>
      </div>

     @endif

     <div class="items-start">
          <h1 class="text-2xl">{{$posts[0]->user->name}} Contacts </h1>
       <div>
       </div>
       <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                       Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Phone
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">edit</span>
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($posts as $post)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                     {{$post->name}}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                    
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$post->description}}</div>
                                
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{$post->email}}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                               {{$post->number}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="/blog/{{ $post->id }}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                               <form action="/blog/{{$post->id}}"
                               method="POST">
                               @csrf
                               @method('delete')
                               <button type="submit" class="text-red-600">
                                 Delete
                               </button>
                               </form>
                            </td>
                            </tr>

                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
     </div>
<!-- </div> -->
@endsection