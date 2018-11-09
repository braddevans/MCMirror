<?php


namespace App\Applications\Proxies;

use App\Applications\ApplicationInterface;


class Waterfall implements ApplicationInterface
{
    public function isRecommended(): bool
    {
        return false;
    }

    public function isAbandoned(): bool
    {
        return false;
    }

    public function isExternal(): bool
    {
        return true;
    }

    public function getUrl(): ?string
    {
        return 'https://papermc.io/downloads#Waterfall';
    }

    public function getName(): string
    {
        return 'Waterfall';
    }

    public function getCategory(): string
    {
        return 'Proxies';
    }
}