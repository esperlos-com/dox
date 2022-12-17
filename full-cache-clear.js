const { execSync } = require('child_process');


execSync('php artisan cache:clear', { encoding: 'utf-8' });
execSync('php artisan route:clear', { encoding: 'utf-8' });
execSync('php artisan clear-compiled', { encoding: 'utf-8' });
execSync('php artisan config:cache', { encoding: 'utf-8' });

