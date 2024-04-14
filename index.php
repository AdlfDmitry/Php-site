<?php
require_once 'db.php';    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bank</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/log 1.png" alt="Simple Bank Logo">
        </div>
        <h1>Simple Bank</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
       <center> <h2>Welcome to Simple Bank</h2> 
        <p>Your trusted partner in banking solutions.</p>
        
        
     </center>
    </section>
     <div class="container">
         <div class="button-container">
          <center>   
              <button class="btn" onclick=" window.location.href='admin_panel.php'">Browse Database </button>
            
         </center>
        </div>
        
    </div>
    
</body>
</html>
