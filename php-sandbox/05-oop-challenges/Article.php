<?php

class Article {
  public $title;
  public $content;
  private $published = false;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function publish() {
    $this->published = true;
  }

  public  function isPublished() {
    return $this->published;
  }

};

$article1 = new Article('Article 1', 'Gaming');
$article2 = new Article('Article 2', 'Business');

$article1->publish();
echo $article1->isPublished();
var_dump($article1);
