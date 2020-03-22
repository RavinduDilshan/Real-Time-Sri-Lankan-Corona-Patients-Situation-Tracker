<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0579882943.js" crossorigin="anonymous"></script>

      <style>

body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image:url('images/test.jpg');

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

    .card-text{
    
    font-size:50px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    text-align:center;
    }

    .card-title{
      text-align:center;
    }

    i.fas {
      padding-left: 75px;
    
  }

      
      </style>





    <title>Tracker</title>
</head>
<body class="bg">

    <br>
    <div class="container">

        <center><h2>Real Time Sri Lankan Corona Patients Situation Tracker</h2></center>

        <br>
        <br>
        <br>


        
        <?php 

                    $json = file_get_contents('http://www.hpb.health.gov.lk/api/get-current-statistical');
                    $obj = json_decode($json);

                    $localNewCases=$obj->data->local_new_cases;
                    $localTotalCases=$obj->data->local_total_cases;
                    $localDeaths=$obj->data->local_deaths;
                    $localRecovered=$obj->data->local_recovered;
             
            ?>

        
        <div class="row">
            <div class="card col-md-3 text-white bg-primary border-secondary " style="width: 18rem;">

            
                
                <div class="card-body">
                
                <i class="fas fa-hospital fa-3x"></i>
                
                
                  <h5 class="card-title">Local New Cases</h5>
                  <p class="card-text"><?php echo $localNewCases ?></p>
                  
                </div>
              </div>

              <div class="card col-md-3 text-white bg-info border-secondary" style="width: 18rem;">
               
                <div class="card-body">
                <i class="fas fa-ambulance fa-3x"></i>
                  <h5 class="card-title">Local Total Cases</h5>
                  <p class="card-text"><?php echo $localTotalCases ?></p>
                  
                </div>
              </div>

              <div class="card col-md-3 text-white bg-danger border-secondary" style="width: 18rem;">
               
                <div class="card-body">
                
                <i class="fas fa-procedures fa-3x"></i>
                  <h5 class="card-title">Local Deaths</h5>
                  <p class="card-text"><?php echo $localDeaths ?></p>
                 
                </div>
              </div>

              <div class="card col-md-3 text-white bg-warning border-secondary" style="width: 18rem;">
                
                <div class="card-body">
                <i class="fas fa-clinic-medical fa-3x"></i>
                  <h5 class="card-title">Local Recovered</h5>
                  <p class="card-text"><?php echo $localRecovered ?></p>
                 
                </div>
              </div>
         
        </div>
        
      </div>



  
</body>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://amazingsweb.com/"> Amazingsweb.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</html>