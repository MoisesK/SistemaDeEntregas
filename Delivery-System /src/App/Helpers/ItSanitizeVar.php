<?php

function ItSanitizeVar($varForSanitizer): string
{
    return filter_var($varForSanitizer, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
