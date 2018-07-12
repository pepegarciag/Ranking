@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        @foreach ($ranking as $score)
            @include('scores._score')

            @if ($loop->iteration == 3)
                <div class="w-full border border-dashed border-4 border-grey-lighter my-8"></div>
            @endif
        @endforeach
    </div>
@endsection