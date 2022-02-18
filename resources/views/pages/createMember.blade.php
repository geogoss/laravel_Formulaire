@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>create member</h1>
        <form action="/store" method="POST">
            @csrf
            <label for="">Name:</label><br>
            <input name="name" type="text"><br>
            <label for="">Age:</label><br>
            <input name="age" type="number"><br>
            <label for="">Gender:</label>
            <select name="genre" id="">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select><br>
            <button type="submit">Send</button>
        </form>
    </section>
@endsection
