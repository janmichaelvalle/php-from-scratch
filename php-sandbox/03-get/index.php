<?php

echo isset($_GET['name']) ? $_GET['name'] : '';
echo $_GET['name'] ?? '';