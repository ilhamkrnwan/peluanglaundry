<?php
/**
 * PeluangLaundry Theme Customizer
 */

if (!defined('ABSPATH')) {
    exit;
}

function peluanglaundry_customize_register($wp_customize) {
    // Section Kontak & CTA
    $wp_customize->add_section('peluanglaundry_contact_section', array(
        'title'    => __('Kontak & CTA WhatsApp', 'peluanglaundry'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('peluanglaundry_wa_number', array(
        'default'           => '6282215840088',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('peluanglaundry_wa_number', array(
        'label'    => __('Nomor WhatsApp Admin', 'peluanglaundry'),
        'section'  => 'peluanglaundry_contact_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('peluanglaundry_tokopedia_url', array(
        'default'           => 'https://www.tokopedia.com/kuekurmacoklat/paket-bahan-deterjen-cair-matic-rendah-busa-determat',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('peluanglaundry_tokopedia_url', array(
        'label'    => __('URL Tokopedia Resmi', 'peluanglaundry'),
        'section'  => 'peluanglaundry_contact_section',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('peluanglaundry_shopee_url', array(
        'default'           => 'https://shopee.co.id/DETERMAT-Paket-Bahan-Deterjen-Cair-Matic-Rendah-Busa-Ramah-Lingkungan-ONGKIR-TERMURAH-i.30251562.6202435755',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('peluanglaundry_shopee_url', array(
        'label'    => __('URL Shopee Resmi', 'peluanglaundry'),
        'section'  => 'peluanglaundry_contact_section',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('peluanglaundry_top_banner', array(
        'default'           => 'Pusat Paket Usaha Laundry & Bahan Chemical Hemat Ongkir Seluruh Indonesia! Konsultasi Gratis.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('peluanglaundry_top_banner', array(
        'label'    => __('Teks Banner Promosi Atas', 'peluanglaundry'),
        'section'  => 'peluanglaundry_contact_section',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'peluanglaundry_customize_register');
