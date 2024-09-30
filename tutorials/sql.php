<SQL>
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
      <center><h1 class="big-heading text-bold" style="color: blue;">Learn SQL</h1></center>
      <br>
      <center><h1 style="color:chocolate">SQL  Tutorials</h1></center>
      <div>
        <h2>SQL Programming Tutorials</h2>

        <h3>Introduction to SQL</h3>
        <p>SQL (Structured Query Language) is a standard programming language for managing and manipulating relational databases. SQL is used to perform tasks such as querying data, updating data, and managing database schemas and access control.</p>

        <h3>Setting Up Your Environment</h3>
        <p>Before you start writing SQL queries, you need to set up a relational database management system (RDBMS) like MySQL, PostgreSQL, or SQLite.</p>
        <ul>
          <li>Download and install MySQL from the <a href="https://dev.mysql.com/downloads/" target="_blank">official MySQL website</a> or PostgreSQL from the <a href="https://www.postgresql.org/download/" target="_blank">official PostgreSQL website</a>.</li>
          <li>Use a database management tool like <a href="https://www.phpmyadmin.net/" target="_blank">phpMyAdmin</a> or <a href="https://www.pgadmin.org/" target="_blank">pgAdmin</a> for a graphical interface, or use the command-line interface.</li>
          <li>Set up your database environment by creating a new database and user.</li>
        </ul>

        <h3>Writing Your First SQL Query</h3>
        <p>Let's write a simple SQL query to create a table and insert data into it.</p>
        <pre>
          <code>
            -- Create a new table named 'employees'
            CREATE TABLE employees (
                id INT PRIMARY KEY,
                name VARCHAR(50),
                position VARCHAR(50),
                salary DECIMAL(10, 2)
            );

            -- Insert data into the 'employees' table
            INSERT INTO employees (id, name, position, salary) VALUES
            (1, 'John Doe', 'Manager', 75000.00),
            (2, 'Jane Smith', 'Developer', 65000.00),
            (3, 'Mike Johnson', 'Designer', 55000.00);
          </code>
        </pre>

        <h3>Basic SQL Syntax</h3>
        <p>Here are some basic SQL commands:</p>
        <ul>
          <li><strong>SELECT:</strong> Used to retrieve data from a database. <code>SELECT * FROM employees;</code></li>
          <li><strong>INSERT:</strong> Used to insert new data into a table. <code>INSERT INTO employees (name, position, salary) VALUES ('Alice Brown', 'Developer', 60000.00);</code></li>
          <li><strong>UPDATE:</strong> Used to modify existing data in a table. <code>UPDATE employees SET salary = 70000.00 WHERE name = 'Jane Smith';</code></li>
          <li><strong>DELETE:</strong> Used to remove data from a table. <code>DELETE FROM employees WHERE name = 'Mike Johnson';</code></li>
          <li><strong>CREATE TABLE:</strong> Used to create a new table. <code>CREATE TABLE departments (id INT PRIMARY KEY, name VARCHAR(50));</code></li>
          <li><strong>ALTER TABLE:</strong> Used to modify an existing table structure. <code>ALTER TABLE employees ADD COLUMN department_id INT;</code></li>
          <li><strong>DROP TABLE:</strong> Used to delete a table. <code>DROP TABLE departments;</code></li>
        </ul>

        <h3>Querying Data</h3>
        <p>SQL allows you to perform complex queries to retrieve specific data. Here are some examples:</p>
        <ul>
          <li><strong>Simple Query:</strong> <code>SELECT name, position FROM employees;</code></li>
          <li><strong>Using WHERE Clause:</strong> <code>SELECT * FROM employees WHERE salary > 60000;</code></li>
          <li><strong>Sorting Results:</strong> <code>SELECT * FROM employees ORDER BY salary DESC;</code></li>
          <li><strong>Joining Tables:</strong> <code>SELECT employees.name, departments.name AS department FROM employees JOIN departments ON employees.department_id = departments.id;</code></li>
          <li><strong>Grouping Results:</strong> <code>SELECT position, COUNT(*) FROM employees GROUP BY position;</code></li>
        </ul>

        <h3>Advanced Topics</h3>
        <ul>
          <li>Subqueries</li>
          <li>Indexing</li>
          <li>Transactions</li>
          <li>Stored Procedures</li>
          <li>Triggers</li>
        </ul>

        <p>For more detailed tutorials, visit the <a href="https://www.w3schools.com/sql/" target="_blank">W3Schools SQL Tutorial</a> or the <a href="https://www.tutorialspoint.com/sql/index.htm" target="_blank">TutorialsPoint SQL Tutorial</a>.</p>
      </div>

      </div>
      <br>
      <hr>
      <form action="" method="POST">
      <div style="text-align: center; margin-top: 40px;">
        <!-- <hr style="width: 50%; border-top: 1px solid #ccc;"> -->
        <p style="font-size: 40px;">Have You Learned SQL? Then Login to Continue   </p>
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
  </SQL>
