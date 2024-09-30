<html>
<head>
  <title>ONLINE TEST | KIRAN RAJ </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../home/styles.css">
  <?php include('../headers/headerbeforelogin.php') ?>
  <!-- <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <script src="js\bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <style>
  .big-heading {
  font-size: 4rem; /* Adjust font size as needed */
  }

  .text-bold {
  font-weight: bold;
  }
  </style>
</head>
<body class="light-dark-bg" data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="100">
<br>
    <div class="container">
      <center><h1 class="big-heading text-bold" style="color: blue;">Learn HTML</h1></center>
      <br>
      <center><h1 style="color:chocolate">HTML  Tutorials</h1></center>
      <br>
      <div class="topic-heading" id="bs5-containers">
        <h2>HTML Intruduction :</h2>
        <p>HTML is the standard markup language for Web pages.
          With HTML you can create your own Website.
          HTML is easy to learn - You will enjoy it!</p>
        <div class="example-box">
          <h5>HTML Example</h5>
          <div class="container bg-light">
            <!DOCTYPE html>
            <html>
            <head>
              <title>Page Title</title>
            </head>
            <body>
              <h1>This is a Heading</h1>
              <p>This is a paragraph.</p>
            </body>
            </html>
          </div>
        </div>
      </div>
      <br>
      <div class="html basics">
        <h2>HTML Basics :</h2>
        <h5>HTML Documents</h5>
          <p>All HTML documents must start with a document type declaration: <!DOCTYPE html>.</p>
          <p>The HTML document itself begins with < html> and ends with < /html>.</p>
          The visible part of the HTML document is between  < body> and /body>.
      </div>
      <br>
      <div class="htmnl headings">
        <h2>HTML Headings :</h2>
        HTML headings are defined with the < h1> to < h6> tags.
        < h1> defines the most important heading. < h6> defines the least important heading:
      </div>
      <br>
      <div class="">
      <h2>HTML Elements :</h2>
      <p>The HTML element is everything from the start tag to the end tag:</p>
      <tagname>Content goes here...</tagname>
      Examples of some HTML elements:
      <h1>My First Heading</h1>
      <p>My first paragraph.</p>
      </div>
      <div class="">
        <h2>HTML Attributes :</h2>
        <li>All HTML elements can have attributes</li>
        <li>Attributes provide additional information about elements</li>
        <li>Attributes are always specified in the start tag</li>
        <li>Attributes usually come in name/value pairs like: name="value"</li>
        <br>
      </div>
      <div>
        <h2>The src Attribute</h2>
        <h6>There are two ways to specify the URL in the src attribute:</h6>
        <p>1. Absolute URL - Links to an external image that is hosted on another website. Example: src="https://www.abc.com/images/img_girl.jpg".
        Notes: External images might be under copyright. If you do not get permission to use it, you may be in violation of copyright laws. In addition, you cannot control external images; it can suddenly be removed or changed.</p>
        2. Relative URL - Links to an image that is hosted within the website. Here, the URL does not include the domain name. If the URL begins without a slash, it will be relative to the current page. Example: src="img_girl.jpg". If the URL begins with a slash, it will be relative to the domain. Example: src="/images/img_girl.jpg".
        Tip: It is almost always best to use relative URLs. They will not break if you change domain.
      </div>
      <br>
      <h1>And etc..........</h1>
      <br>
      <center><h1 style="color:chocolate">HTML Forms</h1></center>
      <div class="">
        <h2>HTML Forms :</h2>

        <form action="">
          <label for="fname">First name:</label><br>
          <input type="text" id="fname" name="fname" value="Batch 8"><br>
          <label for="lname">Last name:</label><br>
          <input type="text" id="lname" name="lname" value="Team"><br><br>
          <input type="button" value="Submit">
        </form>
        <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
        <h4>Redio Button</h4>
        <p>Choose your favorite Web language:</p>

        <form>
          <input type="radio" id="html" name="fav_language" value="HTML">
          <label for="html">HTML</label><br>
          <input type="radio" id="css" name="fav_language" value="CSS">
          <label for="css">CSS</label><br>
          <input type="radio" id="javascript" name="fav_language" value="JavaScript">
          <label for="javascript">JavaScript</label>
        </form>
        <h5>And etc</h5>
      </div>
      <br>
      <div class="">
        <label for="cars">Choose a Bike: </label>
        <select>
          <option value="">Royal Enfield</option>
          <option value="">Honda</option>
          <option value="">GT 650</option>
          <option value="">Audi</option>
        </select>
        <h2>The < textarea> </h2>
        <textarea name="message" rows="5" cols="70">
        The cat was playing in the garden.
        </textarea>
        <br>
        <br>
        <form action="/action_page.php">
        <input list="browsers">
        <datalist id="browsers">
        <option value="Edge">
        <option value="Firefox">
        <option value="Chrome">
        <option value="Opera">
        <option value="Safari">
        </datalist>
        </form>
      </div>
