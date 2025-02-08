<h1> {{ $heading }}</h1>

@if(count($listings) == 0) 
<p> 'No linsting found'</p>
@endif
@foreach($listings as $lst)
    {{-- <h2>{{$lst['id'];}} </h2>
    <span>{{$lst['title'];}} </span> --}}
    <h2>
        <a href="/single-list/{{$lst['id']}}"> {{$lst['title']}}</a>
        {{-- {{$lst['id'];}} </h2> --}}
        <h4>{{$lst['company']}}</h4>
         <span>{{$lst['tags']}}</span> 

    <p> {{$lst['description'];}} </p>
    <span>{{$lst['email']}}</span> <span>{{$lst['website']}}</span>
    @endforeach