@foreach ($users as $user)
    <p>{{ $user->name }}</p>
    <img src="storage/{{ $user->avatar }}" alt="">
@endforeach
