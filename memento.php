<?php

require __DIR__ . '/vendor/autoload.php';

use Memento\Editor;
use Memento\History;

$editor = new Editor();
$history = new History();

$editor->setContent('a');
$history->push($editor->createState());

$editor->setContent('b');
$history->push($editor->createState());

$editor->setContent('c');
$editor->restore($history->pop());
$editor->restore($history->pop());

echo $editor->getContent();
