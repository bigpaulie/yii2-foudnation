<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <?php if (isset($title)): ?>
                <h1>
                    <?php if (isset($titleLink)): ?>
                        <a href="<?php echo $titleLink; ?>"><?php echo $title; ?></a>
                    <?php else: ?>
                        <?php echo $title; ?>
                    <?php endif; ?>
                </h1>
            <?php endif; ?>
        </li>
        <li class="toggle-topbar menu-icon">
            <a href="#"><span>Menu</span></a>
        </li>
    </ul>
    
    <section class="top-bar-section">
        <?php if(isset($items['right'])):?>
        <ul class="right">
            <?php foreach ($items['right'] as $r):?>
                <?php foreach ($r as $i):?>
                <li class="<?php echo $i['class'];?>">
                    <a href="<?php echo $i['link'];?>"><?php echo $i['text'];?></a>
                </li>
                <?php endforeach;?>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
    </section>
</nav>