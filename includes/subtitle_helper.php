<?php
function generate_hidden_subtitle_text($vtt_file_path) {
    if (!file_exists($vtt_file_path)) {
        return '<!-- 字幕文件不存在 -->';
    }

    $lines = file($vtt_file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $texts = [];

    foreach ($lines as $line) {
        if (preg_match('/^\d{2}:\d{2}:\d{2}\.\d{3} --> \d{2}:\d{2}:\d{2}\.\d{3}$/', $line) || trim($line) === 'WEBVTT') {
            continue;
        }
        if ($line !== '') {
            $texts[] = trim($line);
        }
    }

    $subtitle_text = implode("  \n", $texts);

    $html = '<div style="position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden;" aria-hidden="true">' . "\n";
    $html .= htmlspecialchars($subtitle_text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "\n";
    $html .= "</div>\n";

    return $html;
}
