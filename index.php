<?php
//ob_start — Turn on output buffering
ob_start();

// include header.php file
include('header.php');
?>


<?php
// include header.php file

include('Template/_banner-area.php');
// !include header.php file

//Start top Sale Section
  include('Template/_top-sale.php');
    //end top Sale Section

 // Start Special Price
    include('Template/_special-price.php');
    // End Special Price

 //Start Making a banner advertisement

include('Template/_banner-adds.php');
    //End Making a banner advertisement


    //Start New Phone Section -->
include('Template/_new-phones.php');
    //End New Phone Section -->

  //Start Blog section //
include('Template/_blogs.php');
   //End Blog section //
?>



<?php
// include footer.php file
include('footer.php');
?>

