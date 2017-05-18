
var startTime = new Date();

function currentTime(){
	var a = Math.floor((new Date() - startTime) / 100) / 10;
	if (a % 1== 0) 
		a += ".0";
	document.getElementById("endTime").innerHTML=a;
}
	window.onload=function(){
		clearTimeout(loopTime);
	}
document.write('<div align="center">
	<span id="texttime">
	<i class="fa fa fa-spinner fa-spin"></i> 
	Thời gian tải trang: <span id="endTime">0.0</span>s</span></div> ');
var loopTime=setInterval("currentTime()", 100);