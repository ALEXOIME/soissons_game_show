<?php 

    add_theme_support('title-tag');

    function add_links_menu()
    {
        add_menu_page('Influanceurs', 'Influanceur', 'administrator', 'script-perso.php', 'images/marker.png', 50);
    }

    add_action('admin_menu', 'add_links_menu');

?>