<!DOCTPE html>
<html>
<head>
    <title>View lecturer Records</title>
    <link rel="stylesheet" href="{{asset('university.css')}}">
</head>
<body>

<table border = "1">
    <tr>
        <td>name</td>
        <td>Last Name</td>
        <td>address</td>
        <td>Email</td>
        <td>apartment</td>
        <td>sex</td>
        <td>ranks</td>


    </tr>
    @foreach ($data as $row)
        <tr>

            <td>{{ $row->name }}</td>
            <td>{{ $row->suraname }}</td>
            <td>{{ $row->address }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->apartment }}</td>
            <td>{{ $row->sex }}</td>
            <td>{{ $row->name }}</td>


        </tr>
    @endforeach
</table>
</body>
