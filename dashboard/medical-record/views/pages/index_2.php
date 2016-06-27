<body>
    <section class="hbox stretch">
    <?php 
        require 'menu2.php';
    ?>
        <!-- .vbox -->
        <section id="content">
            <section class="vbox">
                <section class="bg-light lter">
                    <section class="hbox stretch">
                        <!-- .aside -->
                        <aside>
                            <section class="vbox">
                                <section class="scrollable">
                                  <section class="d-head-container">
                                    <div class="container" align="center">
                                       <span class="label label-success pull-left label-font-size"><i class="icon-user-md"></i>&nbsp;USER</span>
                                       <div class="part-head-d">
                                          <?php 
                                          $username = $_SESSION['username'];
                                          $path = $_SERVER['DOCUMENT_ROOT']."/LKS-Patologi/dashboard/UPLOAD_FILES/Images/Users_img/";
                                          $path .= md5($username."1");

                                          $name_other = md5($username."1");

                                          $jenis_kelamin = $_SESSION['jenis_kel'];

                                          if(file_exists($path))
                                          {
                                          ?>
                                            <img src="<?php echo $config['site']; ?>UPLOAD_FILES/Images/Users_img/<?php echo $name_other; ?>" class="image-user-pic-container" alt="user-gambar">
                                          <?php
                                          }
                                          else
                                          {
                                            if($jenis_kelamin == 'Laki-laki')
                                            {
                                          ?>
                                               <div class="image-user-pic-au center"></div>
                                          <?php     
                                            } 
                                            else
                                            {
                                          ?>
                                               <div class="image-user-pic-au ua center"></div>
                                          <?php
                                            }  
                                          }
                                          ?>
                                          <br>
                                          <span class="details-user">Welcome back, <?php echo $_SESSION['nama']; ?></span>    
                                       </div>
                                       <h1 class="head-detail-sistem">Sistem Details</h1>
                                    </div>   
                                    <div class="container">
                                        <div class="content-container" align="center">
                                            <div class="fill-container g-m-rl-10">
                                                <span class="title-block">LEMBAR KENDALI SAMPEL</span>
                                                <div class="icon-content-up spr-lks block-a m-top" ></div>
                                                <span class="title-content"><?php 
                                                $lkscrud->hitung_jumlah_record_lks();
                                                 ?></span>
                                            </div>
                                        </div>
                                    </div>
                                 </section>
                                 <section class="action-panel" align="center">
                                    <span class="title-action-standalone">
                                        ACTIONS
                                    </span>
                                    <div class="fill-container g-m-rl">
                                        <a href="search/">
                                           <div class="icon-content-down spr-srch"></div>
                                           <span class="title-content-down">CARI LKS</span>
                                        </a>
                                    </div>
                                    <div class="fill-container g-m-rl">
                                       <a href="input-data-lks/">
                                           <div class="icon-content-down spr-add-lks"></div>
                                           <span class="title-content-down">TAMBAH LKS</span>
                                       </a>
                                    </div>
                                    <div class="fill-container g-m-rl">
                                       <a href="detil-lks/">
                                           <div class="icon-content-down spr-data-analisis"></div>
                                           <span class="title-content-down">DETIL LKS</span>
                                       </a>
                                    </div>
                                 </section>
                                 <footer class="labaga">
                                        <ul>
                                            <li>
                                                <ul class="connect-sn" style="padding-bottom:20px;padding-top:10px;">
                                                    <span class="connect-user">Connect With Us</span>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="connect-sn" style="padding-bottom:25px;">
                                                    <li class="sn-space"><span class="sr-only">Unhas</span>
                                                        <a href="http://www.rs.unhas.ac.id/">
                                                            <div class="sprite-container">
                                                                <div class="sprite_pic rsp_sprite"></div>
                                                            </div>
                                                        </a>#HOME
                                                    </li>
                                                    <li class="sn-space"><span class="sr-only">FB</span>
                                                        <a href="https://www.facebook.com/Rumah-Sakit-Unhas-122019124600303/">
                                                            <div class="sprite-container">
                                                                <div class="sprite_pic facebook_sprite"></div>
                                                            </div>
                                                        </a>  
                                                        #Facebook
                                                    </li>
                                                    <li class="sn-space"><span class="sr-only">TWITTER</span>
                                                        <a href="https://twitter.com/@RsUnhas11">
                                                            <div class="sprite-container">
                                                                <div class="sprite_pic twitter_sprite"></div>
                                                            </div>
                                                        </a>
                                                        #twitter
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <ul class="karir-page">
                                                    <li class="karir-space">
                                                        <span class="sr-only">profile</span>
                                                        <a href="http://rs.unhas.ac.id/hal2-dewan-direksi.html">
                                                            <div class="btn-foot">profile</div>
                                                        </a>
                                                    </li>
                                                    <li class="karir-space">
                                                        <span class="sr-only">pelayanan</span>
                                                        <a href="http://rs.unhas.ac.id/media.php?module=semuaberita">
                                                            <div class="btn-foot">pelayanan</div>
                                                        </a>
                                                    </li>
                                                    <li class="karir-space">
                                                        <span class="sr-only">pendidikan</span>
                                                        <a href="http://rs.unhas.ac.id/media.php?module=semuaberita">
                                                            <div class="btn-foot">pendidikan</div>
                                                        </a>
                                                    </li>
                                                    <li class="karir-space">
                                                        <span class="sr-only">download</span>
                                                        <a href="http://rs.unhas.ac.id/semua-download.html">
                                                            <div class="btn-foot">download</div>
                                                        </a>
                                                    </li>
                                                    <li class="karir-space">
                                                        <span class="sr-only">pengumuman</span>
                                                        <a href="http://rs.unhas.ac.id/pengumuman.html">
                                                            <div class="btn-foot">pengumuman</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </footer>
                                </section>
                            </section>
                        </aside>
                        <!-- /.aside -->
                    </section>
                </section>
            </section>
        </section>
        <!-- /.vbox -->
    </section>
