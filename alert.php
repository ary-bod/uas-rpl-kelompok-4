<?php
if (isset($_SESSION["alert"])){ ?>
    <div class="alert alert-warning">
        <?php echo $_SESSION["alert"]?>
    </div>
    <?php
    unset($_SESSION["alert"]);

}
?>