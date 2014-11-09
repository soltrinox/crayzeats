<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>crayZeats</title>
    <link rel="stylesheet" href="css/style.css?v=2">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/waterfall.css">


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    
</head>

<body>
<div id="container2">	<div id="main">
        <form id="searchForm">
                <fieldset>
                    <div class="input">
                        <input type="text" name="s" id="s" value="Enter your search" />
                    </div>
                    <input type="submit" id="searchSubmit" value="" />
                </fieldset>
     
		  
    </form>
    </div></div>
    
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" bgcolor="#CCCCCC">
<div style="float:left;padding:12px;"><img src="GL0509_chicken-parmigiana_s4x3.jpg.rend.sni12col.landscape.jpeg" width="447" height="335" /></div>    
<div  style="float:left;padding:12px; font-size: 12px;">
<strong><br />
Ingredients</strong><br />
4 boneless, skinless chicken breasts, pounded thin<br />
Salt and freshly ground black pepper<br />
2 cups all-purpose flour, seasoned with salt and pepper<br />
4 large eggs, beaten with 2 tablespoons water and seasoned with salt and pepper<br />
2 cups panko bread crumbs<br />
1 cup vegetable oil or pure olive oil<br />
Tomato Sauce, recipe follows<br />
1 pound fresh mozzarella, thinly sliced<br />
1/4 cup freshly grated Parmesan<br />
Fresh basil or parsley leaves, for garnish<br />
<br />
<strong>Tomato Sauce:</strong><br />
2 tablespoons olive oil<br />
1 large Spanish onion, finely chopped<br />
4 cloves garlic, smashed with some kosher salt to make a paste<br />
2 (28-ounce) cans plum tomatoes and their juices, pureed in a blender<br />
1 (16-ounce) can crushed tomatoes<br />
1 small can tomato paste<br />
1 bay leaf<br />
1 small bunch Italian parsley<br />
1 Cubano chile pepper, chopped<br />
Salt and freshly ground pepper<br />
</div>
</td>
  </tr>
  <tr>
    <td align="center"><?php 
	$size = getimagesize("http://wlog.cn/demo/waterfall/images/020.jpg");
	 echo print_r($size);   ?>
<div id="container"></div>

<script type="text/x-handlebars-template" id="waterfall-tpl">
{{#result}}
    <div class="item">
	<div class="cals">5000 Calories</div>
        <img src="{{image}}" width="{{width}}" height="{{height}}" />
    </div>
{{/result}}
</script>
<script src="js/libs/jquery/jquery.js"></script>
<script src="js/libs/handlebars/handlebars.js"></script>
<script src="js/libs/jquery.easing.js"></script>
<script src="js/waterfall.min.js"></script>
<script src="js/jquery.color.js"></script>
	<script src="js/script.js"></script>
<script>
$('#container').waterfall({
    itemCls: 'item',
    colWidth: 222,
    gutterWidth: 15,
    gutterHeight: 15,
    checkImagesLoaded: false,
    isAnimated: true,
    animationOptions: {
    },
	dataType: 'html',
    path: function(page) {
        return 'data/data.html?page=' + page;
    }
});
</script>
</td>
  </tr>
</table>
</body>
</html>