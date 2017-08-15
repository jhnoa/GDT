<?php
class Content {

  var $title;
  var $content;
  var $writer;
  var $created_at;
  var $updated_at;

  function __construct($title, $content="no content yet", $writer="annonymous")
  {
    $this->title = $title;
    $this->content = $content;
    $this->writer = $writer;
    $this->created_at = time();
    $this->updated_at = time();
  }

  function getTitle()
  {
    return $this->title;
  }

  function getContent()
  {
    return $this->content;
  }

  function getWriter()
  {
    return $this->writer;
  }

  function getUpdated()
  {
    return $this->updated_at;
  }
  
}
?>