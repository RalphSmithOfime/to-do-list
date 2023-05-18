<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
        <div class = "containter my-5">
            <h2>Ralph's To-Do List</h2>
            <div class="row">
                <div class="col-sm-6">
                    <?php
                    include ("database.php");
                    include ("delete-to-do.php");
                    include ("to-do-form.php");
                    include ("to-do-list.php");
                    ?>

                </div>

                <div class="col-sm-6"></div>

            </div>
        </div>
    </body>
</html>