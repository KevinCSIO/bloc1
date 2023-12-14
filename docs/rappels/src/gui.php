<?php
function titre(string $content, int $niveau=1):void {
    echo "<h$niveau>$content</h$niveau>";
}