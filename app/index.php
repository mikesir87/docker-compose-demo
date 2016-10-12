<?php

// Connect to host db and database app
$db = new mysqli("mysql", "root", "secret", "app");

if ($mysqli->connect_errno) {
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}

$query = $db->query("SELECT * FROM users");

?><html>
<head>
  <title>Sample App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>

<div class="container">
  <div class="col-md-12">
    <h1>Users</h1>
    <p>Obviously... this is just a demo. <em>No one</em> should be this stupid...</p>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Username</th>
          <th>Password</th>
          <th>Active?</th>
          <th>Creation Date</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $query->fetch_assoc()) : ?>
          <tr>
            <td><?= $row['email']; ?></td>
            <td><?= $row['password']; ?></td>
            <td><?= $row['active'] == 1 ? 'Yes' : 'No'; ?></td>
           <td><?= $row['creation_date']; ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
