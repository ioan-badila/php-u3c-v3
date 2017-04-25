@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../zendframework/zend-expressive-tooling/bin/expressive-pipeline-from-config
php "%BIN_TARGET%" %*
