<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pony camp</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Extra links -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
include "resources/getContent.php";
?>
<div class="container-fluid outer">
    <div class="row w-75 m-auto">
        <div class="col-sm-12 form">
            <h1>Pony camp guestbook</h1>
            <p>Leave a message</p>

            <form method="post">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label for="author">Name</label><br>
                        <input type="text" id="author" name="author">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label for="title">Title</label><br>
                        <input type="text" id="title" name="title">
                    </div>
                    <div class="col-12">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Enter text here"></textarea><br>
                        <input type="hidden" id="date" name="date" value="<?php echo $currentdate ?>" />
                        <br>
                    </div>
                    <input class="button" type="submit" value="Submit">
                </div>
            </form>

        </div>
        <div class="col-sm-12 messages">
            <h2>Messages:</h2>
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li class="post1">
                            <h5><?php  echo $decode->Title; ?></h5>
                            <p><?php  echo $decode->Author; ?> | <?php  echo $decode->Date; ?></p>
                            <p><?php  echo $decode->Message; ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


</body>

<!-- Optional JavaScript -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/v4-shims.min.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/bootstrap.min.js"></script>
</html>