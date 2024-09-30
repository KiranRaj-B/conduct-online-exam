<PHP>
<head>
  <title>ONLINE TEST | KIRAN RAJ </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../home/styles.css">
  <?php include('../headers/headerforuser.php') ?>
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
      <center><h1 class="big-heading text-bold" style="color: blue;">Learn PHP</h1></center>
      <br>
      <center><h1 style="color:chocolate">PHP  Tutorials</h1></center>
      <br>
      <div>
        <h2>PHP Programming Tutorials</h2>

        <h3>Introduction to PHP</h3>
        <p>PHP (Hypertext Preprocessor) is a popular general-purpose scripting language that is especially suited to web development. It is fast, flexible, and pragmatic. PHP powers everything from your blog to the most popular websites in the world.</p>

        <h3>Setting Up Your Environment</h3>
        <p>Before you start writing PHP scripts, you need to set up your environment. You can install PHP locally on your computer or use a web hosting service.</p>
        <ul>
          <li>Download and install PHP from the <a href="https://www.php.net/downloads" target="_blank">official PHP website</a>.</li>
          <li>Install a web server like <a href="https://httpd.apache.org/" target="_blank">Apache</a> or <a href="https://nginx.org/en/" target="_blank">Nginx</a>.</li>
          <li>Consider using a prepackaged solution like <a href="https://www.apachefriends.org/index.html" target="_blank">XAMPP</a> or <a href="https://www.mamp.info/en/" target="_blank">MAMP</a> for easier setup.</li>
        </ul>

        <h3>Writing Your First PHP Script</h3>
        <p>Let's write a simple PHP script that outputs "Hello, World!" to the browser.</p>
        <pre>
          <code>
            &lt;?php
            echo "Hello, World!";
            ?&gt;
          </code>
        </pre>
        <p>Save the code in a file named <code>hello_world.php</code>, place it in your web server's root directory, and access it via your web browser.</p>

        <h3>Basic PHP Syntax</h3>
        <p>Here are some basic syntax elements of PHP:</p>
        <ul>
          <li><strong>Variables:</strong> Variables in PHP start with a <code>$</code> sign, followed by the name of the variable. <code>$number = 5;</code></li>
          <li><strong>Data Types:</strong> <code>int, float, string, bool, array, object, resource, NULL</code></li>
          <li><strong>Operators:</strong> <code>+, -, *, /, %, ==, !=, <, >, <=, >=</code></li>
          <li><strong>Control Structures:</strong> <code>if, else, elseif, switch, while, for, foreach</code></li>
          <li><strong>Functions:</strong> <code>function myFunction() { }</code></li>
          <li><strong>Classes and Objects:</strong> <code>class MyClass { }</code></li>
        </ul>

        <h3>Working with Forms</h3>
        <p>PHP is commonly used to handle form data submitted via HTML forms. Here's an example:</p>
        <pre>
          <code>
            &lt;!-- HTML Form --&gt;
            &lt;form method="post" action="process_form.php"&gt;
              Name: &lt;input type="text" name="name"&gt;
              Age: &lt;input type="number" name="age"&gt;
              &lt;input type="submit" value="Submit"&gt;
            &lt;/form&gt;

            &lt;!-- PHP Script (process_form.php) --&gt;
            &lt;?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $age = (int)$_POST['age'];
                echo "Name: " . $name . "&lt;br&gt;";
                echo "Age: " . $age;
            }
            ?&gt;
          </code>
        </pre>

        <h3>Connecting to a MySQL Database</h3>
        <p>PHP can interact with databases, and MySQL is a popular choice. Here's how you can connect to a MySQL database and perform basic operations:</p>
        <pre>
          <code>
            &lt;?php
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "myDatabase";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";

            // Create a table
            $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP
            )";

            if ($conn->query($sql) === TRUE) {
                echo "Table MyGuests created successfully";
            } else {
                echo "Error creating table: " . $conn->error;
            }

            // Close connection
            $conn->close();
            ?&gt;
          </code>
        </pre>

        <h3>Object-Oriented Programming (OOP) in PHP</h3>
        <p>PHP supports object-oriented programming. Key concepts include:</p>
        <ul>
          <li><strong>Classes and Objects:</strong> Templates for creating objects</li>
          <li><strong>Inheritance:</strong> Mechanism to create a new class using an existing class</li>
          <li><strong>Polymorphism:</strong> Ability to process objects differently based on their data type or class</li>
          <li><strong>Encapsulation:</strong> Wrapping the data (variables) and code (methods) together as a single unit</li>
          <li><strong>Abstraction:</strong> Hiding complex implementation details and showing only the necessary features</li>
        </ul>

        <h3>Example of a Simple PHP Class</h3>
        <pre>
          <code>
            &lt;?php
            class Animal {
                private $name;

                public function __construct($name) {
                    $this->name = $name;
                }

                public function makeSound() {
                    echo "Some generic animal sound";
                }

                public function getName() {
                    return $this->name;
                }

                public function setName($name) {
                    $this->name = $name;
                }
            }

            class Dog extends Animal {
                public function makeSound() {
                    echo "Bark";
                }
            }

            $myDog = new Dog("Rex");
            $myDog->makeSound();
            echo $myDog->getName();
            ?&gt;
          </code>
        </pre>

        <h3>Advanced Topics</h3>
        <ul>
          <li>Exception Handling</li>
          <li>File Handling</li>
          <li>Session Management</li>
          <li>Working with Cookies</li>
          <li>Sending Emails</li>
        </ul>

        <p>For more detailed tutorials, visit the <a href="https://www.php.net/manual/en/tutorial.php" target="_blank">official PHP manual</a> or the <a href="https://www.w3schools.com/php/" target="_blank">W3Schools PHP Tutorial</a>.</p>
      </div>
      </div>
      <br>
      <hr>
      <form action="" method="POST">
      <div style="text-align: center; margin-top: 40px;">
        <!-- <hr style="width: 50%; border-top: 1px solid #ccc;"> -->
        <p style="font-size: 40px;">Have you learned PHP ? Then </p>
        <button type="submit" class="btn btn-primary btn-lg" style="font-size: 30px;" name="submit">Take an Exam</button>
      </div>
      </form>
      <br>
    <?php   if (isset($_POST['submit'])) { echo "<script>window.location='../User/choose_test?course=php';</script>"; } ?>
      <!-- Add more sections here for other Bootstrap 5 components like BS5 Images, BS5 Jumbotron, etc. -->

      <br>
      </div>
  </body>
   <?php include('../home/footer.html') ?>
  </PHP>
