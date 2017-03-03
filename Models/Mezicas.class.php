<?php

class Mezicas
{

    public function addNewMezicas ($athlete, $timestamp, $trackTime, 
            $cisloMezicasu)
    {
        $result = Connection::connect()->prepare(
                'INSERT INTO `mezicas`(`startovni_listina_id`, `timestamp`, `tracktime`, `cisloMezicasu`) VALUES (:athlete, :timestamp, :tracktime, :cisloMezicasu);');
        
        $result->execute(
                array(
                    ':athlete' => $athlete,
                    ':timestamp' => $timestamp,
                    ':tracktime' => $trackTime,
                    ':cisloMezicasu' => $cisloMezicasu
                ));
    }

    public function getLastMezicasForAthlete ($athlete)
    {
        $result = Connection::connect()->prepare(
                'SELECT cisloMezicasu FROM `mezicas` WHERE startovni_listina_id = :athlete ORDER BY cisloMezicasu DESC;');
        
        $result->execute(array(
            ':athlete' => $athlete
        ));
        $result = $result->fetch();
        
        if (isset($result['cisloMezicasu'])) {
            return $result['cisloMezicasu'];
        }
        
        return 0;
    }

    public function getLastAthletInMezicas ()
    {
        $result = Connection::connect()->prepare(
                'SELECT startovni_listina_id FROM `mezicas` ORDER BY timestamp DESC LIMIT 1;');
        
        $result->execute();
        $result = $result->fetch();
        
        if (isset($result['startovni_listina_id'])) {
            return $result['startovni_listina_id'];
        }
        
        return 0;
    }

    public function removeId ($id)
    {
        $result = Connection::connect()->prepare(
                'DELETE FROM `mezicas` WHERE startovni_listina_id=:id ORDER BY timestamp DESC LIMIT 1;');
        
        $result->execute(array(
            ':id' => $id
        ));
    }
}