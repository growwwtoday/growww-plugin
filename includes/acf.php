<?php
     if( class_exists('acf') ) {
         $parent = acf_add_options_page( array(
            'page_title' => 'Growww Today',
            'menu_title' => 'Growww Today',
            'icon_url' => 'dashicons-hammer', // Add this line and replace the second inverted commas with class of the icon you like
            'redirect' 		=> true,
            ) );
             // Option page Header Insert
             acf_add_options_sub_page(array(
                'page_title' 	=> 'Algemene thema opties',
                'menu_title' 	=> 'Algemeen',
                'parent_slug' 	=> $parent['menu_slug'],
            ));

           // Option page Header Insert
            acf_add_options_sub_page(array(
                'page_title' 	=> 'Header Opties',
                'menu_title' 	=> 'Header',
                'parent_slug' 	=> $parent['menu_slug'],
            ));
            // Option page Footer Insert
            acf_add_options_sub_page(array(
            'page_title' 	=> 'Footer Opties',
            'menu_title' 	=> 'Footer',
            'parent_slug' 	=> $parent['menu_slug'],
             ));
             // Option page Theme options
            acf_add_options_sub_page(array(
                'page_title' 	=> 'Thema velden',
                'menu_title' 	=> 'Thema velden',
                'parent_slug' 	=> $parent['menu_slug'],
            ));
     } else {
         echo'Activeer eerst ACF PRO';
     }