# Demo site for Invisible Ink
### Requirement
- Node >= 20
- PHP >= 8.0
- wp-cli

### Build asset
Go to theme directory (/wp-content/themes/invisible-ink-demo) and run following commands
```
yarn && yarn build
composer install --no-dev  --optimize-autoloader
wp acorn optimize
```
