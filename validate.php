<?php

//validation function
function validName($name) {
return !empty($name);
}

//validation function
function validFlavor($flavor) {
return $flavor != "grasshopper" || $flavor != "maple" || $flavor != "carrot"
|| $flavor != "caramel" || $flavor != "velvet" || $flavor != "lemon" || $flavor != "tiramisu";
}




