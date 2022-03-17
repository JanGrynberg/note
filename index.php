<?php

function dump($data){

    echo '<div style="
    display:inline-block;
    padding: 0 10px;
    border: 1px solid grey;
    background: lightgrey;
    "
    >
<pre>';
print_r($data);
echo '</pre>
</div>';
}

dump(32323); 