<style>body {
        font-family: "Arial", sans-serif;
        background-color: #eee;
    }
    .fullscreen_bg {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: #23272d;
    }
    .form-signin {
        max-width: 400px;
        margin: 0 auto;
        margin-top: 7%;
        background: #2F313A;
        border: 1px solid #000;
        border-radius: 4px;
    }
    .form-signin-heading{
        display: block;
        font-size: 2em;
        font-weight: bold;
        color: #f9f9f9;
        padding: 15px 0px 15px 20px;
        border-bottom: 1px solid #000;
        margin-bottom: 20px;
    }
    .form-control {
        width: 90%;
        line-height: 2em;
        margin: 25px auto;
        display: block;
        position: relative;
        padding: 6px 10px;
        border: 1px solid #333;
        border-radius: 4px;
        background: #15161B;
    }
    .btn {
        font-size: 1em;
        font-weight: bold;
        color: #fefefe;
        display: block;
        margin: 0 auto 20px;
        border: 1px solid #000;
        border-radius: 4px;
        padding: 10px 30px;
        background: #3498db;
        background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
        background-image: -moz-linear-gradient(top, #3498db, #2980b9);
        background-image: -ms-linear-gradient(top, #3498db, #2980b9);
        background-image: -o-linear-gradient(top, #3498db, #2980b9);
        background-image: linear-gradient(to bottom, #3498db, #2980b9);
    }
    .btn:hover{
        background: #3cb0fd;
        background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
        background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
        background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
        background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
        background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
        text-decoration: none;
    }
</style>
<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">
    <form class="form-signin" action="" method="post">
        <span class="form-signin-heading">Управление</span>
        <input type="text" class="form-control" name="email" placeholder="Логин" required="required" autofocus="">
        <input type="password" class="form-control" name="password" placeholder="Пароль" required="required">
        <button class="btn" type="submit">
            Войти
        </button>
    </form>
</div>';
