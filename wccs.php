<html>
<body style="font:bold" , background="back.jpg" >
<style>
/* Center the loader */
#loader {
position: absolute;
left: 50%;
top: 50%;
z-index: 1;
width: 150px;
height: 150px;
margin: -75px 0 0 -75px;
border: 16px solid #f3f3f3;
border-radius: 50%;
border-top: 16px solid #3498db;
width: 120px;
height: 120px;
-webkit-animation: spin 2s linear infinite;
animation: spin 2s linear infinite;
}
@-webkit-keyframes spin {
0% { -webkit-transform: rotate(0deg); }
100% { -webkit-transform: rotate(360deg); }
}
@keyframes spin {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
/* Add animation to "page content" */
.animate-bottom {
position: relative;
-webkit-animation-name: animatebottom;
-webkit-animation-duration: 1s;
animation-name: animatebottom;
animation-duration: 1s
}
@-webkit-keyframes animatebottom {
from { bottom:-100px; opacity:0 }
to { bottom:0px; opacity:1 }
}
@keyframes animatebottom {
from{ bottom:-100px; opacity:0 }
to{ bottom:0; opacity:1 }
}
#myDiv {
display: none;
text-align: center;
}
#hideme {
-moz-animation: cssAnimation 0s ease-in 3s forwards;
/* Firefox */
-webkit-animation: cssAnimation 0s ease-in 3s forwards;
/* Safari and Chrome */
-o-animation: cssAnimation 0s ease-in 3s forwards;
/* Opera */
animation: cssAnimation 0s ease-in 3s forwards;
-webkit-animation-fill-mode: forwards;
animation-fill-mode: forwards;
}
@keyframes cssAnimation {
to {
width:0;
height:0;
overflow:hidden;
}
}
@-webkit-keyframes cssAnimation {
to {
width:0;
height:0;
visibility:hidden;
}
}
</style>
</head>
<body onload="myFunction()" style="margin:0;background-color: rgb(204, 242, 255);">
<div id="loader">
</div>
<div id="hideme">
<h1 style="background-color: rgb(51, 204, 255); text-align: center; color: rgb(51, 51, 153);"><big>Transaction under process....</big></h1>
</div>
<div style="display:none;" id="myDiv" class="animate-bottom">
<h1 style="background-color: rgb(51, 204, 255); text-align: center; color: rgb(51, 51, 153);"><big>Collect Your Cash</big></h1>
<br>
<br>
<img src="A2.gif" style="height=100%";></img>
</div>
<script>
var myVar;
function myFunction() {
myVar = setTimeout(showPage, 3000);
}
function showPage() {
document.getElementById("loader").style.display = "none";
document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>