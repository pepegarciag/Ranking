@extends('layouts.app')

@section('content')
  <div class="bg-grey-lighter">
    <div class="container mx-auto p-10 rounded">
      <form action="{{ route('scores.store') }}" method="POST" class="mx-auto max-w-sm">

        {{ csrf_field() }}

        <div class="mb-6">
          <label class="block text-grey-darker text-sm font-bold mb-2" for="game">Game:</label>
          <input class="{{ $errors->has('game') ? 'border-red' : '' }} shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight" type="text" name="game" id="game" placeholder="Pinball" value="{{ old('game') }}">
          @if ($errors->has('game'))
              <p class="text-red py-2 px-8">{{ $errors->first('game') }}</p>
          @endif
        </div>

        <div class="mb-6">
          <label class="block text-grey-darker text-sm font-bold mb-2" for="points">Score:</label>
          <input class="{{ $errors->has('points') ? 'border-red' : '' }} shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight" type="number" name="points" id="points" placeholder="1000" value="{{ old('points') }}" max="99999" min="0">
          @if ($errors->has('points'))
              <p class="text-red py-2 px-8">{{ $errors->first('points') }}</p>
          @endif
        </div>

        <div class="mb-6">
          <label class="block text-grey-darker text-sm font-bold mb-2" for="points">Date:</label>
          <input class="{{ $errors->has('date') ? 'border-red' : '' }} shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight" type="date" name="date" id="date" value="{{ old('date') }}">
          @if ($errors->has('date'))
              <p class="text-red py-2 px-8">{{ $errors->first('date') }}</p>
          @endif
        </div>

        <div class="mb-6 w-full flex items-center justify-center">
          <button class="w-24 mt-8 bg-teal hover:bg-teal-dark text-white font-bold py-2 px-4 rounded" type="submit">
            Add
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection