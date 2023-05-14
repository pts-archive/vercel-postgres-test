<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function getCacheDir(): string
    {
        if (isset($_ENV['VERCEL']) || \strtolower($this->environment) === 'prod') {
            return '/tmp/cache/' . $this->environment;
        }

        return parent::getCacheDir();
    }

    public function getLogDir(): string
    {
        if (isset($_ENV['VERCEL']) || \strtolower($this->environment) === 'prod') {
            return '/tmp/log/' . $this->environment;
        }

        return parent::getLogDir();
    }
}
