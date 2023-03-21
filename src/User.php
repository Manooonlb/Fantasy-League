<?php

class User
{
    private array $myLeagues;

    public function __construct()
    {
        $this->myLeagues = [
            1 => 'Ligue 1',
            2 => 'Ligue 2',
        ];
    }

    public function getMyLeagues(): array
    {
        return $this->myLeagues;
    }
}