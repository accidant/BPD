// JavaScript Document
<!--

function show_visibility(){
for(var i = 0,e = arguments.length;i < e;i++){
var myDiv = document.getElementById(arguments[i]).style;
myDiv.display = "block";
}
}

function hide_visibility(){
for(var i = 0,e = arguments.length;i < e;i++){
var myDiv = document.getElementById(arguments[i]).style;
myDiv.display = "none";
}
}
//-->