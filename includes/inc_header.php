<header>
    <?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/inc_pg-top.php')

    ?>
    <div class="header row align-items-center">
        <div class="col-2">
            <img src="./images/logo.png?v=2" alt="Company logo">
        </div>
        <div class="col-10 align-self-start">
            <div class="site-search col-12">
                <label for="siteSearch" hidden>Site Search</label>
                <input id="siteSearch" type="text" placeholder="Site Search" title="site search">
            </div>
            <div class="col-12">
                <div class="row right navlist">
                    <?php
                        $pages = loadSettings('pages.json');
                        foreach($pages as $page){
                            echo("<div class='nav-item'><a class='nav-button' href='#'>$page->title</a></div>");
                        }
                    ?>
                </div>

            </div>

        </div>
    </div>
</header>
