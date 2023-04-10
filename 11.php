<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <h1>JavaScript</h1>
  <ol>
  <script>
    list = new Array("one","two","three","four","five","six","seven");
    i= 0;
    while (i<list.length){
    document.write("<li>"+list[i]+"</li>");
    i = i+1;
                         }
  </script>
  </ol>
  <h1>PHP</h1>
  <ul>
  <?php
    $list = array("one","two","three","four","five","six","seven","nine","ten");
    $i = 0;
    while ($i<count($list)){
      echo "<li>". $list[$i]. "</li>";
      $i = $i+1;
    }
  ?>
</body>
<footer>
    <iframe style="border: 0; width: 100%; height: 100%;" src="/footer.html"> </iframe>
</footer>
</html>