<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>..::Gary's Page::..</title>
  <script type="text/javascript">
    var index=0;
    function changeBanner(){ 
      [].forEach.call(document.images,function (v,i) { document.images[i].hidden = i!==index});
      index = (index+1) % document.images.length;
    }
    window.onload = function () {setInterval(changeBanner, 1000)};
  </script>
</head>
<body>
  <?php echo '<strong><h1>Still Chihuahua or Muffin page!!!</h1></strong>'; ?>
  <div id="wrapper">
    <div>
      <img src="images/1.jpeg" />
      <img src="images/2.jpeg" />
      <img src="iamges/3.jpeg" />
    </div>
  </div>
</body>
</html>

<?php

  //echo 'Wello Horld';
