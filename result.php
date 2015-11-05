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
                direction: rtl;
            }

        </style>
    </head>
    <body>
        <div>
            <img src="http://i.imgur.com/SoHxmpA.jpg" />
        </div>
        <?php
			$name = $_POST['name'];
			$cars = array(
   				array("Volvo","http://cdn2.carbuyer.co.uk/sites/carbuyer_d7/files/jato_uploaded/volvo-v60-estate-2013-main.jpg"),
  				array("BMW","https://upload.wikimedia.org/wikipedia/commons/5/59/BMW_328i_F30_2012_vl_2.jpg"),
   				array("Lamborghini","http://www.departement-design.fr/images/voitures/lamborghini/lambo-gold-1.jpg"),
   				array("Land Rover","https://s3.amazonaws.com/rapgenius/filepicker%2FS50N8eTbRWmmfucOwLPu_range_rover.jpg")
  				 );
			$randnum=rand (0 , 3);
            ?>
        <div class="jumbotron">
            <img src="<?php echo $cars[$randnum][1] ?>" height="300" width="400" />
            
            <p>
                السيارة اللي تصلح لك يا
                <?php echo $name; ?>
                هي
                <?php echo $cars[$randnum][0] ?>
            </p>
        </div>
        <div>
            <img src="http://i.imgur.com/SoHxmpA.jpg" />
        </div>

    </body>
</html>
