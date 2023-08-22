@extends ('layout')
@section('content')

<div class="text-center p-2 m-2">
    <h1> Customer details</h1>

    <div>
        <a href="/customers">go back </a>
    </div>

    <strong> Name</strong>
    <p>customer->name</p>

    <strong><p>customer->email</p></strong>
</div>
@endsection