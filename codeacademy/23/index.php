<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teip</title>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
</head>
<body>
    <h1>Register</h1>

    <form id="registr-form" action="indexx.html" method="post">
        <input type="text" name="vardas"/>
        <input type="password" name="password"/>
        <input type="password" name="password2"/>
        <button type="submit">Submit</button>


    </form>

    <script>
        $('#registr-form').submit(function (e) {
            var pwd1 = $('#registr-form>input[name=password]');
            var pwd2 = $('#registr-form>input[name=password2]');
            if(pwd1.val().length()==0 || pwd2.val().length()==0){
                e.preventDefault();
                return;
            }
            if(pwd1.val() != pwd2.val()){
                e.preventDefault();
                return;
            }
        });
    </script>
</body>
</html>