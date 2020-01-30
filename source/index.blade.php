@extends('_layouts.master')

@section('head')
<title>Image CDN Speed Experiments - Shane Jones - Under2</title>
@endsection

@section('content')

<main class="p-4 main">
    <h1 class="text-3xl font-light text-black">Image CDN Speed Experiments</h1>
    <p class="pb-4 my-4 text-gray-600 border-b-2">An experiment by <a href="https://twitter.com/shanejones">Shane Jones</a> from <a href="http://under2.agency/">Under2</a></p>

    <h2 class="text-3xl font-light text-black">Image CDN Test</h2>
    <ul>
        <li><a href="cloudinary/">Cloudinary</a></li>
        <li><a href="sirv/">Sirv</a></li>
    </ul>

</main>

@endsection
