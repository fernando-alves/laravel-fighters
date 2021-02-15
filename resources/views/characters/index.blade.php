<h1>Character list</h1>

<ul>
  @foreach($characters as $character)
    <li>{{ $character->name }}</li>
  @endforeach
</ul>