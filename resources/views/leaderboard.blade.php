@extends('layouts.app')
@section('content')
    <h2>Leaderboard</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Score</th>
                <th>Time Taken (s)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scores as $score)
                <tr>
                    <td>{{ $score->user->name }}</td>
                    <td>{{ $score->score }}</td>
                    <td>{{ $score->time_taken }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
