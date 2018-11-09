<!doctype html>
<html  lang="en">
<head>
<meta charset="utf-8"> 
<title>Map 2 Link</title>

<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAP//AP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAiIiIiIiIiIgERAAERAAERABEQABEQABEAAREAAREAASIiIiIiIiIiAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACIiIiIiIiIiAREAAREAAREAERAAERAAEQABEQABEQABIiIiIiIiIiL//wAAAAAAAAAAAAAAAAAAAAAAAAAAAAC++wAAnnkAAI44AACeeQAAvvsAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon" />

<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.
-->
<!--Stop Google:-->
<META NAME="robots" CONTENT="noindex,nofollow">

</head>
<body>
<div id = "datadiv" style = "display:none"><?php

$files = scandir(getcwd()."/memes");
$listtext = "[\n";
foreach($files as $value){
    if(substr($value,-4) == ".txt"){
        $listtext .= file_get_contents("memes/".$value);
        $listtext .= ",\n";
    }
}

$listtext = rtrim($listtext, ",\n");
$listtext .= "\n]";

echo $listtext;

?></div>

<a href = "index.php" style = "position:absolute;left:10px;top:10px;z-index:4"><img src = "mapicons/mapfactory.svg" style = "width:50px"></a>
<script>
memes = JSON.parse(document.getElementById("datadiv").innerHTML);

</script>
<style>
body{
    font-family:Helvetica;
    font-size:24px;
}

    .button{
        cursor:pointer;
    }
    .button:hover{
        background-color:green;
    }
    .button:active{
        background-color:yellow;
    }
</style>
</body>
</html>