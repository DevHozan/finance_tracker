<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Salary',
                'type' => 'income',
                'description' => 'Regular employment income'
            ],
            [
                'name' => 'Part-time Work',
                'type' => 'income',
                'description' => 'Income from part-time jobs'
            ],
            [
                'name' => 'Government Bursary',
                'type' => 'bursary',
                'description' => 'Government-funded bursary'
            ],
            [
                'name' => 'University Bursary',
                'type' => 'bursary',
                'description' => 'University-provided bursary'
            ],
            [
                'name' => 'Private Bursary',
                'type' => 'bursary',
                'description' => 'Bursary from private organizations'
            ],
            [
                'name' => 'Tuition Fees',
                'type' => 'expense',
                'description' => 'University tuition fees'
            ],
            [
                'name' => 'Books and Supplies',
                'type' => 'expense',
                'description' => 'Educational materials and supplies'
            ],
            [
                'name' => 'Transportation',
                'type' => 'expense',
                'description' => 'Transportation costs'
            ],
            [
                'name' => 'Food and Groceries',
                'type' => 'expense',
                'description' => 'Food and grocery expenses'
            ],
            [
                'name' => 'Housing',
                'type' => 'expense',
                'description' => 'Housing and accommodation expenses'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
} 