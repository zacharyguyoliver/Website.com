<header>
    <?php
    include_once(DOCUMENT_ROOT . '/includes/inc_pg-top.php')

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
                    <div class="nav-item"><a class="nav-button" href="#">page 1</a></div>
                    <div class="nav-item"><a class="nav-button" href="#">page 2</a></div>
                    <div class="nav-item"><a class="nav-button" href="#">page 3 this is a long name</a></div>
                    <div class="nav-item"><a class="nav-button" href="#">page 4</a></div>
                </div>

            </div>

        </div>
    </div>
</header>
