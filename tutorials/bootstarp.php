<html>
<head>
  <title>ONLINE TEST | KIRAN RAJ </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../home/styles.css">
  <?php include('../headers/headerbeforelogin.php') ?>
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
      <center><h1 class="big-heading text-bold" style="color: blue;">Learn Bootstrap 5</h1></center>
      <br>
      <center><h1 style="color:chocolate">Bootstrap 5 Tutorials</h1></center>
      <br>
      <div class="topic-heading" id="bs5-containers">
        <h2>BS5 Containers :</h2>
        <p>Containers are the most basic layout element in Bootstrap and are required when using the grid system. Use <code>.container</code> for a responsive fixed-width container, and <code>.container-fluid</code> for a full-width container that spans the entire width of the viewport.</p>
        <div class="example-box">
          <h5>.container Example</h5>
          <div class="container bg-light">
            This is a .container example. It has a fixed width at different breakpoints.
          </div>
        </div>
        <div class="example-box">
          <h5>.container-fluid Example</h5>
          <div class="container-fluid bg-light">
            This is a .container-fluid example. It spans the entire width of the viewport.
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="topic-heading" id="bs5-grid">
        <h2>BS5 Grid :</h2>
        <p>The Bootstrap grid system uses a series of containers, rows, and columns to layout and align content. It’s built with flexbox and is fully responsive. The grid system is responsive and can adapt to different screen sizes using breakpoints.</p>
        <div class="example-box">
          <h5>Grid Example</h5>
          <div class="container">
            <div class="row">
              <div class="col bg-light">Column 1</div>
              <div class="col bg-secondary">Column 2</div>
              <div class="col bg-light">Column 3</div>
            </div>
          </div>
        </div>
      </div>
