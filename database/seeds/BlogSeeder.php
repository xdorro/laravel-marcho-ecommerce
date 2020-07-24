<?php

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 16; $i++) {
            Blog::updateOrCreate([
                'user_id' => 1,
                'name' => 'Lorem ipsum dolor amet, consectr adipiscing elit ' . $i,
                'image' => '/uploads/blogs/thumbs/' . $i . '.jpg',
                'description' => '',
                'body' => '<p>Salesman and above it there hung a picture that he had recenatly cut out of an illustrated more magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered.</p>
                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur most a ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempraus, tellus eget condimentum the rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quaminitys nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. </p>
                <blockquote>
                    <h4>“ Spread out on the table Samsa was a travelling salesman and above that he had recently cut out of an. ”</h4>
                    <h6>JHON DOE</h6>
                </blockquote>
                <p>Gregor then turned to look out the window at the dull weather. Pitifully thin compared with the size of the rest of him, waved about helpslessly as he looked. “What’s happened to me?” he is thought. It wasn’t a dream. His room, a proper human room although a liittle too small, layout a peacefully between its four familiar.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam id reprehenderit eveniet deleniti autem odit unde consequatur minus blanditiis non culpa, similique nisi facilis doloribus totam! Fuga minus dolore temporibus?.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam id reprehenderit eveniet deleniti autem odit unde consequatur minus blanditiis non culpa, similique nisi facilis doloribus totam! Fuga minus dolore temporibus?.</p>
                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur most a ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempraus, tellus eget condimentum the rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quaminitys nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>',
                'status' => 1,
            ]);
        }
    }
}
