<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8 />
    <title>Pictionnary - Main</title>
    <link rel="stylesheet" media="screen" href="css/styles.css">
    <link rel="stylesheet" media="handheld" href="css/portrait.css">
</head>

<body>
    <?php  
        session_start(); 
        include 'header.php';
        echo "<button class='button buttonPaint' src='paint.php'>Commencer un dessin</button>";
        
    ?>
</body>

</html>
