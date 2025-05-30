@extends('layouts.app')
@section('content')
    <h2>Quiz Game</h2>
    <form id="quiz-form">
        @csrf
        @foreach ($questions as $index => $question)
            <div class="mb-3">
                <p><strong>Q{{ $index + 1 }}:</strong> {{ $question->question }}</p>
                @foreach (['a', 'b', 'c', 'd'] as $opt)
                    <div>
                        <input type="radio" name="q{{ $question->id }}" value="{{ $opt }}">
                        {{ $question['option_' . $opt] }}
                    </div>
                @endforeach
            </div>
        @endforeach
        <input type="hidden" id="timeTaken" name="time_taken" value="0">
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

    <script>
        let timeStart = Date.now();
        document.getElementById('quiz-form').addEventListener('submit', function(e) {
            e.preventDefault();
            let correct = 0;
            let answer = null;
            @foreach ($questions as $question)
                answer = document.querySelector('input[name="q{{ $question->id }}"]:checked');
                if (answer && answer.value === '{{ $question->correct_option }}') correct++;
            @endforeach
            let timeTaken = Math.floor((Date.now() - timeStart) / 1000);
            fetch('/submit-score', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    score: correct,
                    time_taken: timeTaken
                })
            }).then(() => window.location.href = '/leaderboard');
        });
    </script>
@endsection
