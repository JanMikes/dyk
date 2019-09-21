<?php

declare(strict_types = 1);

namespace App;


use App\Forms\SignInFormFactory;
use Nette\Configurator;

final class HomepagePresenter extends BasePresenter
{

    /**
     * @var SignInFormFactory
     */
    private $signInFormFactory;
    /**
     * @var Configurator
     */
    private $configurator;

    public function __construct(SignInFormFactory $signInFormFactory, Configurator $configurator)
    {
        $this->signInFormFactory = $signInFormFactory;
        $this->configurator = $configurator;
    }

    public function renderDefault(): void
    {
        $this->template->anyVariable = 'any value';
    }

    public function actionDefault(): void
    {
        dump($this->config->getConfigs());die;
        //$this->userManager->add("admin","petr.hrabina@gmail.com","admin3");
        //$this->getUser()->logout();
        //dump($this->getUser()->isLoggedIn());
    }

    public function createComponentForm()
    {
        return $this->signInFormFactory->create(function(){
           dump("Logded");
        });
    }
}
