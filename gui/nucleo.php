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
    <form action="conteudo.php" method="post">
        <input type="hidden" name="modulo" value="1">
        <input type="submit" value="Conteúdo" class="btn btn-success" id="block_button">
    </form>
    <form action="../gui/infoteste.php" method="post">
    	<input type="hidden" name="modulo" value="1">
    	<input type="submit" value="Teste <?php echo ($mod > 1) ? "&#10003" : "&#10008"; ?>" class="btn btn-success" id="block_button">
    </form>
    
</div>

<!-- MÓDULO MEC -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/mecanica.png"/></p>
    <div id="block_<?php echo ($mod >= 2) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">2</span></p>
        <p id="block_label_name">Mecânica de<br>Automóveis</p>
    </div>
    <form action="conteudo.php" method="post">
        <input type="hidden" name="modulo" value="2">
        <input type="submit" value="Conteúdo" class="btn btn-success" <?php echo ($mod >= 2) ? "" : "disabled"; ?> id="block_button">
    </form>
    <form action="../gui/infoteste.php" method="post">
    	<input type="hidden" name="modulo" value="2">
    	<input type="submit" value="Teste <?php echo ($mod > 2) ? "&#10003" : "&#10008"; ?>" <?php echo ($mod >= 2) ? "" : "disabled"; ?> class="btn btn-success" id="block_button">
    </form>
</div>

<!-- MÓDULO LEG -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/legislacao.png"/></p>
    <div id="block_<?php echo ($mod >= 3) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">3</span></p>
        <p id="block_label_name">Legislação de<br>Trânsito</p>
    </div>
    <form action="conteudo.php" method="post">
        <input type="hidden" name="modulo" value="3">
        <input type="submit" value="Conteúdo" class="btn btn-success" <?php echo ($mod >= 3) ? "" : "disabled"; ?> id="block_button">
    </form>
    <form action="../gui/infoteste.php" method="post">
    	<input type="hidden" name="modulo" value="3">
    	<input type="submit" value="Teste <?php echo ($mod > 3) ? "&#10003" : "&#10008"; ?>" <?php echo ($mod >= 3) ? "" : "disabled"; ?> class="btn btn-success" id="block_button">
    </form>
</div>

<!-- MÓDULO DIR -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/ddefensiva.png"/></p>
    <div id="block_<?php echo ($mod >= 4) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">4</span></p>
        <p id="block_label_name">Direção<br>Defensiva</p>
    </div>
    <form action="conteudo.php" method="post">
        <input type="hidden" name="modulo" value="4">
        <input type="submit" value="Conteúdo" class="btn btn-success" <?php echo ($mod >= 4) ? "" : "disabled"; ?> id="block_button">
    </form>
    <form action="../gui/infoteste.php" method="post">
    	<input type="hidden" name="modulo" value="4">
    	<input type="submit" value="Teste <?php echo ($mod > 4) ? "&#10003" : "&#10008"; ?>" <?php echo ($mod >= 4) ? "" : "disabled"; ?> class="btn btn-success" id="block_button">
    </form>
</div>

<!-- MÓDULO MAM -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/mambiente.png"/></p>
    <div id="block_<?php echo ($mod >= 5) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">5</span></p>
        <p id="block_label_name">Meio<br>Ambiente</p>
    </div>
    <form action="conteudo.php" method="post">
        <input type="hidden" name="modulo" value="5">
        <input type="submit" value="Conteúdo" class="btn btn-success" <?php echo ($mod >= 5) ? "" : "disabled"; ?> id="block_button">
    </form>
    <form action="../gui/infoteste.php" method="post">
    	<input type="hidden" name="modulo" value="5">
    	<input type="submit" value="Teste <?php echo ($mod > 5) ? "&#10003" : "&#10008"; ?>" <?php echo ($mod >= 5) ? "" : "disabled"; ?> class="btn btn-success" id="block_button">
    </form>
</div>



<!-- MÓDULO TFI -->
<div id="block">
    <p style="text-align: center"><img id="block_image" src="../icons/aprovado.png"/></p>
    <div id="block_<?php echo ($mod >= 2) ? "enable" : "disable"; ?>_label">
        <p id="block_label_number"><span class="label label-default">6</span></p>
        <p id="block_label_name">Teste<br>Final</p>
    </div>
    <form action="../gui/infoteste.php" method="post">
    	<input type="hidden" name="modulo" value="6">
    	<input type="submit" value="Teste <?php echo ($mod > 6) ? "&#10003" : "&#10008"; ?>" <?php echo ($mod >= 6) ? "" : "disabled"; ?> class="btn btn-success" id="block_button">
    </form>
    <form action="conteudo.php" method="post" style="color: white; visibility: hidden">
        <input type="hidden" name="modulo" value="5">
        <input type="submit" value="Conteúdo" class="btn btn-success" <?php echo ($mod >= 5) ? "" : "disabled"; ?> id="block_button">
    </form>
</div>
<?php        
}
?>
