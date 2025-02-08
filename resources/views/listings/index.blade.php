<x-layout>
    @include(''partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($listings) == 0)
        @foreach($listings as $lst)
        <!-- {{-- <h2>{{$lst['id'];}} </h2>
    <span>{{$lst['title'];}} </span> --}}
    <h2>
        <a href="/single-list/{{$lst['id']}}"> {{$lst['title']}}</a>
        {{-- {{$lst['id'];}}
    </h2> --}}
    <h4>{{$lst['company']}}</h4>
    <span>{{$lst['tags']}}</span>

    <p> {{$lst['description'];}} </p>
    <span>{{$lst['email']}}</span> <span>{{$lst['website']}}</span> -->

        <x-listing-card :listing='$lst' />
        @endforeach

        @else
        <p>No listings found.</p>
        @endunless

    </div>

    @endsection

</x-layout>