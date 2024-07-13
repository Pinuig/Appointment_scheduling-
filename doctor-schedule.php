 	<?php
session_start();
include('admin/includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/theme-color.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <title>doctor schedule</title>
    <link
      href="images/favicon.ico"
      sizes="128x128"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link
      href="images/favicon.ico"
      sizes="128x128"
      rel="shortcut icon"
      type="image/x-icon"
    />
  </head>
  <body>
    <div class="wrapper">
    
      <div class="ulockd-inner-home">
        <div class="container text-center">
          <div class="row">
            <div class="inner-conraimer-details">
              <div class="col-md-12">
                <h1 class="text-uppercase">Doctor Schedule</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ulockd-inner-page">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="ulockd-icd-layer">
                <ul class="list-inline ulockd-icd-sub-menu">
                  <li><a href="index.php"> HOME </a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Our SERVICE -->
      <section class="our-service">
        <div class="container">
          
          <div class="row">
         
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Schedule</h4>
                    </div>
                    
                </div>
                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>Doctor Name</th>
                                            <th>Specialization</th>    
                                            <th>Available Days</th>
                                            <th>Available Time</th>
                                            <th>Info</th>
                                          
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(isset($_GET['ids'])){
                                        $id = $_GET['ids'];
                                        $delete_query = mysqli_query($connection, "DELETE FROM doctor_schedule WHERE id='$id'");
                                        }
                                        $fetch_query = mysqli_query($connection, "SELECT * FROM doctor_schedule");
                                        while($row = mysqli_fetch_array($fetch_query))
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['doctor_name']; ?></td>
                                            <td><?php echo $row['specialization']; ?></td>
                                            <td><?php echo $row['available_days']; ?></td>
                                            <td><?php echo $row['start_time'].' - '.$row['end_time']; ?></td>
                                            <td><?php echo $row['message']; ?></td>
                                            
                                        
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
				
            </div>           
        </div>
            
          </div>
        </div>
      </section>

      <section class="ulockd-copy-right">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p class="color-white">
                Copyright©
                <a class="color-white"
                  >2024</a
                >
                All right reserved.
              </p>
            </div>
          </div>
        </div>
      </section>

    </div>
    
    <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootsnav.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/scrollto.js"></script>
    <script
      type="text/javascript"
      src="js/jquery-scrolltofixed-min.js"
    ></script>
    <script type="text/javascript" src="js/jquery.counterup.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/video-player.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="js/timepicker.js"></script>
    <script type="text/javascript" src="js/tweetie.js"></script>
   
    <script type="text/javascript" src="js/script.js"></script>
  </body>

</html>
