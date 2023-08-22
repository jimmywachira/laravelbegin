@extends('layout')
@section('content')
<div class="text-center p-2 m-2">
    <h1 > add new customer </h1>

    <form  action="/customers" method="post" class="p-2 m-2">
        @csrf

        <div class="p-2 m-2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" autocomplete="off" value="{{ old('name')}}" >
            @error('name') <p style="color: red">{{$message}}</p> @enderror
        </div>

        <div class="p-2 m-2">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" autocomplete="off" value="{{ old('email')}}">
        @error('email') <p style="color: red">{{$email}}</p> @enderror
        </div>

        <button type="submit"> add new customer </button type="submit">
    </form>
</div>
@endsection