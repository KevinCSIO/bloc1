<?php
function titre(string $content, int $niveau=1):void {
    echo "<h$niveau>$content</h$niveau>";
}
function post(string $name,$default=null){
    return $_POST[$name]??$default;
}