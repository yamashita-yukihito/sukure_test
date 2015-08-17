<?php

require_once __DIR__ . '/vendor/autoload.php';

$cli = new Goutte\Client();
$url = 'http://www.doctrine-project.org/api/dbal/2.4/class-Doctrine.DBAL.Schema.AbstractSchemaManager.html';
$crawler = $cli->request('GET', $url);
// 前略
$crawler->filter('.name')->each(function($name) { // jQuery 脳で find しそうになる気持ちをぐっとこらえよう！
  echo $name->text(); // これだけで .name の中身が echo されるよ！かんたん！
});
