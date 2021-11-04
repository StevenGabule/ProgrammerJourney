<?php

class Book
{
  protected int $price = 0;
  protected string $title = "";
  public static string $store = 'My Store';

  public function __construct($title, $price)
  {
    $this->title = $title;
    $this->price = $price;
  }

  public function __destruct()
  {
    //echo '<Br>The class "',__CLASS__,'" was destructed!<br>';
  }

  public function __toString()
  {
    return $this->getTitle();
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function setPrice($price)
  {
    $this->price = $price;
  }

  public function getPrice(): int
  {
    return $this->price;
  }

  public function getAllInformation(): string
  {
    return "The title of the book is " . $this->title . " and the price is " . $this->price;
  }

  public static function getStore(): string
  {
    return self::$store;
  }
}

class Magazine extends Book
{
  public string $month;
  public string $year;

  // Constructor
  public function __construct($title, $price, $month, $year)
  {
    $this->month = $month;
    $this->year = $year;
    parent::__construct($title, $price);
    echo '<br>The class is "' . __CLASS__ . '" was instantiated!<br>';
  }

  public function getYear(): string
  {
    return $this->year;
  }
}


