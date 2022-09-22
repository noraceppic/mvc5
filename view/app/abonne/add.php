<div class="addFormAbonne">
    <form action="" methode ="post" novalidate>
        <?= $form->label('nom');?>
        <?= $form->input('nom');?>
        <?= $form->error('nom');?>

        <?= $form->label('prenom');?>
        <?= $form->input('prenom');?>
        <?= $form->error('pernom');?>

        <?= $form->label('email');?>
        <?= $form->input('email','email');?>
        <?= $form->error('email');?>

        <?= $form->label('age');?>
        <?= $form->input('age','age');?>
        <?= $form->error('age');?>

        <?= $form->submit();?>
    </form>

</div>