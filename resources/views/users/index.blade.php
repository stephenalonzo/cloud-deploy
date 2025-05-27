@foreach ($users as $user)
    <form action="/users/{{ $user->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="avatar" id="">
        <button type="submit">Submit</button>
    </form>
    <p>{{ $user->name }}</p>
    <img src="{{ $user->url }}" alt="">
@endforeach
