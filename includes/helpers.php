<?php
/**
 * Truncate plain text to a max length without requiring the mbstring
 * extension (kept dependency-free for portability).
 */
function truncate_text(string $text, int $length = 90, string $suffix = '...'): string
{
    if (strlen($text) <= $length) {
        return $text;
    }
    return rtrim(substr($text, 0, $length)) . $suffix;
}
