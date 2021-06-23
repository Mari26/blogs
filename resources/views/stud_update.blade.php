<!DOCTPE html>
<html>

<head>
    <title>Student Edit</title>
    <link rel="stylesheet" href="{{asset('update.css')}}">
</head>

<body>
<div id="edit">
<form action = "/test/<?php echo $users[0]->id; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <table>
        <tr>
            <td>Name</td>
            <td>
                <input type = 'text' name = 'stud_name'
                       value = '<?php echo $users[0]->name; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Update student" />
            </td>
        </tr>
    </table>
</form>
</div>
</body>
</html>