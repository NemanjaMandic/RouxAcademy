<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Roux Academy Conference -- Artists</title>

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="artists" data-spy="scroll" data-target=".scrollspy">
   
   <section class="container">
     <div class="content row">

      <?php include 'includes/header.php'; ?>
     

       <section class="main col col-lg-8">
            
            <?php include 'includes/article-artistlist.php'; ?>
            
  
       </section><!--END main col col-lg-8-->
       <section class="sidebar col col-lg-4">
         
           <?php include 'includes/aside-register.php'; ?>
           <?php include 'includes/aside-lastyear.php'; ?>
           
           <?php include 'includes/aside-accordion.php'; ?>

       </section><!--END sidebar col col-lg-4-->
     </div><!--END content row-->
    
     
   
   </section><!--END container-->

     <?php include 'includes/footer.php'; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

     <!-- Moja skripta -->
    <script type="text/javascript" src="js/myscript.js"></script>
  </body>
</html>