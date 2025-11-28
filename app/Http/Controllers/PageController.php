<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = [
            [
                'name' => 'Custom Web Development',
                'description' => 'High‑performance web applications tailored to your business.',
                'icon' => 'code',
            ],
            [
                'name' => 'UI/UX Design',
                'description' => 'Clean, modern and user‑focused interface design.',
                'icon' => 'sparkles',
            ],
            [
                'name' => 'Maintenance & Support',
                'description' => 'Ongoing care, updates and optimization for your site.',
                'icon' => 'shield-check',
            ],
        ];

        $projects = [
            [
                'title' => 'Minimalist Portfolio',
                'category' => 'Portfolio / Personal',
                'description' => 'A sleek one‑page portfolio for creatives.',
                'tags' => ['Laravel', 'Tailwind'],
            ],
            [
                'title' => 'Agency Landing Page',
                'category' => 'Agency',
                'description' => 'Conversion‑focused landing page for digital agencies.',
                'tags' => ['Landing', 'Responsive'],
            ],
            [
                'title' => 'SaaS Marketing Site',
                'category' => 'SaaS',
                'description' => 'Marketing website designed to grow your subscription‑based product.',
                'tags' => ['SaaS', 'Marketing'],
            ],
        ];

        $posts = [
            [
                'title' => 'Getting Started with Laravel for Modern Web Apps',
                'excerpt' => 'Laravel gives you a beautiful starting point for building anything from small sites to full platforms...',
                'read_time' => '5 min read',
            ],
            [
                'title' => 'Designing Clean, Minimal Interfaces',
                'excerpt' => 'Good design is as little design as possible. Here are principles you can apply today...',
                'read_time' => '3 min read',
            ],
        ];

        return view('home', compact('services', 'projects', 'posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function portfolio()
    {
        $projects = [
            [
                'title' => 'Minimalist Portfolio',
                'category' => 'Portfolio / Personal',
                'description' => 'Showcase skills and projects with a clean, single‑page layout.',
                'tags' => ['Laravel', 'Tailwind', 'Responsive'],
            ],
            [
                'title' => 'Creative Agency Website',
                'category' => 'Agency',
                'description' => 'Multi‑section agency website with hero, services, team, and contact.',
                'tags' => ['Branding', 'Design'],
            ],
            [
                'title' => 'SaaS Landing Page',
                'category' => 'SaaS',
                'description' => 'Marketing site for SaaS products with pricing and feature sections.',
                'tags' => ['SaaS', 'Marketing'],
            ],
            [
                'title' => 'Blog Platform UI',
                'category' => 'Blog',
                'description' => 'Clean blog layout for long‑form content creators.',
                'tags' => ['Content', 'SEO'],
            ],
        ];

        return view('portfolio', compact('projects'));
    }

    public function blog()
    {
        $posts = [
            [
                'title' => 'Why Laravel is Great for Modern Websites',
                'excerpt' => 'From routing to Blade templates, Laravel makes development enjoyable...',
                'date' => '2025-01-10',
            ],
            [
                'title' => 'Tailwind Tips for Beautiful Layouts',
                'excerpt' => 'Utility‑first doesn't have to mean ugly. Here's how to keep things elegant...',
                'date' => '2025-01-18',
            ],
            [
                'title' => 'Making Your Site Feel Fast',
                'excerpt' => 'Perceived performance is as important as real performance. Let's talk about it...',
                'date' => '2025-02-02',
            ],
        ];

        return view('blog.index', compact('posts'));
    }

    public function contact()
    {
        return view('contact');
    }
}
