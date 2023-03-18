<?php 

// Init teams array
// TO REPLACE with database structure later

$teams = [
    "Team 1" => [
        "team_id" => 1,
        "team_name" => "Team 1",
        "team_description" => "Team 1 description",
        "team_image" => "Team 1 image",
        "team_goals_for" => 6,
        "team_goals_against" => 5,
        "team_wins" => 1,
        "team_losses" => 0,
        "team_ties" => 3,
    ],
    "Team 2" => [
        "team_id" => 2,
        "team_name" => "Team 2",
        "team_description" => "Team 2 description",
        "team_image" => "Team 2 image",
        "team_goals_for" => 3,
        "team_goals_against" => 2,
        "team_wins" => 2,
        "team_losses" => 0,
        "team_ties" => 1,
    ],
    "Team 3" => [
        "team_id" => 3,
        "team_name" => "Team 3",
        "team_description" => "Team 3 description",
        "team_image" => "Team 3 image",
        "team_goals_for" => 2,
        "team_goals_against" => 6,
        "team_wins" => 0,
        "team_losses" => 2,
        "team_ties" => 1,
    ],
    "Team 4" => [
        "team_id" => 4,
        "team_name" => "Team 4",
        "team_description" => "Team 4 description",
        "team_image" => "Team 4 image",
        "team_goals_for" => 4,
        "team_goals_against" => 2,
        "team_wins" => 2,
        "team_losses" => 1,
        "team_ties" => 0,
    ],
];

// We want to display the teams in rows, to build a scoreboard

?>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th>Team</th>
            <th>Goals For</th>
            <th>Goals Against</th>
            <th>Goals Difference</th>
            <th>Matches Played</th>
            <th>Wins</th>
            <th>Losses</th>
            <th>Ties</th>
            <th>Points</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $totalGoalsFor = 0;
    $totalGoalsAgainst = 0;
    $totalGoalDifference = 0;
    $totalWins = 0;
    $totalLosses = 0;
    $totalTies = 0;

    foreach ($teams as $team) {
        $goalDifference = $team["team_goals_for"] - $team["team_goals_against"];
        $matchesPlayed = $team["team_wins"] + $team["team_losses"] + $team["team_ties"];
        $points = $team["team_wins"]*3 + $team["team_ties"];

        $totalGoalsFor += $team['team_goals_for'];
        $totalGoalsAgainst += $team['team_goals_against'];
        $totalGoalDifference += $goalDifference;
        $totalWins += $team['team_wins'];
        $totalLosses += $team['team_losses'];
        $totalTies += $team['team_ties'];

        echo "<tr>";
        echo "<td title='".$team["team_description"]."'>". $team["team_name"]. "</td>";
        echo "<td>". $team["team_goals_for"]. "</td>";
        echo "<td>". $team["team_goals_against"]. "</td>";
        echo "<td>". $goalDifference."</td>";
        echo "<td>". $matchesPlayed."</td>";
        echo "<td>". $team["team_wins"]. "</td>";
        echo "<td>". $team["team_losses"]. "</td>";
        echo "<td>". $team["team_ties"]. "</td>";
        echo "<td>". $points."</td>";
        echo "</tr>";
    }

    if ($totalGoalDifference !== 0) {
        echo "<tfoot>";
        echo "<tr>";
        if ($totalGoalsFor > $totalGoalsAgainst) {
            echo "<td colspan='9'>Missing Goals Against (". $totalGoalsFor - $totalGoalsAgainst .").</td>";
        }
        else {
            echo "<td colspan='9'>Missing Goals For.</td>";
        }
        echo "</tr>";
        echo "</tfoot>";
    }
    ?>
    </tbody>
</table>