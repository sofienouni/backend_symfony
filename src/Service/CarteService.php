<?php

namespace App\Service;

use App\Entity\Carte;

class CarteService
{
    private $couleurs = ['Carreaux', 'Cœur', 'Pique', 'Trèfle'];
    private $valeurs = ['AS', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Valet', 'Dame', 'Roi'];

    public function generateRandomHand($size = 10)
    {
        $hand = [];
        for ($i = 0; $i < $size; $i++) {
            $color = $this->couleurs[array_rand($this->couleurs)];
            $value = $this->valeurs[array_rand($this->valeurs)];
            $hand[] = ['id'=> $i,
                      'color' => $color,
                      'value' => $value];

        }
        return $hand;
    }

    public function sortHand($hand)
    {
        usort($hand, function($a, $b) {
            $colorOrder = array_flip($this->couleurs);
            $valueOrder = array_flip($this->valeurs);

            if ($colorOrder[$a['color']] === $colorOrder[$b['color']]) {
                return $valueOrder[$a['value']] <=> $valueOrder[$b['value']];
            }
            return $colorOrder[$a['color']] <=> $colorOrder[$b['color']];
        });

        return $hand;
    }
}
