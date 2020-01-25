
<?php
$pageTitle = 'Home';


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

              <?php
              // die(var_dump($allPost));

              


                ?>

                <?php foreach($allPost as $post)   : ?>

                  <div class="container">

                    <?php if($post->post_type == 'text') : ?>
                      <div class="media-container">
                          <img src="<?= $post->media_url; ?>" alt="">
              
                      </div>

                    <?php endif ; ?>


                    <div class="text-content">
                      <p>
                         <?php echo $post->body; ?>
                      </p>


                      
                      <?php if($post->post_type == 'audio') : ?>
                        <a class="btn btn-primary" href="?download_file=<?=$post->media_url?>">
                          download audio message
                        </a>
                      <?php endif ; ?>
                      <?php if($post->post_type == 'video') : ?>
                        <a class="btn btn-primary" href="?download_file=<?=$post->media_url?>">
                          download video message
                        </a>
                      <?php endif ; ?>
                      
                      <div class="others">
                        <span class="reactions">
                          <span>0</span>
                          <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                          <span>0</span>
                          <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                        </span>
                
                        <span class="posted-info float-right">
                          posted: <?= $post->created_at ; ?>
                        </span>
                      </div>



                    </div>

                      
                  

                  
                  
                  
                 </div>



                <?php endforeach; ?>

          <!-- TEXT POST HERE  -->
           <!-- <div class="container">
              <div class="media-container">
        
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
 -->



           <!-- IMAGE POST HERE -->
           <!-- <div class="container">
                <div class="media-container">
                  <img src="../../public/images/first.jpg" alt="">
            
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
            
            
              </div> -->


              <!-- AUDIO POST HERE -->
<!--             
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
              
              
                </div> -->






                <!-- VIDEO POST HERE -->
                <!-- <div class="container">
                    <div class="media-container">
                      <video src="../../public/videos/videoplayback.mp4"></video>
                
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
                
                
                  </div> -->
          </div>


          <!-- ----------------------------------------------------------- -->
        </div>
  </div>
 
 

  <?php
  include('reuseable/footer.php');

  ?>