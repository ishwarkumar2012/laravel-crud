<html>
<head>
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <div class="row">
        <h1>Add User</h1>
        <form action="users.php" class="form" method="post">
            <div class="form-group"><label for="">First Name</label><input type="text" class="form-control" name="first_name"></div>
            <div class="form-group"><label for="">Last Name</label><input type="text" class="form-control" name="last_name"> </div>
            <div class="form-group"><label for="">Address </label><input type="text" class="form-control" name="address"></div>
            <div class="form-group"><label for="">Phone </label><input type="text" class="form-control" name="phone"></div>
            <div class="form-group"><label for=""></label><button type="text" class="btn btn-info">Save</button></div>

        </form>
    </div>
</div>
</body>
</html>