<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" href="css/main.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-lightbox.css"/>

</head>
<body>

<div id="wrapper">
    <header>
        <h1><a href="index.php">Logo</a></h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="loginButton" data-whatever="@mdo">Register</button>
        <nav>
            <ul>
                <li><a href="index.php" class="button">Home</a></li>
                <li><a href="#" class="button">Gallery</a></li>
                <li><a href="#" class="button">Other</a></li>
                <li><a href="about.php" class="button">About</a></li>
            </ul>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Register</h4>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">User</label>
                                    <input type="text" class="form-control" id="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Password</label>
                                    <input type="password" class="form-control" id="password" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Register" data-dismiss="modal"/>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </header>
