<!doctype html>
<html>
<head>
    <title> Blog </title>
    <link rel="stylesheet" href="app.css">
  <script src="app.js"></script>
</head>

<body>

@foreach ($posts as $post)

<article id="post">

<h1>
    <a href="/posts/{{$post->id}}">
    {{$post->title}}
    </a>
</h1>

 <div>
     {{$post->excerpt}}
 </div>


</article>

@endforeach


</body>
</html>
