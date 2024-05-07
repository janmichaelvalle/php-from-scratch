<?php

class StringUtility {
  public static function shout($word) {
    return strtoupper($word) . '!';
  }

  public static function whisper($word) {
    return strtolower($word) . '.';
  }

  public static function repeat($word, $times = 2) {
    return str_repeat($word, $times);
  }

}

echo StringUtility::shout('Dan Doe');
echo StringUtility::whisper('Dan Doe');
echo StringUtility::repeat('Dan Doe', 5);
