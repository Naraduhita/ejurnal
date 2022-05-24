<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="header">
        <p id="text-header">
            Information Techonology Journal
        </p>
    </div>

    <div class="content">
        <div id="tampilan-awal">
            <div class="link-menu">
                <a href="#" class="green">Home</a>
                <a href=" #" class="green">About</a>
                <a href="#" class="green">Login</a>
                <a href=" #" class="green">Search</a>
                <a href="#" class="green">Current</a>
                <a href=" #" class="green">Archives</a>
            </div>
            <hr>
            <div class="content-item">
                <div class="link-status">
                    <a href="#" class="green">Home</a>
                    <span>></span>
                    <a href="#" class="green bold">Login</a>
                </div>
                <div class="title bold">
                    <p>
                        Login
                    </p>
                </div>
                <hr>
                <table class="table-keterangan">
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" style="border-style: inset;">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="text" style="border-style: inset;">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="remember">
                            <input type="checkbox">
                            Remember my username and password</td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button class="btn btn-cancel" onclick="window.location='<?php echo site_url("T1Nara/stepOne"); ?>'">
                                Login
                            </button>
                        </td>
                    </tr>
                </table>

            </div>
</body>

</html>