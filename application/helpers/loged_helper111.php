<?php
function is_logged_in()
{
    //instansiasi dan memanggil Library CI kedalam fungsi
    $ci = get_instance();

    //jika tidak ada session dicontroller, dikick ke halaman login
    if (!$ci->session->userdata('email')) {
        redirect('auth2');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        //select*from user_menu where menu=$menu
        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        //select*from user_access_menu where role_id=$role_id and menu_id=$menu_id
        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth2/blocked');
        }
    }
}
