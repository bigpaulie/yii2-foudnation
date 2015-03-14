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
                    <?php if (isset($r['class']) && $r['class'] == 'divider'): ?>
                        <li class="divider"></li>
                    <?php elseif (isset($r['class']) && $r['class'] == 'active'): ?>
                        <li class="active">
                            <a href="<?php echo $r['link']; ?>">
                                <?php echo $r['lable']; ?>
                            </a>
                        </li>
                    <?php elseif (is_array($r)): ?>
                        <?php foreach ($r as $ra): ?>
                            <li class="has-dropdown">
                                <?php die(print_r($r));?>
                                <a href="#"><?php echo $ra['lablesub']; ?></a>
                                <ul class="dropdown">
                                    <?php foreach ($ra['items'] as $ri): ?>
                                        <li>
                                            <a href="<?php echo $ri['link']; ?>">
                                                <?php echo $ri['lable']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo $r['link']; ?>">
                                <?php echo $r['lable']; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>

</nav>