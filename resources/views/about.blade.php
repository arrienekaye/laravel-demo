@extends('layouts.app')

@section('content')
<h3>This is the about page</h3>

@if (5 > 10)
    <p>5 is greater than 10</p>
@elseif (5 == 10)
    <p>5 is lower than 10</p>
@else
    <p>all conditions are wrong</p>
@endif

@unless (empty($name))
    <h2>Name isn't empty</h2>
@endunless

@empty($name)
    <h2>Name is empty</h2>
@endempty

@isset($name)
    <h2>Name has been set</h2>
@endisset

@switch($name)
    @case('Dary')
        <h2>Name is Dary</h2>
        @break
    @case('David')
        <h2>Name is David</h2>
        @break
    @case('Michael')
        <h2>Name is Michael</h2>
        @break
    @default
        <h2>No match found</h2>
@endswitch

@for ($i = 0; $i <= 10; $i++)
    {{ $i }}
@endfor

@foreach ($names as $name_)
    <h2>Name is {{ $name_ }}</h2>
@endforeach

@forelse ($names as $name_)
    <h2>The name is {{ $name_ }}</h2>
@empty
    <h2>There are no names</h2>
@endforelse

{{ $i = 0 }}
@while ($i < 10)
    <h2>{{ $i }}</h2>
    {{ $i++ }}
@endwhile

@endsection
