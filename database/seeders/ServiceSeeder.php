<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; // Import Str facade

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Basic Website',
                'type' => 'Static Website',
                'features' => 'Responsive design, up to 5 pages, SEO-ready, basic contact form',
                'ideal_for' => 'Bloggers, portfolios, showcase websites',
                'starting_price' => 100.00,
                'title' => 'Affordable Basic Website Design, Perfect for Blogs and Portfolios',
                'description' => 'A basic website package for personal branding or a small business. Includes responsive design, up to 5 pages, and SEO-ready setup.',
                'meta_title' => 'Affordable Basic Website Design | Ideal for Blogs and Portfolios',
                'meta_description' => 'Get a simple, effective website with our Basic Website package. Perfect for blogs, portfolios, and personal projects.',
                'slug' => Str::slug('Basic Website'),
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18M12 3v18"></path></svg>', // Example SVG for a simple plus icon
            ],
            [
                'name' => 'Professional Website',
                'type' => 'Dynamic Website',
                'features' => 'Fully responsive, CMS (WordPress), blog functionality, advanced SEO tools',
                'ideal_for' => 'Startups, small businesses, service providers',
                'starting_price' => 300.00,
                'title' => 'Professional Website Design – Scalable and Dynamic Solutions',
                'description' => 'Get a fully responsive and scalable website with CMS integration (WordPress), ideal for startups and small businesses looking to establish a strong online presence.',
                'meta_title' => 'Professional Website Design | Scalable & Dynamic Solutions for Startups and Businesses',
                'meta_description' => 'Build your business with a professional, dynamic website. Includes WordPress CMS, blog functionality, and advanced SEO.',
                'slug' => Str::slug('Professional Website'),
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v18H3z"></path></svg>', // Example SVG for a square icon (representing a box or structure)
            ],
            [
                'name' => 'E-commerce Website',
                'type' => 'Advanced Website',
                'features' => 'Custom storefront, payment gateways, inventory management, product filtering, user accounts',
                'ideal_for' => 'Retailers, online stores, product-based businesses',
                'starting_price' => 500.00,
                'title' => 'Custom E-commerce Website Design – Sell Your Products Online',
                'description' => 'Create an online store with custom features, payment integration, inventory management, and user accounts. Perfect for businesses looking to sell products online.',
                'meta_title' => 'E-commerce Website Design | Custom Stores for Retailers & Online Shops',
                'meta_description' => 'Build your online store with our custom e-commerce solution. Payment integration, product management, and scalable features.',
                'slug' => Str::slug('E-commerce Website'),
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 6h2a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h2"></path><path d="M8 6V4a4 4 0 0 1 8 0v2"></path></svg>', // Example SVG for a shopping cart icon
            ],
            [
                'name' => 'Custom Website Solution',
                'type' => 'Advanced Website',
                'features' => 'Fully customized features, API integrations, user authentication, advanced data handling',
                'ideal_for' => 'Enterprises, SaaS platforms, complex web apps',
                'starting_price' => 800.00,
                'title' => 'Tailored Website Solutions – Advanced Features for Complex Projects',
                'description' => 'Custom websites with unique features, including API integrations, advanced data handling, and full customization. Ideal for enterprises and SaaS platforms.',
                'meta_title' => 'Custom Website Solutions | Advanced Features and Full Responsiveness for Complex Projects',
                'meta_description' => 'Create custom websites with advanced features. Perfect for SaaS platforms, enterprises, and complex web applications.',
                'slug' => Str::slug('Custom Website Solution'),
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M2 12h20"></path></svg>', // Example SVG for a plus icon (representing addition/customization)
            ],
            [
                'name' => 'Flyer Design',
                'type' => 'Graphic Design',
                'features' => 'Custom layouts, print-ready formats, digital and physical versions',
                'ideal_for' => 'Event organizers, businesses, marketing campaigns',
                'starting_price' => 40.00,
                'title' => 'Custom Flyer Design – Perfect for Events & Promotions',
                'description' => 'Custom-designed flyers for events, promotions, and marketing campaigns. Ready for print and digital distribution.',
                'meta_title' => 'Custom Flyer Design | Promotional Flyers for Events and Marketing',
                'meta_description' => 'Get professional flyer design for your next event or campaign. Custom layouts and print-ready formats.',
                'slug' => Str::slug('Flyer Design'),
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z"></path></svg>', // Example SVG for a flyer icon
            ],
            [
                'name' => 'Business Card Design',
                'type' => 'Graphic Design',
                'features' => 'Professional designs, custom layouts, print-ready formats',
                'ideal_for' => 'Entrepreneurs, professionals, networking',
                'starting_price' => 30.00,
                'title' => 'Professional Business Card Design – Make a Lasting Impression',
                'description' => 'Custom business card designs that represent your brand. Ready for printing with professional, clean layouts.',
                'meta_title' => 'Business Card Design | Professional Custom Business Cards for Networking',
                'meta_description' => 'Create the perfect business card to stand out. Professional designs with custom layouts for entrepreneurs and professionals.',
                'slug' => Str::slug('Business Card Design'),
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z"></path></svg>', // Example SVG for a card icon
            ],
        ]);
    }
}
