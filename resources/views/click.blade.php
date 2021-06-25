<!DOCTPE html>
<html>
<head>
    <title>View Student Records</title>
    <link rel="stylesheet" href="{{asset('click.css')}}">
</head>
<body>
<div>
    <ul>
   <li><a href="{{route('student')}}"> <button type="button" class="button">students </button></a></li>
   <li><a href="{{route('join_table')}}"> <button type="button" class="button">lecturers </button></a> </li>
   <li><a href="{{route('course')}}"> <button type="button" class="button"> courses </button></a> </li>
   <li><a href="{{route('insert')}}"> <button type="button" class="button"> ADD new student </button></a> </li>
   <li><a href="{{route('insert')}}"> <button type="button" class="button"> ADD new lecturer </button></a> </li>
    </ul>
</div>

</body>
</html>
