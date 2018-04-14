<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="sense.css">
  </head>
  <body>

       <div >
           <img class="ntcnt" src="bakgrd.jpg" alt="">
       </div>

       <div class="container">
            <!-- <header> -->
               <div class="fixed">
                  <img class="logo"src="butterfly.jpg" alt="butterfly image">
               </div>
               <div>
                  <table>
                     <tr>
                        <td><li><a href="#">LINK1</a></li></td>
                        <td><li id="fit"><a href="#">LINK2</a></li></td>
                        <td><li id="lone"><a href="#">LINK3</a></li></td>
                     </tr>
                  </table>

                  <div class="date">
                     <p style="text-align:center;">
                        <?php
                        date_default_timezone_set("Africa/Lagos");
                        echo date("H:i");
                        ?>
                     </p>
                     <p>
                        <?php
                        echo date("d/m/Y");
                        ?>
                     </p>
                  </div>
               </div>
            <!-- </header> -->
        </div>

        <div class="content">

           <h1 class="welcome">WELCOME</h1>
        </div>


                 <footer>
                     <div class="copy">
                        &copy HNG_Interns
                     </div>

                 </footer>
              <!-- </div> -->


  </body>
</html>
