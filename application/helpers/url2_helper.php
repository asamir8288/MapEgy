<?php

function is_ajax() {
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest") {
        return true;
    }

    return false;
}

function pre_print($obj, $with_exit = true) {
    echo "<pre>";
    print_r($obj);
    if ($with_exit)
        exit;
}

function print_url_info(array $data, $home = false, $prefix = '', $with_page_title = false) {
    if (!$home) {
        ?>
        <li>
            <label><?php echo lang('url_routed') ?>:</label>
            <input type="text" class="txtbox" name="<?php echo $prefix ?>url_routed" value="<?php echo (isset($data['u_url_routed'])) ? $data['u_url_routed'] : ''; ?>" />
            <span class="star">*</span>
            <?php echo form_error("{$prefix}url_routed"); ?>
        </li>
    <?php } ?>
    <li>
        <label><?php echo lang('url_meta_keywords') ?>:</label>
        <input type="text" class="txtbox" name="<?php echo $prefix ?>url_meta_keywords" value="<?php echo (isset($data['u_url_meta_keywords'])) ? $data['u_url_meta_keywords'] : ''; ?>" />
    <!--        <span class="star">*</span>-->
        <?php echo form_error("{$prefix}url_meta_keywords"); ?>
    </li>
    <li>
        <label><?php echo lang('url_meta_title') ?>:</label>
        <input type="text" class="txtbox" name="<?php echo $prefix ?>url_meta_title" value="<?php echo (isset($data['u_url_meta_title'])) ? $data['u_url_meta_title'] : ''; ?>" />
    <!--        <span class="star">*</span>-->
        <?php echo form_error("{$prefix}url_meta_title"); ?>
    </li>
    <?php if ($with_page_title) { ?>
        <li>
            <label><?php echo lang('url_page_title') ?>:</label>
            <input type="text" class="txtbox" name="<?php echo $prefix ?>url_page_title" value="<?php echo (isset($data['u_url_page_title'])) ? $data['u_url_page_title'] : ''; ?>" />
            <?php echo form_error("{$prefix}url_page_title"); ?>
        </li>
    <?php } ?>
    <li>
        <label><?php echo lang('url_meta_description') ?>:</label>
        <textarea class="txtarea" name="<?php echo $prefix ?>url_meta_description" ><?php echo (isset($data['u_url_meta_description'])) ? $data['u_url_meta_description'] : ''; ?></textarea>
    <!--        <span class="star">*</span>-->
        <?php echo form_error("{$prefix}url_meta_description"); ?>
    </li>
    <?php
}

function save_url($url_original, $lang_id = 1, $home = false, $prefix = '') {
    $url = UrlsTable::getOneByOriginalURL($url_original, $lang_id);
    if (!$url) {
        $url = new Urls();
        $url->lang_id = $lang_id;
        $url->url_original = $url_original;
        $url->url_routed = $_POST[$prefix . 'url_routed'];
        $url->guid_id = $_POST[$prefix . 'guide_id'];
        $url->url_meta_title = $_POST[$prefix . 'url_meta_title'];
        $url->url_meta_keywords = $_POST[$prefix . 'url_meta_keywords'];
        $url->url_meta_description = $_POST[$prefix . 'url_meta_description'];
        $url->save();
    } else {
        Doctrine_Query::create()
                ->update('Urls url')
                ->set('url.url_routed', '?', $_POST[$prefix . 'url_routed'])
                ->set('url.guid_id', '?', $_POST[$prefix . 'guide_id'])
                ->set('url.url_meta_title', '?', $_POST[$prefix . 'url_meta_title'])
                ->set('url.url_meta_keywords', '?', $_POST[$prefix . 'url_meta_keywords'])
                ->set('url.url_meta_description', '?', $_POST[$prefix . 'url_meta_description'])
                ->where('url.url_original =?', $url_original)
                ->andWhere('url.lang_id =?', $lang_id)
                ->execute();
    }

    $urls = UrlsTable::getInstance()->findAll(Doctrine_Core::HYDRATE_ARRAY);
    if ($urls) {
        $php_code = "<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
";
        foreach ($urls as $url) {
            $php_code.=sprintf(ROUTS_ITEM_TEMPLATE, $url['url_routed'], $url['url_original']) . '
';
            if ($url['url_original'] == 'news_section/index') {
                $php_code.=sprintf(ROUTS_ITEM_TEMPLATE, $url['url_routed'] . '/(:any)', 'news_section/blog_details/$1') . '
';
            }
            if ($url['lang_id'] == 2) {
                $php_code.=sprintf(ROUTS_ITEM_TEMPLATE1, $url['url_routed'], $url['url_original']) . '
';
                if ($url['url_original'] == 'news_section/index') {
                    $php_code.=sprintf(ROUTS_ITEM_TEMPLATE1, $url['url_routed'] . '/(:any)', 'news_section/blog_details/$1') . '
';
                }
            }
        }
    }
    file_put_contents('application/config/auto_routes.php', $php_code);
}

