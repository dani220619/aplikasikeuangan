<?php
$page = isset($_GET['page']) ? $_GET['page'] : "";
	if ($page=="home" xor $page == "" ) {
		include "home1.php";
	} 

   elseif ($page == "beranda") {
    include "view/page/beranda/beranda.php";
  }

  // elseif ($page == "pembayaran") {
  //   include "view/page/pembayaran/pembayaran.php";
  // }
  // elseif ($page == "admin") {
  //   include "view/page/pembayaran/admin.php";
  // }
//transaksi
   elseif ($page == "pembayaran") {
    include "view/page/pembayaran/pembayaran.php";
  }
  // elseif ($page == "proses_transaksi") {
  //   include "view/page/transaksi/proses_transaksi.php";
  // }
  // elseif ($page == "admin") {
  //   include "view/page/pembayaran/admin.php";
  // }
  //data santri

// elseif ($page == "data-santri") {
//     include "view/page/data-santri/datasiswa.php";
//   }
//    elseif ($page == "tambah") {
//     include "view/page/data-santri/tambah.php";
//   }
//   elseif ($page == "hapus") {
//     include "view/page/data-santri/hapus.php";
//   }
//   elseif ($page == "form-edit-data-santri") {
//     include "view/page/data-santri/form-edit-data-santri.php";
//   }
//   elseif ($page == "form-cetak-data-santri") {
//     include "view/page/data-santri/form-cetak-data-santri.php";
//   }
//   elseif ($page == "proses-hapus-data-santri") {
//     include "view/page/data-santri/proses-hapus-data-santri.php";
//   }
//   elseif ($page == "proses-ubah-data-santri") {
//     include "view/page/data-santri/proses-ubah-data-santri.php";
//   }

//data santri
  elseif ($page == "data-santri") {
    include "view/page/data-santri/data-santri.php";
  }
   elseif ($page == "form-add-data-santri") {
    include "view/page/data-santri/form-add-data-santri.php";
  }
  elseif ($page == "proses-add-data-santri") {
    include "view/page/data-santri/proses-add-data-santri.php";
  }
  elseif ($page == "form-edit-data-santri") {
    include "view/page/data-santri/form-edit-data-santri.php";
  }
  elseif ($page == "form-cetak-data-santri") {
    include "view/page/data-santri/form-cetak-data-santri.php";
  }
  elseif ($page == "proses-hapus-data-santri") {
    include "view/page/data-santri/proses-hapus-data-santri.php";
  }
  elseif ($page == "proses-ubah-data-santri") {
    include "view/page/data-santri/proses-ubah-data-santri.php";
  }

//kas masuk
   elseif ($page == "kas-masuk") {
    include "view/page/kas-masuk/kas-masuk.php";
  }
   elseif ($page == "form-add-kas-masuk") {
    include "view/page/kas-masuk/form-add-kas-masuk.php";
  }
  elseif ($page == "proses-add-kas-masuk") {
    include "view/page/kas-masuk/proses-add-kas-masuk.php";
  }
  elseif ($page == "form-edit-kas-masuk") {
    include "view/page/kas-masuk/form-edit-kas-masuk.php";
  }
  elseif ($page == "form-cetak-kas-masuk") {
    include "view/page/kas-masuk/form-cetak-kas-masuk.php";
  }
  elseif ($page == "proses-hapus-kas-masuk") {
    include "view/page/kas-masuk/proses-hapus-kas-masuk.php";
  }
  elseif ($page == "proses-ubah-kas-masuk") {
    include "view/page/kas-masuk/proses-ubah-kas-masuk.php";
  }

//kas keluar
   elseif ($page == "kas-keluar") {
    include "view/page/kas-keluar/kas-keluar.php";
  }
   elseif ($page == "form-add-kas-keluar") {
    include "view/page/kas-keluar/form-add-kas-keluar.php";
  }
  elseif ($page == "proses-add-kas-keluar") {
    include "view/page/kas-keluar/proses-add-kas-keluar.php";
  }
  elseif ($page == "form-edit-kas-keluar") {
    include "view/page/kas-keluar/form-edit-kas-keluar.php";
  }
  elseif ($page == "form-cetak-kas-keluar") {
    include "view/page/kas-keluar/form-cetak-kas-keluar.php";
  }
  elseif ($page == "proses-hapus-kas-keluar") {
    include "view/page/kas-keluar/proses-hapus-kas-keluar.php";
  }
  elseif ($page == "proses-ubah-kas-keluar") {
    include "view/page/kas-keluar/proses-ubah-kas-keluar.php";
  }
//laporan kas masuk
  elseif ($page == "laporan-kas-masuk") {
    include "view/page/laporan-kas-masuk/laporan-kas-masuk.php";
  }
//laporan kas keluar
  elseif ($page == "laporan-kas-keluar") {
    include "view/page/laporan-kas-keluar/laporan-kas-keluar.php";
  }
  //laporan kas keluar
  elseif ($page == "laporan-rekapitulasi") {
    include "view/page/laporan-rekapitulasi/laporan-rekapitulasi.php";
  }
  //administrator
  elseif ($page == "administrator") {
    include "view/page/administrator/administrator.php";
  }
  elseif ($page == "form-add-admin") {
    include "view/page/administrator/form-add-admin.php";
  }
  elseif ($page == "proses-add-admin") {
    include "view/page/administrator/proses-add-admin.php";
  }
  elseif ($page == "form-edit-admin") {
    include "view/page/administrator/form-edit-admin.php";
  }
  elseif ($page == "proses-edit-admin") {
    include "view/page/administrator/proses-edit-admin.php";
  }
  elseif ($page == "proses-hapus-admin") {
    include "view/page/administrator/proses-hapus-admin.php";
  }
?>
