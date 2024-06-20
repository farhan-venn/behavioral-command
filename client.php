<?php

require_once 'Light.php';
require_once 'TurnOnLightCommand.php';
require_once 'TurnOffLightCommand.php';
require_once 'RemoteControl.php';

$light = new Light();
$turnOnCommand = new TurnOnLightCommand($light);
$turnOffCommand = new TurnOffLightCommand($light);

$remote = new RemoteControl();

$remote->setCommand($turnOnCommand);
$remote->pressButton(); // Output: The light is on

$remote->setCommand($turnOffCommand);
$remote->pressButton(); // Output: The light is off