function delete_url($url_original) {
    Doctrine_Query::create()
            ->delete()
            ->from('Urls')
            ->where('url_original=', $url_original)
            ->execute();
}

function populate_url($url_original, $prefix = '') {
    $url = UrlsTable::getInstance()->findOneBy('url_original', $url_original);
    if ($url) {
        $_POST[$prefix . 'url_routed'] = $url->url_routed;
        $_POST[$prefix . 'url_meta_title'] = $url->url_meta_title;
        $_POST[$prefix . 'url_page_title'] = $url->url_page_title;
        $_POST[$prefix . 'url_meta_keywords'] = $url->url_meta_keywords;
        $_POST[$prefix . 'url_meta_description'] = $url->url_meta_description;
    } else {
        $_POST[$prefix . 'url_routed'] = $url_original;
        $url = new Urls();
        $url->url_routed = $url_original;
        $url->url_original = $url_original;
        $url->save();
    }
}

function validte_url($url_original = '', $prefix = '') {
    $CI = get_instance();

    if (!$url_original) {
        $CI->form_validation->set_rules("{$prefix}url_routed", "", "required|unique[UrlsTable,checkUrl]|xss_clean");
    } else {
        $CI->form_validation->set_rules("{$prefix}url_routed", "", "required|unique[UrlsTable,checkUrl,url_routed,$url_original]|xss_clean");
    }

    $CI->form_validation->set_rules("{$prefix}url_meta_title", "", "xss_clean");
    $CI->form_validation->set_rules("{$prefix}url_page_title", "", "xss_clean");
    $CI->form_validation->set_rules("{$prefix}url_meta_keywords", "", "xss_clean");
    $CI->form_validation->set_rules("{$prefix}url_meta_description", "", "xss_clean");
}

function get_routed_url($url_original) {
    global $route;
    $url_routed = array_search($url_original, $route);
    if ($url_routed) {
        return $url_routed;
    }

    return $url_original;
}

function get_routed_url1($url_original) {
    global $route1;
    $url_routed = array_search($url_original, $route1);
    if ($url_routed) {
        return $url_routed;
    }

    return $url_original;
}

function print_meta_data($lang_id = 1) {
    global $route;
    $CI = get_instance();
    $uri_string = '';
//    pre_print($route[$CI->uri->uri_string]);exit;
    if (isset($route[$CI->uri->uri_string])) {
        $uri_string = $CI->uri->uri_string;
    } elseif (isset($route[trim($CI->uri->uri_string, '/')])) {
        $uri_string = trim($CI->uri->uri_string, '/');
    } elseif (isset($route[$CI->uri->uri_string . '/'])) {
        $uri_string = $CI->uri->uri_string . '/';
    }
//    echo var_dump(implode('/', $CI->uri->rsegments));exit;
    if ($uri_string || implode('/', $CI->uri->rsegments) == 'home/index') {
        if ($uri_string) {
            $url = UrlsTable::getOneByOriginalURL($route[$uri_string], $lang_id);
        } else {
            $url = UrlsTable::getOneByOriginalURL($route[$uri_string], $lang_id);
        }
        ?>
        <meta name="description" content="<?php echo $url['u_url_meta_description'] ?>" />
        <meta name="keywords" content="<?php echo $url['u_url_meta_keywords'] ?>" />
        <meta name="title" content="<?php echo $url['u_url_meta_title'] ?>" />
        <? } else {
        ?>
        <!--<title><?php echo $page_title ?></title>-->
        <?php
    }
}

function get_static_url($uri = '') {
    $CI = get_instance();
    return $CI->config->item('base_static_url') . trim($uri, '/');
}

function getOppositeLang($lang_id = 1) {
    if ($lang_id == 1) {
        $lang_id = 2;
    } else {
        $lang_id = 1;
    }
    global $route;
    $CI = get_instance();
    $uri_string = '';
    $url = '';
    if (isset($route[$CI->uri->uri_string])) {
        $uri_string = $CI->uri->uri_string;
    } elseif (isset($route[trim($CI->uri->uri_string, '/')])) {
        $uri_string = trim($CI->uri->uri_string, '/');
    } elseif (isset($route[$CI->uri->uri_string . '/'])) {
        $uri_string = $CI->uri->uri_string . '/';
    }
    if ($uri_string || implode('/', $CI->uri->rsegments) == 'home/index') {
        if ($uri_string) {
            $url = UrlsTable::getOneByOriginalURL($route[$uri_string], $lang_id);
        } else {
            $url = UrlsTable::getOneByOriginalURL($route[$uri_string], $lang_id);
        }
    }
    if ($url) {
        return $url['u_url_routed'];
    } else {
        return '';
    }
}
?>
