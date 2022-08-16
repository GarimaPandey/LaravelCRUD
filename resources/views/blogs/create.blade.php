@extends('layouts.app')

@section('content')

<div>
    <div class="md:grid px-5 py-10 md:grid-cols-3 md:gap-4">
        <h1 class="text-3xl text-left font-serif text-black-800"><u>Create Post</u></h1>
      <div class="mt-5 md:mt-0 md:col-span-3">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <form action="save" name="newPost" method="POST">
                    @csrf

                <div class="px-8 py-10 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Title</h3>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="title" id="title" placeholder="Enter the Title" autocomplete="title" class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        </div>
                    </div>
                    <br><br>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <div class="form-group col-span-3 sm:col-span-2">
                                <h3 class="text-lg font-medium leading-6 text-gray-900"> Image Link</h3>
                            </div>
                            <br>
                            <div class="col-span-3 sm:col-span-2">
                                <h6> <u> <a style="color:red;font-size:80%;" href="https://pixabay.com/" target="_blank" rel="noopener noreferrer">Click Here to choose</a></u></h6><br>
                                <h4 style="color:red;font-size:80%;">* right click the image, open in a new tab to copy the URL (URL ending with .jpeg)</h4>
                            </div>
                            <br>
                            <div class="form-group mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="url" id="url" autocomplete="given-name" placeholder="Paste the Image URL here"class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        </div>
                    </div>
                    <br><br>
                    <div  class="form-group">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Description</h3>
                        <div class="mt-8">
                        <textarea id="description" name="description"  class="form-control shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Start writing here.."></textarea>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" name="action" value="save" class="form-control inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                </div>
                </div>
            </form>
            </div>
        </div>
  </div>
@endsection