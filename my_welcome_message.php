<style>
    .myDiv{
        border: 2px solid #000;
        padding: 10px;
    }

    .alert{
        color: red;
    }

    .employee{
        border: 2px solid red;
        padding: 10px;
    }
</style>

<div class="myDiv<?php if($alert) { echo " alert"; } ?>">
    <?php echo $page_title; ?>
</div>


