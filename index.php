<?php 
    $json_data = file_get_contents('http://18.224.23.171/images/magazine/getImages.json');
     $data= json_decode($json_data, true); 
?>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="turn.js"></script>
<style type="text/css">
.bookshelf{
  
    left: 25%;
    top:10%;
    position: absolute;
    align-content: center;
    background: url("wall-bookshelf.png");
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: bottom left;
    width: 600px;
    height: 410px;
    display: block;
    -webkit-box-shadow: 0 4px 10px #666;
    -moz-box-shadow: 0 4px 10px #666;
    -ms-box-shadow: 0 4px 10px #666;
    -o-box-shadow: 0 4px 10px #666;
    box-shadow: 0 4px 10px #666;
    
}
#flipbook{
    top: 10%;
    left: 2;
    

}
.hard{
  box-shadow: 0 4px 10px #666;
}

.imgfile{
  width: 100%;
  height: 100%;
}
</style>
</head>

<body>
  <h1>Magazine</h1>
<div class="bookshelf">
  <div id="flipbook">
    <?php 
      foreach ($data as $values){
    ?>
    <div><img class="imgfile" src="<?php echo $values; ?>" /></div> 
    <?php
     } 
     ?>
   </div>

</div>

    <script type="text/javascript">
      $("#flipbook").turn({
        width: 400,
        height: 280,
        page:1,
        
        duration:2000

      });

    </script>
    </body>
    </html>