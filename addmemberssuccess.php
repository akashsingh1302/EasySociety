<html>
<head>
    <style>
          .bg-image{
    /* The image used */
    background-image:url("images/addsuccess.JPG");

  }
  body, html {
    height: 100%;
    margin: 0;
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-weight:100;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .bg-image {
    /* The image used */  
    /* Add the blur effect */
    filter: blur(8px);  
    -webkit-filter: blur(8px); 
    height: 100%; 
    
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .try{
    background-color: green;
    color:white;
    border-radius:5px;
    border:1px solid white;
    margin-top: 20px;
    padding:10px;
    text-decoration:None;
  }

  .try:hover{
    background-color:white;
    color:black;
    border:2px solid green;
  }
  
  /* Position text in the middle of the page/image */
  .bg-text {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    color: white;
    border: 3px solid #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 50%;
    padding: 40px;
    text-align: center;
  }
    </style>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet">
</head>
<body>
<div class="bg-image"></div>
<div class="bg-text">
<h2>A new Member Entry Generated Successfully.</h2>
<a href="layout backup/add_members.html" class="try">BACK TO DASHBOARD</a>
</div>
</body>
</html>