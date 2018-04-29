<?php
/**
* Life Rattle custom template
* File: liferattle-coauthors.php
* This file customizes the Co-Authors plugin
*/


function coauthor_sort( $authors ) {

    $sorted = array();

    foreach ($authors as $item) {
        $sorted[$item->last_name][] = $item;
    }

    uksort($sorted, "strnatcasecmp");
    $sorted_authors = array();

    foreach ($sorted as $subArray) {
        foreach ($subArray as $item)  {
            $sorted_authors[] = $item;
        }
    }

    return $sorted_authors;

}

// Apply the filter
add_filter('coauthors_wp_list_authors_array','coauthor_sort');

?>