<?php

interface IFoo {
}
function trav(\HH\Traversable $x) {
  echo "Traversable\n";
  var_dump($x);
}
function ktrav(\HH\KeyedTraversable $x) {
  echo "KeyedTraversable\n";
  var_dump($x);
}
function cont(\HH\Container $x) {
  echo "Container\n";
  var_dump($x);
}
function kcont(\HH\KeyedContainer $x) {
  echo "KeyedContainer\n";
  var_dump($x);
}
function ind(Indexish $x) {
  echo "Indexish\n";
  var_dump($x);
}
function ifoo(IFoo $x) {
  echo "IFoo\n";
  var_dump($x);
}
function main() {
  $arr = array();
  var_dump($arr instanceof \HH\Traversable);
  var_dump($arr instanceof \HH\KeyedTraversable);
  var_dump($arr instanceof \HH\Container);
  var_dump($arr instanceof \HH\KeyedContainer);
  var_dump($arr instanceof Indexish);
  var_dump($arr instanceof IFoo);
  trav($arr);
  ktrav($arr);
  cont($arr);
  kcont($arr);
  ind($arr);
  ifoo($arr);
}
main();
