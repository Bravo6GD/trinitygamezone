<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'store'])}}" enctype="multipart/form-data">
    @csrf
    <label for="">Genre:</label>
    <input type="text" name="Genre" required>
    <label for="">Game</label>
    <input type="text" name="Game" required>
    <label for="">Description</label>
    <input type="text" name="Description" required>
    <label for="">Publisher:</label>
    <input type="text" name="Publisher" required>
    <label for="">Image:</label>
    <input type="file" name="image" required>
    <input type="submit">
</form>
</body>
</html>
