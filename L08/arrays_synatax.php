<?php

$programLanguagesOld = array(
    'PHP',
    'JS',
    'C++',
    'JAVA',
    'Go',
    'Kotlin'
);
$programLanguagesNew = [
    0 => 'PHP',
    1 => 'JS',
    2 => 'C++',
    3 => 'JAVA',
    4 => 'Go',
    5 => 'Kotlin'
];

$programLanguagesNew[] = 'C#';
$programLanguagesNew[9] = 'Scala';
$programLanguagesNew[4] = 'HTML';
$programLanguagesNew[] = 'Python';

unset($programLanguagesNew[4], $programLanguagesNew[10]);

$student = [
    'name' => 'Vasyl',
    'age' => 22,
    'isGoodBoy' => true,
    'gender' => 'male',
    'programingLanguages' => [
        'PHP',
        'JS',
        'Go'
    ]
];
//$student[] = 'TEST';

print_r($student);

var_dump($student['name']);

echo "{$student['name']} ({$student['age']} years old, {$student['gender']}",PHP_EOL;

var_dump($student['programingLanguages'][1]);