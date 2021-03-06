<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Get all default general options parameters in a single array
 *
 * @return array Array of all  default general options
 */
function gallery_video_get_default_general_options() {
	$video_gallery_default__params = array(
		'gallery_video_ht_view2_element_linkbutton_text'                 => 'View More',
		'gallery_video_ht_view2_element_show_linkbutton'                 => 'on',
		'gallery_video_ht_view2_element_linkbutton_color'                => 'FFFFFF',
		'gallery_video_ht_view2_element_linkbutton_font_size'            => '14',
		'gallery_video_ht_view2_element_linkbutton_background_color'     => 'FF2C2C',
		'gallery_video_ht_view2_show_popup_linkbutton'                   => 'on',
		'gallery_video_ht_view2_popup_linkbutton_text'                   => 'View More',
		'gallery_video_ht_view2_popup_linkbutton_background_hover_color' => 'C02121',
		'gallery_video_ht_view2_popup_linkbutton_background_color'       => 'FF2C2C',
		'gallery_video_ht_view2_popup_linkbutton_font_hover_color'       => 'FFFFFF',
		'gallery_video_ht_view2_popup_linkbutton_color'                  => 'FFFFFF',
		'gallery_video_ht_view2_popup_linkbutton_font_size'              => '14',
		'gallery_video_ht_view2_description_color'                       => '222222',
		'gallery_video_ht_view2_description_font_size'                   => '14',
		'gallery_video_ht_view2_show_description'                        => 'on',
		'gallery_video_ht_view2_thumbs_width'                            => '75',
		'gallery_video_ht_view2_thumbs_height'                           => '75',
		'gallery_video_ht_view2_thumbs_position'                         => 'before',
		'gallery_video_ht_view2_show_thumbs'                             => 'on',
		'gallery_video_ht_view2_popup_background_color'                  => 'FFFFFF',
		'gallery_video_ht_view2_popup_overlay_color'                     => '000000',
		'gallery_video_ht_view2_popup_overlay_transparency_color'        => '70',
		'gallery_video_ht_view2_popup_closebutton_style'                 => 'dark',
		'gallery_video_ht_view2_show_separator_lines'                    => 'on',
		'gallery_video_ht_view2_show_popup_title'                        => 'on',
		'gallery_video_ht_view2_element_title_font_size'                 => '18',
		'gallery_video_ht_view2_element_title_font_color'                => '222222',
		'gallery_video_ht_view2_popup_title_font_size'                   => '18',
		'gallery_video_ht_view2_popup_title_font_color'                  => '222222',
		'gallery_video_ht_view2_element_overlay_color'                   => 'FFFFFF',
		'gallery_video_ht_view2_element_overlay_transparency'            => '70',
		'gallery_video_ht_view2_zoombutton_style'                        => 'light',
		'gallery_video_ht_view2_element_border_width'                    => '1',
		'gallery_video_ht_view2_element_border_color'                    => 'DEDEDE',
		'gallery_video_ht_view2_element_background_color'                => 'F9F9F9',
		'gallery_video_ht_view2_element_width'                           => '277',
		'gallery_video_ht_view2_element_height'                          => '160',
		'gallery_video_ht_view5_icons_style'                             => 'dark',
		'gallery_video_ht_view5_show_separator_lines'                    => 'on',
		'gallery_video_ht_view5_linkbutton_text'                         => 'View More',
		'gallery_video_ht_view5_show_linkbutton'                         => 'on',
		'gallery_video_ht_view5_linkbutton_background_hover_color'       => 'C02121',
		'gallery_video_ht_view5_linkbutton_background_color'             => 'FF2C2C',
		'gallery_video_ht_view5_linkbutton_font_hover_color'             => 'FFFFFF',
		'gallery_video_ht_view5_linkbutton_color'                        => 'FFFFFF',
		'gallery_video_ht_view5_linkbutton_font_size'                    => '14',
		'gallery_video_ht_view5_description_color'                       => '555555',
		'gallery_video_ht_view5_description_font_size'                   => '14',
		'gallery_video_ht_view5_show_description'                        => 'on',
		'gallery_video_ht_view5_thumbs_width'                            => '75',
		'gallery_video_ht_view5_thumbs_height'                           => '75',
		'gallery_video_ht_view5_show_thumbs'                             => 'on',
		'gallery_video_ht_view5_title_font_size'                         => '16',
		'gallery_video_ht_view5_title_font_color'                        => 'C02121',
		'gallery_video_ht_view5_main_image_width'                        => '275',
		'gallery_video_ht_view5_slider_tabs_font_color'                  => 'd9d99',
		'gallery_video_ht_view5_slider_tabs_background_color'            => '555555',
		'gallery_video_ht_view5_slider_background_color'                 => 'F9F9F9',
		'gallery_video_ht_view6_title_font_size'                         => '16',
		'gallery_video_ht_view6_title_font_color'                        => 'C02121',
		'gallery_video_ht_view6_title_font_hover_color'                  => 'FF2C2C',
		'gallery_video_ht_view6_title_background_color'                  => '000000',
		'gallery_video_ht_view6_title_background_transparency'           => '80',
		'gallery_video_ht_view6_border_radius'                           => '3',
		'gallery_video_ht_view6_border_width'                            => '0',
		'gallery_video_ht_view6_border_color'                            => 'EEEEEE',
		'gallery_video_ht_view6_width'                                   => '275',
		'gallery_video_light_box_size'                                   => '17',
		'gallery_video_light_box_width'                                  => '800',
		'gallery_video_light_box_transition'                             => 'elastic',
		'gallery_video_light_box_speed'                                  => '800',
		'gallery_video_light_box_href'                                   => 'False',
		'gallery_video_light_box_title'                                  => 'false',
		'gallery_video_light_box_scalephotos'                            => 'true',
		'gallery_video_light_box_rel'                                    => 'false',
		'gallery_video_light_box_scrolling'                              => 'false',
		'gallery_video_light_box_opacity'                                => '20',
		'gallery_video_light_box_open'                                   => 'false',
		'gallery_video_light_box_overlayclose'                           => 'true',
		'gallery_video_light_box_esckey'                                 => 'false',
		'gallery_video_light_box_arrowkey'                               => 'false',
		'gallery_video_light_box_loop'                                   => 'true',
		'gallery_video_light_box_data'                                   => 'false',
		'gallery_video_light_box_classname'                              => 'false',
		'gallery_video_light_box_fadeout'                                => '300',
		'gallery_video_light_box_closebutton'                            => 'true',
		'gallery_video_light_box_current'                                => 'image',
		'gallery_video_light_box_previous'                               => 'previous',
		'gallery_video_light_box_next'                                   => 'next',
		'gallery_video_light_box_close'                                  => 'close',
		'gallery_video_light_box_iframe'                                 => 'false',
		'gallery_video_light_box_inline'                                 => 'false',
		'gallery_video_light_box_html'                                   => 'false',
		'gallery_video_light_box_photo'                                  => 'false',
		'gallery_video_light_box_height'                                 => '600',
		'gallery_video_light_box_innerwidth'                             => 'false',
		'gallery_video_light_box_innerheight'                            => 'false',
		'gallery_video_light_box_initialwidth'                           => '300',
		'gallery_video_light_box_initialheight'                          => '100',
		'gallery_video_light_box_maxwidth'                               => '',
		'gallery_video_light_box_maxheight'                              => '',
		'gallery_video_light_box_slideshow'                              => 'false',
		'gallery_video_light_box_slideshowspeed'                         => '2500',
		'gallery_video_light_box_slideshowauto'                          => 'true',
		'gallery_video_light_box_slideshowstart'                         => 'start slideshow',
		'gallery_video_light_box_slideshowstop'                          => 'stop slideshow',
		'gallery_video_light_box_fixed'                                  => 'true',
		'gallery_video_light_box_top'                                    => 'false',
		'gallery_video_light_box_bottom'                                 => 'false',
		'gallery_video_light_box_left'                                   => 'false',
		'gallery_video_light_box_right'                                  => 'false',
		'gallery_video_light_box_reposition'                             => 'false',
		'gallery_video_light_box_retinaimage'                            => 'true',
		'gallery_video_light_box_retinaurl'                              => 'false',
		'gallery_video_light_box_retinasuffix'                           => '@2x.$1',
		'gallery_video_light_box_returnfocus'                            => 'true',
		'gallery_video_light_box_trapfocus'                              => 'true',
		'gallery_video_light_box_fastiframe'                             => 'true',
		'gallery_video_light_box_preloading'                             => 'true',
		'gallery_video_lightbox_open_position'                           => '5',
		'gallery_video_light_box_style'                                  => '1',
		'gallery_video_light_box_size_fix'                               => 'true',
		'gallery_video_slider_crop_image'                                => 'resize',
		'gallery_video_slider_title_color'                               => '000000',
		'gallery_video_slider_title_font_size'                           => '13',
		'gallery_video_slider_description_color'                         => 'FFFFFF',
		'gallery_video_slider_description_font_size'                     => '12',
		'gallery_video_slider_title_position'                            => 'right-top',
		'gallery_video_slider_description_position'                      => 'right-bottom',
		'gallery_video_slider_title_border_size'                         => '0',
		'gallery_video_slider_title_border_color'                        => 'FFFFFF',
		'gallery_video_slider_title_border_radius'                       => '4',
		'gallery_video_slider_description_border_size'                   => '0',
		'gallery_video_slider_description_border_color'                  => 'FFFFFF',
		'gallery_video_slider_description_border_radius'                 => '0',
		'gallery_video_slider_slideshow_border_size'                     => '0',
		'gallery_video_slider_slideshow_border_color'                    => 'FFFFFF',
		'gallery_video_slider_slideshow_border_radius'                   => '0',
		'gallery_video_slider_navigation_type'                           => '1',
		'gallery_video_slider_navigation_position'                       => 'bottom',
		'gallery_video_slider_title_background_color'                    => 'FFFFFF',
		'gallery_video_slider_description_background_color'              => '000000',
		'gallery_video_slider_title_transparent'                         => 'on',
		'gallery_video_slider_description_transparent'                   => 'on',
		'gallery_video_slider_slider_background_color'                   => 'FFFFFF',
		'gallery_video_slider_dots_position'                             => 'none',
		'gallery_video_slider_active_dot_color'                          => 'FFFFFF',
		'gallery_video_slider_dots_color'                                => '000000',
		'gallery_video_slider_description_width'                         => '70',
		'gallery_video_slider_description_height'                        => '50',
		'gallery_video_slider_description_background_transparency'       => '70',
		'gallery_video_slider_description_text_align'                    => 'justify',
		'gallery_video_slider_title_width'                               => '30',
		'gallery_video_slider_title_height'                              => '50',
		'gallery_video_slider_title_background_transparency'             => '70',
		'gallery_video_slider_title_text_align'                          => 'right',
		'gallery_video_slider_title_has_margin'                          => 'off',
		'gallery_video_slider_description_has_margin'                    => 'off',
		'gallery_video_slider_show_arrows'                               => 'on',
		'gallery_video_thumb_image_behavior'                             => 'on',
		'gallery_video_thumb_image_width'                                => '240',
		'gallery_video_thumb_image_height'                               => '150',
		'gallery_video_thumb_image_border_width'                         => '1',
		'gallery_video_thumb_image_border_color'                         => '444444',
		'gallery_video_thumb_image_border_radius'                        => '5',
		'gallery_video_thumb_margin_image'                               => '1',
		'gallery_video_thumb_title_font_size'                            => '16',
		'gallery_video_thumb_title_font_color'                           => 'FFFFFF',
		'gallery_video_thumb_title_background_color'                     => 'CCCCCC',
		'gallery_video_thumb_title_background_transparency'              => '80',
		'gallery_video_thumb_box_padding'                                => '28',
		'gallery_video_thumb_box_background'                             => '333333',
		'gallery_video_thumb_box_use_shadow'                             => 'on',
		'gallery_video_thumb_box_has_background'                         => 'on',
		'gallery_video_thumb_view_text'                                  => 'Watch Video',
		'gallery_video_ht_view8_element_cssAnimation'                    => 'false',
		'gallery_video_ht_view8_element_height'                          => '120',
		'gallery_video_ht_view8_element_maxheight'                       => '155',
		'gallery_video_ht_view8_element_show_caption'                    => 'true',
		'gallery_video_ht_view8_element_padding'                         => '0',
		'gallery_video_ht_view8_element_border_radius'                   => '5',
		'gallery_video_ht_view8_icons_style'                             => 'dark',
		'gallery_video_ht_view8_element_title_font_size'                 => '13',
		'gallery_video_ht_view8_element_title_font_color'                => '3AD6FC',
		'gallery_video_ht_view8_popup_background_color'                  => '000000',
		'gallery_video_ht_view8_popup_overlay_transparency_color'        => '0',
		'gallery_video_ht_view8_popup_closebutton_style'                 => 'dark',
		'gallery_video_ht_view8_element_title_overlay_transparency'      => '90',
		'gallery_video_ht_view8_element_size_fix'                        => 'false',
		'gallery_video_ht_view8_element_title_background_color'          => 'FF1C1C',
		'gallery_video_ht_view8_element_justify'                         => 'true',
		'gallery_video_ht_view8_element_randomize'                       => 'false',
		'gallery_video_ht_view8_element_animation_speed'                 => '2000',
		'gallery_video_video_ht_view9_title_fontsize'                    => '18',
		'gallery_video_video_ht_view9_title_color'                       => 'FFFFFF',
		'gallery_video_video_ht_view9_desc_color'                        => '000000',
		'gallery_video_video_ht_view9_desc_fontsize'                     => '14',
		'gallery_video_video_ht_view9_element_title_show'                => 'true',
		'gallery_video_video_ht_view9_element_desc_show'                 => 'true',
		'gallery_video_video_ht_view9_general_width'                     => '100',
		'gallery_video_video_view9_general_position'                     => 'center',
		'gallery_video_video_view9_title_textalign'                      => 'left',
		'gallery_video_video_view9_desc_textalign'                       => 'justify',
		'gallery_video_video_view9_image_position'                       => '2',
		'gallery_video_video_ht_view9_title_back_color'                  => '000000',
		'gallery_video_video_ht_view9_title_opacity'                     => '70',
		'gallery_video_video_ht_view9_desc_opacity'                      => '100',
		'gallery_video_video_ht_view9_desc_back_color'                   => 'FFFFFF',
		'gallery_video_video_ht_view9_general_space'                     => '0',
		'gallery_video_video_ht_view9_general_separator_size'            => '0',
		'gallery_video_video_ht_view9_general_separator_color'           => '010457',
		'gallery_video_video_view9_general_separator_style'              => 'dotted',
		'gallery_video_video_ht_view9_paginator_fontsize'                => '22',
		'gallery_video_video_ht_view9_paginator_color'                   => '1046B3',
		'gallery_video_video_ht_view9_paginator_icon_color'              => '1046B3',
		'gallery_video_video_ht_view9_paginator_icon_size'               => '18',
		'gallery_video_video_view9_paginator_position'                   => 'center',
		'gallery_video_video_ht_view9_video_width'                       => '100%',
		'gallery_video_video_ht_view9_video_height'                      => '100%',
		'gallery_video_video_view9_video_position'                       => 'center',
		'gallery_video_video_view9_loadmore_position'                    => 'center',
		'gallery_video_video_ht_view9_loadmore_fontsize'                 => '19',
		'gallery_video_video_ht_view9_button_color'                      => '5CADFF',
		'gallery_video_video_ht_view9_loadmore_font_color'               => 'FFFFFF',
		'gallery_video_loading_type'                                     => '2',
		'gallery_video_video_ht_view9_loadmore_text'                     => 'View More',
		'gallery_video_video_ht_view8_paginator_position'                => 'center',
		'gallery_video_video_ht_view8_paginator_icon_size'               => '18',
		'gallery_video_video_ht_view8_paginator_icon_color'              => '26A6FC',
		'gallery_video_video_ht_view8_paginator_color'                   => '26A6FC',
		'gallery_video_video_ht_view8_paginator_fontsize'                => '18',
		'gallery_video_video_ht_view8_loadmore_position'                 => 'center',
		'gallery_video_video_ht_view8_loadmore_fontsize'                 => '14',
		'gallery_video_video_ht_view8_button_color'                      => '26A6FC',
		'gallery_video_video_ht_view8_loadmore_font_color'               => 'FF1C1C',
		'gallery_video_video_ht_view8_loading_type'                      => '3',
		'gallery_video_video_ht_view8_loadmore_text'                     => 'View More',
		'gallery_video_video_ht_view7_paginator_fontsize'                => '22',
		'gallery_video_video_ht_view7_paginator_color'                   => '0A0202',
		'gallery_video_video_ht_view7_paginator_icon_color'              => '333333',
		'gallery_video_video_ht_view7_paginator_icon_size'               => '22',
		'gallery_video_video_ht_view7_paginator_position'                => 'center',
		'gallery_video_video_ht_view7_loadmore_position'                 => 'center',
		'gallery_video_video_ht_view7_loadmore_fontsize'                 => '19',
		'gallery_video_video_ht_view7_button_color'                      => '333333',
		'gallery_video_video_ht_view7_loadmore_font_color'               => 'CCCCCC',
		'gallery_video_video_ht_view7_loading_type'                      => '1',
		'gallery_video_video_ht_view7_loadmore_text'                     => 'View More',
		'gallery_video_video_ht_view4_paginator_fontsize'                => '19',
		'gallery_video_video_ht_view4_paginator_color'                   => 'FF2C2C',
		'gallery_video_video_ht_view4_paginator_icon_color'              => 'B82020',
		'gallery_video_video_ht_view4_paginator_icon_size'               => '21',
		'gallery_video_video_ht_view4_paginator_position'                => 'center',
		'gallery_video_video_ht_view4_loadmore_position'                 => 'center',
		'gallery_video_video_ht_view4_loadmore_fontsize'                 => '16',
		'gallery_video_video_ht_view4_button_color'                      => '5CADFF',
		'gallery_video_video_ht_view4_loadmore_font_color'               => 'FF0D0D',
		'gallery_video_video_ht_view4_loading_type'                      => '3',
		'gallery_video_video_ht_view4_loadmore_text'                     => 'View More',
		'gallery_video_video_ht_view1_paginator_fontsize'                => '22',
		'gallery_video_video_ht_view1_paginator_color'                   => '222222',
		'gallery_video_video_ht_view1_paginator_icon_color'              => 'FF2C2C',
		'gallery_video_video_ht_view1_paginator_icon_size'               => '22',
		'gallery_video_video_ht_view1_paginator_position'                => 'left',
		'gallery_video_video_ht_view1_loadmore_position'                 => 'center',
		'gallery_video_video_ht_view1_loadmore_fontsize'                 => '22',
		'gallery_video_video_ht_view1_button_color'                      => 'FF2C2C',
		'gallery_video_video_ht_view1_loadmore_font_color'               => 'FFFFFF',
		'gallery_video_video_ht_view1_loading_type'                      => '2',
		'gallery_video_video_ht_view1_loadmore_text'                     => 'Load More',
		'gallery_video_video_ht_view9_loadmore_font_color_hover'         => 'D9D9D9',
		'gallery_video_video_ht_view9_button_color_hover'                => '8F827C',
		'gallery_video_video_ht_view8_loadmore_font_color_hover'         => 'FF4242',
		'gallery_video_video_ht_view8_button_color_hover'                => '0FEFFF',
		'gallery_video_video_ht_view7_loadmore_font_color_hover'         => 'D9D9D9',
		'gallery_video_video_ht_view7_button_color_hover'                => '8F827C',
		'gallery_video_video_ht_view4_loadmore_font_color_hover'         => 'FF4040',
		'gallery_video_video_ht_view4_button_color_hover'                => '99C5FF',
		'gallery_video_video_ht_view1_loadmore_font_color_hover'         => 'F2F2F2',
		'gallery_video_video_ht_view1_button_color_hover'                => '991A1A',
		'gallery_video_ht_view2_content_in_center_popup'                 => 'off',
		'gallery_video_ht_view2_content_in_center_lightbox'              => 'off',
		'gallery_video_video_natural_size_thumbnail'                     => 'resize',
		'gallery_video_video_natural_size_contentpopup'                  => 'resize',
		'gallery_video_version'                                          => '2.0.4',
        //new options
        'gallery_video_lightbox_slideAnimationType'                         => 'effect_1',
        'gallery_video_lightbox_lightboxView'                               => 'view1',
        'gallery_video_lightbox_speed_new'                                  => '600',
        'gallery_video_lightbox_width_new'                                  => '100',
        'gallery_video_lightbox_height_new'                                 => '100',
        'gallery_video_lightbox_videoMaxWidth'                              => '790',
        'gallery_video_lightbox_overlayDuration'                            => '150',
        'gallery_video_lightbox_overlayClose_new'                           => 'true',
        'gallery_video_lightbox_loop_new'                                   => 'true',
        'gallery_video_lightbox_escKey_new'                                 => 'true',
        'gallery_video_lightbox_keyPress_new'                               => 'true',
        'gallery_video_lightbox_arrows'                                     => 'true',
        'gallery_video_lightbox_mouseWheel'                                 => 'true',
        'gallery_video_lightbox_showCounter'                                => 'true',
        'gallery_video_lightbox_nextHtml'                                   => '',     //not used
        'gallery_video_lightbox_prevHtml'                                   => '',     //not used
        'gallery_video_lightbox_sequence_info'                              => 'image',
        'gallery_video_lightbox_sequenceInfo'                               => 'of',
        'gallery_video_lightbox_slideshow_new'                              => 'true',
        'gallery_video_lightbox_slideshow_auto_new'                         => 'false',
        'gallery_video_lightbox_slideshow_speed_new'                        => '2500',
        'gallery_video_lightbox_slideshow_start_new'                        => '',     //not used
        'gallery_video_lightbox_slideshow_stop_new'                         => '',     //not used
        'gallery_video_lightbox_watermark'                                  => 'false',
        'gallery_video_lightbox_socialSharing'                              => 'true',
        'gallery_video_lightbox_facebookButton'                             => 'true',
        'gallery_video_lightbox_twitterButton'                              => 'true',
        'gallery_video_lightbox_googleplusButton'                           => 'true',
        'gallery_video_lightbox_pinterestButton'                            => 'false',
        'gallery_video_lightbox_linkedinButton'                             => 'false',
        'gallery_video_lightbox_tumblrButton'                               => 'false',
        'gallery_video_lightbox_redditButton'                               => 'false',
        'gallery_video_lightbox_bufferButton'                               => 'false',
        'gallery_video_lightbox_diggButton'                                 => 'false',
        'gallery_video_lightbox_vkButton'                                   => 'false',
        'gallery_video_lightbox_yummlyButton'                               => 'false',
        'gallery_video_lightbox_watermark_text'                             => 'WaterMark',
        'gallery_video_lightbox_watermark_textColor'                        => 'ffffff',
        'gallery_video_lightbox_watermark_textFontSize'                     => '30',
        'gallery_video_lightbox_watermark_containerBackground'              => '000000',
        'gallery_video_lightbox_watermark_containerOpacity'                 => '90',
        'gallery_video_lightbox_watermark_containerWidth'                   => '300',
        'gallery_video_lightbox_watermark_position_new'                     => '9',
        'gallery_video_lightbox_watermark_opacity'                          => '70',
        'gallery_video_lightbox_watermark_margin'                           => '10',
        'gallery_video_lightbox_watermark_img_src_new'                      => GALLERY_VIDEO_IMAGES_URL . '/admin_images/No-image-found.jpg',
        'gallery_video_lightbox_type'                                       => 'new_type'
	);

	return $video_gallery_default__params;
}

/**
 * Get front-end view slug
 *
 * @param $id
 *
 * @return string
 */
function gallery_video_get_view_slag_by_id( $id ) {
	global $wpdb;
	$query = $wpdb->prepare( "SELECT huge_it_sl_effects FROM " . $wpdb->prefix . "huge_it_videogallery_galleries WHERE id=%d", $id );
	$view  = $wpdb->get_var( $query );
	switch ( $view ) {
		case 0:
			$slug = 'content-popup';
			break;
		case 1:
			$slug = 'content-slider';
			break;
		case 3:
			$slug = 'slider';
			break;
		case 4:
			$slug = 'thumbnails';
			break;
		case 5:
			$slug = 'lightbox-gallery';
			break;
		case 6:
			$slug = 'justified';
			break;
		case 7:
			$slug = 'blog-style-gallery';
			break;
	}

	return $slug;
}

/**
 * Get User IP
 * @return mixed
 */
function gallery_video_get_ip() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
		$huge_it_ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
		$huge_it_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$huge_it_ip = $_SERVER['REMOTE_ADDR'];
	}

	return $huge_it_ip;
}
