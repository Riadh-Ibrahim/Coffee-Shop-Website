#!/usr/bin/env bash
set -e
cd "$(dirname "$0")"

PHP_BIN="$(command -v php || true)"
if [[ -z "$PHP_BIN" ]]; then
  echo "PHP is not installed or not on PATH. Install PHP 8+ to run this project." >&2
  exit 1
fi

if ! "$PHP_BIN" -m 2>/dev/null | grep -qE '^PDO$'; then
  echo "PHP PDO extension is not loaded in $PHP_BIN. Install and enable PDO before running." >&2
  exit 1
fi

try_pdo_mysql() {
  local bin="$1"
  if "$bin" -m 2>/dev/null | grep -qE '^pdo_mysql$'; then
    echo loaded
    return 0
  fi
  if "$bin" -d extension=pdo_mysql -m 2>/dev/null | grep -qE '^pdo_mysql$'; then
    echo force
    return 0
  fi
  return 1
}

LOAD_MODE=0
if try_pdo_mysql "$PHP_BIN"; then
  LOAD_MODE=$(try_pdo_mysql "$PHP_BIN")
fi

if [[ "$LOAD_MODE" -eq 0 ]]; then
  for candidate in /usr/bin/php /usr/local/bin/php /usr/bin/php8.3 /usr/bin/php8.0 /opt/php/*/bin/php; do
    if [[ -x "$candidate" ]]; then
      if try_pdo_mysql "$candidate"; then
        PHP_BIN="$candidate"
        LOAD_MODE=$(try_pdo_mysql "$candidate")
        break
      fi
    fi
  done
fi

if [[ "$LOAD_MODE" -eq 0 ]]; then
  echo "PHP pdo_mysql extension is not loaded. Install and enable php-mysql before running." >&2
  echo "For Ubuntu 24.04, try: sudo apt install php-mysql" >&2
  echo "Or install the matching version: sudo apt install php$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')-mysql" >&2
  echo "If your php command points to a custom build, use the system PHP binary or update alternatives." >&2
  exit 1
fi

HOST="127.0.0.1"
PORT="${1:-8000}"

if [[ -n "$PORT" && ! "$PORT" =~ ^[0-9]+$ ]]; then
  echo "Invalid port: $PORT" >&2
  exit 1
fi

echo "Starting Coffee Shop Website on http://${HOST}:${PORT} using PHP binary: $PHP_BIN"
echo "Use Ctrl+C to stop."
if [[ "$LOAD_MODE" == "force" ]]; then
  "$PHP_BIN" -d extension=pdo_mysql -S ${HOST}:${PORT}
else
  "$PHP_BIN" -S ${HOST}:${PORT}
fi
