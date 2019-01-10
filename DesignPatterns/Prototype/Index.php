<?php

namespace Patterns\Prototype;


use Patterns\AbstractIndex;
use Patterns\Prototype\Prototypes\PrimaryStudentPrototype;
use Patterns\Prototype\Prototypes\SecondaryStudentPrototype;

class Index extends AbstractIndex
{

    function index()
    {
        $primaryStudentPrototype = new PrimaryStudentPrototype();
        $secondaryStudentPrototype = new SecondaryStudentPrototype();

        $primaryStudents = ['ali', 'samy', 'salma', 'alaa'];
        foreach ($primaryStudents as $primaryStudent) {
            $student = clone $primaryStudentPrototype;
            $student->name = $primaryStudent;
            var_dump($student);
        }

        $secondaryStudents = ['marwa', 'ahmed', 'taha', 'aya'];
        foreach ($secondaryStudents as $secondaryStudent) {
            $student = clone $secondaryStudentPrototype;
            $student->name = $secondaryStudent;
            var_dump($student);
        }

    }
}