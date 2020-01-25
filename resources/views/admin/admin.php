

<?php

$pageTitle = 'Admin';

include 'admin_reuseable/header.php';

?>
<div class="jumbotron">
  <div class="row">
    <div class="col-12 col-sm-4">
          <div id="main">
            <button class="openbtn btn btn-primary" onclick="openNav()">☰</button>
          </div>
          <div id="mySidenav" class="sidenav" align="center">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
              <i class="fa fa-backward" aria-hidden="true"></i>
              <i class="fa fa-backspace    "></i>
              </a>
            <br><br><br>
            <img align="center" class="Lancers" src="https://res.cloudinary.com/dcoqt2wpo/image/upload/v1570557507/Lancers_c8dpbb.png">
            <br><br><br><br><br><br>
            <div class="Inner">

            </div>
          </div>
    </div>
      <div class="col-12 col-sm-8 holders">


       


            <div class="container mt-3">
                <h2>Add Post</h2>
                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    
                    <a class="nav-link active" data-toggle="tab" href="#image-post">
                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                        Image/Text Post
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#audio-post">
                        <i class="fa fa-file-audio-o" aria-hidden="true"></i>
                        Add audio post 
                      </a>
                        
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#video-post">
                        <i class="fa fa-video-camera" aria-hidden="true"></i>
                        Add video post
                    </a>
                  </li>
                </ul>
              
                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- FOR THE IMAGE POST -->
                  <div id="image-post" class="container tab-pane active "><br>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <h1>Post a Message with image</h1>
                        <textarea class=" text-area" name="image_text_box" id="" placeholder="Please input your text Here..." cols="30" rows="10" required></textarea>
                        <div class="upload-wrapper">
                          <button class="upload-btn btn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                             file
                          </button>
                          <input class="upload" type="file" name="image" id="image">
                        </div>
                        <div class="form-group input-group text-align-center">
                            <input class="btn btn-primary" type="submit" name="image-post" value="Post">
                        </div>
                       
                      </form>
                  </div>

                      <!-- FOR THE AUDIO POST -->
                  <div id="audio-post" class="container tab-pane fade"><br>
                    <form action=""method="POST" enctype="multipart/form-data">
                        <h1>Post an Audio Message</h1>
                        <textarea class=" text-area" name="audio_text_box" id="" placeholder="Please input your text Here..." cols="30" rows="10" required></textarea>
                        <div class="upload-wrapper">
                            <button class="upload-btn btn">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                               file
                            </button>
                            <input class="upload" type="file" name="audio" id="audio" required>
                          </div>
                       <div class="input-group"> 
                         <input class="btn btn-primary" type="submit" name="audio-post" value="Post">
                        </div>
                      </form>
                  </div>

                          <!-- FOR THE VIDEO POST -->
                  <div id="video-post" class="container tab-pane fade"><br>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <h1>Post a Video Message </h1>
                          <textarea class="text-area " name="video_text_box" id="" placeholder="Please input your text Here..." cols="30" rows="10" required></textarea>
                        
                          <div class="upload-wrapper">
                              <button class="upload-btn btn">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                 file
                              </button>
                              <input class="upload" type="file" name="video" id="" required>
                            </div>
                        <div class="input-group">
                            <input class="btn btn-primary" type="submit" name="video-post" value="Post">
                        </div>
                      </form>
                  </div>
                </div>
              </div>
      </div>
              
         


          <!-- THE TAB CONTENTS HERE  -->
          

  </div>

  </div>


  <!-- FOR THE MAIN CONTENTS AND OTHERS  -->


</div>
</div>



<script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          // document.getElementById("main").style.marginLeft = "250px";
          document.querySelector('.openbtn').style.display = "none";
        }
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
          document.querySelector('.openbtn').style.display = "block";
        }
        openNav() ;
      </script>

<?php


include 'admin_reuseable/footer.php';

?>