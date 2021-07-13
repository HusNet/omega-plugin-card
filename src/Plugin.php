<?php
namespace Husnet\OmegaPlugin\Card;

use Husnet\OmegaPlugin\Card\Http\Controllers\Overt\PluginController;
use rohsyl\OmegaCore\Utils\Common\Plugin\Form\PluginFormFactory;
use rohsyl\OmegaCore\Utils\Common\Plugin\Plugin as OmegaPlugin;
use rohsyl\OmegaCore\Utils\Common\Plugin\Type\TextSimple\TextSimple;
use rohsyl\OmegaCore\Utils\Common\Plugin\Type\TextRich\TextRich;
use rohsyl\OmegaCore\Utils\Common\Plugin\Type\HtmlEditor\HtmlEditor;

class Plugin extends OmegaPlugin
{
    const NAME = 'card';

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
            $builder->form('card', true, true);
            $builder->entry('header', TextSimple::class, null, 'Card title', null, 0, false);
            $builder->entry('content', HtmlEditor::class, null, 'Card content', null, 0, false);
            $builder->entry('footer', TextSimple::class, null, 'Card footer', null, 0, false);
        });

    }
}