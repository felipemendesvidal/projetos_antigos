<?php
/*
Plugin Name: Flash Video Resizer
Plugin URI: http://bernabauer.com/wp-plugins
Description: Resize flash video to an ajustable width.
Version: 1.5
Author: bernabauer
Author URI: http://bernabauer.com
*/
/*  Copyright 2009  BernaBauer  (email : bernabauer@bernabauer.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

load_textdomain('fvr', dirname(__FILE__).'/' . get_locale() . '.mo');

add_action('admin_menu', 'fvr_create_meta_box');

add_action('edit_post', 'fvr_noresize');
add_action('publish_post', 'fvr_noresize');
add_action('save_post', 'fvr_noresize');


global $fvr_version;
$fvr_version = "1.5";

$fvr_options = get_option('fvr_width');

if ($fvr_options['artigo'] != '' AND $fvr_options['home'] != '' AND $fvr_options['arquivo'] != '' AND $fvr_options['busca'] != '' AND $fvr_options['pagina'] != '') {
	add_filter('the_content', 'fvr_resizeMarkup');
} else {

	add_action('admin_notices', 'fvr_warning');

	/********************************************************************************************* 
	 *  Alerta sobre problemas com a configuracao do plugin
	 */
	function fvr_warning() {
		echo "<div class='updated fade-ff0000'><p><strong>".__('Alerta Flash Video Resizer', 'fvr')."</strong><br /> ".__('Você precisa',"fvr")." <a href=\"options-reading.php\">".__('definir',"fvr")."</a> ".__('a largura do vídeo!', 'fvr')."</p></div>";
	}

}

/**************************************************************************************************
 *  Metabox
 */
function fvr_create_meta_box() {

	if ( function_exists('add_meta_box') ) {
		add_meta_box( 'fvr_write_post_sidebar', 'Flash Video Resizer', 'fvr_write_post_sidebar', 'post', 'normal', 'high' );
	}
}

/**************************************************************************************************
 *  FVR no resize box
 */
function fvr_write_post_sidebar() {

	global $post;
	global $domain;
	
	$checked='';	
	$noresize = get_post_meta($post->ID, 'fvr-noresize', true);
	
	if ($noresize == "1")
		$checked = "checked";

	echo "<div class=\"inside\">";
	echo '<input type="checkbox" id="fvr-noresize" name="fvr-noresize" value="1"'.$checked.'> <label for="fvr-noresize">'.__('Não redimensionar vídeos deste artigo.', 'fvr').'</label><br />';
	echo '<input type="hidden" name="fvr-noresize-key" id="fvr-noresize-key" value="' . wp_create_nonce('fvr-noresize') . '" />';
	echo '<br /></div>';

}

/**************************************************************************************************
 *  Atualiza a opcao de personalizacao do codigo HOTWords para artigo/pagina
 */
 
function fvr_noresize($id)
{
	$setting = '';
	$meta_exists = '';

  // authorization
	if ( !current_user_can('edit_post', $id) )
		return $id;
	// atualiza a exclusao de anuncios por artigo
	if ( !wp_verify_nonce($_POST['fvr-noresize-key'], 'fvr-noresize') )
		return $id;

	// atualiza a exclusao de anuncios por artigo
	$setting = @$_POST['fvr-noresize'];

	// apaga o metadado se for conteudo vazio
	if (!$setting)
		delete_post_meta($id, 'fvr-noresize');
	else
		$meta_exists = update_post_meta($id, 'fvr-noresize', $setting);
	if((!$meta_exists) AND ($setting != ''))
	{
		add_post_meta($id, 'fvr-noresize', $setting);	
	}
	return $id;
}

