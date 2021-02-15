<h1>Character list</h1>

<ul>
  @foreach($characters as $character)
    <li>{{ $character->name }}</li>
  @endforeach
</ul>
<form action="{{ route('characters.store') }}" method="POST" id="create-character">
  <input type="text" name="name">
  @csrf
  <input type="submit" value="Add">
</form>
