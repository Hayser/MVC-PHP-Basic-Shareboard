<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Comparte una historia o anécdota </h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Titulo</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Descripción</label>
    		<textarea name="body" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    		<label>Link</label>
    		<input type="text" name="link" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Compartir" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancelar</a>
    </form>
  </div>
</div>