@props(['header_title'])

<header class="content-header">
    <div class="container">
        <h1>{{$header_title}}</h1>
        {{$slot}}
    </div>
</header>