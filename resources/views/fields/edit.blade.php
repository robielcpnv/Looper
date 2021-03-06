@extends('layouts.app')

@section('content')
    <div class="flex flex-row">
        <div class="flex-1 px-2">
            <h1 class="text-4xl font-semibold pb-4 text-gray-600">Editing Field</h1>
            <form method="post" action="/exercises/{{$exercise->id}}/fields/{{$field->id}}/update">
                <label class="text-xl text-gray-400 font-semibold ">Label</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       type="text" id="label" name="label"
                       value="{{$field->label}}"><br><br>
                <label class="text-xl text-gray-500 font-semibold">Value kind</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="value-kind">

                    @foreach($lines as $line)
                        <option value="{{str_replace(" ","-",$line->kind)}}" {{$line->id == $field->line_id? 'selected' :''}}>{{$line->kind}}</option>
                    @endforeach

                </select>
                <div class="pt-8 content-end">
                    <input class="shadow bg-purple-500 hover:bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                           type="submit" value="UPDATE FIELD">
                </div>
            </form>
        </div>
    </div>

@endsection



