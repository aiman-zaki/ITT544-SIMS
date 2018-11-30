<div class = "container">
    <div class = "row">
    <?php foreach($interns as $intern){?>
        <div class = "col-md-3">
            <div class = "card card-cascade narrower">
                <div class = "view view-cascade overlay">
                    <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" alt="Card image cap">
                </div>
                <div class = "card-body card-body-cascade text-center">
                <h4 class="card-title"><strong><?php echo $intern['fname']?>
                    <?php echo $intern['lname']?></strong></h4>
                    <h6><?php echo $intern['email']?></h6>
                    <?php echo $this->Html->link(
                        'view',
                            ['controller' => 'Interns', 'action' => 'view', $intern['id']])?>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>