<?php
ob_start();
?>
<h1>Это страница о нас!</h1>
<div class="container">
    <div class="row">
        <div class="col">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/JxS5E-kZc2s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>