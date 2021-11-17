<?php
$page = isset($_GET['page']) ? $_GET['page'] : "";
    if ($page=="home" xor $page == "" ) {
        include "home2.php";
    } 
     elseif ($page == "beranda") {
    include "view/page/beranda/beranda.php";
  }
    elseif ($page == "user-santri") {
    include "view/page/user/user-santri.php";
  }

  elseif ($page == "user-pembayaran") {
    include "view/page/user/user-pembayaran.php";
  }

   elseif ($page == "laporan-rekapitulasi") {
    include "view/page/user/laporan-rekapitulasi.php";
  }