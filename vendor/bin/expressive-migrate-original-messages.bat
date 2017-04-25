@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../zendframework/zend-expressive-tooling/bin/expressive-migrate-original-messages
php "%BIN_TARGET%" %*
