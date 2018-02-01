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
    		<input type="button" onClick="sub()" value="Search"/>
    	  </form>
    	</div>
      <p id="zone">&nbsp;</p>
    </div>
  </body>
  <script type="text/javascript">
  function sub(){
    var regu = /^1[0-9]{10}$/;
    var phoneNum = document.getElementById('phone').value;
    // alert(phoneNum);
    var reg = new RegExp(regu);
    // validate if phone number by regexp
    var flag = reg.test(phoneNum);
    if(flag == true){
      var xmlhttp;
      if (window.XMLHttpRequest)
      {
        // IE7+,Firedox,Chrome,opera,Safari browser run code
        xmlhttp = new XMLHttpRequest();
      }
      else
      {
        // IE6,IE5 run code
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          // transmit value from server to msg
          eval('var data = '+ xmlhttp.responseText);
          // console.log(data);
          var s=data['phone']+'('+data['operators']+') phone number from: '+data['style_citynm'];
          document/getElementById('zone').innerHTML =s;

        }
      }
      xmlhttp.open("GET","SearchController.php?phoneMum="+phoneNum,true);
      xmlhttp.send();
    }else{
      alert('please input correct phone number');
    }
  }
  </script>
</html>
