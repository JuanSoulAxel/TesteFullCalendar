<?php

include '../model/ModelConect.php';

class ClassEvents extends ModelConect
{
    #Trazer os dados de eventos do banco
    public function getEvents() {
        $b=$this->conectDB()->prepare("select * from events2");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }
    public function cadEvents($display, $color, $start, $end) {
        $b=$this->conectDB()->prepare("INSERT INTO events2 (display, color, start, end) VALUES (:display, :color, :start, :end);");
        $b->bindValue("display", $display);
        $b->bindValue("color", $color);
        $b->bindValue("start", $start);
        $b->bindValue("end", $end);
        $b->execute(); //executar
    }
}