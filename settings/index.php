<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/library/functions.php');?>
<style>
    <?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/css/scss/main.css');
    ?>
</style>
<div class="container">
    <?php

        echo buildTabsSection($_SERVER['DOCUMENT_ROOT'] .'/settings/data');
    ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= autoCreateVersion('/settings/js/settings.js')?>"></script>