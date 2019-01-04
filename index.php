<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP OOP</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">CRUD TUTORIAL USING PHP OOP</h1>
                <p class="lead">This is just a sample web app to create a CRUD application using PHP OOP</p>
            </div>
        </div>
        <!-- section -->
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card">
                <div class="card-header">
                    CRUD FORM
                </div>
                    <div class="card-body">
                        <h5 class="card-title">GAME INPUT</h5>
                        <form method="POST" id="user_form">
                            <div class="form-group">
                                <label for="gameTitle">Game Title</label>
                                <input type="text" class="form-control" id="gameTitle" name="gameTitle" aria-describedby="emailHelp" placeholder="Title">
                                <small id="titleHelp" class="form-text text-muted">Input above the title of your game.</small>
                            </div>
                            <div class="form-group">
                                <label for="score">Score</label>
                                <input type="number" class="form-control" id="score" name="score" placeholder="Score">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="platinum">
                                <label class="form-check-label" for="platinum">Platinum</label>
                            </div>
                            <div class="form-group">
                                <label for="userImage">Upload Image</label>
                                <input type="file" class="form-control-file" id="userImage">
                            </div>
                            <input type="hidden" name="action" id="action">
                            <input type="submit" class="btn btn-primary" value="INSERT">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Game Title</th>
                        <th>Score</th>
                        <th>Platinum</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>  
            </div>
        </div>
    </div> <!-- Container End -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>