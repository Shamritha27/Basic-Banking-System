<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Banking Systerm</title>
  
<style>
    #footer
    {
      padding-top:7px;
      padding-bottom:27px;
      position:fixed;
      bottom:0px;
      width:100%;
      height:50px;
      color:white;
      background:rgb(65, 39, 19);
      text-align:center;
    }

   #text{
       padding-top:15px;
       padding-left:50px;
       padding-right:500px;
       font-family: serif; 
    }

   #title{
       padding-top:100px;
       padding-left:120px;
       padding-right:490px;
       font-family: raleway;
    }

    .image{
        padding-left:700px;
        top:-300px;
        margin-top:-300px;
        padding-top:0px;
        }

    img {
        border: 1px solid #ddd; /* Gray border */
        border-radius: 8px;  /* Rounded border */
        padding: 5px; /* Some padding */
        width: 650px; /* Set a small width */
        }

    img:hover {
              box-shadow: 0 0 6px 6px rgba(179,75,1,2);
              color: #999;
              text-decoration: none;
              cursor: pointer;
     }

     .btn {
           border-radius: 37px;
           padding:12px;
           padding-right:20px;
           padding-left:20px;
           font-size:20px;
           background-color:rgb(105, 62, 40);
           color:white; 
          }

    button:hover {
          background-color:#ffb121; 
          color: white;
           }
    body {
         width:1250px;
         background-image: url('bank.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;  
         background-size: cover;
        }

</style>

  </head>

  <body>
  
   <?php
  include 'navbar.php';
  ?> 

  <div class="container-fluid">
    <div class="row">

        <div class="heading text-center font-size-80px" id="title">
            <h style="font-size:48px;"><b>BANKING SYSTEM</b></h>
        </div>
    
        <div class="row activity text-center" id="text">
            <div class="col-md-10 act">
               <p><h2>" Banking system is a continuous process for any country, 
                 which shows the firmness of the country’s economy!! "</h2></p>
                 
                 <button onclick="location.href='transfermoney.php'" type="button" class="btn">View All Customers</button>
          </div>
      </div>

      <div class="image">
           <div class="col-md-2 act">
               <img src="bank5.jpg" style="width:480px;height:340px;border:2px solid black;border-radius: 8%;">
           </div>
      </div>

</div>
  </div>
      
      <div id="footer">
      <pre style="color:white;font-family:Verdana;">Made by S.Shamritha of The Sparks Foundation || shamritha.e0320032@sret.edu.in   <a href="https://www.linkedin.com/in/shamritha-s-92a71b207" style="color:white;"> <i class="fa fa-linkedin-square icon fa-2x" ></i></a>  <a href="mailto:sharithredss@gmail.com" style="color:white;"> <i class="fa fa-envelope icon fa-2x" ></i></a>  <a href="https://github.com/Shamritha27" style="color:white;"> <i class="fa fa-github icon fa-2x" ></i></a>
      
      </pre>
      
      </div>

      </body>
      </html>
