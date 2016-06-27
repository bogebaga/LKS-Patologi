<body>
    <section class="hbox stretch">
    <?php 
        require 'menu_search.php';
    ?>
        <!-- .vbox -->
        <section id="content">
            <section class="vbox">
                <section class="bg-light lter">
                    <section class="hbox stretch">
                        <!-- .aside -->
                        <aside>
                            <section class="vbox">
                                <span class="detilnya">
                                    <img src="<?php echo $config['site']; ?>assets/css/Material/black-unhas.png" alt="Logos Unhas" width="30px" height="40px">rsp. Universitas Hasanuddin
                                </span>     

                                <div class="container">
                                    <div class="logo-search-lks">
                                        <img src="<?php echo $config['site']; ?>assets/css/Material/banner-lks.png" alt="search-logo" height="150px" width="300px">
                                    </div>
                                    <div class="kotak-search-tombol">
                                        <div class="kotak-search">
                                            <div class="glyphicon glyphicon-file gly-opt">
                                                <span class="sr-only">Logo Sebelum Search</span>
                                            </div>
                                            <input type="text" class="no-options-box" placeholder="Cari data Lembar Kendali Sampel&hellip;" autofocus>
                                        </div>

                                        <form method="POST">
                                            <button class="cari-lks" type="submit">Cari Data</button>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </aside>
                        <!-- /.aside -->
                    </section>
                </section>
            </section>
        </section>
        <!-- /.vbox -->
    </section>