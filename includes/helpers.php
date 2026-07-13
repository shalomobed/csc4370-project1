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

// Computes a grid row-span from an image's real width/height, so taller
// images get taller tiles — the actual masonry logic.
function project_row_span(string $imagePath, int $assumedColWidth = 300, int $rowHeight = 8, int $rowGap = 20): int
{
    $fullPath = __DIR__ . '/../' . $imagePath;
    $size = @getimagesize($fullPath);

    if (!$size) {
        return 28; // fallback if file is missing/unreadable
    }

    [$width, $height] = $size;
    $scaledHeight = $assumedColWidth * ($height / $width);

    return (int) ceil(($scaledHeight + $rowGap) / ($rowHeight + $rowGap));
}