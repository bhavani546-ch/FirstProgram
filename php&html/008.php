<html>
<head>
    <title> PHP Query String </title>
</head>
<body>
    <?php
        parse_str($_SERVER['QUERY_STRING'], $output);
        echo print_r($output, TRUE);
        //print $output;
    ?>
    <br/>
</body>
</html>