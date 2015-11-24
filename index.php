<!DOCTYPE html>
  <head>
    <title>Nothing</title>
    <link href="img/apple-favicon.png" rel="shortcut icon" />
  </head>
  <body> 

    <blockquote> This is not for you. </blockquote>
    <p> - <i>House of Leaves</i>, Mark Z. Danielewski </p>

    <?php

      function isMobile(){
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
      }

      if(isMobile()){
        include 'ad.php';
      } else {
        echo '<link href="./css/markdown.css" rel="stylesheet"/>';
        echo '<div style="position:absolute;top:0;left:0;">';
          include 'google-ad.php';
        echo '</div>';
      }

    ?>
</script>
  </body>
</html>

