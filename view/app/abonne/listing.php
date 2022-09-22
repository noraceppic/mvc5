<h2>Liste des abonnées</h2>
<p><a href="<? $view->path('add');?>">ajouter un abonne</a></p>
<p>Nombre d'abonnées : <?=$count; ?></p>


<section class="abonne">
    <?php foreach ($abonnes as $abonne) { ?>
        <div>
            <p><?= $abonne->nom; ?></p>
        </div>
        
        <ul>
            <li><a href="<?=$view->path('abonne',[$abonne->id]); ?>">show</a></li>
            <li><a href="<?=$view->path('edit',[$abonne->id]); ?>">edit</a></li>
            <li><a onClick=" return confirm('etes vous vraiment certain du supremer cette abonné')" href="<?=$view->path('delete',[$abonne->id]); ?>">delete</a></li>
        </ul>
    <?php } 
    ?>
</section>

