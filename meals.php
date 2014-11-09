<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>jQuery Mobile Bootstrap Theme</title>
		<link rel="stylesheet" href="themes/Bootstrap.css">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <link rel="stylesheet" href="css/style.css?v=2">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="js/jquery.color.js"></script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "b803e4a4-44f1-450a-8f3a-3f98631da468", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	</head>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
            <div  style="height:150px; text-align:center;background:url(images/junk-food-eating.jpg)">
				<h1 style="margin-top:0px; padding-top:10px;font-family:'Raleway',sans-serif;font-size:70px;font-style:normal;line-height:normal;font-weight:lighter;font-variant:normal;text-transform:lowercase;text-decoration:none;">crayZeats</h1></div>
				<div data-role="navbar">
					<ul>
						<li><a href="index.html" data-icon="home" class="ui-btn-active">Search</a></li>
						<li><a href="buttons.html" data-icon="star">Business</a></li>
					</ul>
				</div>
			</div>
			<div data-role="content" data-theme="a">



<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td align="center">
				<form method="get" action="meals.php">
                <div data-role="fieldcontain">
                  <input type="search" name="s" id="s" value=""  />
				  </div>
</form>
</td></tr>
  <tr>
    <td align="left" >
     
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
	
	?>
    <span style="font-family:'Raleway',sans-serif;font-size:40px;font-style:normal;line-height:normal;font-weight:lighter;font-variant:normal;text-transform:lowercase;text-decoration:none; color:#FFFFFF" >
    <?php
	echo '' . $recipie_found . '';	
	
	?></span>
    <div style="padding:2px; position:relative; width:100%; height:400px "><img class="round" src="<?php echo $image1 ?>" width="300" height="350" style="position:absolute; top:0px; left:0px; z-index:1;"  /><span class="overtext" style="position:absolute; top:20px; left:30px; z-index:10; font-size:70px; color:#FFFFFF; "><?php  echo $calories; ?></span></div>
    <div style="clear:both; width:100%; height:auto;">

      
           <div  style="padding:2px; font-size: 12px; width:100%"> 
    <?php
	echo '<h3>Ingredients</h3>';	
	echo '<ul>';
	foreach($ingred1 as $kv){
		echo '<li style="color:#FFFFFF;font-size:18px;">' . $kv . '</li>';
	}
	echo '</ul>';
		?>
      </div>
      </div>
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
    gutterWidth: 5,
    gutterHeight: 5,
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


		  </div>
		</div>
	</body>
</html>
