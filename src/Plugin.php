<?php
namespace Husnet\OmegaPlugin\BS5Card;

use Husnet\OmegaPlugin\BS5Card\Http\Controllers\Overt\PluginController;
use rohsyl\OmegaCore\Utils\Common\Plugin\Form\PluginFormFactory;
use rohsyl\OmegaCore\Utils\Common\Plugin\Plugin as OmegaPlugin;
use rohsyl\OmegaCore\Utils\Common\Plugin\Type\TextSimple\TextSimple;
use rohsyl\OmegaCore\Utils\Common\Plugin\Type\TextRich\TextRich;
use rohsyl\OmegaCore\Utils\Common\Plugin\Type\Checkbox\Checkbox;

class Plugin extends OmegaPlugin
{
    const NAME = 'Card Bootstrap 5';

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
            $builder->entry('cardClass', TextSimple::class, null, 'Card classes', null, 0, false);
            $builder->entry('header', TextSimple::class, null, 'Card title', null, 0, false);
            $builder->entry('headerClass', TextSimple::class, null, 'Card title classes', null, 0, false);
            $builder->entry('content', TextRich::class, null, 'Card content', null, 0, false);
            $builder->entry('contentClass', TextSimple::class, null, 'Card content classes', null, 0, false);
            $builder->entry('footer', TextSimple::class, null, 'Card footer', null, 0, false);
            $builder->entry('footerClass', TextSimple::class, null, 'Card footer classes', null, 0, false);
			// ...
        });

    }
}