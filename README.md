# AI/ML Engineer PHP Portfolio

A beautiful, animated portfolio website built in PHP.

## Project Structure

```
php-portfolio/
├── index.php              ← Main page
├── includes/
│   ├── data.php           ← ✏️  ALL your content lives here
│   ├── header.php         ← HTML head + nav
│   └── footer.php         ← Scripts + closing tags
└── assets/
    ├── css/
    │   └── style.css      ← All styles
    └── js/
        └── main.js        ← Particles, animations, typewriter
```

## Quick Start

### Option 1 — XAMPP / WAMP
1. Copy `php-portfolio/` into your `htdocs` (XAMPP) or `www` (WAMP) folder
2. Start Apache
3. Visit `http://localhost/php-portfolio/`

### Option 2 — PHP Built-in Server
```bash
cd php-portfolio
php -S localhost:8000
```
Then open `http://localhost:8000`

## Customisation

Open `includes/data.php` and edit:

| Field | What it does |
|---|---|
| `name` | Your full name |
| `title` | Main job title |
| `tagline` | Hero description |
| `email` | Contact email |
| `github` | GitHub URL |
| `linkedin` | LinkedIn URL |
| `twitter` | Twitter/X URL |
| `resume` | Link to your CV |
| `photo` | Path to your photo e.g. `assets/img/me.jpg` |
| `stats` | Numbers in the stats bar |
| `about_cards` | 4 specialty cards |
| `skills` | Skill bars with % |
| `projects` | Project cards |
| `experience` | Timeline entries |

## Adding Your Photo
1. Place your photo in `assets/img/photo.jpg`
2. In `data.php` set: `'photo' => 'assets/img/photo.jpg'`

## Requirements
- PHP 7.4 or higher
- Any web server (Apache, Nginx) or PHP built-in server
