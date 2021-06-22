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
        <td>Last Name</td>
        <td>address</td>
        <td>Email</td>
        <td>apartment</td>
        <td>sex</td>
        <td>bank_acount_number</td>
        <td>ranks</td>



    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->suraname }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->apartment }}</td>
            <td>{{ $user->sex }}</td>
            <td>{{ $user->bank_acount_number }}</td>


        </tr>
    @endforeach
</table>
</body>
</html>