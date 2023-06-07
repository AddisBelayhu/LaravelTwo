<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration</title>
</head>
<body>

    @auth
     <p><h2>You Logedin Successfuly, Thank You</h2></p>   
     <form action="/logout" method="post">
        @csrf
        <button>Logout</button>
    </form>


    @else
    <div style="border: 2px solid brown;">
        <h2>User Registraion</h2>
        <form method="post" action="/register">
            @csrf               <!-- page expired, security issue of cookies-->
            <input type="text" name="name" placeholder="name" autocomplete="off"
            style="padding:10px; margin:15px; width:400px;">
            <input type="text" name="email" placeholder="email" autocomplete="off" 
            style="padding:10px; margin:15px; width:350px;" >
            <input type="password" name="password" placeholder="password" autocomplete="off"
            style="padding:10px; margin:15px; width:250px;">
            <button>Register</button>
        </form>
    </div>
    @endauth
              
</body>
</html>