@extends('layouts.app')

@section('content')

    <div class="flex px-12 sm:px-24 md:px-40 {{$color}}">
        <div>
            <a href="\">
                <img class="w-14" src="/assets/logo.png"/>
            </a>
        </div>
        <div class="py-4">
            <p class="pl-8 text-white text-xl" href="\">{{$title}}</p>
        </div>
    </div>
    <div class="px-12 sm:px-24 md:px-40">

        <div>
            <p class="text-5xl pb-8">New Exercise</p>
            <label class="text-gray-700 text-xl">Title</label>
            <form>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       type="text" id="title" name="title"><br><br>
            </form>
            <a class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
               href="../../../public/index.php?controller=ExerciceController&method=index">
                Create Field
            </a>
        </div>

    </div>

@endsection
