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
                    <?php if ($r['class'] == 'active'): ?>
                        <li class="active">
                            <a href="<?php echo $r['link']; ?>"><?php echo $r['label']; ?></a>
                        </li>
                    <?php elseif (is_array($r)): ?>
                        <li class="has-dropdown">
                            <a href="#"><?php echo $r['lable']; ?></a>
                            <ul class="dropdown">
                                <?php foreach ($r['items'] as $ri): ?>
                                    <?php if ($ri['class'] == 'active'): ?>
                                        <li class="active">
                                            <a href="<?php echo $ri['link']; ?>">
                                                <?php echo $ri['label']; ?>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <a href="<?php echo $ri['link']; ?>">
                                                <?php echo $ri['label']; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo $r['link']; ?>">
                                <?php echo $r['label']; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        
        <?php if (isset($items['left'])): ?>
            <ul class="left">
                <?php foreach ($items['left'] as $l): ?>
                    <?php if ($l['class'] == 'active'): ?>
                        <li class="active">
                            <a href="<?php echo $l['link']; ?>"><?php echo $l['label']; ?></a>
                        </li>
                    <?php elseif (is_array($l)): ?>
                        <li class="has-dropdown">
                            <a href="#"><?php echo $l['lable']; ?></a>
                            <ul class="dropdown">
                                <?php foreach ($l['items'] as $li): ?>
                                    <?php if ($li['class'] == 'active'): ?>
                                        <li class="active">
                                            <a href="<?php echo $li['link']; ?>">
                                                <?php echo $li['label']; ?>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <a href="<?php echo $li['link']; ?>">
                                                <?php echo $li['label']; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo $l['link']; ?>">
                                <?php echo $l['label']; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        
    </section>

</nav>