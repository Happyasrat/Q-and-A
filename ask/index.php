<?php

require_once('../helpers/init.php');

 $topics = getTopics();

// print '<pre>';
// print_r($topics);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/style.css">
</head>



<body >
  <div class="container-fluid bg-light">
    <h1>Ask your question</h1>

     <form action="./received/index.php" method = "post">
         <label for="question" class="label">Your question:</label><br />
    <input type="text" name="question" />
    <br /><br />
    <label for="question" class="label">Explanation:</label><br />
    <textarea name="explanation" id="" cols="30" rows="10"></textarea>    
    <br /><br />
   
          

     <select name="topic"  class=" btn-primary btn-lg" >

      <?php
        foreach ($topics as $key => $value) {
          print '<option value="'.$value['tid'].'">'.$value ['topicname'].'</option>';
        }
      ?> 
    
    </select> 


    <br></br>
    <input type="submit" value="Ask"  class=" btn-primary btn-lg" />
  </form>

  </div>
</body>


</html>
<!-- 
    <select name="topic" >
        <?php foreach ($topics as $topic) : ?> 
           <option value="<?php echo $topic['tid']; ?>">
          <?php echo $topic['topicname']; ?>
          </option>;
          <?php endforeach; ?>
    </select> -->