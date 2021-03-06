<?php

namespace markdunphy\SesSnsTypes\Notification;

interface MessageTypeInterface {

  /**
   * @return boolean
   */
  public function hasOriginalHeaders();

  /**
   * @return string
   */
  public function getTypeString();

  /**
   * @return string
   */
  public function getOriginalSendTime();

  /**
   * @return string
   */
  public function getMessageId();

  /**
   * @return array
   */
  public function getFullPayloadAsArray();

}
