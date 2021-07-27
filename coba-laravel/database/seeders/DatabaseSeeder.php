<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Aditya',
            'email' => 'aditya@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Ucup',
            'email' => 'ucup@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda esse beatae accusamus dolorum, officiis velit harum, nostrum veritatis aut, nisi accusantium rerum quisquam iure illum commodi in ea animi expedita fugit sit nemo.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda esse beatae accusamus dolorum, officiis velit harum, nostrum veritatis aut, nisi accusantium rerum quisquam iure illum commodi in ea animi expedita fugit sit nemo. Deserunt ducimus id ipsum nisi nemo fugiat recusandae, fugit expedita dolorem ab. Laborum natus praesentium possimus voluptas deleniti. Perspiciatis quisquam minima tempore ex, a quas. Fugit ipsum recusandae sit dolorum eveniet odit atque. Nemo maxime, neque excepturi culpa odio velit qui sint nam asperiores, voluptates amet earum blanditiis ea eum corrupti expedita enim unde? Quasi culpa dolorem soluta natus, consectetur voluptatibus nihil labore vero nesciunt quis asperiores veniam hic libero repellat. Sed provident odit voluptatibus omnis earum veritatis aliquid nihil dicta doloremque quae tempora iusto id rerum necessitatibus, amet pariatur! Explicabo, eligendi autem. Consequuntur, nulla beatae praesentium doloribus quaerat vero totam vitae voluptates quia enim est tenetur ipsam blanditiis provident. Ipsa, dolorum, error eaque distinctio, repudiandae incidunt similique blanditiis sequi quae nobis recusandae totam culpa officia illum dolor aut voluptate maxime at quasi? Consequatur dignissimos provident earum, ut minima numquam accusantium fugit quidem, laboriosam, assumenda mollitia. Sit nobis eveniet excepturi quae tempore delectus facilis neque maxime officiis suscipit accusamus perspiciatis nisi obcaecati tempora laboriosam, esse ad.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda esse beatae accusamus dolorum, officiis velit harum, nostrum veritatis aut, nisi accusantium rerum quisquam iure illum commodi in ea animi expedita fugit sit nemo.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda esse beatae accusamus dolorum, officiis velit harum, nostrum veritatis aut, nisi accusantium rerum quisquam iure illum commodi in ea animi expedita fugit sit nemo. Deserunt ducimus id ipsum nisi nemo fugiat recusandae, fugit expedita dolorem ab. Laborum natus praesentium possimus voluptas deleniti. Perspiciatis quisquam minima tempore ex, a quas. Fugit ipsum recusandae sit dolorum eveniet odit atque. Nemo maxime, neque excepturi culpa odio velit qui sint nam asperiores, voluptates amet earum blanditiis ea eum corrupti expedita enim unde? Quasi culpa dolorem soluta natus, consectetur voluptatibus nihil labore vero nesciunt quis asperiores veniam hic libero repellat. Sed provident odit voluptatibus omnis earum veritatis aliquid nihil dicta doloremque quae tempora iusto id rerum necessitatibus, amet pariatur! Explicabo, eligendi autem. Consequuntur, nulla beatae praesentium doloribus quaerat vero totam vitae voluptates quia enim est tenetur ipsam blanditiis provident. Ipsa, dolorum, error eaque distinctio, repudiandae incidunt similique blanditiis sequi quae nobis recusandae totam culpa officia illum dolor aut voluptate maxime at quasi? Consequatur dignissimos provident earum, ut minima numquam accusantium fugit quidem, laboriosam, assumenda mollitia. Sit nobis eveniet excepturi quae tempore delectus facilis neque maxime officiis suscipit accusamus perspiciatis nisi obcaecati tempora laboriosam, esse ad.',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda esse beatae accusamus dolorum, officiis velit harum, nostrum veritatis aut, nisi accusantium rerum quisquam iure illum commodi in ea animi expedita fugit sit nemo.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda esse beatae accusamus dolorum, officiis velit harum, nostrum veritatis aut, nisi accusantium rerum quisquam iure illum commodi in ea animi expedita fugit sit nemo. Deserunt ducimus id ipsum nisi nemo fugiat recusandae, fugit expedita dolorem ab. Laborum natus praesentium possimus voluptas deleniti. Perspiciatis quisquam minima tempore ex, a quas. Fugit ipsum recusandae sit dolorum eveniet odit atque. Nemo maxime, neque excepturi culpa odio velit qui sint nam asperiores, voluptates amet earum blanditiis ea eum corrupti expedita enim unde? Quasi culpa dolorem soluta natus, consectetur voluptatibus nihil labore vero nesciunt quis asperiores veniam hic libero repellat. Sed provident odit voluptatibus omnis earum veritatis aliquid nihil dicta doloremque quae tempora iusto id rerum necessitatibus, amet pariatur! Explicabo, eligendi autem. Consequuntur, nulla beatae praesentium doloribus quaerat vero totam vitae voluptates quia enim est tenetur ipsam blanditiis provident. Ipsa, dolorum, error eaque distinctio, repudiandae incidunt similique blanditiis sequi quae nobis recusandae totam culpa officia illum dolor aut voluptate maxime at quasi? Consequatur dignissimos provident earum, ut minima numquam accusantium fugit quidem, laboriosam, assumenda mollitia. Sit nobis eveniet excepturi quae tempore delectus facilis neque maxime officiis suscipit accusamus perspiciatis nisi obcaecati tempora laboriosam, esse ad.',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda esse beatae accusamus dolorum, officiis velit harum, nostrum veritatis aut, nisi accusantium rerum quisquam iure illum commodi in ea animi expedita fugit sit nemo.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda esse beatae accusamus dolorum, officiis velit harum, nostrum veritatis aut, nisi accusantium rerum quisquam iure illum commodi in ea animi expedita fugit sit nemo. Deserunt ducimus id ipsum nisi nemo fugiat recusandae, fugit expedita dolorem ab. Laborum natus praesentium possimus voluptas deleniti. Perspiciatis quisquam minima tempore ex, a quas. Fugit ipsum recusandae sit dolorum eveniet odit atque. Nemo maxime, neque excepturi culpa odio velit qui sint nam asperiores, voluptates amet earum blanditiis ea eum corrupti expedita enim unde? Quasi culpa dolorem soluta natus, consectetur voluptatibus nihil labore vero nesciunt quis asperiores veniam hic libero repellat. Sed provident odit voluptatibus omnis earum veritatis aliquid nihil dicta doloremque quae tempora iusto id rerum necessitatibus, amet pariatur! Explicabo, eligendi autem. Consequuntur, nulla beatae praesentium doloribus quaerat vero totam vitae voluptates quia enim est tenetur ipsam blanditiis provident. Ipsa, dolorum, error eaque distinctio, repudiandae incidunt similique blanditiis sequi quae nobis recusandae totam culpa officia illum dolor aut voluptate maxime at quasi? Consequatur dignissimos provident earum, ut minima numquam accusantium fugit quidem, laboriosam, assumenda mollitia. Sit nobis eveniet excepturi quae tempore delectus facilis neque maxime officiis suscipit accusamus perspiciatis nisi obcaecati tempora laboriosam, esse ad.',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
