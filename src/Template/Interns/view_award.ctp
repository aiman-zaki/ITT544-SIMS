<div class = "container">
    <div class = "card text-center">
    <nav class="nav nav-pills nav-fill">
        <?= $this->Html->link('Biodata','/interns/view/'.$intern['id'],['class'=>'nav-item nav-link'])?>
        <?= $this->Html->link('Awards','/interns/view_award/'.$intern['id'],['class'=>'nav-item nav-link active'])?>
        <?= $this->Html->link('Experience','/interns/view_exp/'.$intern['id'],['class'=>'nav-item nav-link'])?>
    </nav>
        
</div>