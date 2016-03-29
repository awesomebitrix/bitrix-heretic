# Bitrix Heretic

Вспомогательная библиотека для работы с CMS Bitrix. Реинкарнация [Bitrix Adaper](https://github.com/dbfun/bitrix-adapter)

## Философия

Простые вспомогательные классы для решения различных задач.

Классы подчиняются стандарту наименования `BH{$ClassName}` и хранятся в файле `lib/BH{$ClassName}.php`.

## Подключение

  - Скопировать в `bitrix/php_interface/bitrix-heretic`
  - Подключить в `init.php`: `require_once('bitrix-heretic/index.php');`