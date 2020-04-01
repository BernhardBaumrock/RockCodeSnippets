<?php namespace ProcessWire;
/**
 * ProcessWire Hooks as VSCode Snippets
 *
 * @author Bernhard Baumrock, 01.04.2020
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */
class RockCodeSnippets extends WireData implements Module, ConfigurableModule {

  public static function getModuleInfo() {
    return [
      'title' => 'RockCodeSnippets',
      'version' => '0.0.1',
      'summary' => 'ProcessWire Hooks as VSCode Snippets',
      'autoload' => false,
      'singular' => true,
      'icon' => 'code',
      'requires' => ['RockApiParser'],
      'installs' => [],
    ];
  }

  public function init() {
  }

  /**
  * Config inputfields
  * @param InputfieldWrapper $inputfields
  */
  public function getModuleConfigInputfields($inputfields) {
    return $inputfields;
  }
}