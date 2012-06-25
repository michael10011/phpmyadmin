<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Navigation styles for the original theme
 *
 * @package    PhpMyAdmin-theme
 * @subpackage Original
 */

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}
?>

/******************************************************************************/
/* Navigation */

#pma_navigation {
    background:         <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    width: 240px;
    overflow: hidden;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: 0;
    height: 100%;
    border-<?php echo $right; ?>: 1px solid gray;
}

#pma_navigation ul {
    margin: 0;
}

#pma_navigation form {
    margin: 0;
    padding: 0;
    display: inline;
}

#pma_navigation select#select_server,
#pma_navigation select#lightm_db {
    width: 100%;
}

/******************************************************************************/
/* classes */

/******************************************************************************/
/* specific elements */

#pma_navigation div#pmalogo {
    <?php //better echo $GLOBALS['cfg']['logoBGC']; ?>
    background-color: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    padding:.3em;
}

#pma_navigation div#recentTableList {
    text-align: center;
    margin-bottom: 0.5em;
}

#pma_navigation div#recentTableList select {
    width: 100%;
}

#pma_navigation div#pmalogo,
#pma_navigation div#leftframelinks,
#pma_navigation div#databaseList,
#pma_navigation div.pageselector {
    text-align:         center;
    margin-bottom:      0.5em;
    padding-bottom:     0.5em;
}
/* Navigation tree*/
#pma_navigation_tree {
    margin: 0.5em 0 0 1em;
    color: black;
}
#pma_navigation_tree a {
    color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}
#pma_navigation_tree a:hover {
    color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
    text-decoration: underline;
}
#pma_navigation_tree ul {
    clear: both;
    padding: 0;
    list-style-type: none;
    margin: 0;
}
#pma_navigation_tree ul ul {
    position: relative;
}
#pma_navigation_tree li {
    white-space: nowrap;
    clear: both;
    min-height: 16px;
}
#pma_navigation_tree img {
	margin: 0;
}
#pma_navigation_tree div.block {
    position: relative;
    width:1.5em;
    height:1.5em;
    min-width: 16px;
    min-height: 16px;
    float: <?php echo $left; ?>;
}
#pma_navigation_tree div.block i,
#pma_navigation_tree div.block b {
    width: 1.5em;
    height: 1.5em;
    min-width: 16px;
    min-height: 8px;
    position: absolute;
    bottom: 0.7em;
    <?php echo $left; ?>: 0.75em;
    z-index: 0;
}
#pma_navigation_tree div.block i {
    border-<?php echo $left; ?>: 1px solid #666;
    border-bottom: 1px solid #666;
}
#pma_navigation_tree div.block i.first { /* Removes top segment */
    border-<?php echo $left; ?>: 0;
}
#pma_navigation_tree div.block b { /* Bottom segment for the tree element connections */
    display: block;
    height: 0.75em;
    bottom: 0;
    left: 0.75em;
    border-<?php echo $left; ?>: 1px solid #666;
}
#pma_navigation_tree div.block a {
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 10;
}
#pma_navigation_tree div.block img {
    position: relative;
    top: -7px;
    left: -7px;
}
#pma_navigation_tree li.last > ul {
    background: none;
}
#pma_navigation_tree li > a, #pma_navigation_tree li > i {
    line-height: 1.5em;
    height: 1.5em;
    padding-<?php echo $left; ?>: 0.3em;
}
#pma_navigation_tree .list_container {
    border-<?php echo $left; ?>: 1px solid #666;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_tree .last > .list_container {
    border-<?php echo $left; ?>: 0 solid #666;
}

/* Fast filter */
li.fast_filter {
    padding-<?php echo $left; ?>: 0.75em;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $right; ?>: 10px;
    border-<?php echo $left; ?>: 1px solid #666;
}
li.fast_filter input {
    width: 100%;
}
li.fast_filter span {
    position: relative;
    <?php echo $right; ?>: 1.5em;
    padding: 0.2em;
    cursor: pointer;
    font-weight: bold;
    color: #800;
}