<br>
      <center><h1 style="color:chocolate">HTML Graphics</h1></center>
      <br>
      <div class="">
        <h2>HTML SVG Graphics :</h2>
        <p>SVG (Scalable Vector Graphics)</p>
        <p>SVG defines vector-based graphics in XML, which can be directly embedded in HTML pages.</p>
        <p>SVG graphics are scalable, and do not lose any quality if they are zoomed or resized:</p>
        <p>SVG is supported by all major browsers.</p>
        <p>What is SVG?</p>
        <p>SVG stands for Scalable Vector Graphics</p>
        <p>SVG is used to define vector-based graphics for the Web</p>
        <p>SVG defines graphics in XML format</p>
        <p>Each element and attribute in SVG files can be animated</p>
        <p>SVG is a W3C recommendation</p>
        <p>SVG integrates with other standards, such as CSS, DOM, XSL and JavaScript</p>
        <!DOCTYPE html>
        <html>
        <body>
          <center><h3>SVG Circle</h3>
        <svg width="100" height="100">
          <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
        </svg>
        <h3>SVG Rectangule</h3>
        <svg width="400" height="120">
          <rect x="10" y="10" width="200" height="100" stroke="red" stroke-width="6" fill="blue" />
        </svg>
        <br>
        <br>
        <h3>SVG Star</h3>
        <svg width="300" height="200">
          <polygon points="100,10 40,198 190,78 10,78 160,198"
          style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
        </svg>
        <br>
        <br>
        <h3>SVG Gradient Ellipse and Text</h3>
        <svg height="130" width="500">
          <defs>
            <linearGradient id="grad1">
              <stop offset="0%" stop-color="yellow" />
              <stop offset="100%" stop-color="red" />
            </linearGradient>
          </defs>
          <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
          <text fill="#ffffff" font-size="45" font-family="Verdana" x="50" y="86">SVG</text>
          Sorry, your browser does not support inline SVG.
        </svg>
        </center>
      </body>
        </html>
      </div>
      <br>
      <center><h1 style="color:chocolate">HTML Multimedia</h1></center>
      <div class="">
        <h2>What is Multimedia?</h2>
                 <p>The first web browsers had support for text only, limited to a single font in a single color.
         <p>Later came browsers with support for colors, fonts, images, and multimedia!
         <p>The most common way to discover the type of a file, is to look at the file extension.
         <p>Multimedia files have formats and different extensions like: .wav, .mp3, .mp4, .mpg, .wmv, and .avi.Common Video Formats
         <p>Videoformats	There are many video formats out there.
         <p>The MP4, WebM, and Ogg formats are supported by HTML.
         <p>The MP4 format is recommended by YouTube.
      </div>
      <br>
      <br>
      <div class="">
        <h2>The HTML < video> Element</h2>
        <video width="320" height="240" controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
      </div>
      <br>
      <hr>
      <form action="" method="POST">
      <div style="text-align: center; margin-top: 40px;">
        <!-- <hr style="width: 50%; border-top: 1px solid #ccc;"> -->
        <p style="font-size: 40px;">Have You Learned HTML and CSS? Then Login to Continue   </p>
        <button type="submit" class="btn btn-primary btn-lg" style="font-size: 30px;" name="submit">Login to Take an Exam</button>
      </div>
      </form>
      <br>
    <?php   if (isset($_POST['submit'])) { echo "<script>window.location='../home/login';</script>"; } ?>
      <!-- Add more sections here for other Bootstrap 5 components like BS5 Images, BS5 Jumbotron, etc. -->

      <br>
      </div>
  </body>
   <?php include('../home/footer.html') ?>
  </html>
