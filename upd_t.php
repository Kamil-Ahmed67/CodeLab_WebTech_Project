<?php
// Assuming you have already established a database connection

// Check if the search button is clicked
if(isset($_GET['search'])) {
    // Get the username from the textbox
    $username = $_GET['username'];

    // Prepare the SQL statement to retrieve user information based on the username
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Fetch the user information
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Display the user information
    echo 'Username: ' . $user['username'] . '<br>';
    echo 'Email: ' . $user['email'] . '<br>';
    echo 'Age: ' . $user['age'] . '<br>';
}
?>

<!-- HTML form with a textbox and a button -->
<form method="GET" action="">
    <input type="text" name="username" placeholder="Enter username">
    <input type="submit" name="search" value="Search">
</form>
