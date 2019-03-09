<?php

require_once '../includes.php';

deny_access_unless_logged();

logout();

redirect('login.php');