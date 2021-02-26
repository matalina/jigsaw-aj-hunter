---
title: Books
description: A little bit about the site
---
@extends('_layouts.master')

@section('body')
    <h1>Books</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">This is where you can give a little more information about yourself or site. If you'd like to change the structure of this page, you can find the file at <code>source/about.blade.php</code></p>

    <h2>Release Order</h2>

    <ul>
        <li><a href="books/ss-dragon-hunting">Dragon Hunting</a></li>
    </ul>

    <h2>Chronological Order</h2>

    <ul>
        <li><a href="books/ss-dragon-hunting">Dragon Hunting</a></li>
    </ul>
@endsection
