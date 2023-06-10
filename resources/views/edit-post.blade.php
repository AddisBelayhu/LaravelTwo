<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Post</title>
</head>
<body>
    <div class="container" style="background-color:rgb(246, 245, 245); padding: 10px; margin:center; border-radius:10px; margin-top: 150px;">
        <h5>Edit Post</h5><br>
        <form action="/edit-post/{{$post->id}}" method="POST"> 
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}"><br><br>
            <textarea name="body" style="width:700px;">{{$post->body}}</textarea><br>
            <button  style="padding:8px; margin:15px; width:150px; border: none; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">Save Changes</button>
        </form>
    </div>
</body>
</html>