@extends('layouts.app')

@section('content')

<div>
    <div class="md:grid md:grid-cols-2 md:gap-2">
      <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <form action="{{ url('update/'.$post['id']) }}" method="POST">
                    @csrf
                    @method('PUT')

                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Title</h3>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="title" id="title" value={{$post['title']}} autocomplete="title" class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        </div>
                    </div>
                    <br><br>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <div class="form-group col-span-3 sm:col-span-2">
                                <h3 class="text-lg font-medium leading-6 text-gray-900"> Choose a suitable blog image from the link below</h3>
                            </div>
                            <br>
                            <div class="col-span-3 sm:col-span-2">
                                <h15> <u> <a style="color:red" href="https://pixabay.com/" target="_blank" rel="noopener noreferrer">Click Here to choose</a></u></h15>
                            </div>
                            <br>
                            <div class="form-group mt-1 flex rounded-md shadow-sm">
                            <input type="text"class="form-control"  value = {{$post['url']}} name="url" id="url" autocomplete="given-name" placeholder="Enter the image URL here"class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        </div>
                    </div>
                    <br><br>
                    <div  class="form-group">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Description</h3>
                        <div class="mt-8">
                        <textarea id="abodescriptionut" name="description" class="form-control shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Start writing here..">{{$post['description']}}</textarea>
                        </div>
                    </div>
                </div>
                <input type="hidden"class="form-control"  value = {{$post['id']}} name="id" id="id" autocomplete="given-name">

                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" name="action" value="save" class="form-control inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
                </div>
                </div>
            </form>
            </div>
        </div>
  </div>
@endsection