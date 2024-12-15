<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    body{
        background: #337ab7;
        background-attachment: fixed;
        margin: 0px;
        padding: 0px;
        font-family: 'poppins','sans-serif';
    }
    #form{
        width: 400px;
        margin: 20vh auto 100px auto;
        background-color: whitesmoke;
        border-radius: 5px;
        padding: 30px;
    }
    h1{
        text-align: center;
        color: #337ab7;
    }
    #form button{
        background-color: #337ab7;
        color: white;
        border: 1px solid #337ab7;
        padding: 10px;
        margin-top: 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
        width: 100%;
    }
    .inp{
        display: flex;
        flex-direction: column;
        margin: 15px;
    }
    .inp input{
        border-radius: 5px;
        font-size: 20px;
        margin-top: 5px;
        padding: 10px;
        border:1px solid #337ab7;
    }
    .inp input:focus{
        outline: 0;
    }
    .inp label{
        color: black;
        font-size: 20px;
    }
    .login{
        text-align: center;
        margin-top: 10px;
        font-style: italic;
        padding: 5px;
    }
    .login a{
        text-decoration: none;
        color: black;
    }
    p{
        background-color:#f8d7da;
        color:#721c24;
        padding: 10px;
        text-align:center;
        padding-top:20px;
        padding-bottom:20px;
    }
</style>
<?php if(session_status() == PHP_SESSION_NONE):
    session_start();
    
?>
<?php endif; ?>
<form id="form" action="<?php echo base_url('Admin/index');?>" method="post">
    <h1>Login</h1>
    <?php if(isset($passval)):?>
    <p><?php echo $passval; ?></p>
    <?php endif?>
    <div class="inp">
        <label for="email">Username</label>
        <input type="text" id="email" name="username">
    </div>
    <div class="inp">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>
    <button type="submit">Register</button>
    
</form>

</body>
</html>