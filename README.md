## Brand New Story task

### Requirements
- Git
- Composer

### Installation
- Clone the project
    - `git clone `
- Copy env file
    - `cp .env.example .env`
- Install project dependencies
    - `composer install`
- Install sail
    - `./vendor/bin/sail up`
- Run migration
    - `./vendor/bin/sail artisan migrate`
- Seed DB
    - `./vendor/bin/sail artisan db:seed`
- API
  - Users: `http://localhost:8001/api/users`
- Run tests
    - `./vendor/bin/sail test`
    
