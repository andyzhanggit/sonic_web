<!DOCTYPE HTML>
<head>
<META http-equiv=Content-Type content="text/html;charset=UTF-8">
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
</script>
</head>
<body>
<div>	
<textarea rows="10" cols="30" name="status_check" id="status_check"></textarea>
</div>
<div>
<form>	
<button type="button" onclick="status_check()">查询</button>
</form>	
	</div>
<div>查询结果</div>	
<div id="check_result">
	</div>
</body>
</html>	