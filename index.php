<html>
    <head>
        <title>myQuiz</title>
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css" charset="utf-8"/>
        <script src="bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
        <style type="text/css" media="screen">
            body {
                margin-left: auto;
                margin-right: auto;
                width: 600px;
            }

        </style>
    </head>
    <body>
        <div>
            <img src="http://i.imgur.com/SoHxmpA.jpg" />
        </div>
        <div class="jumbotron">
            <h2>السيارة التي تلائمك حسب اسمك</h2>
            <p>
                ادخل اسمك
            </p>
            <form action="result.php" role="form" method="post" accept-charset="utf-8">
                <input type="text" name="name" class="form-control" />
                <input type="submit" name="submit" value="ارسل &rarr;" class="btn btn-default" />
            </form>
        </div>
        <div>
            <img src="http://i.imgur.com/SoHxmpA.jpg" />
        </div>

    </body>
</html>
