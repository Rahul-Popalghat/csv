<?php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    <div id="demo">
<?php
echo "hello there" 
?>
    </div>
    <script >
    fetch("http://192.168.43.40:3600", (data, error)=>{
if(error){
    console.log(error);
}
else{
    document.write += data;
   
}

    });
    </script>

</body>
</html>
?>
