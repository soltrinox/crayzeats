<?php
ob_start();

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="css/style.css?v=2">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="js/jquery.color.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<div id="container2">
  <div id="mainx">
    <form id="searchForm" target="_self" method="get" >
        <div class="input">
          <input type="text" name="s" id="s" value="Enter your search" />
        </div>
        <input type="submit" id="searchSubmit" value="" />
    </form>
  </div>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" bgcolor="#CCCCCC">
     
        <?php
		
		$url =  'http://www.crayzeats.com/search.php?q='. $_REQUEST['s'];
	$url = str_replace( "&amp;", "&", urldecode(trim($url)) );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);
	$result=curl_exec($ch);
	curl_close($ch);

	$obj2 =  json_decode($result, true);
	//var_dump($obj2);
	
	$image1 = $obj2["image_url"];
	$name1 = $obj2["name_of_recipe"];
	$calories = $obj2["calories"]; 
	$recipie_found = $obj2["actual_recipe"]; 
	$ingred1 = $obj2["ingredients"];
	echo '<span style="font-size:40px">' . $recipie_found . '</span>';	
	
	?>
    
    <div style="clear:both; width:100%; height:auto;">
     <div  style="float:left;padding:12px; font-size: 12px; width:40%"> 
    <?php
	echo '<h3>Ingredients</h3>';	
	echo '<ul>';
	foreach($ingred1 as $kv){
		echo '<li>' . $kv . '</li>';
	}
	echo '</ul>';
		?>
      </div>
      <div style="float:left;padding:12px; position:relative; width:50%; "><img class="round" src="<?php echo $image1 ?>" width="400" style="position:absolute; top:0px; left:0px; z-index:1;"  /><span style="position:absolute; top:20px; left:30px; z-index:10; font-size:70px; color:#FFFFFF; "><?php  echo $calories; ?></span></div>
      
      </div>
      <hr/>
      </td>
  </tr>
  <tr>
    <td align="center"><?php 
	// $size = getimagesize("http://wlog.cn/demo/waterfall/images/020.jpg");
	// echo print_r($size);  
	  ?>
      <div id="container" style="margin:10px"></div>

      <script src="js/libs/handlebars/handlebars.js"></script> 
      <script src="js/libs/jquery.easing.js"></script> 
      <script src="js/waterfall.min.js"></script> 
      <script src="js/jquery.corner.js"></script>
      
      <script>
$('#container').waterfall({
    itemCls: 'item',
    colWidth: 210,
    gutterWidth: 15,
    gutterHeight: 15,
    checkImagesLoaded: false,
    isAnimated: true,
    animationOptions: {
    },
	dataType: 'html',
    path: function(page) {
        return 'data/data.php?calories=' + <?php   echo $calories; ?>;
    }
});
$('.round').corner('20px');


</script></td>
  </tr>
</table>
</body>
</html>