<?php

require_once('__connec.php');

class League
{
    private array $teams;

    public function __construct(int $league)
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * from team WHERE league_id=$league";
        $stmt = $pdo->query($query);
        $teams = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($teams as $team) {
            $this->teams[$team->id] = $team->name;
        }
    }

    public function getTeams(): array
    {
        return $this->teams;
    }

    public function getTeamScore(int $teamId): int
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * from team WHERE id=$teamId";
        $stmt = $pdo->query($query);
        $scores = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach($scores as $score) {
            return $score->score;
        }
    }

    public function buildScoreboard(): void
    {
        echo '<table class="table table-striped table-bordered table-hover table-dark w-75">';
        echo '<tr><th>Team</th><th>Score</th></tr>';
        foreach ($this->teams as $id => $name) {
            echo '<tr><td class="text-center">'.$name.'</td><td class="text-center">'.$this->getTeamScore($id).'</td></tr>';
        }
        echo '</table>';    
    }
}