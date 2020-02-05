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
                </aside>
      
          </div>






        <!-- THE MAIN POST SECTION -->
        <div class="post-container col-md-6 col-12">


              <!-- AUDIO POST HERE -->



        <?php foreach($audioPost as $post)   : ?>

            <div class="container">

              <div class="text-content">
                    <p>
                      <?php echo $post->body; ?>
                    </p>

                    <a class="btn btn-primary" href="?download_file=<?=$post->media_url?>">
                      download audio message
                    </a>

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
        </div>
  </div>
</div>



<?php

include('reuseable/footer.php');
?>