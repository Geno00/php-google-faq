<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-google-faq</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <?php
     include 'questions.php';

    ?>

  </head>
  <body>

    <header>
        <div class= "container">
            <i class="fa-solid fa-bars my-icon"></i>
            <h2>Domande Frequenti</h2>
        </div>

        <div class="container">
            <i class="fa-solid fa-grip my-icon"></i>
            <i class="fa-solid fa-circle-user my-icon"></i>
        </div>
    </header>
    
    

    <?php

        foreach ($faqs as  $faq) {
        ?>
        <h2> <?php echo $faq['question']."<br>" ?> </h2>

        <p>
            <?php echo $faq['answer']."<br>" ?>
        </p>

        <?php
        
        }

     ?>

  </body>
</html>