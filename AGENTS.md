# AGENTS.md

## Overview

This repository contains the Laravel-based version of the "Council Finance Counters" app — a financial transparency tool that replaces a legacy WordPress plugin. The app displays interactive counters and summaries of UK local authority finances, including:

- Spending
- Income
- Debt
- Reserves

The goal is to present this information in a clean, app-like interface, masking the underlying framework and offering users a modern experience.

---

## Primary Agent Responsibilities

AI and automation agents interacting with this repository should focus on the following tasks:

### 1. **Code Generation**
- Generate Laravel controllers, models, migrations, and views
- Follow Laravel 12+ best practices
- Respect PSR-12 coding standards

### 2. **Logic Migration**
- Refer to the original WordPress plugin repo at:  
  👉 **https://github.com/mikerouse/council-debt-counters**
- Reimplement legacy shortcode logic, admin tools, and frontend displays using Laravel equivalents
- Use Eloquent models and Blade components to replace procedural WordPress code

### 3. **Security and Access Control**
- Use Laravel Sanctum for API token authentication
- Use Spatie Laravel Permission for role-based access (Admin, Editor, Viewer)
- Avoid exposing endpoints without middleware protection

### 4. **Styling and Frontend**
- Use Tailwind CSS (if enabled) for modern, responsive UI
- Blade templating only; avoid Vue or React unless explicitly requested

---

## Reference to Legacy Code

For a full understanding of how this application evolved and to assist with accurate feature migration, agents should consult the legacy codebase:

🔗 **Original Plugin Repository**:  
https://github.com/mikerouse/council-debt-counters

This repository contains:
- Original WordPress plugin code
- Shortcode implementations
- Data formatting logic
- UI components and backend admin logic

Agents should use this as a reference only — all new implementations must follow Laravel conventions.

---

## Project Structure

.
├── app/
│ ├── Http/
│ │ └── Controllers/
│ ├── Models/
├── database/
│ └── migrations/
├── public/
│ └── build/
├── resources/
│ └── views/
├── routes/
│ └── web.php
├── .env.example
├── composer.json
└── README.md

## Constraints and Notes

- Do **not** expose underlying Laravel or PHP details to end users
- UI should appear framework-agnostic
- API endpoints must conform to REST principles
- Legacy plugin code is reference-only; do not reuse structurally

---

## Agent Use Examples

Agents can be asked to:
- Generate a controller: `php artisan make:controller DebtCounterController`
- Create a migration: `php artisan make:migration create_councils_table`
- Refactor a legacy shortcode into a Blade component
- Create unit tests using PHPUnit or Pest

---

## Maintainer

**Mike Rouse**  
GitHub: [@mikerouse](https://github.com/mikerouse)  
Original WordPress plugin author and Laravel migration lead  
Contact: [via GitHub](https://github.com/mikerouse)
