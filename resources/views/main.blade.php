<html>
    @foreach($users as $user)
        <li><a href="{{ route("user.show", $user) }}">
            {{ $user->name }} : {{ $user->getScore() }}
        </a></li>
    @endforeach
</html>
