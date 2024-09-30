<Python>
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
      <center><h1 class="big-heading text-bold" style="color: blue;">Learn Python</h1></center>
      <br>
      <center><h1 style="color:chocolate">Python Tutorials</h1></center>
<br>
      <div>
        <h2>Python Programming Tutorials</h2>

        <h3>Introduction to Python</h3>
        <p>Python is an interpreted, high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected. It supports multiple programming paradigms, including structured (particularly, procedural), object-oriented, and functional programming.</p>

        <h3>Setting Up Your Environment</h3>
        <p>Before you start writing Python programs, you need to install Python and set up your environment.</p>
        <ul>
          <li>Download and install Python from the <a href="https://www.python.org/downloads/" target="_blank">official Python website</a>.</li>
          <li>Verify the installation by running <code>python --version</code> in your terminal.</li>
          <li>Install an Integrated Development Environment (IDE) like <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a> or <a href="https://www.jetbrains.com/pycharm/" target="_blank">PyCharm</a>.</li>
        </ul>

        <h3>Writing Your First Python Program</h3>
        <p>Let's write a simple Python program that prints "Hello, World!" to the console.</p>
        <pre>
          <code>
            print("Hello, World!")
          </code>
        </pre>
        <p>Save the code in a file named <code>hello_world.py</code>, and run it using <code>python hello_world.py</code>.</p>

        <h3>Basic Python Syntax</h3>
        <p>Here are some basic syntax elements of Python:</p>
        <ul>
          <li><strong>Variables:</strong> <code>number = 5</code></li>
          <li><strong>Data Types:</strong> <code>int, float, str, bool, list, tuple, dict, set</code></li>
          <li><strong>Operators:</strong> <code>+, -, *, /, %, **, //, ==, !=, &lt;, &gt;, &lt;=, &gt;=</code></li>
          <li><strong>Control Statements:</strong> <code>if, elif, else, while, for</code></li>
          <li><strong>Functions:</strong> <code>def my_function():</code></li>
          <li><strong>Classes and Objects:</strong> <code>class MyClass:</code></li>
        </ul>

        <h3>Object-Oriented Programming (OOP) in Python</h3>
        <p>Python is an object-oriented programming language. Key concepts include:</p>
        <ul>
          <li><strong>Classes and Objects:</strong> Templates for creating objects</li>
          <li><strong>Inheritance:</strong> Mechanism to create a new class using an existing class</li>
          <li><strong>Polymorphism:</strong> Ability to process objects differently based on their data type or class</li>
          <li><strong>Encapsulation:</strong> Wrapping the data (variables) and code (methods) together as a single unit</li>
          <li><strong>Abstraction:</strong> Hiding complex implementation details and showing only the necessary features</li>
        </ul>

        <h3>Example of a Simple Python Class</h3>
        <pre>
          <code>
            class Animal:
                def __init__(self, name):
                    self.name = name

                def make_sound(self):
                    print("Some generic animal sound")

                def get_name(self):
                    return self.name

                def set_name(self, name):
                    self.name = name

            class Dog(Animal):
                def make_sound(self):
                    print("Bark")

            def main():
                my_dog = Dog("Rex")
                my_dog.make_sound()
                print(my_dog.get_name())

            if __name__ == "__main__":
                main()
          </code>
        </pre>

        <h3>Advanced Topics</h3>
        <ul>
          <li>Exception Handling</li>
          <li>Python Collections Module</li>
          <li>File I/O</li>
          <li>Multithreading and Concurrency</li>
          <li>Web Development with Flask or Django</li>
        </ul>

        <p>For more detailed tutorials, visit the <a href="https://docs.python.org/3/tutorial/" target="_blank">official Python tutorials</a>.</p>
      </div>
      </div>
      <br>
      <hr>
      <form action="" method="POST">
      <div style="text-align: center; margin-top: 40px;">
        <!-- <hr style="width: 50%; border-top: 1px solid #ccc;"> -->
        <p style="font-size: 40px;">Have You Learned Python? Then Login to Continue   </p>
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
  </Python>
