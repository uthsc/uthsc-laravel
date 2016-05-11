<!--********************-->
<!--Left off canvas menu-->
<!--********************-->
<nav id="uthsc-off-canvas-menu--slide-left" class="uthsc-off-canvas-menu uthsc-off-canvas-menu--slide-left hide-for-print"
     aria-hidden="true">
    <div class="off-canvas-search">
        <!--Search form-->
        <form class="input-group" aria-label="Search the UTHSC site"
              action="http://uthsc.edu/search/" method="get" style="margin-bottom:0;">
            <input type="search" aria-label="Search the UTHSC site" role="search" name="s"
                   placeholder="search" style="margin-right:0;">
            <div class="input-group-button">
                <button type="submit" class="button" aria-label="Submit search form">
                    <span class="fa fa-search"></span>
                </button>
            </div>
        </form>
        <!--/Search form-->
    </div>

    <!--Close menu button-->
    <button class="uthsc-off-canvas-menu__close">
        <span class="fa fa-chevron-left"></span>&emsp; Close Menu
    </button>

    @section('left-off-canvas-menu')

    @show

    <!--Safari bottom nav fix-->
    <div class="safari-bottom-nav-fix"></div>
    <!--Safari bottom nav fix-->
</nav>
<!--*********************-->
<!--/Left off canvas menu-->
<!--*********************-->