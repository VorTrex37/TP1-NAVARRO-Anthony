<?php

final class Etudiant
{

    private $json_students;

    public function __construct()
    {
        $json = file_get_contents(__DIR__."/../Assets/json/etudiants.json");
        $this->json_students = json_decode($json, true);
    }

    /**
     * @return mixed
     */
    public function getJsonStudents()
    {
        return $this->json_students;
    }
}
