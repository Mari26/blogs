<!doctype html>
<html>
<head>
    <title> Blog </title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <script src="{{asset('app.js')}}"></script>
</head>
<body>
<!--
<div>
    <h1>My first blog page</h1>

</div>
-->
<article id="post">
    <h1>{!! $post->title !!}</h1>
    <div>
        {!! $post->body !!}
    </div>


</article>
<section id="link">
<a href="/">Go Back</a>
</section>

</body>
</html>
