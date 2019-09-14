<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head> -->

<body>
    <form action="#" method="post" onsubmit="return validation();">
        <input type="email" name="username" id="username" placeholder="Username"><br><br>
        <input type="password" name="password" id="password" placeholder="Password"><br><br>
        <!-- <input type="password" name="password" id="password"><br><br> -->
        <input type="submit" name="submit" value="Insert Now"><br><br>
    </form>

    <div id="keliru"></div>
    <script type="text/javascript">
        function validation() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
        }
        if (username == '' || password == '') {

            document.getElementById("keliru").innerHTML = "Silahkan Masukan Username dan Password!";
            return false;

        } else if (username.length < 9) {

            document.getElementById("keliru").innerHTML = "Username minimal harus memuat 9 karakter";
            return false;

        } else if (password.length < 8) {
            document.getElementById("keliru").innerHTML = "Password harus memuat 8 karakter dan harus memiliki karakter simbol @";
            return false;
        } else {
            return true;
        }
    </script>
</body>

</html>