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

        // Star (filled golden yellow)
        case 'star':
            return '<svg' . $class_attr . ' width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';

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

        // WhatsApp Brand Icon (100% Real Official Vector with telephone receiver)
        case 'whatsapp':
        case 'wa':
            return '<svg ' . $class_attr . ' width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12.004 2C6.48 2 2 6.48 2 12c0 1.97.57 3.81 1.56 5.36L2.3 22l4.82-1.23A9.95 9.95 0 0 0 12.004 22c5.52 0 10-4.48 10-10s-4.48-10-10-10zm5.66 14.28c-.24.67-1.39 1.28-1.92 1.36-.5.08-1.14.11-3.67-.93-3.08-1.26-5.06-4.4-5.21-4.6-.15-.2-1.24-1.65-1.24-3.15 0-1.5.78-2.24 1.06-2.54.28-.3.61-.38.81-.38.2 0 .41 0 .59.01.19.01.44-.07.69.53.25.6.86 2.1.94 2.25.08.16.14.34.03.55-.11.21-.17.34-.33.53-.17.19-.35.42-.5.57-.17.17-.34.35-.15.68.2.33.87 1.44 1.88 2.33 1.29 1.15 2.38 1.51 2.71 1.68.34.17.53.14.73-.08.2-.23.86-1.01 1.09-1.35.23-.35.46-.29.77-.17.31.11 1.97.93 2.31 1.1.34.17.56.26.65.4.08.15.08.86-.16 1.53z"/></svg>';

        // Shopee Official Brand Vector (Shopping bag with 'S')
        case 'shopee':
            return '<svg ' . $class_attr . ' width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="currentColor"><path d="M19.98 7.42h-3.41c-.24-2.88-2.22-5.17-4.57-5.17-2.35 0-4.33 2.29-4.57 5.17H4.02C3.46 7.42 3 7.88 3 8.44l1.24 12.02c.05.51.48.91.99.91h13.54c.51 0 .94-.4.99-.91L21 8.44c0-.56-.46-1.02-1.02-1.02zm-7.98-3.47c1.47 0 2.76 1.58 2.97 3.47H9.03c.21-1.89 1.5-3.47 2.97-3.47zm.05 13.84c-2.45 0-3.69-1.28-3.7-1.29-.24-.25-.23-.65.02-.89.25-.24.65-.23.89.02.04.04 1.05 1.04 2.82 1.04 1.34 0 2.2-.66 2.2-1.57 0-.74-.53-1.2-2.12-1.64-1.95-.54-2.97-1.35-2.97-2.61 0-1.63 1.48-2.73 3.32-2.73 1.83 0 2.93.93 2.97.97.25.24.25.64.01.89-.24.25-.64.25-.89.01-.06-.05-.89-.75-2.12-.75-1.12 0-1.93.61-1.93 1.47 0 .66.47 1.07 1.94 1.48 2.12.59 3.16 1.44 3.16 2.78 0 1.77-1.51 2.82-3.6 2.82z"/></svg>';

        // Tokopedia Official Brand Vector
        case 'tokopedia':
        case 'toped':
            return '<svg ' . $class_attr . ' width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12c0 1.82.49 3.53 1.35 5L2 22l5.16-1.31C8.58 21.53 10.24 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 3.2c1.77 0 3.2 1.43 3.2 3.2v.8h-6.4v-.8c0-1.77 1.43-3.2 3.2-3.2zm-6.4 12c-.44 0-.8-.36-.8-.8V10.4c0-.44.36-.8.8-.8h12.8c.44 0 .8.36.8.8v5.8c0 .44-.36.8-.8.8H5.6zm3.6-4.4c0-.99.81-1.8 1.8-1.8s1.8.81 1.8 1.8-.81 1.8-1.8 1.8-1.8-.81-1.8-1.8zm5.6 0c0-.99.81-1.8 1.8-1.8s1.8.81 1.8 1.8-.81 1.8-1.8 1.8-1.8-.81-1.8-1.8z"/></svg>';

        // Instagram Official Brand Vector
        case 'instagram':
        case 'ig':
            return '<svg ' . $class_attr . ' width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>';

        // TikTok Official Brand Vector
        case 'tiktok':
            return '<svg ' . $class_attr . ' width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.24 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>';

        // YouTube Official Brand Vector
        case 'youtube':
            return '<svg ' . $class_attr . ' width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>';

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

        // Social Share Icons
        case 'facebook':
            return '<svg ' . $common_attrs . '><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>';

        case 'twitter':
        case 'x':
            return '<svg ' . $common_attrs . '><path d="M4 4l11.733 16h4.267l-11.733 -16z"/><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"/></svg>';

        case 'telegram':
            return '<svg ' . $common_attrs . '><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>';

        case 'share-2':
        case 'share':
            return '<svg ' . $common_attrs . '><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" x2="15.42" y1="13.51" y2="17.49"/><line x1="15.41" x2="8.59" y1="6.51" y2="10.49"/></svg>';

        case 'link':
        case 'copy':
            return '<svg ' . $common_attrs . '><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>';

        case 'tag':
            return '<svg ' . $common_attrs . '><path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l6.58-6.58c.94-.94.94-2.48 0-3.42L12 2Z"/><circle cx="7" cy="7" r=".5" fill="currentColor"/></svg>';

        case 'list':
        case 'toc':
            return '<svg ' . $common_attrs . '><line x1="8" x2="21" y1="6" y2="6"/><line x1="8" x2="21" y1="12" y2="12"/><line x1="8" x2="21" y1="18" y2="18"/><line x1="3" x2="3.01" y1="6" y2="6"/><line x1="3" x2="3.01" y1="12" y2="12"/><line x1="3" x2="3.01" y1="18" y2="18"/></svg>';

        case 'washer':
        case 'washing-machine':
            return '<svg ' . $common_attrs . '><rect width="18" height="20" x="3" y="2" rx="3"/><circle cx="12" cy="13" r="5"/><path d="M12 10a3 3 0 0 0-3 3"/><circle cx="7" cy="5" r="1" fill="currentColor"/><circle cx="10" cy="5" r="1" fill="currentColor"/></svg>';

        case 'iron':
            return '<svg ' . $common_attrs . '><path d="M3 18h18l-2-6H7L3 18z"/><path d="M7 12V7a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v5"/><circle cx="9" cy="15" r="1" fill="currentColor"/><circle cx="13" cy="15" r="1" fill="currentColor"/></svg>';

        case 'play':
            return '<svg ' . $common_attrs . ' fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>';

        case 'arrow-up-right':
            return '<svg ' . $common_attrs . '><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>';

        // Default generic bullet icon
        default:
            return '<svg ' . $common_attrs . '><circle cx="12" cy="12" r="10"/></svg>';
    }
}

function peluanglaundry_icon($name, $class = '', $size = 20) {
    echo peluanglaundry_get_icon($name, $class, $size);
}
