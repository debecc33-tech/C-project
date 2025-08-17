<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Display the projects index page
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $residentialProjects = [
            [
                'id' => 1,
                'title' => 'Palm East',
                'slug' => 'palm-east',
                'description' => 'Palm East is a high-end residential development located in the heart of New Cairo, spanning an area of 12 acres. It is strategically located near 90th North and Mohamed Naguib axis, close to the American University in Cairo, Waterway, Al-Zayed Club and 5 flourishing malls.',
                'image' => asset('assets/images/projects/5.jpeg'),
                'type' => 'residential',
                'location' => 'New Cairo',
                'area' => '12 acres'
            ],
            [
                'id' => 2,
                'title' => 'Palm Capital',
                'slug' => 'palm-capital',
                'description' => 'Palm Capital is a residential compound spanning 18 acres, distinguished by its natural palm tree surroundings that provide both privacy and aesthetic appeal. The compound comprises twenty-four modern buildings, each featuring spacious apartments across four floors (Ground + 3).',
                'image' => asset('assets/images/projects/1.jpg'),
                'type' => 'residential',
                'location' => 'Al Shorouk City',
                'area' => '18 acres'
            ]
        ];

        $commercialProjects = [
            [
                'id' => 3,
                'title' => 'Palm Square',
                'slug' => 'palm-square',
                'description' => 'Palm Square is an expansive and uniquely designed commercial destination, occupying an impressive 10,000m² across ground and two floors. It is located on Suez Road, opposite Open Air Madinaty Mall, near La Vista Compound, universities, and Shorouk City.',
                'image' => asset('assets/images/projects/4.jpg'),
                'type' => 'commercial',
                'location' => 'Al Shorouk City',
                'area' => '10,000m²'
            ],
            [
                'id' => 4,
                'title' => 'Palm Hub',
                'slug' => 'palm-hub',
                'description' => 'Palm Hub is an expansive commercial destination spanning an impressive 8,000 m². Our modern mall boasts.',
                'image' => asset('assets/images/projects/3.jpg'),
                'type' => 'commercial',
                'location' => 'Al Shorouk City',
                'area' => '8,000m²'
            ]
        ];

        return view('pages.projects.index', compact('residentialProjects', 'commercialProjects'));
    }

    /**
     * Display a specific project
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show(string $slug): View
    {
        // This would typically fetch from database
        $project = [
            'title' => 'Palm East',
            'description' => 'Palm East is a high-end residential development...',
            'image' => asset('assets/images/projects/5.jpeg'),
            'location' => 'New Cairo',
            'area' => '12 acres'
        ];

        return view('pages.projects.show', compact('project'));
    }
}