<style>
    a:link {
    color: white;
    }

    /* visited link */
    a:visited {
        color: white;
    }

</style>

<div class = "container">
    <?php foreach($offers as $offer) {?>
        <div class="card card-cascade wider" style="margin-bottom:10px">
             <div class="view view-cascade gradient-card-header blue-gradient">
                <a href = "view/<?= $offer['id']?>"><h2 class="card-header-title mb-3"><?= $offer['title'] ?></h2></a>
             </div>
        </div>
    <?php }?>
</div>