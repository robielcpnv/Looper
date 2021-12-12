@extends('layouts.app')

@section('content')
    <div class="flex flex-row">
        <table class="table-auto  border-separate p-3 w-9/12">
            <thead>
                <tr class="text-left">
                    <th class="w-1/2">Take</th>
                    @foreach($exercise->fields() as $fields)
                        <th><a href="/exercises/{{$exercise->id}}/results/{{$fields->id}}">{{$fields->label}}</a></th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
            @foreach($answers as $answer)
               <tr class="text-left">
                   <td class="w-1/2">{{$fulfillment[$answer->fulfillment_id]->take}}</td>
                   @foreach($answer->result() as $result)
                       @if(empty($result->answer))
                           <td><i class="fa fa-times"></i></td>
                       @else
                           <td><i class="fa fa-check"></i></td>
                       @endif
                   @endforeach
               </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection

