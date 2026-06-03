<?php
/* =================================================================
   LEGAL PAGE ICONS — Purple Giraffe Press
   Small stroke-icon glyph set for the privacy / terms cards.
   Mirrors the footer_svg_icon() helper pattern. Returns the INNER
   SVG paths; the card markup wraps them in a styled <svg>.
================================================================= */
if (!function_exists('legal_icon')) {
    function legal_icon(string $name): string {
        $icons = [
            'clipboard'  => '<rect x="5.5" y="5" width="13" height="15.5" rx="2.4"/><path d="M9 5V3.6h6V5"/><path d="M9 10.5h6"/><path d="M9 14h6"/><path d="M9 17.5h4"/>',
            'sliders'    => '<path d="M4 8h8"/><path d="M17 8h3"/><circle cx="14.5" cy="8" r="2.3"/><path d="M4 16h3"/><path d="M12 16h8"/><circle cx="9.5" cy="16" r="2.3"/>',
            'scales'     => '<path d="M12 4v16"/><path d="M7.5 20h9"/><path d="M5 7l7-2.2L19 7"/><path d="M5 7 2.6 12.2a2.4 2.4 0 0 0 4.8 0L5 7z"/><path d="M19 7l-2.4 5.2a2.4 2.4 0 0 0 4.8 0L19 7z"/>',
            'lock'       => '<rect x="5" y="11" width="14" height="9.2" rx="2.2"/><path d="M8 11V8a4 4 0 0 1 8 0v3"/>',
            'cookie'     => '<path d="M12 3.2A8.8 8.8 0 1 0 20.8 11a2.7 2.7 0 0 1-3.4-3.4A8.8 8.8 0 0 0 12 3.2z"/><circle cx="9.4" cy="11" r="1"/><circle cx="13.4" cy="14" r="1"/><circle cx="9" cy="15.2" r="1"/>',
            'clock'      => '<circle cx="12" cy="12" r="8.6"/><path d="M12 7.4V12l3.1 2"/>',
            'user-check' => '<circle cx="10" cy="8" r="3.3"/><path d="M4.3 19.2a5.8 5.8 0 0 1 11.4 0"/><path d="M16.3 12.6l1.8 1.8 3.3-3.3"/>',
            'globe'      => '<circle cx="12" cy="12" r="8.6"/><path d="M3.4 12h17.2"/><path d="M12 3.4c2.6 2.5 2.6 14.7 0 17.2"/><path d="M12 3.4c-2.6 2.5-2.6 14.7 0 17.2"/>',
            'layers'     => '<path d="m12 3.2 8.4 4.6L12 12.4 3.6 7.8z"/><path d="m3.8 12 8.2 4.6 8.2-4.6"/>',
            'heart'      => '<path d="M12 20.3S4.3 16 4.3 10.6A3.9 3.9 0 0 1 12 8.2a3.9 3.9 0 0 1 7.7 2.4C19.7 16 12 20.3 12 20.3z"/>',
            'shield'     => '<path d="M12 3.2 19 6.1v4.7c0 4.4-2.9 8.3-7 9-4.1-.7-7-4.6-7-9V6.1z"/><path d="m9 12 2 2 4-4"/>',
            'copyright'  => '<circle cx="12" cy="12" r="8.6"/><path d="M14.9 9.5a3.7 3.7 0 1 0 0 5"/>',
            'dollar'     => '<circle cx="12" cy="12" r="8.6"/><path d="M14.6 9.2A3 3 0 0 0 12 7.9c-1.7 0-3 1-3 2.3 0 2.9 6 1.4 6 4.3 0 1.3-1.3 2.3-3 2.3a3 3 0 0 1-2.6-1.3"/><path d="M12 6.4v11.2"/>',
            'card'       => '<rect x="3.4" y="6" width="17.2" height="12" rx="2.4"/><path d="M3.4 10h17.2"/><path d="M7 14.5h3.4"/>',
            'refresh'    => '<path d="M19.5 8.4A7.2 7.2 0 0 0 6.6 6L4 8.4"/><path d="M4 4.4v4h4"/><path d="M4.5 15.6A7.2 7.2 0 0 0 17.4 18l2.6-2.4"/><path d="M20 19.6v-4h-4"/>',
            'alert-tri'  => '<path d="M12 4.3 20.6 19H3.4z"/><path d="M12 10v4"/><path d="M12 16.6h.01"/>',
            'alert'      => '<circle cx="12" cy="12" r="8.6"/><path d="M12 7.8v4.6"/><path d="M12 16h.01"/>',
            'mail'       => '<rect x="3.4" y="5.6" width="17.2" height="12.8" rx="2.4"/><path d="m4 7 8 5.6L20 7"/>',
            'book'       => '<path d="M5 4.6h6a2 2 0 0 1 2 2v13a2.2 2.2 0 0 0-2-1.6H5z"/><path d="M19 4.6h-6a2 2 0 0 0-2 2v13a2.2 2.2 0 0 1 2-1.6h6z"/>',
            'edit'       => '<path d="M5 19h6"/><path d="M14.5 4.7 19 9.2 9.7 18.5 5 19l.5-4.7z"/>',
            'file'       => '<path d="M8 3.2h6l5 5v12a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V4.2a1 1 0 0 1 1-1z"/><path d="M14 3.2v5h5"/><path d="M9.5 13h5"/><path d="M9.5 16h5"/>',
        ];
        return $icons[$name] ?? $icons['file'];
    }
}
