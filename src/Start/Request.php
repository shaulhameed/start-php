<?php
class Start_Request {
    public static function make_request($url, $data = array()) {
        return Start_Net_Stream::make_request($url, $data);
        /* return Start_Net_Curl::make_request($url, $data); */
    }
}
?>
