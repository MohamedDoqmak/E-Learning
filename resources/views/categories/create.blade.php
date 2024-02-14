@extends('layouts.app')

@section('content')
<div style="padding: 10%">
    <div
        style="max-width: 800px; margin: 50px auto 20px auto; padding: 20px; background-color: #fff; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf

            <!-- Name -->
            @foreach(config('translatable.locales') as $locale)
            <div style="margin-bottom: 10px;">
                <label for="name_{{ $locale }}[title]">name ({{ strtoupper($locale)}})</label>
                <input type="text" name="{{ $locale }}[name]" id="name_{{ $locale }}" value="{{ old($locale.'name') }}"
                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; box-sizing: border-box;"
                    required autofocus />
            </div>
            @endforeach

            <div style="text-align: center;">
                <button type="submit"
                    style="padding: 10px 20px; background-color: #4caf50; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
