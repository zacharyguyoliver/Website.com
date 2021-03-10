<html>
<?php
    include_once(__DIR__ . '/library/config.php');
    
?>
<body>
    <?php 
        include_once(DOCUMENT_ROOT . '/includes/inc_header.php'); 
        include_once(DOCUMENT_ROOT . '/modules/marketing-message/marketing-message.php'); 
        echo(json_encode([['title'=>'page','slug'=>'/page','content'=>'content'],['title'=>'page','slug'=>'/page','content'=>'content']]));
    ?>
    
    <div class="myContainer">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
</body>
</html>