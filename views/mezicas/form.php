<?php
$container = '<div id="mezicas_form"><h2>Mezičas</h2>';
$container .= '<div class="div_form_box"><label for="cisloMezicasu">Číslo mezičasu</label>';
$container .= "<select id='cisloMezicasu'>$cisloMezicasu</select></div>";


$container .= '<div class="div_form_box"><label for="number">Startovní číslo</label>
					<div id="nextNumber" onclick="nextNumber()">vyšší</div>
					<input id="number" type="text"><div id="previousNumber" onclick="previousNumber()">nižší</div></div>';
$container .= '<div onclick="mezicasClick()" class="input_now">Teď</div></div>';

return $container;