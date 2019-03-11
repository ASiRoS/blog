<?php

require_once '../includes.php';

deny_access_unless_logged();

logout();

set_success('You have logged out successfully.');

redirect('login.php');