<!DOCTYPE html>
<html>
<head>
<style>
@font-face { font-family: JuneBug; src: url('Heroes Legend Hollow.ttf'); } 
h1 {
font-family: JuneBug

}


div {
    width: 300px;
    border: 5px solid black;
    padding: 25px;
    margin: 25px;
}

div3 {
    width: 300px;
    border: 5px solid black;
    padding: 25px;
    margin: 25px;
}

.hvr-sweep-to-right {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-sweep-to-right:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #2098D1;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-sweep-to-right:hover, .hvr-sweep-to-right:focus, .hvr-sweep-to-right:active {
  color: white;
}
.hvr-sweep-to-right:hover:before, .hvr-sweep-to-right:focus:before, .hvr-sweep-to-right:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

</style>
</head>
<body  background="walao.jpg">
<font style="color:white" size="2">
<center><h1>Welcome to E-Wallet Web-Based System</h1></center></font>

<font style="color:white" size="5">
<center><tr><div style="cursor:crosshair" class="hvr-sweep-to-right" onclick="location.href='admin_login.html'";>ADMIN</div></tr>
<tr><div style="cursor:crosshair" class="hvr-sweep-to-right" onclick="location.href='vendor_login.html';">VENDOR</div></tr>
<tr><div style="cursor:crosshair" class="hvr-sweep-to-right" onclick="location.href='consumer_login.html';">CUSTOMER</div></tr>


<br><br><font style="color:white" size="2"><h1>New here? </h1></font>
<tr><font style="color:white" size="5"><div3 style="cursor:crosshair" class="hvr-sweep-to-right" onclick="location.href='signupx.php';">REGISTER</div3></tr>
</center>	</font>
</body>
</html>

