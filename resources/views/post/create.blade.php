<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Create Page</h4>
    <div class="form-control">
        <form action="{{ route('post.store')}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title" ><br><br>
        <!-- <input type="text" name="details" placeholder="details"><br><br> -->
        <textarea name="details" id="" cols="30" rows="10"></textarea><br><br>
        <button>Create</button>

        </form>
    </div>
</body>
</html>