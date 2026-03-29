<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="process.php" method="POST">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>