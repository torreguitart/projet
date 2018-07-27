<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <?= $this->Form->create($posts) ?>
                <div class="form-group">
                    <?= $this->Form->input('nom', ['value'=>$nom, 'class'=>'form-control form-control-sm'])?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('prenom', ['value'=>$prenom, 'class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('phone', ['value'=>$phone, 'class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('email', ['value'=>$email, 'class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('rue', ['value'=>$rue, 'class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('cp', ['value'=>$cp, 'class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('ville', ['value'=>$ville, 'class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('pays', ['value'=>$pays, 'class'=>'form-control form-control-sm']) ?>
                </div>
                <?= $this->Form->button('M.A.J', ['class'=>'btn btn-warning']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>