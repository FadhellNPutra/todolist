<?php 
    if(!defined('INDEX')) die("");

    $halaman = ['
    dashboard',
    'tambah_kegiatan', 
    'kegiatan_soon',
    'kegiatan_selesai',
    'insert_kegiatan',
    'delete_kegiatan',
    'edit_kegiatan'
    ];

    if(isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else {
        $hal = "dashboard";
    }

    foreach($halaman as $h){
        if($h == $hal){
            include "content/$h.php";
            break;
        };
    };
?>