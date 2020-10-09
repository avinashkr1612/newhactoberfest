function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "ishaan" && password == "gupta"){
alert ("Login successfully");
window.location="admin dashboard.html"; // Redirecting to other page.
return false;
}
else
{
	alert("wrong username or password");
	window.location="admin login.html";
}
}
function studentvalidate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "ishaan" && password == "gupta"){
alert ("Login successfully");
window.location="user dashboard.html"; // Redirecting to other page.
return false;
}
else
{
	alert("wrong username or password");
	window.location="user login.html";
}
}
   