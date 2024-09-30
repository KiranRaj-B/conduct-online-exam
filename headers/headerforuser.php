<!DOCTYPE html>
<html lang="en">
<head>
  <title>ONLINE EXAM|KIRAN RAJ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="overflow-x: hidden !important;">
  <style>
    body {
      overflow-x:hidden;
    }
     .navbar .btn {
         margin: 0 5px;
         border-radius: 0; /* Makes the buttons square */
     }
     .navbar .btn-signup {
         background-color: #000;
         color: white;
         border-radius: 8px;
     }
     .navbar .btn-login {
         border: 2px solid #0056d2;
         color: #0056d2;
         border-radius: 8px;
     }
     .navbar .btn-signup:hover, .navbar .btn-login:hover {
         background-color: #0041a8;
         border-color: #0041a8;
         color: white;
     }
  </style>

  <!-- NAVBAR 1 START -->
  <!-- <div class="container mt-2" style="border-bottom: 1px solid grey;">
    <div class="row justify-content-center">
      <div class="col-4 col-sm-6 col-lg-6">
        <div class="left-image">
          <a href="../dashboard/home"><img class="d-block" src="..\logo\astrateks-logo.png" alt="" style=""></a>
        </div>
      </div>
      <div class="col-8 col-sm-6 col-lg-6">
        <div class="right-image">
          <img class="d-block mt-2" src="..\logo\Logo.png" alt="" style="">
        </div>
      </div>
    </div>
    <style media="screen">
      .container .row .left-image img{
        max-height: 65px;
      }
      .container .row .right-image img{
        max-height: 45px;
        align-items: right;
        margin-left: auto;
        margin-right: 0;
      }
      @media only screen and (max-width: 600px) {
        .container .row .left-image img{
          max-height: 50px;
        }
        .container .row .right-image img{
          max-height: 35px;
          align-items: right;
          margin-left: auto;
          margin-right: 0;
        }
      }
    </style>
  </div> -->
  <!-- NAVBAR 1 END -->

  <!-- NAVBAR 2 START -->
  <div class="container-fluid bg-normal sticky-top" style="background: linear-gradient(to right, #00ccff 53%, #66ffff 100%);">
    <style>
      .container-fluid button{
      	border-radius: 0px;
        margin-left: 5px;
        color: white;
        font-weight: 700;
        max-height: 40px;
        font-size: px;
      }
      @media (max-width: 1205px) {
        .container-fluid button{
        	border-radius: 0px;
          margin-left: 5px;
          color: white;
          max-height: 40px;
          font-size: 13px;
        }
      }
      @media (max-width: 995px) {
        .container-fluid button{
          border-radius: 0px;
          margin-left: 5px;
          color: white;
          max-height: 40px;
          font-size: 12px;
        }
      }
      .container-fluid .navbar .collapse .navbar-nav{
        align-items: left !important;
        margin-left: 0px !important;
        margin-right: auto !important;
      }
      @media (min-width: 992px) {
        .container-fluid .navbar .collapse .navbar-nav{
          align-items: center !important;
          margin-left: auto !important;
          margin-right: auto !important;
        }
      }
      .container-fluid ul li a{
        font-size: 15px;
        color: black;
      }
      @media (max-width: 1205px) {
        .container-fluid ul li a{
          font-size: 12px !important;
          color: black;
        }
      }
      .container-fluid ul li{
       }
       .container-fluid .dropdown .dropdown-menu{
         border-radius: 0px;
         /* margin-left: 4px; */
         width: 90px;
       }
       @media (min-width: 922px) {
         .container-fluid .dropdown .dropdown-menu{
           border-radius: 0px;
           /* margin-left: 4px; */
           width: auto;
         }
       }
       .container-fluid .notification{
         background: #00e6e6;
         border-radius: 50%;
       }
       .container-fluid .notification i{
         color: black;
       }
       .container-fluid .notification i:hover{
         color: red;
       }
       .container-fluid .notification i sup{
         color: black;
         font-weight: bold;
         font-size: 16px;
       }
       .container-fluid .user{
         margin-left: -30px;
         height: 35px;
       }
       @media (max-width: 920px) {
         .container-fluid .user{
           margin-top: 10px;
           margin-left: 10px !important;
           height: 35px;
         }
       }
       @media (max-width: 1000px) {
         .container-fluid .user{
           margin-left: 0px;
           height: 35px;
         }
       }
    </style>
    <nav class="navbar navbar-expand-xl sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav">
                    <a href="../User/home.php" class=""><button type="button" class="btn">Home</button></a>
                    <a href="../User/aboutus.php" class=""><button type="button" class="btn">About Us</button></a>
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-normal dropdown-toggle" data-bs-toggle="dropdown">Tutorials</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../User/htmlcss.php">HTML and CSS</a></li>
                            <li><a class="dropdown-item" href="../User/java.php">Java</a></li>
                            <li><a class="dropdown-item" href="../User/python.php">Python</a></li>
                            <li><a class="dropdown-item" href="../User/sql.php">SQL</a></li>
                            <li><a class="dropdown-item" href="../User/php.php">PHP</a></li>
                            <li><a class="dropdown-item" href="../User/bootstarp.php">BOOTSTRAP</a></li>
                        </ul>
                    </li>
                    <a href="../User/contact_us.php" class=""><button type="button" class="btn">Contact Us</button></a>
                    <a href="../home/logout" class="logout"><button type="button" class="btn logout">User Logout <i class="fa fa-sign-out"></i></button></a>
                  </ul>
                <!-- <div class="ms-auto">
                    <a href="../home/signup.php"><button type="button" class="btn btn-signup">Sign Up</button></a>
                    <a href="../home/login.php"><button type="button" class="btn btn-login">Login</button></a>

                </div> -->
            </div>
        </div>
    </nav>


    <!-- NOTIFICATION OFFCANVAS START -->
    <div class="offcanvas offcanvas-end" id="notification" style="overflow-y: scroll;">

     <style media="screen">
       .offcanvas .all_trash{
         text-decoration: none;
         margin-left: 20px;
         font-size: 14px;
         color: darkblue;
         width: 80px;
         border: none;
         background: none;
         min-width: 50px;

       }
       .offcanvas .all_trash:hover{
         text-decoration: none;
         margin-left: 20px;
         font-size: 14px;
         color: red;
         font-weight: bold;
         transition: 0.1s;
         width: 80px;
       }
     </style>
      <hr>
      <div id="notify_ajax">
      </div>
      <style media="screen">
        .offcanvas .offcanvas-section{
          height: 180px;
          background: #e6ffff;
          cursor: pointer;
          border-bottom: 1px solid #e0ebeb;
          padding: 20px;
        }
        .offcanvas .offcanvas-section:hover{
          height: 180px;
          background: white;
          cursor: pointer;
          border-bottom: 1px solid #e0ebeb;
        }
        .offcanvas .offcanvas-section a{
          text-decoration: none;
          color: blue;
          font-size: 14px;
        }
        .offcanvas .offcanvas-section a:hover{
          text-decoration: underline;
          color: blue;
          font-size: 14px;
        }
        .offcanvas .offcanvas-section p{
          text-decoration: none;
          color: black;
          font-size: 14px;
        }
        .offcanvas .offcanvas-section .date_time{
          margin-top: -25px;
          font-size: 12px;
        }
        .offcanvas .offcanvas-section .close i{
          color: black;
        }
        .offcanvas .offcanvas-section .close i:hover{
          color: red;
          transition: 0.3s;
        }
      </style>
   </div>
    <!-- NOTIFICATION OFFCANVAS END -->
  </div>
  <!-- NAVBAR 2 END -->

  <style type="text/css">
    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
    	.dropdown-menu li{
    		position: relative;
    	}
    	.dropdown-menu .submenu{
    		display: none;
    		position: absolute;
    		left:100%;
        top:-7px;
    	}
    	.dropdown-menu .submenu-left{
    		right:100%; left:auto;
    	}
    	.dropdown-menu > li:hover{ background-color: #f1f1f1 }
    	.dropdown-menu > li:hover > .submenu{
    		display: block;
    	}
    }
    /* ============ desktop view .end// ============ */
    /* ============ small devices ============ */
    @media (max-width: 991px) {

    .dropdown-menu .dropdown-menu{
    		margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
    }
    }
    /* ============ small devices .end// ============ */
  </style>
  <!-- MULTILEVEL DROPDOWN JS AND CSS END -->

  <style>
    ::-webkit-scrollbar {
      width: 10px;
    }
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 0px;
    }
    ::-webkit-scrollbar-thumb {
      background: #a1e6f0;
      border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #33ccff;
    }
  </style>

</body>
