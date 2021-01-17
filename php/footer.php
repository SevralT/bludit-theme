<!-- Pagination -->
<?php if (($url->whereAmI() == 'home') && Paginator::numberOfPages() > 1): ?>
<div class="center"><nav>
    <!-- Previous button -->
    <?php if (Paginator::showPrev()): ?>
        <a style="float:left;" href="/<?php echo Paginator::previousPageUrl() ?>" tabindex="-1"> <-- Previous </a>
    <?php else: ?>
        <span style="float:left;"> <-- Previous </span>
    <?php endif; ?>

    <!-- Next button -->
    <?php if (Paginator::showNext()): ?>
        <a style="float:right;" href="/<?php echo Paginator::nextPageUrl() ?>" tabindex="-1"> Next --> </a>
    <?php else: ?>
        <span style="float:right;"> Next --> </span>
    <?php endif; ?>
</nav>
<br />
<hr />
</div>
<?php endif ?>
<div class="center">Powered by <a href="https://nextpc.sevralt.ml/" target="_blank">NextPC</a>, создано <a href="https://sevralt.ml" target="_blank">SevralT</a></div>