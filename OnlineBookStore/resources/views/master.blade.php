
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Book Store</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
    <link href="//db.onlinewebfonts.com/c/1a69bbaf09f62b4596f5020478cd0399?family=Poppins+ExtraBold" rel="stylesheet" type="text/css"/> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- <script type="text/javascript">

    setTimeout(function() {
        $('#successMessage').fadeOut('fast');
    }, 2000);

    </script> -->

    <script>
$(document).ready(function(){ 
   $("#alertDismissible").fadeTo(2000, 500).slideUp(500, function(){
       $("#alertDismissible").slideUp(600);
     });
})
</script>

</head>

<style>
body {
    font-family: 'Poppins';
}

strong{
    font-family: 'Poppins+ExtraBold';
    font-size: 100px;
}

.margin-left{
    margin-left: 10px !important;
}

</style>

<body>
    <div class="container mt-5">
    <!-- <div class="p-3 mb-2 bg-light text-dark fixed-top"></div> -->

        <h1 class="text-dark mt-3 mb-4 text-center p-3 mb-2 bg-light text-dark sticky-xl-top"><strong>Online Book Store</strong></h1>
        
        @yield('content')
        
    </div>    
</body>
</html>