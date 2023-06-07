<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>user registration</title>
</head>
<body style="background-color:aliceblue">
<nav class="navbar navbar-light justify-content-center fs-3 mb-5"
style="background-color: #acd6ba73;">
<h1>User Authentication  Page</h1>
</nav>
    @auth
    
    <div class="container" style="border: 2px solid rgb(130, 81, 81);">
     <p><h2>You Logedin Successfuly, Thank You</h2></p>   
     <form action="/logout" method="post">
        @csrf
        <button>Logout</button>
    </form>
    </div><br>
    <div class="container" style="border: 2px solid rgb(130, 81, 81);">
        <form action="/create-post" method="post">
            @csrf
            <h2>Create a new Post</h2><br>
            <input type="text" placeholder="title" name="title"><br><br>
            <textarea name="body" placeholder="Enter Your idea" style="width:700px;"></textarea><br>
            <button  style="padding:8px; margin:15px; width:100px;">Register</button>
        </form>
    </div>
    @else
    <div class="container" style="border: 2px solid rgb(130, 81, 81);">
        <h2>User Registraion</h2>
        <form method="post" action="/register">
            @csrf               <!-- page expired, security issue of cookies-->
            <input type="text" name="name" placeholder="name" autocomplete="off"
            style="padding:10px; margin:15px; width:400px;">
            <input type="text" name="email" placeholder="email" autocomplete="off" 
            style="padding:10px; margin:15px; width:350px;" >
            <input type="password" name="password" placeholder="password" autocomplete="off"
            style="padding:10px; margin:15px; width:250px;">
            <button  style="padding:8px; margin:15px; width:100px;">Register</button>
        </form>
    </div><br><br>

    <div class="container" style="border: 2px solid rgb(130, 81, 81);">
        <h2>Login</h2>
        <form method="post" action="/login">
            @csrf               <!-- page expired, security issue of cookies-->
            <input type="text" name="loginname" placeholder="name" autocomplete="off"
            style="padding:10px; margin:15px; width:400px;">
           
            <input type="password" name="loginpassword" placeholder="password" autocomplete="off"
            style="padding:10px; margin:15px; width:250px;"><br>
            <button style="padding:8px; margin:15px; width:100px;">Login</button>
        </form>
    </div>
    @endauth
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>