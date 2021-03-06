<?php
if (isset($_POST['btn-save'])) 
{
    $username = strtolower($_POST['username']);
    $password = strtolower($_POST['password']);
    $nama = $_POST['nama'];
    $jenis_kel = $_POST['jenis_kelamin'];
    $telpon = $_POST['no_telpon'];
    $alamat = $_POST['alamat'];
    $level_acc = $_POST['level'];       

// $file_max = 200000;

// $pic_ext = array('jpg','jpeg','png','gif','bmp');

$dest = $_SERVER['DOCUMENT_ROOT'].'/LKS-Patologi/dashboard/UPLOAD_FILES/Images/Users_img/';
$gambar = $_FILES['user_picture'];
// $filename = explode(".", $gambar["name"]);

//file original name
// $file_name = $gambar['name']; 

//File name without ekstension
// $file_name_no_ext = isset($filename[0]) ? $filename[0] : null;

// $file_extension = $filename[count($filename)-1];

// $fileNewname = md5($username.".".$file_extension);

$fileNewname = md5($username."1");
move_uploaded_file($gambar['tmp_name'],$dest.$fileNewname);

// $file_weight = $gambar['size'];
// $file_type = $gambar['type'];
// if ($gambar['error'] == 0) 
// {
//  # code...
//  if(in_array($file_extension, $pic_ext)):

//;         if ($file_weight <= $file_max):
    //          echo "File Upload";
    //      else:
    //          echo "Can't Upload file.";
    //      endif;
    //  else:
    //      echo "File too Heavy.";
    //  endif;
    // else:
    //  echo "File type is not supported";

    // endif;

    if ($masuk_user->masukan_user($username,$password,$nama,$jenis_kel,$telpon,$alamat,$level_acc,$fileNewname))
    {
        $block_msg ="<div class='container'>
                            <div class='alert alert-success alert-dismissible fade in' role='alert'>
                                DATA PENGGUNA BERHASIL TERSIMPAN
                                <button type='button' class='close' data-dismiss='alert'>
                                    <span aria-hidden='true'>&times;</span>
                                    <span class='sr-only'>Close</span>
                                </button>
                            </div>
                        </div>";    
    }
    else
    {
        $block_msg = "<div class='container'>
                            <div class='alert alert-danger alert-dismissible fade in' role='alert'>
                                DATA PENGGUNA TIDAK TERSIMPAN
                                <button type='button' class='close' data-dismiss='alert'>
                                    <span aria-hidden='true'>&times;</span>
                                    <span class='sr-only'>Close</span>
                                </button>
                            </div>
                        </div>";
    }
}
?>
<body>
    <section class="hbox stretch">
    <?php 
        require 'menu_input.php';
    ?>
        <!-- .vbox -->
        <section id="content">
            <section class="vbox">
                <section class="bg-light lter">
                    <section class="hbox stretch">
                        <!-- .aside -->
                        <aside>
                            <section class="vbox">
                                <section class="scrollable scroll-a">
                                    <div class="latar-merah add-sett w-std">
                                        <div class="container">
                                            <h1 class="clear-margin">INPUT DATA USER - LKS</h1>
                                        </div>
                                    </div>
                                    <?php
                                        if(isset($block_msg))
                                        {
                                            echo $block_msg;
                                        }
                                    ?>
                                    <div class="col-xs-10 col-md-9 col-lg-8 center w-std">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="lembar-full">
                                                <div class="lembar-full-border" style="padding:10px 10px 10px 10px; border-bottom-color:#E0E0E0;">
                                                    <label class="control-label">Username&nbsp;:
                                                    </label>
                                                        <input  class="form-control" type="text" name="username" placeholder="Username" required> 
                                                    <label class="control-label label-margin-top">Password&nbsp;:
                                                    </label>            
                                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                    <label class="control-label label-margin-top">Nama Lengkap&nbsp;:
                                                    </label>
                                                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                                                    <label class="control-label label-margin-top">No. Telepon/HP&nbsp;:
                                                    </label>
                                                        <input type="tel" class="form-control" name="no_telpon" placeholder="No Telepon/HP">
                                                    <label class="col-xs-6 control-label label-margin-top">Jenis Kelamin&nbsp;:
                                                        <div class="row"> 
                                                            <label class="col-xs-6 clean-label">
                                                                <input type="radio" name="jenis_kelamin" value="Laki-laki" checked>&nbsp;Laki-laki
                                                            </label>
                                                            <label class="col-xs-6 clean-label">
                                                                <input type="radio" name="jenis_kelamin" value="Perempuan">&nbsp;Perempuan
                                                            </label>
                                                        </div>
                                                    </label>

                                                    <label class="col-xs-6 control-label label-margin-top">Level&nbsp;:
                                                        <div class="row">
                                                            <label class="col-xs-6 clean-label">
                                                                <input type="radio" name="level" value="admin" checked>&nbsp;Admin
                                                            </label>
                                                            <label class="col-xs-6 clean-label">
                                                                <input type="radio" name="level" value="user">&nbsp;User
                                                            </label>
                                                        </div>
                                                    </label>

                                                    <label class="control-label label-margin-top">Alamat&nbsp;:</label>
                                                        <textarea rows="5" class="form-control" name="alamat" placeholder="Dimana Kamu Tinggal..."></textarea>
                                                    <label class="control-label label-margin-top">Gambar User&nbsp;:</label>
                                                    <div id="image_container">
                                                        <div id="image_preview"></div>
                                                    </div>
                                                    
                                                    <div align="center">
                                                        <div class="File-Upload btn btn-success">
                                                            <input type="file" name="user_picture" id="upload_file" class="upload_gambar">
                                                        </div>
                                                    </div>
                                                </div>      
                                                <div class="lembar-full-border user-lks-btn" style="padding:20px 10px 20px 10px;" align="right">
                                                        <button type="reset" class="btn btn-lg btn-default">
                                                        <span class="icon-eraser "></span>&nbsp;Batal
                                                        </button>
                                                        <button type="submit" class="btn btn-lg btn-primary" name="btn-save">
                                                        <span class="icon-save"></span>&nbsp;Simpan User Baru
                                                        </button>
                                                </div>
                                            </div>  
                                        </form>
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