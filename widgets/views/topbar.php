<nav class="top-bar" data-topbar role="navigation">

    <ul class="title-area">
        <li class="name">
            <?php if (isset($titleLink) && !empty($titleLink)): ?>
            <h1><a href="<?php echo $titleLink;?>"><?php echo $title;?></a></h1>
            <?php else: ?>
                <h1><?php echo $title;?></h1>
            <?php endif; ?>
        </li>
        <li class="toggle-topbar menu-icon">
            <a href="#"><span>Menu</span></a>
        </li>
    </ul>

    <section class="top-bar-section">
        <ul class="right">
            <li class="active">
                <a href="#">Home</a>
            </li>
        </ul>

        <ul class="left">
            <li class="active">
                <a href="#">Menu Item</a>
            </li>
        </ul>
    </section>

</nav>