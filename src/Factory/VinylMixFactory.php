<?php

namespace App\Factory;

use App\Entity\VinylMix;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

final class VinylMixFactory extends PersistentProxyObjectFactory
{
    public static function class(): string
    {
        return VinylMix::class;
    }

    protected function defaults(): array|callable
    {
        return [
            'title' => self::faker()->words(5, true),
            'description' => self::faker()->paragraph(),
            'trackCount' => self::faker()->numberBetween(5, 20),
            'genre' => self::faker()->randomElement(['pop', 'rock']),
            'votes' => self::faker()->numberBetween(-50, 50),
        ];
    }
}
