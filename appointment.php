<?php
session_start();
if(empty($_SESSION['name']))
{
  header('location: admin/index.php');
}

include('admin/includes/dbconnection.php');
    
// $fetch_query = mysqli_query($connection, "SELECT MAX(id) AS id FROM tbl_appointment");
// $row = mysqli_fetch_row($fetch_query);

//  if($row[0]==0)
// {
//  $id = 1;
// }
// else
// {
//  $id = $row[0] + 1;
// }

if(isset($_REQUEST['add-appointment']))
{

// $APT_num = 'APT-'.$id;
$Name = $_REQUEST['Name'];
$Email = $_REQUEST['Email'];
$doctor_name = $_REQUEST['doctor_name'];
$specialization = $_REQUEST['specialization'];
$Phone = $_REQUEST['Phone'];
$Date = $_REQUEST['Date'];
$time = $_REQUEST['time'];
$message = $_REQUEST['message'];



$insert_query = mysqli_query($connection, "INSERT INTO tbl_appointment SET  Name='$Name', Email='$Email', doctor_name='$doctor_name', specialization='$specialization',Phone='$Phone', Date='$Date', time='$time',  message='$message'");

if($insert_query>0)
{
   echo  "Appointment created successfully";
}
else
{
   echo  "Error!";
}
}
?>

<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/theme-color.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <title>Appointment</title>
    <link
      href="images/favicon.ico"
      sizes="128x128"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
  </head>
  <body>
    <div class="wrapper">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="welcm-ht text-right">
                <ul class="list-inline">
                  <li>
                    <div class="dropdown lang-button text-center">
                      <button class="dropbtn">Language</button>
                      <div class="dropdown-content">
                        <a href="#">
                          <span
                            ><img src="images/resource/english.jpg" alt=""
                          /></span>
                          English</a
                        >
                        <a href="#">
                          <span
                            ><img src="images/resource/franch.jpg" alt=""
                          /></span>
                          French</a
                        >
                        
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ulockd-inner-home">
        <div class="container text-center">
          <div class="row">
            <div class="inner-conraimer-details">
              <div class="col-md-12">
                <h1 class="text-uppercase">APPOINTMENT</h1>
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

      <section class="ulockd-about-one inner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-md-7">
              <!-- Appointment Form Starts -->
              <form
               
                class="appointment_form text-center"
                action=""
                method="post"
              >
                <div class="messages"></div>
                <div class="row">

                  <div class="col-md-12">
                    <h2>Schedule An Appointment</h2>
                    <p>Let's Schedule An Appointment For Our Checkup</p>

                    <!-- <div class="form-group text-left">
                    <label>APT-No <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="APT_num" value="<?php if(!empty($id)) { echo 'APT-'.$id; } else { echo "APT-1"; } ?>" disabled> 
                    </div> -->
                    <div class="form-group text-left">
                      <label for="form_name"
                        ><i class="fa fa-user-o"></i> Name
                        <small>*</small></label
                      >
                      <input
                        id="Name"
                        name="Name"
                        class="form-control"
                        placeholder="enter a name"
                        required="required"
                        data-error="Name is required."
                        type="text"
                      />

                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group text-left">
                      <label for="form_email"
                        ><i class="fa fa-envelope-open-o"></i> Email
                        <small>*</small></label
                      >
                      <input
                        id="Email"
                        name="Email"
                        class="form-control required email"
                        placeholder="enter an email"
                        required="required"
                        data-error="Email is required."
                        type="email"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group text-left">
                      <label for="form_name"
                        ><i class="fa fa-user-o"></i> Doctor Name
                        <small>*</small></label
                      >
                       <select class="form-control" name="doctor_name" required>
                                            <option value="">Select</option>
                                            <?php
                                        $fetch_query = mysqli_query($connection, "SELECT doctor_name FROM doctor");
                                        while($row = mysqli_fetch_array($fetch_query)){
                                        ?>
                                            <option><?php echo $row['doctor_name']; ?></option>
                                            <?php } ?>
                                        </select>
                    </div>
                  </div>



                  <div class="col-md-12">
                    <div class="form-group text-left">
                      <label for="form_name"
                        ><i class="fa fa-user-o"></i> Specialization
                        <small>*</small></label
                      >
                      <select class="form-control" name="specialization" required>
                                            <option value="">Select</option>
                                            <?php
                                        $fetch_query = mysqli_query($connection, "SELECT specialization FROM doctor");
                                        while($row = mysqli_fetch_array($fetch_query)){
                                        ?>
                                            <option><?php echo $row['specialization']; ?></option>
                                            <?php } ?>
                                        </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group text-left">
                      <label for="form_phone"
                        ><i class="fa fa-phone"></i> Phone
                        <small>*</small></label
                      >
                      <input
                        id="Phone"
                        name="Phone"
                        class="form-control required"
                        placeholder="enter a phone"
                        required="required"
                        data-error="Phone Number is required."
                        type="text"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group text-left">
                      <label for="form_date"
                        ><i class="fa fa-calendar-check-o"></i> Date
                        <small>*</small></label
                      >
                      <input
                        id="Date"
                        name="Date"
                        class="form-control required"
                        placeholder="enter a date"
                        required="required"
                        data-error="Subject is required."
                        type="date"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group text-left">
                      <label for="form_date"
                        ><i class="fa fa-calendar-check-o"></i> Time
                        <small>*</small></label
                      >
                      <input
                        id="time"
                        name="time"
                        class="form-control required"
                        placeholder="enter a time"
                        required="required"
                        data-error="Subject is required."
                        type="time"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  
                </div>
                <div class="form-group text-left">
                  <label for="form_name"
                    ><i class="fa fa-file-text-o"></i> Message</label
                  >
                  <textarea
                    id="message"
                    name="message"
                    class="form-control required"
                    rows="5"
                    placeholder="type in a message"
                    required="required"
                    data-error="Message is required."
                  ></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group text-center">
                  <input
                    id="form_botcheck"
                    name="form_botcheck"
                    class="form-control"
                    value=""
                    type="hidden"
                  />
                  <button
                    type="submit" name="add-appointment"
                    class="btn btn-lg ulockd-btn-thm2"
                    
                  >
                    Place Appointment
                  </button>
                </div>
              </form>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="ulockd-about-thumb">
                <img
                  class="img-responsive img-whp"
                  src="images/about/1.png"
                  alt="1.png"
                />
                <h2 class="ulockd-about-thumb-ttl">
                  Hospitality <span class="text-thm">Care </span>
                </h2>
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
                <a
                  class="color-white"
                  target="_blank"
                  >2024</a
                >
                All right reserved.
              </p>
            </div>
          </div>
        </div>
      </section>

      <a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
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

    <script language="JavaScript" type="text/javascript">
function confirmDelete(){
    return confirm('Are you sure want to delete this Doctor?');
}
</script>
  </body>

 
</html>
