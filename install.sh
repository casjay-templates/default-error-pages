#!/usr/bin/env sh
# shellcheck shell=sh
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
##@Version           :  202308261653-git
# @@Author           :  Jason Hempstead
# @@Contact          :  jason@casjaysdev.pro
# @@License          :  WTFPL
# @@ReadME           :  install.sh --help
# @@Copyright        :  Copyright: (c) 2023 Jason Hempstead, Casjays Developments
# @@Created          :  Saturday, Aug 26, 2023 16:53 EDT
# @@File             :  install.sh
# @@Description      :  Default web server error pages
# @@Changelog        :  New script
# @@TODO             :  Better documentation
# @@Other            :
# @@Resource         :
# @@Terminal App     :  no
# @@sudo/root        :  no
# @@Template         :  shell/sh
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# shellcheck disable=SC2016
# shellcheck disable=SC2031
# shellcheck disable=SC2120
# shellcheck disable=SC2155
# shellcheck disable=SC2199
# shellcheck disable=SC2317
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
APPNAME="$(basename "$0" 2>/dev/null)"
VERSION="202308261653-git"
RUN_USER="$USER"
SET_UID="$(id -u)"
SCRIPT_SRC_DIR="$(cd "$(dirname "$0")" && pwd)"
DEFAULT_ERROR_PAGES_CWD="$(realpath "$PWD")"
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# colorization
if [ "$SHOW_RAW" = "true" ]; then
  __printf_color() { printf '%b' "$1\n" | tr -d '\t' | sed '/^%b$/d;s,\x1B\[ 0-9;]*[a-zA-Z],,g'; }
else
  __printf_color() { { [ -z "$2" ] || DEFAULT_COLOR=$2; } && printf "%b" "$(tput setaf "$DEFAULT_COLOR" 2>/dev/null)" "$1\n" "$(tput sgr0 2>/dev/null)"; }
fi
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# check for command
__cmd_exists() { which $1 >/dev/null 2>&1 || return 1; }
__function_exists() { builtin type $1 >/dev/null 2>&1 || return 1; }
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# custom functions

# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# Define variables
DEFAULT_COLOR="254"
DEFAULT_ERROR_PAGES_EXIT_STATUS=0
WEB_SERVER_ERROR_DIR="/usr/share/httpd/error"
SOURCE_GIT_REPO="https://github.com/casjay-templates/default-error-pages"
[ -n "$TMP" ] && [ -d "$TMP" ] && TMP_DIR="$TMP/default_error_pages_$$" || TMP_DIR="/tmp/default_error_pages_$$"
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# Main application
if [ -d "$WEB_SERVER_ERROR_DIR/.git" ]; then
  rm -Rf "$WEB_SERVER_ERROR_DIR"
fi
echo "Installing to $WEB_SERVER_ERROR_DIR"
[ "$USER" = "root" ] && runas_user="" || runas_user="sudo"
$runas_user mkdir -p "$WEB_SERVER_ERROR_DIR"
$runas_user git clone -q "$SOURCE_GIT_REPO" "$TMP_DIR"
$runas_user cp -Rf "$TMP_DIR/." "$WEB_SERVER_ERROR_DIR"
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# End application
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# lets exit with code
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
exit $DEFAULT_ERROR_PAGES_EXIT_STATUS
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# ex: ts=2 sw=2 et filetype=sh
