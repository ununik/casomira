<?php

class Strelba
{

    public function addStrelba ($athlete, $cisloStrelby, $a, $b, $c, $d, $e)
    {
        $result = Connection::connect()->prepare(
                'INSERT INTO `strelba`(`startovni_listina_id`, `timestamp`, `cislo_strelby`, `a`, `b`, `c`, `d`, `e`) VALUES (:athlete, :timestamp, :cisloStrelby, :a, :b, :c, :d, :e);');
        
        $result->execute(
                array(
                    ':athlete' => $athlete,
                    ':timestamp' => time(),
                    ':cisloStrelby' => $cisloStrelby,
                    ':a' => $a,
                    ':b' => $b,
                    ':c' => $c,
                    ':d' => $d,
                    ':e' => $e
                ));
    }

    public function updateStrelba ($id, $a, $b, $c, $d, $e)
    {
        $result = Connection::connect()->prepare(
                'UPDATE `strelba` SET `a`=:a, `b`=:b, `c`=:c, `d`=:d, `e`=:e WHERE id=:id;');
        
        $result->execute(
                array(
                    ':id' => $id,
                    ':a' => $a,
                    ':b' => $b,
                    ':c' => $c,
                    ':d' => $d,
                    ':e' => $e
                ));
    }

    public function getLastStrelbaForAthlete ($athlete)
    {
        $result = Connection::connect()->prepare(
                'SELECT cislo_strelby FROM `strelba` WHERE startovni_listina_id = :athlete ORDER BY cislo_strelby DESC;');
        
        $result->execute(array(
            ':athlete' => $athlete
        ));
        $result = $result->fetch();
        
        if (isset($result['cislo_strelby'])) {
            return $result['cislo_strelby'];
        }
        
        return 0;
    }

    public function existCisloStrelby ($athlete, $cisloStrelby)
    {
        $result = Connection::connect()->prepare(
                'SELECT id FROM `strelba` WHERE startovni_listina_id = :athlete AND cislo_strelby=:cisloStrelby;');
        
        $result->execute(
                array(
                    ':athlete' => $athlete,
                    ':cisloStrelby' => $cisloStrelby
                ));
        $result = $result->fetch();
        
        if (isset($result['id'])) {
            return $result['id'];
        }
        
        return false;
    }

    public function getLastAthletonShootingRange ()
    {
        $result = Connection::connect()->prepare(
                'SELECT startovni_listina_id FROM `strelba` ORDER BY timestamp DESC LIMIT 1;');
        
        $result->execute();
        $result = $result->fetch();
        
        if (isset($result['startovni_listina_id'])) {
            return $result['startovni_listina_id'];
        }
        
        return 0;
    }

    public function getStrelbaCislo ($athlete, $cisloStrelby)
    {
        $result = Connection::connect()->prepare(
                'SELECT a, b, c, d, e FROM `strelba` WHERE startovni_listina_id = :athlete AND cislo_strelby=:cisloStrelby;');
        
        $result->execute(
                array(
                    ':athlete' => $athlete,
                    ':cisloStrelby' => $cisloStrelby
                ));
        $result = $result->fetch();
        
        return $result;
    }

    public function getAllShootingsForNumber ($athlete)
    {
        $result = Connection::connect()->prepare(
                'SELECT * FROM `strelba` WHERE startovni_listina_id = :athlete ORDER BY id ASC;');
        
        $result->execute(array(
            ':athlete' => $athlete
        ));
        $result = $result->fetchAll();
        
        return $result;
    }
}