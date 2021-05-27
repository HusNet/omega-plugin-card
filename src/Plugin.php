<?php
namespace Husnet\OmegaPlugin\BS5Card;

use Hunset\OmegaPlugin\BS5Card\Http\Controllers\Overt\PluginController;
use rohsyl\OmegaCore\Utils\Common\Plugin\Form\PluginFormFactory;
use rohsyl\OmegaCore\Utils\Common\Plugin\Plugin as OmegaPlugin;
use rohsyl\OmegaCore\Utils\Common\Plugin\Type\TextSimple\TextSimple;

class Plugin extends OmegaPlugin
{
    const NAME = 'BS5Card';

    /**
     * Here name your plugin
     * @return string
     */
    public function name() : string {
        return self::NAME;
    }

    function overtController() : string {
        return PluginController::class;
    }

    public function install() : bool {

        $this->createForm();

        return true;
    }

    private function createForm() {

        $this->makeForm(function(PluginFormFactory $builder) {
            $builder->form('Bootstrap 5 card', true, true);
			// ...
        });

    }
}