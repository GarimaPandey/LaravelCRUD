@extends('layouts.app')

@section('content')

<div>
    <div class="md:grid md:grid-cols-2 md:gap-2">
      <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <form action="#" method="POST">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Title</h3>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <div class="col-span-3 sm:col-span-2">
                                <h3 class="text-lg font-medium leading-6 text-gray-900"> Choose your Blog Image<h3>
                                <span>  <a style="color:red" href="https://pixabay.com/" target="_blank" rel="noopener noreferrer">Click Here to choose</a></span>
                            </div>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="url" id="url" autocomplete="given-name" placeholder="Enter the image URL here"class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Description</h3>
                        <div class="mt-1">
                        <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Start writing here.."></textarea>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                </div>
                </div>
            </form>
            </div>
        </div>
  </div>
@endsection