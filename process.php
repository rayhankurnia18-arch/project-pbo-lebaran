<?php

class User {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getData() {
        return "Hi, my name is {$this->firstname} {$this->lastname}<br>
                Phone Number : {$this->phone}<br>
                Address : {$this->address}";
    }
}

// Ambil data dari form
$user = new User(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['phone'],
    $_POST['address']
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="process.php" method="POST">
        <input type="text" name="firstname" value="<?= $_POST['firstname'] ?>">
        <input type="text" name="lastname" value="<?= $_POST['lastname'] ?>">
        <input type="text" name="phone" value="<?= $_POST['phone'] ?>">
        <textarea name="address"><?= $_POST['address'] ?></textarea>

        <button type="submit">Submit</button>
    </form>

    <div class="result">
        <p><?= $user->getData(); ?></p>
        <a href="index.php">Reset</a>
    </div>
</div>

</body>
</html>