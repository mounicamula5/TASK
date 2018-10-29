<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('comments')->insert([
            'name' => 'Marilyn Couser',
            'comment' => 'Good,
            'film_id' => 1,
            'status' => 'visible',
            'created_at' => (new \DateTime())->setTimestamp(time() - rand(1, 2 * 30 * 24 * 3600))
        ]);

        DB::table('comments')->insert([
            'name' => 'Moonman',
            'comment' => 'Cool,',
            'film_id' => 1,
            'status' => 'visible',
            'created_at' => (new \DateTime())->setTimestamp(time() - rand(1, 2 * 30 * 24 * 3600))
        ]);

        DB::table('comments')->insert([
            'name' => 'Marilyn Couser',
            'comment' => 'Aliquam velit lectus, tristique eget ultricies ac, ullamcorper vel lorem. Duis risus risus, ornare pellentesque lacus vel, vehicula dictum purus. Aliquam dictum rhoncus lacus, a dapibus eros maximus et. Nullam in augue eu odio feugiat semper eu eget nibh. Nulla maximus enim a turpis cursus mattis.',
            'film_id' => 2,
            'status' => 'visible',
            'created_at' => (new \DateTime())->setTimestamp(time() - rand(1, 2 * 30 * 24 * 3600))
        ]);

        DB::table('comments')->insert([
            'name' => 'Rick Sanchez',
            'comment' => 'Cool!',
            'film_id' => 2,
            'status' => 'visible',
            'created_at' => (new \DateTime())->setTimestamp(time() - rand(1, 2 * 30 * 24 * 3600))
        ]);

        DB::table('comments')->insert([
            'name' => 'Valar Morghulis',
            'comment' => 'Quisque eu mi ac erat auctor consequat ut sed dolor. Fusce ut leo sed sapien efficitur commodo. Duis ante turpis, varius eu quam quis, tempus posuere sapien. In hac habitasse platea dictumst. Mauris vitae arcu ut lectus consequat facilisis eget eu elit. In imperdiet consequat ultrices. Maecenas et interdum felis.',
            'film_id' => 3,
            'status' => 'visible',
            'created_at' => (new \DateTime())->setTimestamp(time() - rand(1, 2 * 30 * 24 * 3600))
        ]);
    }
}
