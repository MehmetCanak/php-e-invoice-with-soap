<?php

class GetOutboxInvoiceStatusWithLogsResponse
{

  /**
   * 
   * @var logResponse $return
   * @access public
   */
  public $return = null;

  /**
   * 
   * @param logResponse $return
   * @access public
   */
  public function __construct($return)
  {
    $this->return = $return;
  }

}
