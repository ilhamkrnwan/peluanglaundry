<?php
/**
 * Custom SVG Icon Library for PeluangLaundry
 * High quality vector icons (no system emojis)
 *
 * @package PeluangLaundry
 */

if (!defined('ABSPATH')) {
    exit;
}

function peluanglaundry_get_icon($name, $class = '', $size = 20) {
    $size = intval($size);
    $class_attr = $class ? ' class="' . esc_attr($class) . '"' : '';
    $common_attrs = 'width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"' . $class_attr;

    switch ($name) {
        // Nature / Eco
        case 'leaf':
        case 'eco':
            return '<svg ' . $common_attrs . '><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>';

        // Package / Box / Logistics
        case 'package':
        case 'box':
            return '<svg ' . $common_attrs . '><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>';

        // Truck / Shipping
        case 'truck':
        case 'shipping':
            return '<svg ' . $common_attrs . '><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.62l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>';

        // Education / Graduation Cap
        case 'graduation':
        case 'education':
        case 'training':
            return '<svg ' . $common_attrs . '><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg>';

        // Shield / Security / Guarantee
        case 'shield-check':
        case 'guarantee':
        case 'verified':
            return '<svg ' . $common_attrs . '><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>';

        // Award / Quality / Trophy
        case 'award':
        case 'quality':
            return '<svg ' . $common_attrs . '><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>';

        // Droplet / Liquid / Chemical
        case 'droplet':
        case 'liquid':
        case 'detergent':
            return '<svg ' . $common_attrs . '><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/></svg>';

        // Flask / Laboratory / Formulation
        case 'flask':
        case 'lab':
            return '<svg ' . $common_attrs . '><path d="M10 2v7.527a2 2 0 0 1-.211.896L4.72 20.55a1 1 0 0 0 .9 1.45h12.76a1 1 0 0 0 .9-1.45l-5.069-10.127A2 2 0 0 1 14 9.527V2"/><path d="M8.5 2h7"/><path d="M7 16h10"/></svg>';

        // Sparkles / Clean
        case 'sparkles':
        case 'clean':
            return '<svg ' . $common_attrs . '><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>';

        // Building / Company / Factory
        case 'building':
        case 'factory':
        case 'company':
            return '<svg ' . $common_attrs . '><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>';

        // Users / Partners
        case 'users':
        case 'partners':
            return '<svg ' . $common_attrs . '><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>';

        // Trending / ROI / Growth
        case 'trending-up':
        case 'chart':
        case 'roi':
            return '<svg ' . $common_attrs . '><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>';

        // Checkmark
        case 'check':
            return '<svg ' . $common_attrs . '><polyline points="20 6 9 17 4 12"/></svg>';

        // Check circle
        case 'check-circle':
            return '<svg ' . $common_attrs . '><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>';

        // Star (filled)
        case 'star':
            return '<svg ' . $common_attrs . ' fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';

        // Arrow right
        case 'arrow-right':
            return '<svg ' . $common_attrs . '><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>';

        // Calendar
        case 'calendar':
            return '<svg ' . $common_attrs . '><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>';

        // Clock
        case 'clock':
            return '<svg ' . $common_attrs . '><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>';

        // Folder
        case 'folder':
            return '<svg ' . $common_attrs . '><path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"/></svg>';

        // Search
        case 'search':
            return '<svg ' . $common_attrs . '><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>';

        // Phone
        case 'phone':
            return '<svg ' . $common_attrs . '><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>';

        // Mail
        case 'mail':
            return '<svg ' . $common_attrs . '><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>';

        // Map Pin / Location
        case 'map-pin':
            return '<svg ' . $common_attrs . '><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>';

        // File Text / Proposal
        case 'file-text':
            return '<svg ' . $common_attrs . '><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><line x1="10" y1="9" x2="8" y2="9"/></svg>';

        // Shopping Bag
        case 'shopping-bag':
            return '<svg ' . $common_attrs . '><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>';

        // Shopping Cart
        case 'shopping-cart':
            return '<svg ' . $common_attrs . '><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>';

        // WhatsApp Brand Icon (filled vector)
        case 'whatsapp':
            return '<svg ' . $class_attr . ' width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>';

        // Message square / Chat
        case 'message-square':
        case 'chat':
            return '<svg ' . $common_attrs . '><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>';

        // Chevron Right
        case 'chevron-right':
            return '<svg ' . $common_attrs . '><polyline points="9 18 15 12 9 6"/></svg>';

        // Chevron Down
        case 'chevron-down':
            return '<svg ' . $common_attrs . '><polyline points="6 9 12 15 18 9"/></svg>';

        // Info
        case 'info':
            return '<svg ' . $common_attrs . '><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>';

        // Help / FAQ
        case 'help-circle':
        case 'faq':
            return '<svg ' . $common_attrs . '><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>';

        // Default generic bullet icon
        default:
            return '<svg ' . $common_attrs . '><circle cx="12" cy="12" r="10"/></svg>';
    }
}

function peluanglaundry_icon($name, $class = '', $size = 20) {
    echo peluanglaundry_get_icon($name, $class, $size);
}
