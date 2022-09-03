<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {


        // User::create([
        //     'name' => 'Raka Santang',
        //     'email' => 'rksrbbn@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming'
        ]);

        Category::create([
            'name' => 'Web Design'
        ]);
        
        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Post Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada quam augue, vitae condimentum metus facilisis eget.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada quam augue, vitae condimentum metus facilisis eget. Morbi non arcu ac mi condimentum blandit commodo vitae ligula. Etiam nisi elit, dictum vitae consectetur quis, rutrum sed dui. In malesuada tortor egestas, convallis velit a, eleifend dolor. Nulla sodales turpis id ultrices ultricies. In sodales luctus mi quis faucibus. Morbi semper turpis lacus, a semper turpis hendrerit a. Quisque maximus lacus ac aliquet mollis. Phasellus nunc ante, malesuada quis rhoncus at, semper a est. Morbi pharetra laoreet lacus. Nullam dictum ante eu turpis finibus auctor. Aliquam dui velit, ultricies pellentesque ultrices in, placerat non magna. Integer sollicitudin laoreet nisi, vel euismod leo. Donec tristique, est at scelerisque dapibus, eros dolor iaculis enim, quis luctus libero quam sed quam. Mauris purus massa, rutrum non auctor sed, vehicula in elit.'
        // ]);

        // Post::create([
        //     'title' => 'Post Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada quam augue, vitae condimentum metus facilisis eget.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada quam augue, vitae condimentum metus facilisis eget. Morbi non arcu ac mi condimentum blandit commodo vitae ligula. Etiam nisi elit, dictum vitae consectetur quis, rutrum sed dui. In malesuada tortor egestas, convallis velit a, eleifend dolor. Nulla sodales turpis id ultrices ultricies. In sodales luctus mi quis faucibus. Morbi semper turpis lacus, a semper turpis hendrerit a. Quisque maximus lacus ac aliquet mollis. Phasellus nunc ante, malesuada quis rhoncus at, semper a est. Morbi pharetra laoreet lacus. Nullam dictum ante eu turpis finibus auctor. Aliquam dui velit, ultricies pellentesque ultrices in, placerat non magna. Integer sollicitudin laoreet nisi, vel euismod leo. Donec tristique, est at scelerisque dapibus, eros dolor iaculis enim, quis luctus libero quam sed quam. Mauris purus massa, rutrum non auctor sed, vehicula in elit.'
        // ]);

        // Post::create([
        //     'title' => 'Post Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada quam augue, vitae condimentum metus facilisis eget.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada quam augue, vitae condimentum metus facilisis eget. Morbi non arcu ac mi condimentum blandit commodo vitae ligula. Etiam nisi elit, dictum vitae consectetur quis, rutrum sed dui. In malesuada tortor egestas, convallis velit a, eleifend dolor. Nulla sodales turpis id ultrices ultricies. In sodales luctus mi quis faucibus. Morbi semper turpis lacus, a semper turpis hendrerit a. Quisque maximus lacus ac aliquet mollis. Phasellus nunc ante, malesuada quis rhoncus at, semper a est. Morbi pharetra laoreet lacus. Nullam dictum ante eu turpis finibus auctor. Aliquam dui velit, ultricies pellentesque ultrices in, placerat non magna. Integer sollicitudin laoreet nisi, vel euismod leo. Donec tristique, est at scelerisque dapibus, eros dolor iaculis enim, quis luctus libero quam sed quam. Mauris purus massa, rutrum non auctor sed, vehicula in elit.'
        // ]);
    }
}
