
    <h3>Hello {{ $user->name }}! </h3>

    <p>Please open link bellow for confirmation:</p>
    <a href="http://localhost:8000/verification/{{ $user->id }}">
        Confirmation
    </a>