<br>
<br>
      <div class="topic-heading" id="bs5-colors">
        <h2>BS5 Colors :</h2>
        <p>Bootstrap 5 includes a wide range of color classes for both background and text. Use contextual classes to style your content with predefined colors, such as <code>.text-primary</code>, <code>.bg-secondary</code>, and more.</p>
        <div class="example-box">
          <h5>Color Examples</h5>
          <div class="p-3 mb-2 bg-primary text-white">.bg-primary .text-white</div>
          <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary .text-white</div>
          <div class="p-3 mb-2 bg-success text-white">.bg-success .text-white</div>
        </div>
      </div>
      <br><br>
      <div class="topic-heading" id="bs5-tables">
        <h2>BS5 Tables :</h2>
        <p>Tables in Bootstrap are styled to be responsive and easy to read. Use the <code>.table</code> class to add basic styling to a table, and add classes like <code>.table-striped</code> and <code>.table-hover</code> for additional styles.</p>
        <div class="example-box">
          <h5>Table Example</h5>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>kiran</td>
                <td>b</td>
                <td>@cit</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Abhi</td>
                <td>s</td>
                <td>@cit</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <br><br>
      <div class="topic-heading" id="bs5-images">
        <h2>BS5 Images :</h2>
        <p>Bootstrap 5 provides various classes to style and handle images in responsive layouts. You can use classes like <code>.img-fluid</code> to make images responsive, <code>.rounded</code> to add rounded corners, and <code>.img-thumbnail</code> to add a border and padding.</p>
        <div class="example-box">
          <h5>Image Examples</h5>
          <center>
          <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="Responsive image example">
          <img src="https://via.placeholder.com/150" class="rounded mb-3" alt="Rounded image example">
          <!-- <img src="https://via.placeholder.com/150" class="img-thumbnail" alt="Thumbnail image example"> -->
        </center>
        </div>
      </div>
      <br>
      <div class="topic-heading" id="bs5-buttons">
        <h2>BS5 Buttons :</h2>
        <p>Bootstrap 5 provides a variety of button styles that can be applied using predefined classes. These classes offer different colors and styles, such as <code>.btn-primary</code>, <code>.btn-secondary</code>, and <code>.btn-outline-danger</code>. You can also adjust button sizes using classes like <code>.btn-lg</code> and <code>.btn-sm</code>.</p>
        <div class="example-box">
          <h5>Button Examples</h5>
          <button type="button" class="btn btn-primary mb-2">Primary Button</button>
          <button type="button" class="btn btn-secondary mb-2">Secondary Button</button>
          <button type="button" class="btn btn-success mb-2">Success Button</button>
          <button type="button" class="btn btn-danger mb-2">Danger Button</button>
          <button type="button" class="btn btn-warning mb-2">Warning Button</button>
          <button type="button" class="btn btn-info mb-2">Info Button</button>
          <button type="button" class="btn btn-light mb-2">Light Button</button>
          <button type="button" class="btn btn-dark mb-2">Dark Button</button>
        </div>
      </div>
      <br>
      <br>
      <div class="topic-heading" id="bs5-alerts">
        <h2>BS5 Alerts :</h2>
        <p>Bootstrap 5 provides alert components for displaying important messages to users. Alerts can be styled using various contextual classes like <code>.alert-primary</code>, <code>.alert-secondary</code>, <code>.alert-success</code>, etc. You can also add a dismiss button to close the alert using <code>.alert-dismissible</code>.</p>
        <div class="example-box">
          <h5>Alert Examples</h5>
          <div class="alert alert-primary mb-3" role="alert">
            This is a primary alert.
          </div>
          <div class="alert alert-success mb-3" role="alert">
            This is a success alert.
          </div>
          <div class="alert alert-danger mb-3" role="alert">
            This is a danger alert.
          </div>
          <div class="alert alert-warning mb-3" role="alert">
            This is a warning alert.
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="topic-heading" id="bs5-progress-bars">
        <h2>BS5 Progress Bars :</h2>
        <p>Bootstrap 5 provides progress bar components to visualize the progression of a task or process. Progress bars can be styled using various classes like <code>.progress</code> for the container, <code>.progress-bar</code> for the actual progress bar, and contextual classes like <code>.bg-primary</code> to change the color.</p>
        <div class="example-box">
          <h5>Progress Bar Examples</h5>
          <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
          </div>
        </div>
      </div>
      <br><br>
      <center><h1 style="color:chocolate">Bootstrap 5 Forms</h1></center>
      <br><br>
      <div class="topic-heading" id="bs5-forms">
        <h2>Bootstrap 5 Forms :</h2>
        <p>Bootstrap 5 provides styling and layout options for HTML forms. You can use classes like <code>.form-control</code> to style form inputs, <code>.form-label</code> for form labels, and <code>.form-select</code> for select dropdowns.</p>
        <div class="example-box">
          <h5>Form Examples</h5>
          <form>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1" class="form-label">Example select</label>
              <select class="form-select" id="exampleFormControlSelect1">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlFile1" class="form-label">Example file input</label>
              <input class="form-control" type="file" id="exampleFormControlFile1">
            </div>
            <button class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      <br>
      <div class="topic-heading" id="bs5-grid">
        <center><h1 style="color:chocolate">Bootstrap 5 Grids</h1></center>
        <br>
        <h2>Bootstrap 5 Grid :</h2>
        <p>The Bootstrap grid system uses a series of containers, rows, and columns to layout and align content. It’s built with flexbox and is fully responsive. The grid system is responsive and can adapt to different screen sizes using breakpoints.</p>
        <div class="example-box">
          <h5>Grid Examples</h5>
          <div class="container">
            <div class="row">
              <div class="col-sm mb-3">Column 1</div>
              <div class="col-sm mb-3">Column 2</div>
              <div class="col-sm mb-3">Column 3</div>
            </div>
          </div>
          </div>
        </div>
      <br><br>
      <center><h1 style="color:chocolate">BS5 Basic Templates Section</h1></center>
      <div class="topic-heading" id="bs5-basic-templates">
        <h2>BS5 Basic Templates</h2>
        <p>Bootstrap 5 provides basic templates that you can use as a starting point for your projects. These templates include common layout elements like navbar, header, footer, and content sections.</p>
        <div class="example-box">
          <h5>Basic Template Example</h5>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container">
            <div class="row">
              <div class="col">
                <h1>Hello, world!</h1>
                <p>This is a basic Bootstrap 5 template.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <form action="" method="POST">
      <div style="text-align: center; margin-top: 40px;">
        <!-- <hr style="width: 50%; border-top: 1px solid #ccc;"> -->
        <p style="font-size: 40px;">Have You Learned Bootstrap? Then Login to Continue   </p>
        <button type="submit" class="btn btn-primary btn-lg" style="font-size: 30px;" name="submit">Login to Take an Exam</button>
      </div>
      </form>
      <br>
    <?php   if (isset($_POST['submit'])) { echo "<script>window.location='../home/login';</script>"; } ?>
      <!-- Add more sections here for other Bootstrap 5 components like BS5 Images, BS5 Jumbotron, etc. -->

    </div>
</body>
 <?php include('../home/footer.html') ?>
</html>
