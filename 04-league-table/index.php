<?php

class LeagueTable
{
    public function __construct(array $players)
    {
        $this->standings = [];
        foreach ($players as $index => $p) {
            $this->standings[$p] = [
                'index'        => $index,
                'games_played' => 0,
                'score'        => 0,
                'player'       => $p
            ];
        }
    }

    public function recordResult($player, $score)
    {
        $this->standings[$player]['games_played']++;
        $this->standings[$player]['score'] += $score;
    }
    
    public function playerRank($rank) 
    {
        $standings = $this->standings;
        usort($standings, function ($standing1, $standing2) {
            if ($standing1['score'] === $standing2['score']) {
                if ($standing1['games_played'] === $standing2['games_played']) {
                    $sort = $standing1['index'] < $standing2['index'] ? -1 : 1;
                } else {
                    $sort = $standing1['games_played'] < $standing2['games_played'] ? -1 : 1;
                }
            } else {
                $sort = $standing1['score'] > $standing2['score'] ? -1 : 1;
            }

            return $sort;
        });

        return $standings[$rank-1]['player'];
    }
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);
