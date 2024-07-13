
<?php
  session_start();
  require('admin/includes/dbconnection.php');
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
    <title>patient appointment</title>
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
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="social-linked">
                <ul class="list-inline">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="list-inline text-right tac-smd">
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
     
      <header class="header-nav">
        <div class="main-header-nav navbar-scrolltofixed">
          <div class="container">
            <nav
              class="navbar navbar-default navbar-sticky navbar-scrollspy bootsnav menu-style1"
              data-minus-value-desktop="70"
              data-minus-value-mobile="55"
              data-speed="1000"
            >
             
              <div class="top-search">
                <div class="container">
                  <div class="input-group">
                    <span class="input-group-addon"
                      ><i class="fa fa-search"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search"
                    />
                    <span class="input-group-addon close-search"
                      ><i class="fa fa-times"></i
                    ></span>
                  </div>
                </div>
              </div>
              

              <div class="container">
                
                <div class="attr-nav">
                  <ul>
                    
                    <li class="search">
                      <a href="#"><i class="fa fa-search"></i></a>
                    </li>
                    
                  </ul>
                </div>
           
                <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="nav navbar-nav navbar-left">
                    <li class="active scroll"><a href="#home">Home</a></li>
                    <li><a href="appointment.php">Appointment</a></li>
                    <li><a href="doctor-schedule.php">Doctor Schedule</a></li>
                    <li class="active scroll"><a href="#service">Services</a></li>
                    <li class="active scroll"><a href="#contact">Contact</a></li>
                    
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </header>

      <div id="home" class="ulockd-home-slider">
        <div class="container-fluid">
          <div class="row">
              <div class="carousel-inner carousel-zoom">
                <div class="item active">
                  <img
                    class="img-responsive"
                    src="images/home/h7.jpg"
                    alt="h7.jpg"
                  />
                  <div class="carousel-caption style1">
                    <h1 class="cap-txt" style="color: green;">
                      Best Symptom Finder
                    </h1>
                    <p style="color: teal;">
                      Giving The Best Solutions
                    </p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <!-- Our About -->
      <section id="about" class="ulockd-about bgc-snowshade2">
        <div class="container">
          <div class="row">
           
          </div>
          <div class="row">
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
              <div class="about-box text-center">
                <div class="ab-icn">
                  <span class="flaticon-sign bgc-thm"></span>
                </div>
                <h3>Existence</h3>
                <p>
                  We Have Been Existing For Years And Our Goals 
                  is To Serve as valuable resources for health related Information.
                </p>
                
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
              <div class="about-box text-center">
                <div class="ab-icn">
                  <span class="flaticon-emergency-ambulance bgc-thm"></span>
                </div>
                <h3>Emergency</h3>
                <p>
                  For any enquires or emergency always contact us
                </p>
               
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
              <div class="about-box text-center">
                <div class="ab-icn">
                  <span class="flaticon-people-8 bgc-thm"></span>
                </div>
                <h3>Apointments</h3>
                <p>
                  Book your appointment with us to reduce the rate of queing 
                  and missing of schedule.
                </p>
                
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
              <div class="about-box">
                <div class="ab-icn text-center">
                  <span class="flaticon-clock-2 bgc-thm"></span>
                </div>
                <h3 class="text-center">Opening Hour</h3>
                <ul class="list-group">
                  <li class="list-group-item">
                    <strong>Mon - Fri </strong>
                    <span class="badge bgc-thm"> 8:00 - 20:30</span>
                  </li>
                  <li class="list-group-item">
                    <strong>Saturday </strong>
                    <span class="badge bgc-thm"> 8:30 - 20:30</span>
                  </li>
                  <li class="list-group-item">
                    <strong>Sunday </strong>
                    <span class="badge bgc-thm"> 9:00 - 20:30</span>
                  </li>
                </ul>
              </div>
            </div>
   
            </div>
            
          </div>
        </div>
      </section>


      <!-- Our Service -->
      <section id="service" class="ulockd-service bgc-snowshade2 ulockd-pb30">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <div class="ulockd-main-title">
                <h2 class="text-uppercase">
                  Our <span class="text-thm">Service</span>
                </h2>
                <p>
                  Here are the services we offer
                </p>
                <div class="mt-separator"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-medical-4 text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Qualified Doctors</h4>
                  <p>
                    A  degree in professional and specialized degree
                    granted for concentrates in fields related with medical.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-person-1 text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>24/7 Service</h4>
                  <p>
                    The Specialized and Experienced Doctors in our Doctor
                    Panel are consistently there and prepared every
                    day.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-medical-1 text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Cancer Clinic</h4>
                  <p>
                    At Dignity Health, we offer world-class malignant growth
                    care 
                  </p>
                 
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-medical-3 text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Blood Test</h4>
                  <p>
                    Blood tests help doctors check for certain diseases,
                    conditions and your organs and show how well treatments are
                    working.
                  </p>
                 
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-sign text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Rehabilitation</h4>
                  <p>
                    Rehabilitation is care that can help to improve abilities
                    that you need for daily life abilities are physical, mental,
                    and cognitive.
                  </p>
                 
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-tool text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Pathology</h4>
                  <p>
                    Pathology it is the bridge between science and medicine.
                    Doctors and scientists working in pathology are experts in
                    disease
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-kidney text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Kidney Disease</h4>
                  <p>
                    Kidney disease affects huge adults people. It occurs when
                    your kidneys become damaged and can't perform their
                    function.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-signs text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Smoke Prohibited</h4>
                  <p>
                    Smoking is a practice in which a substance is burned and the
                    resulting smoke is breathed in tasted and absorbed into.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-people-2 text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Primary Checkup</h4>
                  <p>
                    They are featuring the significance of counteraction, as a
                    the quantity of patients requiring clinical treatment.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-medical-2 text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Orthopedic</h4>
                  <p>
                    Orthopedics is the part of medication worried about the
                    musculoskeletal framework and bones, joints, tendons
                  </p>
                 
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-folder text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Medical counselling</h4>
                  <p>
                    super-strength clinical and dental courses
                    in government-run/helped schools and universities.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-prl5">
              <div class="ficon-box text-center hvr-shadow ulockd-mb20">
                <div class="ficon">
                  <span
                    class="flaticon-circle text-thm"
                    title="Feature Icon Box"
                  ></span>
                </div>
                <div class="fib-details">
                  <h4>Medicine Facilities</h4>
                  <p>
                    Depiction Medicine is the science and practice of building
                    up the analysis, visualization, treatment, and counteraction
                    of illness.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      
      <section id="contact" class="ulockd-contact">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <div class="ulockd-main-title">
                <h2 class="text-uppercase">
                  CONTACT <span class="text-thm">DETAILS</span>
                </h2>
                <p>
                  For More Details You could contact us here
                </p>
                <div class="mt-separator"></div>
              </div>
            </div>
          </div>
          <div class="row">
          
            <div class="col-md-8">
              <div class="ulockd-contact-form">
                <form
                  id="contact_form"
                  name="contact_form"
                  
                >
                  <div class="messages"></div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <input
                          id="form_name"
                          name="form_name"
                          class="form-control ulockd-form-fg required"
                          placeholder="Your name"
                          required="required"
                          data-error="Name is required."
                          type="text"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input
                          id="form_email"
                          name="form_email"
                          class="form-control ulockd-form-fg required email"
                          placeholder="Your email"
                          required="required"
                          data-error="Email is required."
                          type="email"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input
                          id="form_phone"
                          name="form_phone"
                          class="form-control ulockd-form-fg required"
                          placeholder="Phone"
                          required="required"
                          data-error="Phone Number is required."
                          type="text"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input
                          id="form_subject"
                          name="form_subject"
                          class="form-control ulockd-form-fg required"
                          placeholder="Subject"
                          required="required"
                          data-error="Subject is required."
                          type="text"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea
                          id="form_message"
                          name="form_message"
                          class="form-control ulockd-form-tb required"
                          rows="12"
                          placeholder="Your massage"
                          required="required"
                          data-error="Message is required."
                        ></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group ulockd-contact-btn">
                        <input
                          id="form_botcheck"
                          name="form_botcheck"
                          class="form-control"
                          value=""
                          type="hidden"
                        />
                        <button
                           name="add-appointment"
                          class="btn btn-default ulockd-btn-thm2"
                          
                        >
                          SUBMIT
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
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
                Copyright© 2024<a class="color-white"></a> All right reserved.
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
