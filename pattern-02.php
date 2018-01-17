<?php

const AVATAR = '<div class="circle circle--r"></div>';
const MAX = 9;

$result = '';

for ($i = 0; $i < MAX; ++$i) {
    for ($j = 0; $j < MAX; ++$j) {
        $result .= AVATAR;
    }
    if ($i < MAX - 1) {
        $result .= '<br>';
    }
    $result .= PHP_EOL;
}

?>
<!DOCTYPE html>
<meta charset="UTF-8">
<title>Patroon 02</title>
<style>
:root {
    font-family: monospace;
    font-size: 2em;
    line-height: 0;
}
.circle {
    --size: 1rem;
    border-radius: 50%;
    display: inline-block;
    height: var(--size);
    margin: 1px;
    width: var(--size);
}
.circle--r {
    background-color: #F00;
}
</style>
<?=$result ?>