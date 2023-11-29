@extends('layouts.main')

@section('title', 'MySite.com - Home')

@section('content')
    <div id="root"></div>
    <h1>Welcome Back, {{ $user }}. You are {{ $age }} and live in {{ $city }}</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, perspiciatis, necessitatibus magni ad eaque voluptas dolorum, explicabo sed illum repellat fugiat soluta qui sequi? Neque fugit veritatis molestiae rerum voluptate!</p>
    <ul>
        @for ($i = 0; $i < 10; $i++)
            <li>The current value is {{ $i }}</li>
        @endfor
    </ul>
@endsection