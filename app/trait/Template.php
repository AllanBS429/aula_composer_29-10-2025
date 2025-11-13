<?php

namespace app\trait;

use Slim\Views\Twig;

trait Template
{
    public function getTwig()
    {
        try {
            $twig = Twig::create(DIR_VIEW);
            #$twig->getEnvironment()->addGlobal('Empresa', ' Betware');
            return $twig;
        } catch (\Exception $e) {
            throw new \Exception('Restrição: ' . $e->getMessage());
        }
    }
    public function setView($name)
    {
        return $name . EXIT_VIEW;
    }
}
