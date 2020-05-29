<?php
class PluginDocWord{
  function __construct() {
    wfPlugin::includeonce('wf/yml');
    wfPlugin::includeonce('wf/array');
  }
  public function set_header($data){
    /**
     * 
     */
    $Filename = 'buto_plugin_doc_word.doc';
    if($data->get('data/filename')){
      $Filename = $data->get('data/filename');
    }
    /**
     * 
     */
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment; Filename=$Filename");    
  }
  public function page_doc(){
    wfPlugin::enable('doc/word');
    /**
     * 
     */
    $element = new PluginWfYml(__DIR__.'/element/widget.yml');
    wfDocument::renderElement($element->get());
  }
  public function widget_doc($data){
    /**
     * 
     */
    $data = new PluginWfArray($data);
    /**
     * 
     */
    $this->set_header($data);
    /**
     * 
     */
    $element = new PluginWfYml(__DIR__.'/element/doc.yml');
    $element->setByTag($data->get('data'));
    wfDocument::renderElement($element->get());
    exit;
  }
}
