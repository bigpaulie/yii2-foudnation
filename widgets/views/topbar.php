<nav class="top-bar" data-topbar role="navigation">

    <ul class="title-area">
        <li class="name">
            <?php if (isset($link) && !empty($link)): ?>
                <h1><a href="<?php echo $link; ?>"><?php echo $lable; ?></a></h1>
            <?php else: ?>
                <h1><?php echo $lable; ?></h1>
            <?php endif; ?>
        </li>
        <li class="toggle-topbar menu-icon">
            <a href="#"><span>Menu</span></a>
        </li>
    </ul>

    <section class="top-bar-section">
        <?php if (isset($items['right'])): ?>
            <ul class="right">
                <?php foreach ($items['right'] as $r): ?>
                    <pre><?php print_r($r); ?></pre>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>

</nav>