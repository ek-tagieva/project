<?php
const NAMES = [
    'Sveta', 'Lena', 'Pety', 'Vera', 'Dima'
];
function createUser(): array
{
    return [
        'name' => NAMES [array_rand(NAMES)],
        'age' => mt_rand(18, 45)
    ];
}