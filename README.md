# Pure Air - Home Services Website 🏠✨

Hey there! This is a simple website I built for a home services company called "Pure Air". They help people with pest control, water tank cleaning, and AC maintenance - basically keeping your home clean and comfortable.

## What does this website do?

It's pretty straightforward:
- Shows the company's services (pest control, tank cleaning, AC maintenance)
- Has a blog where they share helpful tips
- Lets customers contact them through a simple form
- Has an admin area where the company can manage everything

## What I used to build it

- **Laravel 12** (PHP framework)
- **Bootstrap** for making it look nice
- **MySQL** for storing data
- Built it to work in Arabic since that's what the company needed

## Want to run it locally?

Sure! Here's how:

```bash
# Get the code
git clone [your-repo-url]
cd Pure_Air

# Install stuff
composer install
npm install

# Set up the database
cp .env.example .env
php artisan key:generate
php artisan migrate --seed

# Start it up
php artisan serve
```

Then go to `http://localhost:8000` and you should see it running!

## Admin access

If you want to see the admin panel:
- Go to `/admin`
- Email: `admin@pureair.sa`
- Password: `password`

## What's inside?

The main stuff:
- **Homepage** - Shows featured services and latest blog posts
- **Services page** - All the services they offer
- **Blog** - Articles about home maintenance tips
- **Contact** - Simple contact form
- **Admin panel** - Where they manage everything

## Cool features

- Works great on phones and tablets
- Has a simple contact form that saves inquiries
- Admin can easily add/edit services and blog posts
- Built-in image galleries for services
- SEO-friendly URLs (good for Google)

## That's it!

It's a straightforward Laravel project - nothing too fancy, just clean code that gets the job done. Perfect for a local home services business that wants to have a web presence.

Questions? Feel free to ask! 😊
