<?php

class sendInvoiceWithoutDocumentIdResponse
{

  /**
   * 
   * @var EntResponse[] $return
   * @access public
   */
  public $return = null;

  /**
   * 
   * @param EntResponse[] $return
   * @access public
   */
  public function __construct($return)
  {
    $this->return = $return;
  }

}
