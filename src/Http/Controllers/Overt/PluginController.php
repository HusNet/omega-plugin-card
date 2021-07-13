<?php
namespace Husnet\OmegaPlugin\Card\Http\Controllers\Overt;

use rohsyl\OmegaCore\Utils\Common\Plugin\Controllers\OvertPluginController as Controller;

class PluginController extends Controller
{
    public function display($param, $data) {

        return $this->view('omega-plugin-card::overt.display')->with($data);
    }
}