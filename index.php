<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form to Database Example</title>
</head>
<body>
    <h2>Enter User Information</h2>
    <form method="post" action="process_email.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
