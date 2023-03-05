<?php

function cekakses($resp){
    $session = session();
    $email = $session->get('email');
    if(empty($email)){
        $session->setFlashdata('pesan','anda belum login');
        $resp->redirect(site_url('publik/login'));
    }
}

?>