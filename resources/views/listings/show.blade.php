<x-layout>
    @include('partials._search')
    <h2>
        {{$listing['id']}}
    </h2>
    <span>{{$listing['title'];}} </span>
    <p> {{$listing['description'];}} </p>

    @endsection

</x-layout>