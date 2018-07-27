<div class="row">
    <div class="col-md-3">
        <h3>Annuaire</h3>
    </div>
    <div class="col-md-6">
        <form action="<?= $this->Url->build(['action'=>'search']) ?>" method="get">
            <div class="input-group">
                <input type="search" name="q" class="form-control"/>
                <div class="input-group-prepend">
                    <button class="btn btn-success input-group-text" type="submit">Recherche</button>
                </div>
            </div>
        </form> 
        
    </div>
    <div class="col-md-3 text-right">
        <?= $this->Html->link('Ajouter', ['action'=>'add'], ['class'=>'btn btn-info']) ?>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <!--<th>Id</th>-->
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>E-mail</th>
            <th>Rue</th>
            <th>C.Postal</th>
            <th>Ville</th>
            <th>Pays</th>
            <th width="170">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
        <tr>
            <!--<td><?= $post->id ?></td>-->
            <td><?= $post->nom ?></td>
            <td><?= $post->prenom ?></td>
            <td><?= $post->phone ?></td>
            <td><?= $post->email ?></td>
            <td><?= $post->rue ?></td>
            <td><?= $post->cp ?></td>
            <td><?= $post->ville ?></td>
            <td><?= $post->pays ?></td>
            <td>
                <?= $this->Html->link('Edit.', ['action'=>'edit', $post->id], ['class'=>'btn-sm btn-warning'])?>
                <?= $this->Form->postLink('Supp.', ['action'=>'delete', $post->id], ['class'=>'btn-sm btn-danger',
                    'confirm'=>'Êtes-vous sûr ?'])?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php 
$paginator = $this->Paginator->setTemplates([
   'number'=>'<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
   'current'=>'<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
   'first'=>'<li class="page-item"><a href="{{url}}" class="page-link">&laquo;</a></li>' ,
   'last'=>'<li class="page-item"><a href="{{url}}" class="page-link">&raquo;</a></li>'  ,
   'prevActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">&lt;</a></li>' ,
   'nextActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">&gt;</a></li>' 
]);
?>
<nav>
    <ul class="pagination">
        <?php
        echo $paginator->first();
        if($paginator->hasPrev()){
            echo $paginator->prev();
        }
        echo $paginator->numbers();
        if($paginator->hasnext()){
            echo $paginator->next();
        }
        echo $paginator->last();
        ?>
    </ul>
</nav>