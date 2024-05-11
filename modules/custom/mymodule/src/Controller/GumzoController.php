<?php


/**
 * @file
 * Generates markup to be displayed, functionality here
 * is wired in the mymodule.routing.yml
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class GumzoController extends ControllerBase
{


    public function simpleContent()
    {
        return [
            '#type' => 'markup',
            '#markup' => t('Twapeana uwezo wa kuhifadhi ujuzi,  We are giving you the solution to manage your knowledge'),
        ];
    }
}
