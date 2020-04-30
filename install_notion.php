<?php
    include ('engine/api/api.class.php');
    $dle_api->install_admin_module ( 'mymod_NotiON', 'Модуль NotiON', 'Модуль списка последних обновлений/редактирований новостей', 'xfset.png', '1' );
    echo !empty(install_admin_module) ? 'Все хорошо, установилось' : 'Что-то не так...(или просто кривая установка)';
?>