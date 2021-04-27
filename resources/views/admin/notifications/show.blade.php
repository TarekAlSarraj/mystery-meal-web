<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello!</h1>


    <ul>

    <?php foreach ($arr_of_changes as $attribute => $value) { 
         if($attribute != "updated_at"){
            
    ?>


        <li>
        The attribute <?php echo $attribute ?> for client <?php echo Auth::user()->username ?> was changed from 
        <?php echo $original_arr[$attribute] ?> to  <?php echo $value ?>
        </li>
        <br>



    <?php }} ?>

    </ul>

    <p>
    At <?php echo $arr_of_changes['updated_at'] ?>
    </p>

    

</body>
</html>

        <!-- foreach ($this->arr_of_changes as $attribute => $value) {
            if($attribute != "updated_at"){
            $changesline = $changesline . "The attribute "  . $attribute . " for client " . Auth::user()->username . " was changed from "
             . $this->original_arr[$attribute] . " to " . $value;
            }
            
        }

        $dateline = "at " . $this->arr_of_changes['updated_at']; -->