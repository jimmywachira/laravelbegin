@extends ('layout')
@section('content')

<div class="text-center p-2 m-2">
  
        <h1> customers </h1>
    
        <a href="/customers/create">add new customer</a>
    
        @forelse ($customers as $customer)
    
        <p>
            <strong>
                <a href="/customers/{{$customer->id}}">{{ $customer->name}}</a>
                 </strong> {{ $customer->email }}
        </p>
    
        @empty
            <p> no customers to show </p>
        @endforelse

</div>    
@endsection