
<!-- &#10003 -->
<?php

function print_mods($mod){
?>
<!-- MÓDULO PSO -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/psocorros.png"/></p>
    <div id="block_enable_label">
        <p id="block_label_number"><span class="label label-success">1</span></p>
        <p id="block_label_name">Primeiros<br>Socorros</p>
    </div>
    <button class="btn btn-success" id="block_button">Conteúdo</button>
    <button class="btn btn-success" id="block_button">Teste <span style="float: right"><?php echo ($mod > 1) ? "&#10003" : "&#10008"; ?></span></button>
</div>

<!-- MÓDULO MEC -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/mecanica.png"/></p>
    <div id="block_<?php echo ($mod >= 2) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">2</span></p>
        <p id="block_label_name">Mecânica de<br>Automóveis</p>
    </div>
    <button class="btn btn-success" <?php echo ($mod >= 2) ? "" : "disabled"; ?> id="block_button">Conteúdo</button>
    <button class="btn btn-success" <?php echo ($mod >= 2) ? "" : "disabled"; ?> id="block_button">Teste <span style="float: right"><?php echo ($mod > 2) ? "&#10003" : "&#10008"; ?></span></button>
</div>

<!-- MÓDULO LEG -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/legislacao.png"/></p>
    <div id="block_<?php echo ($mod >= 3) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">3</span></p>
        <p id="block_label_name">Legislação de<br>Trânsito</p>
    </div>
    <button class="btn btn-success" <?php echo ($mod >= 3) ? "" : "disabled"; ?> id="block_button">Conteúdo</button>
    <button class="btn btn-success" <?php echo ($mod >= 3) ? "" : "disabled"; ?> id="block_button">Teste <span style="float: right"><?php echo ($mod > 3) ? "&#10003" : "&#10008"; ?></span></button>
</div>

<!-- MÓDULO DIR -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/ddefensiva.png"/></p>
    <div id="block_<?php echo ($mod >= 4) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">4</span></p>
        <p id="block_label_name">Direção<br>Defensiva</p>
    </div>
    <button class="btn btn-success" <?php echo ($mod >= 4) ? "" : "disabled"; ?> id="block_button">Conteúdo</button>
    <button class="btn btn-success" <?php echo ($mod >= 4) ? "" : "disabled"; ?> id="block_button">Teste <span style="float: right"><?php echo ($mod > 4) ? "&#10003" : "&#10008"; ?></span></button>
</div>

<!-- MÓDULO MAM -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/mambiente.png"/></p>
    <div id="block_<?php echo ($mod >= 5) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">5</span></p>
        <p id="block_label_name">Meio<br>Ambiente</p>
    </div>
    <button class="btn btn-success" <?php echo ($mod >= 5) ? "" : "disabled"; ?> id="block_button">Conteúdo</button>
    <button class="btn btn-success" <?php echo ($mod >= 5) ? "" : "disabled"; ?> id="block_button">Teste <span style="float: right"><?php echo ($mod > 5) ? "&#10003" : "&#10008"; ?></span></button>
</div>

<!-- MÓDULO TFI -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/aprovado.png"/></p>
    <div id="block_<?php echo ($mod >= 2) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">6</span></p>
        <p id="block_label_name">Teste<br>Final</p>
    </div>
    <!--<button class="btn btn-success" disabled id="block_button">Conteúdo</button>-->
    <button class="btn btn-success" <?php echo ($mod >= 6) ? "" : "disabled"; ?> id="block_button">Teste <span style="float: right"><?php echo ($mod > 6) ? "&#10003" : "&#10008"; ?></span></button>
</div>
<?php        
}
?>