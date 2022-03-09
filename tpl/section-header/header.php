<!-- header -->
<div id="header">
    <!-- container -->
    <div class="container">
        <div class="pull-OneBox">
            <?php get_template_part('tpl/section-header/logo')?>
			<?php get_template_part( 'tpl/section-header/search' ) ?>
        </div>
        <div class="pull-TowBox">
            <ul class="header-btns">
				<?php get_template_part( 'tpl/section-header/account' ) ?>
				<?php get_template_part( 'tpl/section-header/chart' ) ?>
                <!-- Mobile nav toggle-->
                <li class="nav-toggle">
                    <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                </li>
                <!-- / Mobile nav toggle -->
            </ul>
        </div>
    </div>
    <!-- container -->
</div>
<!-- header -->