#!/usr/bin/env bash
# Sube los cambios a GitHub y actualiza yoselineca.com en Hostinger.
set -e
cd "$(dirname "$0")"
git push origin main
ssh hostinger 'cd ~/domains/yoselineca.com/public_html && git pull --ff-only origin main'
echo "✔ yoselineca.com actualizado"
