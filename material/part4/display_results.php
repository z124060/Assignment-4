<?php
// get the data from the form
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$phone = filter_input(INPUT_POST, 'phone');

//input your PHP code here, here you should get the data for password, phone variables

$heard_from = filter_input(INPUT_POST, 'heard_from');
if ($heard_from === NULL) {
    $heard_from='Unknown';
}

//input your PHP code here, here you should display a value of “Yes” or “No” depending on whether the user has selected the check box.
//hint: use if else
   
$wants_updates = filter_input(INPUT_POST, 'wants_updates');

if ($wants_updates === "0") {
    $wants_updates = "No";
} elseif ($wants_updates === "1") {
    $wants_updates = "Yes";
} else {
    $wants_updates = "Maybe";
}

$contact_via = filter_input(INPUT_POST, 'contact_via');

$comments = htmlspecialchars(filter_input(INPUT_POST, 'comments'));

//input your PHP code here, here you should use function htmlspecialchars for this to work correctly
//input your PHP code here, here you should use function nl2br for this to work correctly

?>
<!DOCTYPE html>
<html>

<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br>

        <label>Heard From:</label>
        <span><?php echo htmlspecialchars($heard_from); ?></span><br>

        <label>Send Updates:</label>
        <span><?php echo $wants_updates; ?></span><br>

        <label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contact_via); ?></span><br><br>

        <span>Comments:</span><br>
        <span><?php echo $comments; ?></span><br>

        <p>&nbsp;</p>
    </main>
</body>

</html>
