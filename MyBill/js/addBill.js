
function getValue(){
	alert("hello");
	var project = document.form1.project.value;
	var date = document.form1.date.value;
	var money = document.form1.money.value;
	var usage = document.form1.usage.value;
	var remark = document.form1.remark.value;
	var classify = document.form1.classify.value;
	
	var xmlHttp;
	if(window.ActiveXObject){
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}else if(window.XMLHttpRequest){
				xmlHttp = new XMLHttpRequest();
			}


			xmlHttp.onreadystatechange = function(){
				if(xmlHttp.readyState == 4){
					if(xmlHttp.status == 200){
						document.getElementById("div").innerHTML = xmlHttp.responseText;
					}
				}
			}

			xmlHttp.open("POST","http://www.itzhidian.com/all/bill/bg.php?project="+project+"&date="+date+"&money="+money+"&usage="+usage+"&remark="+remark+"&classify="+classify,true);
			xmlHttp.send();
	}		

}

function test(){
	alert("hello");
}
