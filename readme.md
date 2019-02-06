# Laravel Leeds #1 - Scout & Algolia Demo

This contains a the full codebase of the Laravel Leeds #1 talk on building advanced searches with Algolia.

### Setup
1. Copy the `.env.example` and name it `.env`.
2. Configure your `.env` to connect into your own database
3. Run the migrations (`php artisan migrate`)
4. Seed the database with fake data using: `php artisan db:seed`

### Configuration

1. Create an account with Algolia (https://www.algolia.com)
2. Replace the below `.env` variables with your own API keys.
  ```bash
  ALGOLIA_APP_ID=
  ALGOLIA_PUBLIC=
  ALGOLIA_SECRET=
  ```

### Indexing
To index the possible models use:
```bash
php artisan scout:import
```

Specific model indexing can be doing via:
```bash
php artisan scout:import "App\Location"
```

### Demo Commands
1. Update the manager record: `php artisan demo:manager-update`