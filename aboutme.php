<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
#main{
	background-color: #fff;
	position: relative;
	top: 450px;
	left:50%;
	transform: translate(-50%,-50%);
	width:600px;
	padding: 30px;
	box-sizing: border-box;
	border-radius: 10px;
	box-shadow:0 15px 50px rgba(0,0,0,.2);
	/*background-color: #e5e4d7;
	margin-left: 10px;
	margin-right: 320px;
	margin-bottom: 10px;
	margin-top:10px;
	border-radius: 5px;
	padding: 20px;
	font-size: 110%;*/
}
p{
	margin:25px;
	padding: 5px;
	text-align: justify;
	line-height: 22px;
}
h1{
	margin: 0 0 20px;
	padding: 0;
	font-size: 30px;
}
.social-menu ul {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0;
    margin-top: 150px;
    display: flex;
}
.social-menu ul li {
    list-style: none;
    margin: 0 10px;
}
.social-menu ul li .fa {
    color: #000000;
    font-size: 25px;
    line-height: 50px;
    transition: .5s;
}
.social-menu ul li .fa:hover {
    color: #ffffff;
}
.social-menu ul li a {
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: white;
    text-align: center;
    transition: 0.5s;
    transform: translate(0,0px);
    box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.5);
}
.social-menu ul li a:hover {
    transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social-menu ul li:nth-child(1) a:hover {
background-color: #deebdd;
background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);}
.social-menu ul li:nth-child(2) a:hover {
background-color: #deebdd;
background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);}
.social-menu ul li:nth-child(3) a:hover {
background-color: #deebdd;
background-image: linear-gradient(315deg, #deebdd 0%, #bbdbbe 74%);}
img{margin-top: 9px; 
 } 
 .nv ul{
 	float:right;
			list-style-type: none;
			margin-top: 25px;
			margin-right: 100px;
 }
 .nv ul li{
display:inline-block;
 }
 .nv ul li a{
 text-decoration: none;
			padding:5px 10px;
			border:1px solid black;
			border-width: 2px;
			transition: 0.6s ease;
			position: relative;
		    display: inline-block;
		    padding: 12px 36px;
		    margin: 10px 0;
		    text-decoration: none;
		    text-transform: uppercase;
		    font-size: 18px;
		    letter-spacing: 2px;
		    border-radius: 7px;
		    color: black;
		    
    
 }
 .nv ul li a:hover{
 	color: white;
 	background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
		}
	
			/* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
  position: relative;
  top: 80px; left: 375px; width: 50px;
  border-radius:100px;
  
}
/* Style the icon bar links */
.icon-bar a {
	border: 3px solid white;
  display: block;
  text-align: center;
  padding: 4px;
  transition: all 0.3s ease;
  color: white;
  font-size: 15px;
  border-radius:150px;
}
/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}
.instagram {
  background: red;
  color: white;
}
.linkedin {
  background: #007bb5;
  color: white;
}
.facebook
{
	background: blue;
	color: white;
}

		}
	</style>
	<title>About Me</title>
 
 
</head>
<body style= background-image:url(img/bg.jpg);>
	<div  class="nv">
	<ul >
				<li class="active"><a  href="index.php" >Home</a></li> </ul></div>
	
			<div id="main">
			
				<h2 style="position:relative; left: 150px; font-family: 'Poppins',sans-serif; text-shadow: 3px 2px 5px grey;">SHRUTI HARLALKA</h2>
				<centre><img style="width:130px; height: 130px; border-radius:20px;border: 3px solid white ;position:relative; left:180px;box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
				0 32px 64px -48px rgba(0,0,0,0.5); " src="img/self.jpg"></centre>
			    <p style= "position: relative; left:20px; font-family:Arial, Helvetica, sans-serif;" >
				I, as a student of Computer Science Branch pursuing B.tech from Swami Kheshvanand Institute of Technology Management and Gramothan, Jaipur.
				In 2020, I developed interest in Web Development and other areas to apply my theoretical knowledge and excel in practical world. Currently working as an intern with The Sparks Foundation.
				<br>Looking for an organization which provides me the opportunity to improve
				my skills and knowledge to growth along with the organization objective.
			  </p>
			</div>
<!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- The social media icon bar -->
<div class="icon-bar">
  
<a href="https://www.facebook.com/shruti.harlalka.925/" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="https://www.instagram.com/shrutiiharlalka/" class="instagram"><i class="fa fa-instagram"></i></a>
  <a href="https://www.linkedin.com/in/shruti-harlalka-982734155/" class="linkedin"><i class="fa fa-linkedin"></i></a>
</div>
</body>
</html>
