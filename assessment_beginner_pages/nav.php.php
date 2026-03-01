<?php
// nav.php - Navigation bar for the project
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    nav {
      background-color: #004080; /* FC Barcelona-inspired deep blue */
      padding: 10px;
    }
    nav a {
      color: #fff;
      text-decoration: none;
      margin-right: 15px;
      font-weight: bold;
    }
    nav a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <nav>
    <a href="index.php">Home</a>
    <a href="pages/clients_list.php">Clients</a>
    <a href="pages/clients_add.php">Add Client</a>
  </nav>
</body>
</html>
