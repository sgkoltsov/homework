@extends('layout.master')

@section('content')

    <h3 class="pb-4 mb-0 fst-italic border-bottom">
        Список обращений
    </h3>      

        <table class="table">
            <thead>                
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Message</th>
                    <th scope="col">Create at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedbacks as $key => $feedback) 
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ $feedback->body }}</td>
                        <td>{{  $feedback->created_at->toFormattedDateString() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>   
    
@endsection

