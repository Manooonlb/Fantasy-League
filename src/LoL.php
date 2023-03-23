<?php
require_once('League.php');

class LoL extends League
{
    private int $damageScore;
    private int $crowdControlScore;
    private int $healScore;

    public function __construct()
    {
        $this->damageScore = 0;
        $this->crowdControlScore = 0;
        $this->healScore = 0;
    }

    public function getDamageScore(): int
    {
        return $this->damageScore;
    }

    public function setDamageScore(int $damage): void
    {
        $this->damageScore = $damage;
    }

    public function addDamageScore(int $damage): void
    {
        $this->damageScore += $damage;
    }

    public function getCrowdControlScore(): int
    {
        return $this->crowdControlScore;
    }

    public function setCrowdControlScore(int $crowdControlScore): void
    {
        $this->crowdControlScore = $crowdControlScore;
    }

    public function addCrowdControlScore(int $crowdControlScore): void
    {
        $this->crowdControlScore += $crowdControlScore;
    }

    public function getHealScore(): int
    {
        return $this->healScore;
    }

    public function setHealScore(int $heal): void
    {
        $this->healScore = $heal;
    }

    public function addHealScore(int $heal): void
    {
        $this->healScore += $heal;
    }
}