<?php

function adminer_object() {

    foreach (glob(__DIR__ . '/../plugins/*.php') as $filename) {
        include_once $filename;
    }

    $plugins = [
        new AdminerLoginTable(getenv("ADMINER_EDITOR_DB")),
        new AdminerTinymce("tinymce/tinymce.min.js")
    ];

    class AdminerCustom extends AdminerPlugin {

        function credentials() {
            // server, username and password for connecting to database
            return array(getenv("ADMINER_EDITOR_SERVER"), getenv("ADMINER_EDITOR_USERNAME"), getenv("ADMINER_EDITOR_PASSWORD"));
        }

        function database() {
            // database name, will be escaped by Adminer
            return getenv("ADMINER_EDITOR_DB");
        }

        function tableName($tableStatus) {
            // tables without comments would return empty string and will be ignored by Adminer
            return h($tableStatus["Comment"]);
        }

        function fieldName($field, $order = 0) {
            // only columns with comments will be displayed and only the first five in select
            return (!preg_match('~_(md5|sha1)$~', $field["field"]) ? h($field["comment"]) : "");
        }
    }

    return new AdminerCustom($plugins);
}

include __DIR__ . "/../editor-4.3.1-mysql-cs.php";
