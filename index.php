<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p2e3</title>
</head>
<body>
    <p>
        <?php 
            $age = 17;
            $gender = 'homme';
            if ($age >= 18){
                if($gender == 'homme'){
                    echo('Vous êtes un homme et vous êtes majeur');
                }
                if($gender == 'femme'){
                    echo('Vous êtes une femme et vous êtes majeure');
                }
            }
            if($age < 18 && $age > 0){
                if($gender == 'homme'){
                    echo('Vous êtes un homme et vous êtes mineur');
                }
                if($gender == 'femme'){
                    echo('Vous êtes une femme et vous êtes mineure');
                }
            }
        ?>
    </p>
</body>
</html>