@extends('layouts.take')


@section('exercises')

    @foreach($exercises as $exercise)
        <div class="grid grid-cols-3 shadow-lg bg-gray-200 bg-opacity-75">
            <div class="col-start-2 text-center py-3">{{$exercise->title}}</div>
            <div class="col-start-2 align-baseline">
                <button class="bg-purple-500 w-full text-white font-bold py-2 px-4 rounded">Button</button>

            </div>
        </div>
    @endforeach

@endsection