function fvr_resizeMarkup($thecontent) { 

	global $thePostID;
	global $wp_query;

	$mobile = "";

	#buscar o tamanho
	$fvr_options = get_option('fvr_width');

	# Detectar presença do WordPress Mobile Pack
	$current_plugins = get_option('active_plugins');
	if (in_array('wordpress-mobile-pack/wordpress-mobile-pack.php', $current_plugins)) {
		$mobile = wpmp_switcher_is_cookie('mobile');
		if ($mobile != 1)
				$mobile = "";
	}
	
	$thePostID = $wp_query->post->ID;
	$noresize = get_post_custom_values('fvr-noresize');

	if ($noresize[0] == "1") {
		return "<!-- Flash Video Resizer ".$fvr_options['versao']." : NO RESIZE -->".$thecontent;
	}

	if (is_home() OR is_singular() OR is_archive() OR is_search() OR is_page()) { 

		if (is_single()) {
			if (!$mobile)
				$w = $fvr_options['artigo'];
			else
				$w = $fvr_options['artigomobile'];
		}
			
		if (is_home())
			if (!$mobile)
				$w = $fvr_options['home'];
			else
				$w = $fvr_options['homemobile'];
		
		if (is_archive())
			if (!$mobile)
				$w = $fvr_options['arquivo'];
			else
				$w = $fvr_options['arquivomobile'];
			
		if (is_search())
			if (!$mobile)
				$w = $fvr_options['busca'];
			else
				$w = $fvr_options['buscamobile'];
		
		if (is_page())
			if (!$mobile)
				$w = $fvr_options['pagina'];
			else
				$w = $fvr_options['paginamobile'];

		$videos = array();

		$ret_object = preg_match_all('/object.*?width="([0-9]+)".*?height="([0-9]+)".*?embed.*? width="[0-9]+".*?height="[0-9]+".*?embed><\/object/', $thecontent, $object_dim, PREG_SET_ORDER);
		$i=0;

		if ($ret_object != 0) { 

			#trata w-h
			foreach ($object_dim as $d) {
				if ($d[1] == 0 OR $d[2] == 0)
					break;
				$ratio = $d[1]/$d[2];
				$h = $w / $ratio;
				$h = (int) $h;

				$ret = preg_replace('/width="[0-9]+".*?height="[0-9]+"/', 'width="'.$w.'" height="'.$h.'"', $d[0]);
				#ajuste globo.com
				if (strpos($ret, "video.globo.com") != FALSE) {
					$ret = str_replace('width='.$d[1].chr(38), 'width='.$w.'&', $ret);
					$ret = str_replace('height='.$d[2].'"', 'height='.$h.'"', $ret);
				} 

				$videos[] = $d[0];
				$redim_videos[] = $ret;
			}
	
			foreach ($videos as $video) {
	
				$thecontent = str_replace($video, $redim_videos[$i], $thecontent);
				$i++;
			}
			#fim trata w-h
		} else {
			#trat ah-w
			$ret_object = preg_match_all('/object.*?height="([0-9]+)".*?width="([0-9]+)".*?embed.*? height="[0-9]+".*?width="[0-9]+".*?/', $thecontent, $object_dim, PREG_SET_ORDER);
			$i=0;
			if ($ret_object != 0) { 
	
				foreach ($object_dim as $d) {
					if ($d[1] == 0 OR $d[2] == 0)
						break;
		
					$ratio = $d[2]/$d[1];
					$h = $w / $ratio;
					$h = (int) $h;
		
					$ret = preg_replace('/height="[0-9]+".*?width="[0-9]+"/', 'height="'.$h.'" width="'.$w.'"', $d[0]);
		
					$videos[] = $d[0];
					$redim_videos[] = $ret;
				}
		
				foreach ($videos as $video) {
		
					$thecontent = str_replace($video, $redim_videos[$i], $thecontent);
					$i++;
				}
			#fim trata w-h
			} 
		}
		
		#youtube antigo
		$ret_object = preg_match_all('/object.*?width="([0-9]+)".*?height="([0-9]+)".*?data.*?/', $thecontent, $object_dim, PREG_SET_ORDER);
		$i=0;

		if ($ret_object != 0) { 
			#trata w-h
			foreach ($object_dim as $d) {
				if ($d[1] == 0 OR $d[2] == 0)
					break;
				$ratio = $d[1]/$d[2];
				$h = $w / $ratio;
				$h = (int) $h;

				$ret = preg_replace('/width="[0-9]+".*?height="[0-9]+"/', 'width="'.$w.'" height="'.$h.'"', $d[0]);

				$videos[] = $d[0];
				$redim_videos[] = $ret;
			}
	
			foreach ($videos as $video) {
	
				$thecontent = str_replace($video, $redim_videos[$i], $thecontent);
				$i++;
			}
			#fim trata w-h
		} else {
			#trat ah-w
			$ret_object = preg_match_all('/object.*?height="([0-9]+)".*?width="([0-9]+)".*?data.*? /', $thecontent, $object_dim, PREG_SET_ORDER);
			$i=0;
			if ($ret_object != 0) { 
	
				foreach ($object_dim as $d) {
					if ($d[1] == 0 OR $d[2] == 0)
						break;
		
					$ratio = $d[2]/$d[1];
					$h = $w / $ratio;
					$h = (int) $h;
		
					$ret = preg_replace('/height="[0-9]+".*?width="[0-9]+"/', 'height="'.$h.'" width="'.$w.'"', $d[0]);
		
					$videos[] = $d[0];
					$redim_videos[] = $ret;
				}
		
				foreach ($videos as $video) {
		
					$thecontent = str_replace($video, $redim_videos[$i], $thecontent);
					$i++;
				}
			#fim trata w-h
			} 
		}


			#trata metacafe
			$ret_object = preg_match_all('/embed.*?height="([0-9]+)".*?width="([0-9]+)".*?/', $thecontent, $object_dim, PREG_SET_ORDER);
			$i=0;
	
			if ($ret_object != 0) { 
	
				foreach ($object_dim as $d) {
					if ($d[1] == 0 OR $d[2] == 0)
						break;
					$ratio = $d[2]/$d[1];
					$h = $w / $ratio;
					$h = (int) $h;

					$ret = preg_replace('/height="[0-9]+".*?width="[0-9]+"/', 'height="'.$h.'" width="'.$w.'"', $d[0]);
		
					$videos[] = $d[0];
					$redim_videos[] = $ret;
				}
		
				foreach ($videos as $video) {
	
					$thecontent = str_replace($video, $redim_videos[$i], $thecontent);
					$i++;
				}
			} else {
				$ret_object = preg_match_all('/embed.*? width="([0-9]+)".*?height="([0-9]+)".*?/', $thecontent, $object_dim, PREG_SET_ORDER);
				$i=0;
				if ($ret_object != 0) { 
	
					foreach ($object_dim as $d) {
						if ($d[1] == 0 OR $d[2] == 0)
							break;
		
						$ratio = $d[1]/$d[2];
						$h = $w / $ratio;
						$h = (int) $h;
		
						$ret = preg_replace('/width="[0-9]+".*?height="[0-9]+"/', 'width="'.$w.'" height="'.$h.'"', $d[0]);
		
						$videos[] = $d[0];
						$redim_videos[] = $ret;
	                                }

					foreach ($videos as $video) {

						$thecontent = str_replace($video, $redim_videos[$i], $thecontent);
						$i++;
					}
				}
			}
			#fim trata metacafe

			#trata snotr
			$ret_object = preg_match_all('/iframe.*?height="([0-9]+)".*?width="([0-9]+)".*?/', $thecontent, $object_dim, PREG_SET_ORDER);
			$i=0;
	
			if ($ret_object != 0) { 
	
				foreach ($object_dim as $d) {
					if ($d[1] == 0 OR $d[2] == 0)
						break;
					$ratio = $d[2]/$d[1];
					$h = $w / $ratio;
					$h = (int) $h;

					$ret = preg_replace('/height="[0-9]+".*?width="[0-9]+"/', 'height="'.$h.'" width="'.$w.'"', $d[0]);
		
					$videos[] = $d[0];
					$redim_videos[] = $ret;
				}
		
				foreach ($videos as $video) {
	
					$thecontent = str_replace($video, $redim_videos[$i], $thecontent);
					$i++;
				}
			} else {
				$ret_object = preg_match_all('/iframe.*? width="([0-9]+)".*?height="([0-9]+)".*?/', $thecontent, $object_dim, PREG_SET_ORDER);
				$i=0;
				if ($ret_object != 0) { 
	
					foreach ($object_dim as $d) {
						if ($d[1] == 0 OR $d[2] == 0)
							break;
		
						$ratio = $d[1]/$d[2];
						$h = $w / $ratio;
						$h = (int) $h;
		
						$ret = preg_replace('/width="[0-9]+".*?height="[0-9]+"/', 'width="'.$w.'" height="'.$h.'"', $d[0]);
		
						$videos[] = $d[0];
						$redim_videos[] = $ret;
	                                }

					foreach ($videos as $video) {

						$thecontent = str_replace($video, $redim_videos[$i], $thecontent);
						$i++;
					}
				}
			}
			#fim trata snotr


			if (stripos($thecontent, "vids.myspace.com") > 0) {
				#trata MySpace
				$ret_object = preg_match_all('/object.*? width=["|\']([0-9]+)["|\'].*?height=["|\']([0-9]+)["|\'].*?/', $thecontent, $object_dim, PREG_SET_ORDER);
				$i=0;
				if ($ret_object != 0) { 
					foreach ($object_dim as $d) {
						if ($d[1] == 0 OR $d[2] == 0)
							break;
						$ratio = $d[1]/$d[2];
						$h = $w / $ratio;
						$h = (int) $h;
	
						$thecontent = str_replace("height='".$d[2]."'", "height='".$h."'", $thecontent);
						$thecontent = str_replace("width='".$d[1]."'", "width='".$w."'", $thecontent);
					}

				} else {
					$ret_object = preg_match_all('/object.*? height=["|\']([0-9]+)["|\'].*?width=["|\']([0-9]+)["|\'].*?/', $thecontent, $object_dim, PREG_SET_ORDER);
					$i=0;
					if ($ret_object != 0) { 
						if ($d[1] == 0 OR $d[2] == 0)
							break;
						$ratio = $d[1]/$d[2];
						$h = $w / $ratio;
						$h = (int) $h;
	
						$thecontent = str_replace("heigh='".$d[1]."'", "height='".$h."'", $thecontent);
						$thecontent = str_replace("width='".$d[2]."'", "width='".$w."'", $thecontent);
					}
				} #fim else
			} #fim trata myspace
			if (stripos($thecontent, "videolog.tv") > 0) {
				#trata VideoLog
				$ret_object = preg_match_all('/width=["|\']([0-9]+)["|\'].*?height=["|\']([0-9]+)["|\'].*?/', $thecontent, $object_dim, PREG_SET_ORDER);
				$i=0;
				if ($ret_object != 0) { 
					foreach ($object_dim as $d) {
						if ($d[1] == 0 OR $d[2] == 0)
							break;
						$ratio = $d[1]/$d[2];
						$h = $w / $ratio;
						$h = (int) $h;
	
						$thecontent = str_replace("height='".$d[2]."'", "height='".$h."'", $thecontent);
						$thecontent = str_replace("width='".$d[1]."'", "width='".$w."'", $thecontent);
						$thecontent = str_replace("height=".$d[2], "height=".$h, $thecontent);
						$thecontent = str_replace("width=".$d[1], "width=".$w, $thecontent);
					}

				} else {
					$ret_object = preg_match_all('/height=["|\']([0-9]+)["|\'].*?width=["|\']([0-9]+)["|\'].*?/', $thecontent, $object_dim, PREG_SET_ORDER);
					$i=0;
					if ($ret_object != 0) { 
						if ($d[1] == 0 OR $d[2] == 0)
							break;
						$ratio = $d[1]/$d[2];
						$h = $w / $ratio;
						$h = (int) $h;
	
						$thecontent = str_replace("heigh='".$d[1]."'", "height='".$h."'", $thecontent);
						$thecontent = str_replace("width='".$d[2]."'", "width='".$w."'", $thecontent);
						$thecontent = str_replace("heigh=".$d[1], "height=".$h, $thecontent);
						$thecontent = str_replace("width=".$d[2], "width=".$w, $thecontent);
					}
				} #fim else
			} #fim trata videolog
			if (stripos($thecontent, "cbsnews") > 0) {
				#trata CBSVIDEO
				$ret_object = preg_match_all('/playerWidth=([0-9]+).*?playerHeight=([0-9]+).*?/', $thecontent, $object_dim, PREG_SET_ORDER);
				$i=0;
				if ($ret_object != 0) { 
					foreach ($object_dim as $d) {
						if ($d[1] == 0 OR $d[2] == 0)
							break;
						$ratio = $d[1]/$d[2];
						$h = $w / $ratio;
						$h = (int) $h;
	
						$thecontent = str_replace("playerHeight='".$d[2]."'", "playerHeight='".$h."'", $thecontent);
						$thecontent = str_replace("playerWidth='".$d[1]."'", "playerWidth='".$w."'", $thecontent);
						$thecontent = str_replace("playerHeight=".$d[2], "playerHeight=".$h, $thecontent);
						$thecontent = str_replace("playerWidth=".$d[1], "playerWidth=".$w, $thecontent);
					}

				$ret_object = preg_match_all('/vidWidth=([0-9]+).*?vidHeight=([0-9]+).*?/', $thecontent, $object_dim, PREG_SET_ORDER);
				$i=0;
				if ($ret_object != 0) { 
					foreach ($object_dim as $d) {
						if ($d[1] == 0 OR $d[2] == 0)
							break;
						$ratio = $d[1]/$d[2];
						$h = $w / $ratio;
						$h = (int) $h;
	
						$thecontent = str_replace("vidHeight='".$d[2]."'", "vidHeight='".$h."'", $thecontent);
						$thecontent = str_replace("vidWidth='".$d[1]."'", "vidWidth='".$w."'", $thecontent);
						$thecontent = str_replace("vidHeight=".$d[2], "vidHeight=".$h, $thecontent);
						$thecontent = str_replace("vidWidth=".$d[1], "vidWidth=".$w, $thecontent);
					}
				}

				} else {
					$ret_object = preg_match_all('/height=["|\']([0-9]+)["|\'].*?width=["|\']([0-9]+)["|\'].*?/', $thecontent, $object_dim, PREG_SET_ORDER);
					$i=0;
					if ($ret_object != 0) { 
						if ($d[1] == 0 OR $d[2] == 0)
							break;
						$ratio = $d[1]/$d[2];
						$h = $w / $ratio;
						$h = (int) $h;
	
						$thecontent = str_replace("heigh='".$d[1]."'", "height='".$h."'", $thecontent);
						$thecontent = str_replace("width='".$d[2]."'", "width='".$w."'", $thecontent);
						$thecontent = str_replace("heigh=".$d[1], "height=".$h, $thecontent);
						$thecontent = str_replace("width=".$d[2], "width=".$w, $thecontent);
					}
				} #fim else
				
			} #fim trata videolog
		}
		return "<!-- Flash Video Resizer ".$fvr_options['versao']." : ".$w."pixel -->".$thecontent;
}

