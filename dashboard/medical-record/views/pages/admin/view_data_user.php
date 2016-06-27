<body>
    <section class="hbox stretch">
    <?php 
        require 'menu.php';
    ?>
        <!-- .vbox -->
        <section id="content">
            <section class="vbox">
                <section class="bg-light lter">
                    <section class="hbox real-resolution stretch">
                        <!-- .aside -->
                        <aside>
                            <section class="vbox">
                                <section class="scrollable full-container scroll-a">
                                    <div class="container">
                                        <div class="data-user">
                                            <h1 class="clear-margin" style="text-transform:uppercase;color:black;font-weight:500;">Data Administrator</h1>
                                            <div class="line-admin"></div>
                                            <?php 
                                                $query="SELECT * FROM tb_user WHERE level_acc = 'admin'";
                                                $masuk_user->user_admin_dataview($query);
                                            ?>
                                        </div>
                                    </div>
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
    <?php 
        $masuk_user->tampilkan_modal_user($query);
    ?>
    <div class="aksi_tombol">
        <ul class="daftar_tombol">
            <li>
                <button class="user-btn icon-pencil" onClick="location='../input-data-user/'" type="button" data-toggle="tooltip" data-placement="left" title="Input User">
                <span class="sr-only">Halaman Edit User</span>
                </button>
            </li>
        </ul>
    </div>