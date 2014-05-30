<div class="page-header">
    <h3>Supprimer une permission</h3>
</div>
<?php if(isset($errors)): ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul class="list-unstyled">
            <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif ?>
<?php if(isset($success) && $success): ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4>Permission supprimé avec succès</h4>
    </div>
<?php else: ?>
    <form role="form" method="post">
        <input type="hidden" name="permission_id" value="<?php echo $permission->id; ?>">
        <div class="form-group">
            Êtes-vous sûr de vouloir supprimer la permission <strong><?php echo $permission->slug; ?></strong> ?
        </div>
        <div class="form-group">
            <button type="submit" name="confirm" class="btn btn-success">Confirmer</button>
            &nbsp;
            <button type="submit" name="cancel" class="btn btn-danger">Annuler</button>
        </div>
    </form>
<?php endif ?>