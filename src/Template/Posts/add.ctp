<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <?= $this->Form->create($posts) ?>
                <div class="form-group">
                    <?= $this->Form->input('nom',['class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('prenom',['class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('phone',['class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('email',['class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('rue',['class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('cp',['class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('ville',['class'=>'form-control form-control-sm']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('pays',['class'=>'form-control form-control-sm']) ?>
                </div>
                <button type="submit" class="btn btn-primary">Creer</button>
                <?= $this->Html->link('Retour', ['action'=>'index'],['class'=>'btn btn-success']); ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>