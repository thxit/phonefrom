<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>查询手机归属地</title>
  </head>
  <link href="style.css" rel="stylesheet" type="text/css" media="all"/>

  <!--Google Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!--Google Fonts-->
  <body>
    <!--search start here-->
    <div class="search">
    	<i> </i>
    	<div class="s-bar">
    	   <form action=""  enctype="application/x-www-form-urlencoded">
    		<input id="phone" type="text"  value="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Template';}">
    		<input type="button" value="Search"/>
    	  </form>
    	</div>
      <p id="zone">&nbsp;</p>
    </div>
  </body>
  <script type="text/javascript">
  </script>
</html>