// ------------------------------------------------------------------
 // Add all your sections, fields and settings during admin_init
 // ------------------------------------------------------------------
 //
 
 function fvr_settings_api_init() {

	$fvr_width = get_option('fvr_width');

     // Add the section to reading settings so we can add our fields to it
     add_settings_section('fvr_setting_section', 'Flash Video Resizer '.$fvr_width['versao'], 'fvr_setting_section_callback_function', 'reading');
     
     // Add the field with the names and function to use for our new settings, put it in our new section
     add_settings_field('fvr_width', __("Largura", "fvr"), 'fvr_setting_callback_function', 'reading', 'fvr_setting_section');
     
     // Register our setting so that $_POST handling i s done for us and our callback function just hs to echo the <input>
     register_setting('reading','fvr_width');
 }// fvr_settings_api_init()
 
add_action('admin_init', 'fvr_settings_api_init');

function fvr_activate() {
	global $fvr_version;

	$fvr_options = get_option('fvr_width');

	if ($fvr_options['versao'] != $fvr_version) {
		$fvr_options['versao'] = $fvr_version;
		update_option('fvr_width', $fvr_options);
	}
}
 
function fvr_deactivate() {
	unregister_setting('reading','fvr_width');
#	delete_option('fvr_width');
}

register_activation_hook( __FILE__, 'fvr_activate' );
register_deactivation_hook( __FILE__, 'fvr_deactivate' );
  
 // ------------------------------------------------------------------
 // Settings section callback function
 // ------------------------------------------------------------------
 //
 // This function is needed if we added a new section. This function 
 // will be run at the start of our section
 //
 
 function fvr_setting_section_callback_function() {
	echo '<p>'.__("Defina o tamanho da largura do vídeo", "fvr").'</p>';
 }
 
 // ------------------------------------------------------------------
 // Callback function for our example setting
 // ------------------------------------------------------------------
 //
 // creates a checkbox true/false option. Other types are surely possible
 //
 
 function fvr_setting_callback_function() {
	global $fvr_version;
	$fvr_width = get_option('fvr_width');
	
	echo "<input name='fvr_width[versao]' type='hidden' value='".$fvr_version."'>";

echo "<h2>".__('Para computadores', 'fvr')."</h2>";

	echo "<input name='fvr_width[artigo]' id='fvr_width' type='text'
 value='".$fvr_width['artigo']."' class='code' size='5'/> <label for='fvr_width'>". __('Artigo', 'fvr')."</label><br />";

	echo "<input name='fvr_width[home]' id='fvr_width_h' type='text'
 value='".$fvr_width['home']."' class='code' size='5'/> <label for='fvr_width_h'>". __('Página Principal', 'fvr')."</label><br />";

	echo "<input name='fvr_width[arquivo]' id='fvr_width_a' type='text'
 value='".$fvr_width['arquivo']."' class='code' size='5'/> <label for='fvr_width_a'>". __('Arquivo (Página com multiplos artigos de Categorias, Tags, Autor e Data)', 'fvr')."</label><br />";

	echo "<input name='fvr_width[busca]' id='fvr_width_b' type='text'
 value='".$fvr_width['busca']."' class='code' size='5'/> <label for='fvr_width_b'>". __('Busca', 'fvr')."</label><br />";

	echo "<input name='fvr_width[pagina]' id='fvr_width_p' type='text'
 value='".$fvr_width['pagina']."' class='code' size='5'/> <label for='fvr_width_p'>". __('Página', 'fvr')."</label><br />";

echo "<h2>".__('Para celulares', 'fvr')."</h2>";

	$current_plugins = get_option('active_plugins');
	if (!in_array('wordpress-mobile-pack/wordpress-mobile-pack.php', $current_plugins)) {
		$fvr_width['mobile'] = 0;
		update_option('fvr_width',$fvr_width);
		$disabled = "disabled";
		echo "* ".__("Você precisa ter o plugin", 'fvr')." <a href=\"http://wordpress.org/extend/plugins/wordpress-mobile-pack/\">WordPress Mobile Pack</a> ".__("instalado e ativo para escolher tamanhos diferentes para os vídeos com o tema mobile.", 'fvr')."<br />";
	} else {
		$fvr_width['mobile'] = 1;
		update_option('fvr_width',$fvr_width);
		$disabled = "";
	}
	
	echo "<input ".$disabled." name='fvr_width[artigomobile]' id='fvr_width' type='text'

 value='".$fvr_width['artigomobile']."' class='code' size='5'/> <label for='fvr_width'>". __('Artigo ', 'fvr')."</label><br />";

	echo "<input ".$disabled." name='fvr_width[homemobile]' id='fvr_width_h' type='text'
 value='".$fvr_width['homemobile']."' class='code' size='5'/> <label for='fvr_width_h'>". __('Página Principal ', 'fvr')."</label><br />";

	echo "<input ".$disabled." name='fvr_width[arquivomobile]' id='fvr_width_a' type='text'
 value='".$fvr_width['arquivomobile']."' class='code' size='5'/> <label for='fvr_width_a'>". __('Arquivo (Página com multiplos artigos de Categorias, Tags, Autor e Data)', 'fvr')."</label><br />";

	echo "<input ".$disabled." name='fvr_width[buscamobile]' id='fvr_width_b' type='text'
 value='".$fvr_width['buscamobile']."' class='code' size='5'/> <label for='fvr_width_b'>". __('Busca ', 'fvr')."</label><br />";

	echo "<input ".$disabled." name='fvr_width[paginamobile]' id='fvr_width_p' type='text'
 value='".$fvr_width['paginamobile']."' class='code' size='5'/> <label for='fvr_width_p'>". __('Página ', 'fvr')."</label><br />";


 } // fvr_setting_callback_function()

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'fvr_plugin_actions' );

/**************************************************************************************************
 * Link para configuração do plugin na página de administração de plugins
 */
function fvr_plugin_actions($links){

	$settings_link = '<a href="options-reading.php">' . __('Settings') . '</a>';
	array_unshift( $links, $settings_link );
 
	return $links;
}

?>