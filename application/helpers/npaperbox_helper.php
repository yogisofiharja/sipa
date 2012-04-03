<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function splitPhrase($str, $length = 51) {
    $arr = explode(' ', $str);
    $h = '';
    foreach ($arr as $word) {
        if (strlen($word) > $length) {
            for ($i = 0; $i <= (strlen($word) / $length); $i++) {
                $h .= substr($word, ($i * $length), $length) . ' ';
            }
        } else
            $h .= $word . ' ';
    }
    return str_replace(array("\r\n", "\n"), "<br />", $h);
}

function splitPhraseCmt($str, $length = 50) {
    $arr = explode(' ', $str);
    $h = '';
    foreach ($arr as $word) {
        if (strlen($word) > $length) {
            for ($i = 0; $i <= (strlen($word) / $length); $i++) {
                $h .= substr($word, ($i * $length), $length) . ' ';
            }
        } else
            $h .= $word . ' ';
    }
    return str_replace(array("\r\n", "\n"), "<br />", $h);
}

function cut_text($text, $numTerm) {
    $all = explode(" ", $text);
    $result = "";
    for ($i = 0; $i < count($all); $i++) {
        if ($i < $numTerm) {
            $result.=" " . $all[$i];
        }
        else
            break;
    }
    return $result;
}

function nicetime($date) {
    $CI = & get_instance();
    if (empty($date)) {
        return "<a style='text-decoration:none; font-weight:normal;'>No date provided</a>";
    }

    if ($CI->config->item('language') == 'english') {
        $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
        $bad = "Bad date";
        $ago = "ago";
        $forward = "from now";
        $plural = "s";
    } else {
        $periods = array("detik", "menit", "jam", "hari", "minggu", "bulan", "tahun", "dekade");
        $bad = "Tanggal salah";
        $ago = "yang lalu";
        $forward = "mendatang";
        $plural = "";
    }
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");

    $now = time();
    $unix_date = strtotime($date);

    // check validity of date
    if (empty($unix_date)) {
        return "<a style='text-decoration:none; font-weight:normal;'>$bad</a>";
    }

    // is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = $ago;
    } else {
        $difference = $unix_date - $now;
        $tense = $forward;
    }

    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    if ($difference != 1) {
        $periods[$j].= $plural;
    }

    return "$difference $periods[$j] {$tense}";
}

function get_url($text) {
    $pattern = preg_replace("`.*?((http|ftp)://[\w#$&+,\/:;=?@.-]+)*?`i", "$1", $text);
    return $pattern;
}

function resize_image($url) {
    list($width, $height) = getimagesize($url);
    $size = 150;
    $aspect_ratio = $height / $width;
    if ($width <= $size) {
        $new_w = $width;
        $new_h = $height;
    } else {
        $new_w = $size;
        $new_h = abs($new_w * $aspect_ratio);
    }
    return array($new_w, $new_h);
}

function analyze_media($val) {
    $ext = substr($val, -4, 4);
    if (in_array($ext, array('.jpg', '.png', '.gif'))) {
        $size = resize_image($val);
        $return = 'image^^^' . $size[0] . '^^^' . $size[1] . '^^^' . $val;
        return $return;
    } elseif (stristr($val, 'youtube.com')) {
        $id_youtube = get_id_youtube($val);
        $return = 'youtube^^^' . $id_youtube[1];
        return $return;
    } elseif (stristr($val, 'vimeo.com')) {
        $id_vimeo = get_id_vimeo($val);
        $return = 'vimeo^^^' . $id_vimeo[0];
        return $return;
    } elseif (stristr($val, 'scribd.com')) {
        $id_scribd = get_id_scribd($val);
        $return = 'scribd^^^' . $id_scribd[0];
        return $return;
    } elseif (stristr($val, 'docstoc.com')) {
        $id_scribd = get_id_docstoc($val);
        $return = 'docstoc^^^' . $id_scribd[0];
        return $return;
    } else {
        //Todo create dom html and specific the attachment like zip an rar
        return 'link^^^' . $val;
    }
}

function get_id_youtube($url) {
    $pattern = '/^[^v]+v.(.{11}).*/';
    preg_match($pattern, $url, $matches);
    return $matches;
}

function youtube($id) {
    return '<object width="100%" height="260"><param name="movie" value="http://www.youtube.com/v/' . $id . '&hl=en_US&feature=player_embedded&version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed wmode="transparent" src="http://www.youtube.com/v/' . $id . '&hl=en_US&feature=player_embedded&version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="100%" height="260"></embed></object>';
}

function vimeo($id) {
    return '<iframe width="370" height="250" src="http://player.vimeo.com/video/' . $id . '"></iframe>';
}

function scribd($id) {
    return '<iframe width="370" height="350" src="http://www.scribd.com/fullscreen/' . $id . '"></iframe>';
}

function docstoc($id) {
    return '<iframe width="370" height="350" src="http://www.docstoc.com/docs/document-preview.aspx?doc_id=' . $id . '"></iframe>';
}

function youtubeLarge($id) {
    return '<object width="100%" height="100%"><param name="movie" value="http://www.youtube.com/v/' . $id . '&hl=en_US&feature=player_embedded&version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed wmode="transparent" src="http://www.youtube.com/v/' . $id . '&hl=en_US&feature=player_embedded&version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="100%" height="100%"></embed></object>';
}

function vimeoLarge($id) {
    return '<iframe width="100%" height="100%" src="http://player.vimeo.com/video/' . $id . '"></iframe>';
}

function scribdLarge($id) {
    return '<iframe width="100%" height="100%" src="http://www.scribd.com/fullscreen/' . $id . '"></iframe>';
}

function docstocLarge($id) {
    return '<iframe width="100%" height="100%" src="http://www.docstoc.com/docs/document-preview.aspx?doc_id=' . $id . '"></iframe>';
}

function cleartext($text) {
    return htmlentities($text, ENT_NOQUOTES | ENT_IGNORE, "UTF-8");
}

function get_id_vimeo($url) {
    preg_match('/(\d+)/', $url, $matches);
    return $matches;
}

function get_id_scribd($url) {
    preg_match('/(\d+)/', $url, $matches);
    return $matches;
}

function get_id_docstoc($url) {
    preg_match('/(\d+)/', $url, $matches);
    return $matches;
}

function getName($id = null){
    if(!$id)
        $id = $this->session->userdata('user_id');
    
    $CI = & get_instance();
    $CI->load->model('ion_auth_model', 'ion');
    return $CI->ion->get_name($id);
}

?>
