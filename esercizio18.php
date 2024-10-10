<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $film=array("titanic", "spiderman", "transformers", "lo squalo", "avatar");
        $menu="<select name='film preferito'>";
        for ($i=0; $i<count($film); $i++ ){
            $numeroFilm=$i+1;
            $menu=$menu."<option value='f{$numeroFilm}'>{$film[$i]}</option>";

        }
        $menu=$menu."</select>";
        echo $menu;

    ?>
    
</body>
</html>