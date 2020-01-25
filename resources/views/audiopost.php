<?php
$pageTitle = 'Audio-Messages';


include('reuseable/header.php');
?>

<div class="jumbotron ">
      <div class="row">

        
          <!-- ASIDE FOR THE FILTER AND OTHER FUNCTIONS -->
          <div class="col-md-3 col-12">
              <aside class="sorter">
                  <div class="  align-center">
                      <h1>Post Order</h1>
                      <hr>
                      <a href="">Older - Newer Post</a>
                      <hr>
                      <a href="">Newer - Older Post</a>
                  </div>
                  <hr>
                  <a href=""><h5>Text Post only</h5></a>        
                </aside>
      
          </div>






        <!-- THE MAIN POST SECTION -->
        <div class="post-container col-md-6 col-12">


              <!-- AUDIO POST HERE -->
            
              <div class="container">
                  <div class="media-container">
                    <audio src="../../public/audios/royalty.mp3"></audio>
              
                  </div>
                  <div class="text-content">
                    <p>
                        text in here describing the post or sort of 
                        text either related to the post or not but made by the admin.
                        * i should create more pages like a readmore pages linked to the post if its made 
                        with large number of text contexnts or so.
                        media download can be handled here
                    </p>
              
                    <div class="others">
                      <span class="reactions">
                        <span>0</span>
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        <span>0</span>
                        <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                      </span>
              
                      <span class="posted-info float-right">posted: 01/01/2020</span>
                    </div>
                  </div>
              
              
                </div>







          <!-- ----------------------------------------------------------- -->
        </div>
  </div>
</div>



<?php

include('reuseable/footer.php');
?>