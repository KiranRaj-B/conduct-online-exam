<JAVA>
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
      <center><h1 class="big-heading text-bold" style="color: blue;">Learn Java</h1></center>
      <br>
      <center><h1 style="color:chocolate">JAVA  Tutorials</h1></center>
      <br>
      <div>
        <h2>Java Programming Tutorials</h2>

        <h3>Introduction to Java</h3>
        <p>Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let application developers write once, run anywhere (WORA), meaning that compiled Java code can run on all platforms that support Java without the need for recompilation.</p>

        <h3>Setting Up Your Environment</h3>
        <p>Before you start writing Java programs, you need to install the Java Development Kit (JDK) and set up your environment.</p>
        <ul>
          <li>Download and install the JDK from the <a href="https://www.oracle.com/java/technologies/javase-downloads.html" target="_blank">official Oracle website</a>.</li>
          <li>Set up the environment variables: <code>JAVA_HOME</code> and <code>PATH</code>.</li>
          <li>Install an Integrated Development Environment (IDE) like <a href="https://www.eclipse.org/downloads/" target="_blank">Eclipse</a> or <a href="https://www.jetbrains.com/idea/" target="_blank">IntelliJ IDEA</a>.</li>
        </ul>

        <h3>Writing Your First Java Program</h3>
        <p>Let's write a simple Java program that prints "Hello, World!" to the console.</p>
        <pre>
          <code>
            public class HelloWorld {
                public static void main(String[] args) {
                    System.out.println("Hello, World!");
                }
            }
          </code>
        </pre>
        <p>Save the code in a file named <code>HelloWorld.java</code>, compile it using <code>javac HelloWorld.java</code>, and run it with <code>java HelloWorld</code>.</p>

        <h3>Basic Java Syntax</h3>
        <p>Here are some basic syntax elements of Java:</p>
        <ul>
          <li><strong>Variables:</strong> <code>int number = 5;</code></li>
          <li><strong>Data Types:</strong> <code>int, float, double, char, boolean</code></li>
          <li><strong>Operators:</strong> <code>+, -, *, /, %</code></li>
          <li><strong>Control Statements:</strong> <code>if, else, switch, while, for</code></li>
          <li><strong>Methods:</strong> <code>public void myMethod() { }</code></li>
          <li><strong>Classes and Objects:</strong> <code>class MyClass { }</code></li>
        </ul>

        <h3>Object-Oriented Programming (OOP) in Java</h3>
        <p>Java is an object-oriented programming language. Key concepts include:</p>
        <ul>
          <li><strong>Classes and Objects:</strong> Templates for creating objects</li>
          <li><strong>Inheritance:</strong> Mechanism to create a new class using an existing class</li>
          <li><strong>Polymorphism:</strong> Ability to process objects differently based on their data type or class</li>
          <li><strong>Encapsulation:</strong> Wrapping the data (variables) and code (methods) together as a single unit</li>
          <li><strong>Abstraction:</strong> Hiding complex implementation details and showing only the necessary features</li>
        </ul>

        <h3>Example of a Simple Java Class</h3>
        <pre>
          <code>
            public class Animal {
                private String name;

                public Animal(String name) {
                    this.name = name;
                }

                public void makeSound() {
                    System.out.println("Some generic animal sound");
                }

                public String getName() {
                    return name;
                }

                public void setName(String name) {
                    this.name = name;
                }
            }

            public class Dog extends Animal {
                public Dog(String name) {
                    super(name);
                }

                @Override
                public void makeSound() {
                    System.out.println("Bark");
                }
            }

            public class Main {
                public static void main(String[] args) {
                    Animal myDog = new Dog("Rex");
                    myDog.makeSound();
                    System.out.println(myDog.getName());
                }
            }
          </code>
        </pre>

        <h3>Advanced Topics</h3>
        <ul>
          <li>Exception Handling</li>
          <li>Java Collections Framework</li>
          <li>File I/O</li>
          <li>Multithreading and Concurrency</li>
          <li>JavaFX for GUI Development</li>
        </ul>

        <p>For more detailed tutorials, visit the <a href="https://docs.oracle.com/javase/tutorial/" target="_blank">official Java tutorials</a>.</p>
      </div>

      <br>
      <hr>
      <form action="" method="POST">
      <div style="text-align: center; margin-top: 40px;">
        <!-- <hr style="width: 50%; border-top: 1px solid #ccc;"> -->
        <p style="font-size: 40px;">Have you learned JAVA ? Then </p>
        <button type="submit" class="btn btn-primary btn-lg" style="font-size: 30px;" name="submit">Take an Exam</button>
      </div>
      </form>
      <br>
    <?php   if (isset($_POST['submit'])) { echo "<script>window.location='../User/choose_test?course=java';</script>"; } ?>
      <!-- Add more sections here for other Bootstrap 5 components like BS5 Images, BS5 Jumbotron, etc. -->

      <br>
      </div>
  </body>
   <?php include('../home/footer.html') ?>
  </JAVA>
