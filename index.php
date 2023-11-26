<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <style>
        *
        {
            margin: 0;
            padding: 0;
        }
        body
        {
            min-height: 100vh;
            width: 100%;
            height:730px;
            background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(bg.png);
            background-size: cover;
            
            position: relative;
            
        }
        .logo
        {
             padding-left: 6.6rem;
             padding-top: 0.9rem;
             
        }
        
      .sign
      {
          width: 70%;
          background: #E50914;
          color: #ffffff;
          border-radius: 5px;
          
          font-size: 16px;
          height:40px;
      }
    select
      {
          padding: 8px 22px;
          font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
          width: 75%;
      }
      .email
      {
          height: 48px;
          padding: 10px 10px 0;
          width: 100%;
      }
      .submit
      {
           height: 48px;
          padding: 10px 10px 0;
          width: 100%;
          background-color: #E50914;
          color:white;
          font-size:20px;
          text-align: center;
      }
        hr
        {
            height:15px;
            border: 0;
            background: #00000066;
        }
        .h
        {
           background-color: black; 
           
        }
        .second
        {
            padding:95px;
          
            color:white;
           
        }
        .tv
        {
           padding: 195px;
           
           background-image: url('tv.png');
           opacity:0.5;
        }
        
        .tv video {
    position: absolute;
    top: 55px; /* Adjust top position */
    left: 90px;
    /* Adjust left position */
} 
    </style>
    <body>
        <div class="container-fluid ">
            <div class="row">
            
                <div class="row">
                    <div class="col-md-6 logo">
                        <a href="index.php"><img src="logo.png" width="118px" height="76px"></a>
                    </div>
                    <div class="col-md-6" >
                        <div class="col-md-6 k" style="padding-left: 150px;padding-top: 30px;padding-bottom: 24px;">
                            <select> 
                                <option>English</option>
                                <option>हिन्दी</option>
                            </select>
                        </div>
                        <div class="col-md-6" style="padding-left: 150px;padding-top: 30px;padding-bottom: 24px;">
                            <input type="submit" value="Sign In" class="sign">
                        </div>
                    </div>
                     </div> 
                    <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                         <center style="padding-top: 150px;color:white;font-size: 50px;font-weight: bold;">Unlimited movies, TV <br>shows and more.</center>
                         <center style="color:white;font-size:26px;">Watch anywhere. Cancel anytim.</center><br>
                         <center style="color:white;font-size:18px;">Ready to watch? Enter your email to create or restart your membership.</center><br><br>
                         <div class="col-md-1"></div>
                         <div class="col-md-6" >
                             <center><input type="email" class="email" placeholder="Email Address"></center> 
                         </div>
                         <div class="col-md-4">
                             <input type="submit" value="Get Started >" class="submit">
                         </div>
                         <br>
                         
                         <div class="col-md-1"></div>
                         <br>
                         
                    </div>
                    <div class="col-md-2"></div>
                    </div>
                <br><br><br><br><br><br><hr>
                <div class="row h">
                  
                    <div class="col-md-6 second">
                        <b><center style="font-weight:bold;font-size:40px;">Enjoy on your TV</center></b><br><br>
                        <center style="font-size:26px;text-align: left;">Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</center>
                    </div>
                    <div class="col-md-6 tv">
                           
                        <video width="450" height="350" controls muted loop autoplay>
                           <source src="video.mp4" >
                           
                           <source src="movie.ogg" >
                          </video>
                           
                        

                    </div>
                  
                </div>
           </div>  
            
        </div>
         
    </body>
</html>
