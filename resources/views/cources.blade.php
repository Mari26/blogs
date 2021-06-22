<!DOCTPE html>
<html>
<head>
    <title>View lecturer Records</title>
    <link rel="stylesheet" href="{{asset('university.css')}}">
</head>
<body>

<table border = "1">
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td><button class="style">classes</button></td>

    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>

        </tr>
    @endforeach
</table>

</body>
</html>