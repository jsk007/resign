<?php

/*
	form.php
	2013/10/27- (c) yoya@awm.jp
*/

function get_formData() {
    $t = time();
    $resign_date = date("Y-m-d", $t + 14 * 24 * 3600);
    $commit_date = date("Y-m-d", $t);
    $form = array(
        array('種類', 'radio', 'type', 'notification', 'notification', '退職届', 'wish', '退職願'),
        array('理由', 'textarea', 'reason', 'このたび一身上の都合により、'),
        array('退職日', 'date', 'resign_date', $resign_date),
        array('提出日', 'date', 'commit_date', $commit_date),
        array('所属部署', 'textarea', 'mypart', '庶務二課'),
        array('自分の名前', 'text', 'myname', ''),
        array('会社名', 'text', 'campany', 'ダミー株式会社'),
        array('社長', 'text', 'president', '代表取締役 山田太郎様'),
        array('画像ID', 'text', 'image_id', ''),
        array('QRコード', 'radio', 'qrcode', 'no', 'yes', 'あり', 'no', 'なし'),
        array('申し送り', 'textarea', 'note', ''),
	);
    return $form;
}
