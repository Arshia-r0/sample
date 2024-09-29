<html>
    @foreach($users as $user)
        <li><a href="/user/{{$user->id}}">
            {{ $user->name }} : {{ array_sum($user->scores->map(function ($score) {
                return $score->score;
                })->toArray()) }}
        </a></li>
    @endforeach
</html>
