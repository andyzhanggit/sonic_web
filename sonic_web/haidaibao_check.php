<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
  <title>测试海带宝包裹是否到库查询</title> 
  <script type="text/javascript">
function status_check()
{
var xmlhttp;
var tracking_number;
tracking_number=document.getElementById("status_check").value;
tracking_number=tracking_number.replace(/\n/g,'<br />');
if(tracking_number.length==0)
	{
		alert("请输入运单号");
	}
	if(window.XMLHttpRequest)
	{
		xmlhttp= new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		 if (xmlhttp.readyState==4 && xmlhttp.status==200)	
		{
			document.getElementById("check_result").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","Haidaibao_status.php?tracking_number="+tracking_number,true);
	xmlhttp.send();
}
function uszcn_check()
{
var xmlhttp;
var tracking_number;
tracking_number=document.getElementById("uszcn_check").value;
tracking_number=tracking_number.replace(/\n/g,'<br />');
if(tracking_number.length==0)
	{
		alert("请输入运单号");
	}
	if(window.XMLHttpRequest)
	{
		xmlhttp= new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		 if (xmlhttp.readyState==4 && xmlhttp.status==200)	
		{
			document.getElementById("check_result").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","uszcn_status.php?tracking_number="+tracking_number,true);
	xmlhttp.send();
}
</script> 
 </head> 
 <body> 
  <div style="position: relative; width: 300px;float: left;"> 
   <div> 
    <textarea rows="10" cols="30" name="status_check" id="status_check"></textarea> 
   </div> 
   <div> 
    <form> 
     <button type="button" onclick="status_check()">海带宝查询</button> 
    </form> 
   </div> 
  </div> 
  <div style="position: relative; width: 300px;float: left;"> 
   <div> 
    <textarea rows="10" cols="30" name="uszcn_check" id="uszcn_check"></textarea> 
   </div> 
   <div> 
    <form> 
     <button type="button" onclick="uszcn_check()">转中查询t</button> 
    </form> 
   </div> 
  </div> 
  <div style="float: left; width: 100%;">
   查询结果 
   <div id="check_result"> 
   </div> 
  </div> 
 </body>
</html>