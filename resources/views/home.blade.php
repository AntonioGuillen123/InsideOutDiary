@extends('layouts.app')

@section('content')


    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Descripcion</th>
                <th>Emocion</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach ($journals as $journal)
       
                <tr>
                    <td>{{ $journal->created_at}}</td>
                    <td>{{ $journal->entry}}</td>
                    <td><img src="{{ asset($journal->emotion) }}" class="imageEmotion" alt=""></td>
                    
                </tr>
                @endforeach
        </tbody>
    </table>

@endsection