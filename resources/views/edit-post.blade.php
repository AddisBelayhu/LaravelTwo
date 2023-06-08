<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
    <div class="container" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
        <form action="/create-post" method="post">
            @csrf
            <h2>Edit Post</h2><br>
            <input type="text" placeholder="title" name="title"><br><br>
            <textarea name="body" placeholder="put your idea heate ..." style="width:700px;"></textarea><br>
            <button  style="padding:8px; margin:15px; width:100px; border: none; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">Save Post</button>
        </form>
    </div>
</body>
</html>