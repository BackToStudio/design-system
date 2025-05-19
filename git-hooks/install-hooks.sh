#!/bin/sh

HOOKS_DIR=".git/hooks"
CUSTOM_HOOKS_DIR="git-hooks"

for hook in $CUSTOM_HOOKS_DIR/*; do
  hook_name=$(basename "$hook")
  cp "$hook" "$HOOKS_DIR/$hook_name"
  chmod +x "$HOOKS_DIR/$hook_name"
done

echo "Hooks installés dans $HOOKS_DIR !" 