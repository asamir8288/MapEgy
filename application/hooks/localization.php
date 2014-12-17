<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of localization
 *
 * @author Ahmed Samir
 */
Class Localization {

    function pick_language() {
        $CI = & get_instance();

        $langs = $CI->config->item('lang_list');
        $lang = '';

        // Lang set in URL via ?lang=something
        if (!empty($_GET['lang'])) {
            $lang = substr($_GET['lang'], 0, 5);
        }
        // Lang has already been set and is stored in a session
        else if ($CI->session->userdata('lang_code')) {
            $lang = $CI->session->userdata('lang_code');

            // Lang has detected from the browser
        } elseif ($_SERVER["HTTP_ACCEPT_LANGUAGE"]) {
            $user_pref_lang_str = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
            $user_pref_langs = explode(',', $user_pref_lang_str);

            $lang = strtolower($user_pref_langs[0]);
            if ($lang == 'en-us') {
                $lang = 'en-us';
            } else {
                $lang = 'de-ch';
            }
        }

        // If no language has been worked out - or it is not supported - use the default
        if (empty($lang) or ! in_array($lang, array_keys($CI->config->item('lang_list')))) {
            $lang = $CI->config->item('language');
        }
        $CI->config->set_item('language', $lang);
        if (is_file(APPPATH . "language/$lang/" . "{$CI->router->class}_lang.php")) {
            $CI->lang->load($CI->router->class, $lang);
        }
        // load global language file
        $CI->lang->load('global', $lang);


        $CI->session->set_userdata('lang_name', $langs[$lang]);
        $CI->session->set_userdata('lang_code', $lang);
    }

}

?>
