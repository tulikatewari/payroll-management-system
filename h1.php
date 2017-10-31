<html>
<style>
.column {
    float: left;
    width: 30%;
    margin-bottom: 8px;
    padding: 20px;
}

/* Display the columns below each other instead of side by side on small screens */
@media (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}

/* Add some shadows to create a card effect */
.card {
    box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
    padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: black;
}

.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 2px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
}

.button:hover {
    background-color: #555;
}
</style>
</head>
<!--h1{
margin-top:0px;
text-align: left;
font-family: sans-serif, Arial;
font-size: 20px;
 }
h2{
text-align: center;
font-family: sans-serif, Arial;
font-size: 20px;
}
body{
background-color:lightblue;
}-->

<body background="http://wallpapercave.com/wp/oE14KTB.jpg">
 <link href="style1.css" rel="stylesheet">
 <ul>
   <li><a href="h1.php">About Us</a></li>
   <li><a href="h2.php">Contact Us</a></li>
   <li><a>Login As </a>
      <ul>
   <li><a href="newlogin.php"> Admin </a></li>
   <li><a href="newlogin.php"> Employee </a></li>
 </ul>
</li>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="E:\Tanvi Mody 2 20170420_013805.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>TANVI GUPTA</h2>
        <p class="title">ENROLLMENT NO.:150334</p>
        <p>Team Member 1</p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>TANYA RAGHAV</h2>
        <p class="title">ENROLLMENT NO.:150335</p>
        <p>Team Member 2</p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="E:\B612_20170311_172530.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>TANYA SINGH RATHORE</h2>
        <p class="title">ENROLLMENT NO.:150336</p>
        <p>Team Member 3</p>
    
        
      </div>
    </div>
  </div>
</div>
<div class="column">
    <div class="card">
      <img src="E:\Screenshot_2017-04-20-01-37-03-1.png" alt="John" style="width:100%">
      <div class="container">
        <h2>KRITIKA TRIPATHI</h2>
        <p class="title">ENROLLMENT NO.:150337</p>
        <p>Team Member 4</p>
    
        
      </div>
    </div>
  </div>
</div>
<div class="column">
    <div class="card">
      <img src="E:\DSC_0143.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>TULIKA TEWARI</h2>
        <p class="title">ENROLLMENT NO.:150338</p>
        <p>Team Member 5</p>
    
        
      </div>
    </div>
  </div>
</div>
<!--<img src="C:\Users\DELL\Desktop\images.jpg"  >-->


</body>
</html> 