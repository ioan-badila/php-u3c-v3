@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../zendframework/zend-expressive-tooling/bin/expressive-scan-for-error-middleware
php "%BIN_TARGET%" %*
