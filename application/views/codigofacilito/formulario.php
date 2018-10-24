<?= form_open("codigofacilito/recibirdatos")?>
<?php
    $nombre  = array(
        'name' => 'nombre',
        'placeholder' => 'Escribe tu nombre'
    );
    $videos  = array(
        'name' => 'videos',
        'placeholder' => 'Cantidad videos del curso'
    );
?>
    <?= form_label('Nombre','nombre') ?>
    <?= form_input($nombre)?> 
        <br><br>
    <?= form_label('Videos','videos') ?>
    <?= form_input($videos)?> 
</label>
<br><br>
<?= form_submit('','Subir Curso')?> 
<?= form_close()?>  

</html>