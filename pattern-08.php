<?php

const AVATARS = [
    '<div class="circle circle--r"></div>',
    '<div class="circle circle--g"></div>',
    '<div class="circle circle--b"></div>',
];
const MAX = 9;

$avatarLastIndex = count(AVATARS) - 1;
$result = '';

for ($i = 0; $i < MAX; ++$i) {
    for ($j = 0; $j < MAX; ++$j) {
        switch ($i <=> MAX - (1 + $j)) {
            case -1:
                $avatar = AVATARS[$avatarLastIndex];
                break;
            case 1:
                $avatar = AVATARS[1];
                break;
            default:
                $avatar = AVATARS[0];
                break;
        }
        $result .= $avatar;
    }
    if ($i < MAX - 1) {
        $result .= '<br>';
    }
    $result .= PHP_EOL;
}

?>
<!DOCTYPE html>
<meta charset="UTF-8">
<title>Patroon 07</title>
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
.circle--g {
    background-color: #0F0;
}
.circle--b {
    background-color: #00F;
}
</style>
<?=$result ?>