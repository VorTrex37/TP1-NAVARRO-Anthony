<?php

final class ControleurEtudiant
{
    public function defautAction()
    {
        $O_etudiants =  new Etudiant();
        Vue::montrer('site/etudiants', array('etudiants' =>  $O_etudiants->getJsonStudents()));

    }
}