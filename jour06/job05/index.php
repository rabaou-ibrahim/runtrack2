<!DOCTYPE html>
<html>
<head>
<title><?php echo "job05" ?></title>
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="style3.css">
</head>

<body>
<form action="" method="get" class="formCol">
        <p>
        <label for="argument">Sélectionner un style: </label>
        <br/>
        <br/>
    <select name="style">
        <option value="">--Choisissez une option--</option>
        <option value="style1">style1</option>
        <option value="style2">style2</option>
        <option value="style3">style3</option>
    </select>
        <input type="submit" value="OK" />
        </p>
        <br/>
    <?php    
        if(isset($_GET['style'])){
            $style = $_GET['style'];
            switch ($style) {
                case 'style1':
                    echo "
                    <head> 
                    <link rel=stylesheet href=style1.css>
                    </head>
                    <body>
                    <div class=style1>
                    <p><b>Vous avez choisi le style 1</b></p>
                    
                    </div>
                    </body>"
                    ;

                    break;
                case 'style2':
                    echo " 
                    <head> 
                    <link rel=stylesheet href=style2.css>
                    </head>
                    <body>
                    <div class=style2>
                    <p><b>Vous avez choisi le style 2</b></p>
                    
                    </div>
                    </body>"
                    ;
                    break;
                case 'style3':
                    echo " 
                    <head> 
                    <link rel=stylesheet href=style3.css>
                    </head>
                    <body>
                    <div class=style3>
                    <p><b>Vous avez choisi le style 3</b></p>
                    
                    </div>
                    </body"
                    ;
                    break;
            }
        }

    ?>