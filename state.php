<?php

require __DIR__ . '/vendor/autoload.php';

use State\BrushTool;
use State\Canvas;
use State\SelectionTool;

$myCanvas = new Canvas(new SelectionTool());
$myCanvas->mouseDown();
$myCanvas->mouseUp();

$myCanvas->setSelectedTool(new BrushTool());
$myCanvas->mouseDown();
$myCanvas->mouseUp();
