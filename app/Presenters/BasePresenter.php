<?php

declare(strict_types=1);

namespace App;

use App\Model\UserManager;
use Nette;
use App\Model\ConfigFactory;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    /**
     * @var Nette\Database\Context
     * @inject
     */
    public $db;

    /**
     * @var UserManager
     * @inject
     */
    public $userManager;

    /**
     * @var ConfigFactory
     * @inject
     */
    public $config;

    public function __construct()
    {

    }

}
