<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>

<div class="navbar bg-base-100 text-amber-400 shadow bg-base-100 rounded-box w-52 w-full">
  <button class="btn btn-ghost text-xl">daisyUI</button>

  <?php  




    wp_nav_menu([
        'theme_location'=>'header',
        'container'=>'',
       
      
        ]); 

    
?>
 
</div>

</body>
</html>