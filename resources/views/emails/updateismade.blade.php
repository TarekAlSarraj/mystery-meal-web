<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Welcome To Mystery Meal!</h1>


    <ul>



        <li>
        Dear <?php echo $arr_of_changes[0] . " " . $arr_of_changes[1]  ?> You have been successfully added to our Stores owners!
        We wish you have a great experience with us!

        </li>

        <li>
          This is your following details :<br><br>
          <?php echo 'Username: '. $arr_of_changes[2] ?><br><br>
          <?php echo 'Email: '. $arr_of_changes[3] ?><br><br>
          <?php echo 'Password: '. $arr_of_changes[4] ?><br><br>

        </li>
        <br>

        Please change your password as soon as possible for security reasons.<br>

        <p>Please login using this link : <a href="http://mysterymeal.xyz">http://mysterymeal.xyz</a> </p>
        <br>
        <p>  Good Luck! Regards, Mystery Meal Support Team.</p>





    </ul>





</body>
</html>
