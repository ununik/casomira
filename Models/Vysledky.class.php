<?php

class Vysledky
{

    public function getResultForCategory ($category, $mezicas = 0, 
            $lastIdNumber = 0)
    {
        $result = Connection::connect()->prepare(
                'SELECT * FROM `mezicas` INNER JOIN `startovni_listina` ON startovni_listina_id = startovni_listina.id WHERE startovni_listina.kategorie = :kategorie && cisloMezicasu = :cisloMezicasu  ORDER BY tracktime, startovni_listina.startovniCislo;');
        
        $result->execute(
                array(
                    ':kategorie' => $category,
                    ':cisloMezicasu' => $mezicas
                ));
        $results = $result->fetchAll();
        
        $kategorie = Kategorie::getShortKategorie($category);
        
        $return = "<div class='vysledkyTitle'>Mezičas - $mezicas ($kategorie)</div>";
        $return .= '<table class="vysledkyTabluka">';
        for ($i = 0; $i < count($results); $i ++) {
            if ($results[$i]['startovni_listina_id'] == $lastIdNumber) {
                $return .= '<tr class="last">';
            } else {
                $return .= '<tr>';
            }
            $resultNumber = $i + 1;
            $return .= '<td class="resultNumber">' . $resultNumber . '</td>';
            $return .= '<td class="resultStartovniCislo">' .
                     $results[$i]['startovniCislo'] . '</td>';
            $return .= '<td>' . $results[$i]['jmeno'] . '</td>';
            if ($i == 0) {
                $return .= '<td class="resultTime">' .
                         date('H:i:s', $results[$i]['tracktime'] - 3600) .
                         '</td>';
            } else {
                $return .= '<td class="resultTime">+' .
                         date('H:i:s', 
                                $results[$i]['tracktime'] -
                                 $results[0]['tracktime'] - 3600) . '</td>';
            }
            $return .= '</tr>';
        }
        $return .= '</table>';
        
        return $return;
    }
}