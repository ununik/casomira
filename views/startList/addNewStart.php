<?php
$container = '<h2>Nová startovní sekvence</h2>';
$container .= '<div id="status"></div>';
$container .= '<div class="formular"><label for="date">Datum:</label>
					<input id="date" type="text" value="' . $date . '" class="form_text_input"></div>';
$container .= '<div class="formular"><label for="category">Kategorie:</label>
					<select id="category" class="form_text_input">' . $optionCategories . '</select></div>';
$container .= '<div class="formular"><label for="firstNumber">První číslo:</label>
					<input id="firstNumber" type="text" class="form_text_input"></div>';
$container .= '<div class="formular"><label for="lastNumber">Poslední číslo:</label>
					<input id="lastNumber" type="text" class="form_text_input"></div>';
$container .= '<div class="formular"><label for="sequence">Startovní sekvence:</label>
					<span class="start_po">start po <input id="sequence" type="text"> s</span></div>';
$container .= '<div class="formular"><label for="timeFirst">Start prvního čísla:</label>
					<input id="timeFirst" type="text" value="10:00:30" class="form_text_input"></div>';
$container .= '<div onclick="saveNewStart()" class="button">Přidat</div>';

return $container;