<?php
namespace Husnet\OmegaPlugin\BS5Card\Http\Controllers\Overt;

use rohsyl\OmegaCore\Utils\Common\Plugin\Controllers\OvertPluginController as Controller;

class PluginController extends Controller
{
    public function display($param, $data) {

        return view('omega-plugin-bs5card::overt.display')->with($data);
    }
}