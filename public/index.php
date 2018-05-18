<?php

define('ROOTPATH', __DIR__);

require __DIR__ . '/../application/kernel/app.php';

Application::Init();
Application::GetKernel()->Launch();

