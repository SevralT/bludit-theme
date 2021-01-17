<!-- overall big site header image - make it as wide as your body width is set to -->
<div class="center"><nav style="float:right;">
    <?php if ($site->twitter()): ?>
        <a href="<?php echo $site->twitter() ?>" target="_blank">twitter</a><br />
    <?php endif ?>
    <?php if ($site->facebook()): ?>
        <a href="<?php echo $site->facebook() ?>" target="_blank">facebook</a><br />
    <?php endif ?>
    <?php if ($site->codepen()): ?>
        <a href="<?php echo $site->codepen() ?>" target="_blank">codepen</a><br />
    <?php endif ?>
    <?php if ($site->instagram()): ?>
        <a href="<?php echo $site->instagram() ?>" target="_blank">instagram</a><br />
    <?php endif ?>
    <?php if ($site->gitlab()): ?>
        <a href="<?php echo $site->gitlab() ?>" target="_blank">gitlab</a><br />
    <?php endif ?>
    <?php if ($site->github()): ?>
        <a href="<?php echo $site->github() ?>" target="_blank">github</a><br />
    <?php endif ?>
    <?php if ($site->linkedin()): ?>
        <a href="<?php echo $site->linkedin() ?>" target="_blank">linkedin</a><br />
    <?php endif ?>
    <?php if ($site->mastodon()): ?>
        <a href="<?php echo $site->mastodon() ?>" target="_blank">mastodon</a><br />
    <?php endif ?>
    <?php if ($site->dribbble()): ?>
        <a href="<?php echo $site->dribbble() ?>" target="_blank">dribbble</a><br />
    <?php endif ?>
    <?php if ($site->VK()): ?>
        <a href="<?php echo $site->VK() ?>" target="_blank">VK</a><br />
    <?php endif ?>
    <?php
    $className = 'pluginRSS';
    if (pluginActivated($className)) {
        echo '<a href="'. HTML_PATH_ROOT .'rss.xml" target="_blank">rss</a>';
    }
?>
</nav>
</div>
<div class="center"><h1>
    <center><p title="<?php echo $site->title() ?>"><?php echo $site->title() ?></p></center>
</h1>
</div>
    <div class="topmenu">
    <a class="tme" href="/">Главная</a> <span class="pcbr">|</span>
    <a class="tme" href="/about-me.php">Обо мне</a> <span class="pcbr">|</span>
    <b><a class="tme" href="/blog">Блог</a></b> <span class="pcbr">|</span>
    <a class="tme" href="https://build.sevralt.ml">Файлы</a> <span class="pcbr">|</span>
    <a class="tme" href="https://git.sevralt.ml">Git</a> <span class="pcbr">|</span>
    <a class="tme" href="/pastebin">Pastebin</a> <span class="pcbr">|</span>
    <a class="tme" href="/minecraft.php">Minecraft</a> <span class="pcbr">|</span>
    <a class="tme" href="/cpanel.php">Панель управления</a> <span class="pcbr">|</span>
    <a class="tme" href="/en/">English</a>
   </div>
