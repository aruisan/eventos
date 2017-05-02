 
<section>
<?php while($reg_evento=$consulta->fetch_object()){ ?>
    <div class="section col-xs-12 col-sm-6 col-md-4 text-justify">
        <h5 class="text-center"><?php echo  $reg_evento->titulo; ?></h5>
        <figure>
        <img src="data:image/jpeg;base64,<?php echo base64_encode($reg_evento->foto); ?>" class="img-responsive img-thumbnail center-block">
        </figure>
        <p><?php echo substr($reg_evento->descripcion,0,214); ?>...
        <a href="javascript:irArticulo(<?php echo $reg_evento->id_evento; ?>); " class="btn btn-link">Leer mas
        </a>
        </p>
    </div>
<?php } ?>            
</section>
