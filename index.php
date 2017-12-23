<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma boutique</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container" >
                <a class="navbar-brand" href="#"  >title</a>
                    <ul class="nav navbar-nav" >
                        <li class="active">
                            <a href="#">Acceuil</a>
                        </li>
                        <li class="active">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <img src="img/jokkolabs.png" alt="" width="100%" height="600 px" >
    </div>
    <?php 
    $n=1;
    while ($n <4) {
       echo '<div class="row" style="padding-top:20 px">'
        .'<div class="col-md-12" >'
            .'<div class="col-md-3 col-xs-3" style="background-color:#5f89d5;height:325px">'
              . ' <div class="row" >'
                   . '<div class ="row" >'
                        .'<div class="col-md-8"> '
                            .'<h2 style="color:white">Sac à main</h2>'
                        .'</div>'
                       .'<div class="col-md-4"> '
                         
                        .'</div> '      
                    .'</div>'
                   .'<div class ="row" >'
                        .'<div class="col-md-5" ><b>250000f</b>'
                        .'</div> '  
                        .'<div class="col-md-7" ><b>Dscpt: Sac MK noir</b> '
                        .'</div>  '
                    .'</div>'
                   .' <div class ="row" >'
                        .'<img src="img/sac.jpeg" alt="" style="margin-left:10%" >'     
                    .'</div>'
                    
                .'</div>'

           .' </div>'
        .'</div>'    
    .'</div>';
    }
    ?>
</div>
    
</body>
</html>