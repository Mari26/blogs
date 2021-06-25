<html>
<head>
    <title>Lecturer | Add</title>
    <link rel="stylesheet" href="{{asset('update.css')}}">
</head>

<body>
<form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
            <td>Name</td>
            <td><input type='text' name='lecturer_name' /></td>

        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type='text' name='lecturer_last' /></td>

        </tr>
        <tr>
            <td>Email</td>
            <td><input type='text' name='lecturer_email' /></td>

        </tr>
        <tr>
            <td>Address</td>
            <td><input type='text' name='lecturer_address' /></td>

        </tr>
        <tr>
            <td>apartament</td>
            <td><input type='text' name='lecturer_app' /></td>

        </tr>

        <tr>
            <td>sex</td>
            <td><input type='text' name='lecturer_sex' /></td>

        </tr>
        <tr>
            <td>bank_acount_number</td>
            <td><input type='text' name='lecturer_number' /></td>

        </tr>
        <tr>
            <td>rank_id</td>
            <td><input type='text' name='lecturer_id' /></td>

        </tr>

        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Add student"/>
            </td>
        </tr>
    </table>
</form>

</body>