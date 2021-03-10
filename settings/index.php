<?php include_once('C:/xampp/htdocs/site/library/config.php');
include_once(DOCUMENT_ROOT . '/library/functions.php');?>
<style>
    <?php
    include_once(DOCUMENT_ROOT . '/css/scss/main.css');
    ?>
</style>
<div class="container">
    <?php

        echo buildTabsSection(DOCUMENT_ROOT .'/settings/data');
    ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="/site/settings/js/settings.js"></script>