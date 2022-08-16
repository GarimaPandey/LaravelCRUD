@extends('layouts.app')

@section('content')
<div class="background-image grid gird-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
           
        </div>
    </div>
</div>
    @if (Auth::guest())
    <h4 class="text-3xl text-center font-serif text-black-800">
        <b><i> Log in to begin!</i><b>
    </h4>
    @endif
    @if (!Auth::guest())
    <h4 class="text-3xl text-center font-serif text-black-800">
        <b><i> Pen down your thoughts!</i><b>
    </h4>
    @endif
@endsection