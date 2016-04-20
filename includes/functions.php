<?php
$dir_includes = __DIR__;
$dir_root = $dir_includes.'/..';
function pdfPageSeparator ($nbOfBlankLines = 8) {
    global $dir_root;
    echo <<<EOF
<p class="newpage" data-pdf-endpage="$nbOfBlankLines"></p>
<div class="hidden-pdf">
EOF;
    require($dir_root.'/templates/vendor/google/pub_rwd.php');
    echo <<<EOF
</div>
EOF;
}
