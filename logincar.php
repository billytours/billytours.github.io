<!DOCTYPE html>
<html lang="en-US">
    <head>
	<meta charset="UTF-8" />
	<meta name="author" content="Billy Tours" />
	<meta name="description" content="Billy  Tours" />
	<meta name="keywors" content="give your keywords for SEO" />
	
	<title>Billy Tours</title>
	</head>
	<style type="text/css">
*{
	padding: 0 0;
	margin:0 0;
}
body{
    font-family: arial,sans-seriff;
	line-height: 25px; 
}
.wrapper{
	
	width:90%;
	margin: 0 auto;
	padding:1% 1%;
}
.clearfix:after{
	content:90%;
	visibility:hidden;
	display:block;
	height:0;
	clear:both;
}
.header{
    	background-color:brown;
		color:white;
}
.menu ul{
   list-style-type:none;

}
.menu ul a{
	color:darkbue;
	text-decoration:none;
	padding:1%;
}
.menu ul a:hover{
	 background-color:brown;
	 color:white;
}
.menu ul a li{
	display:inline;
}
.main{
	margin:1% 0;
	
}
.main h3{
	color:purple;
}
.cars{
	width:23%;
	border:0px solid grey;
	margin:1%;
	float:left;
	text-align:center;
}
.cars:hover{
	box-shadow:0 0 3px 3px silver;
}
.cars img{
	width:100%;
}
.cars .car-title{
	font-weight:bold;
	color:darkblue;
	padding:1%;
	width:100%;
}
.cars .car-added,.cars .car-location{ 
	font-weight:bold;
	font-size:90%;
	color:darkblue;
	padding:1%;
	width:100%;
}
.car .btn-Request car{
	padding:1%;
	margin:20%;
	background-color:purple;
	color:white;
}
.car-request img{
	width:100%;
	float:left;
	padding:2%
	margin:2%;
}
.main .request-details{
	width:50%;
	margin:0 auto;
	border:2px solid darkblue; 
	padding:2%;
	margin:2% auto;
}
.main .request-details h3{
	margin-bottom:2%;
}
.main .request-details .name{
	width:20%;
	float:left;
}
.main .request-details input[type='text'],.main .request-details input[type='password'],
.main .request-details input[type='tel'],.main .request-details textarea{
	padding:1%;
	margin:0.5%;
	width:70%;
	
}
.main .request-details input[type='submit']{
	padding:2%;
	background-color:purple;
	color:white;
	margin-left:20%;
}
.main .request-details input[type='submit']:hover{
	box-shadow:0 0 3px 3px red;
}

.main .request-details input[type='reset']:hover{
	box-shadow:0 0 3px 3px red;
}
.main .request-details input[type='reset']{
	padding:2%;
	background-color:darkred;
	color:white;
}

.footer{
      background-color:brown;
      color:white;	
} 
.footer p{
	   text-align:center;
	
}
.footer p a{
	color: lightblue  ;
}
.footer p a:hover{
	text-decoration: none;
}

</style>
	<body>
	<header class="header">
	<div class="wrapper">
	 <h1>Billy  Tours</h1>
	</div>
	  
	</header>

	
	
	    <div class="main">
		<div class="wrapper">
		<div class="request-details">
		<h3>Log In Admin</h3>
		   <form>
		       <span class="name">Username</span>
			   <input type="text" name="username" placeholder="Enter First username" required="true" /><br />
			   
			    <span class="name">Password</span>
			   <input type="password" name="password" placeholder="Enter password" required="true" /><br />
			   
			   
			  
                <a href="index1.php">
			 <button type="button" class="btn-Request car">Log in</button>
			 </a>
			  
		   </form>
         
	
		</div>
		     
		</div>
	<footer class="footer">
	<div class="wrapper">
	<p>&copy;<a href="#">Billy Mwasi Tours</a>. All rights reserved 2019.</p>
	</div> 
	  
	</footer>	
	 
	</body>

</html>