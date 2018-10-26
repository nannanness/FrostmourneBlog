<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $url }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>{{ $user->name }}</h1>