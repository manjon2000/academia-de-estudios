<?php

unset($_SESSION);
session_destroy();

header('Location: http://localhost:9000/?page=login');