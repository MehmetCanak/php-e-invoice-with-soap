<?php

class GetInboxAttachmentResponse
{

  /**
   * 
   * @var AttachmentResponse $return
   * @access public
   */
  public $return = null;

  /**
   * 
   * @param AttachmentResponse $return
   * @access public
   */
  public function __construct($return)
  {
    $this->return = $return;
  }

}
