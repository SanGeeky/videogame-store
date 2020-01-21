<?php

use Illuminate\Database\Seeder;
use App\Genres;
use App\User;
use App\Videogames;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */



    private $arrayUsers = array(
        array(
            'name' => 'Juan Pablo',
            'nick' => 'admin',
            'email' => 'admin@videogames.com',
            'password' => 'admin123',
            'role' => '2',
        ),
        array(
            'name' => 'David Santiago',
            'nick' => 'root',
            'email' => 'admin2@videogames.com',
            'password' => 'admin123',
            'role' => '2',
        ),
        array(
            'name' => 'David Vallejo',
            'nick' => 'davy',
            'email' => 'davidva@gmail.com',
            'password' => 'davy123',
            'role' => '1',
        ),
        array(
            'name' => 'David Santiago Pinchao',
            'nick' => 'sangeeky',
            'email' => 'sangeeky@outlook.com',
            'password' => '12345678',
            'role' => '1',
        ),
        array(
            'name' => 'John Doe',
            'nick' => 'duro',
            'email' => 'sisi@durito.com',
            'password' => 'sisi123456',
            'role' => '1',
        ),
        array(
            'name' => 'Julian Pinchao',
            'nick' => 'pinpacho',
            'email' => 'pinpacho@lol.com',
            'password' => 'computador',
            'role' => '1',
        )
    );

    private $arrayGenres = array(

        array(
            'name' => 'Action',
            'description' => '',
            'image' => '',


        ),
        array(
            'name' => 'Strategy',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Sports',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Adventure',
            'description' => 'This is typically going to apply to games that are adventure games in the "traditional" sense, meaning games such as Monkey Island, Maniac Mansion, Space Quest, Neuromancer, and Shadowgate.',
            'image' => '',

        ),
        array(
            'name' => 'Role-Playing',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Driving/Racing',
            'description' => 'The reason we call this "Driving/Racing" instead of just "Driving" is that non-vehicle-based racing games, such as Mad Dash Racing and Sonic R, still apply to this category.',
            'image' => '',

        ),
        array(
            'name' => 'Simulation',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Educational',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Fighting',
            'description' => 'With the potentially-lone exception of WWF Wrestlemania: The Arcade Game, wrestling games are NOT fighting games.    Games that break out of the standard one-on-one format, such as Power Stone or Super Smash Bros., still technically qualify for the fighting genre.',
            'image' => '',

        ),
        array(
            'name' => 'Wrestling',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Shooter',
            'description' => 'Until someone comes up with a better idea, third-person shooters such as Gears of War and kill.switch fall into this category.',
            'image' => '',

        ),
        array(
            'name' => 'Real-Time Strategy',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Card Game',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Trivia/Board Game',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Compilation',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'MMORPG',
            'description' => 'Truly-massive only, please, no instanced free online games like Guild Wars.',
            'image' => '',

        ),
        array(
            'name' => 'Minigame Collection',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Puzzle',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Music/Rhythm',
            'description' => 'Though this is primarily here for games like Rock Band and Dance Dance Revolution, music creation products such as MTV Music Generator and Beaterator fit into this category, as well.',
            'image' => '',

        ),
        array(
            'name' => 'Boxing',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Football',
            'description' => 'Note that we really mean "American football" by this, so please file your footy games under "Soccer." Also, futuristic takes on the sport, such as Cyberball, or other specialized styles, like Mutant League Football, still apply to this genre.',
            'image' => '',

        ),
        array(
            'name' => 'Basketball',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Skateboarding',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Flight Simulator',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Tennis',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Billiards',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Fishing',
            'description' => 'Any form of pool-like table game, from snooker to eight-ball, counts here. Futuristic games such as Lunar Pool also qualify, though be sure to apply the appropriate sci-fi theme to such products.',
            'image' => '',

        ),
        array(
            'name' => 'Golf',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Bowling',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Pinball',
            'description' => 'Virtual pinball as well as actual pinball machines are welcome here.',
            'image' => '',

        ),
        array(
            'name' => 'Dual-Joystick Shooter',
            'description' => 'Despite their lack of a joystick, touch-screen-enabled platforms also have games that fit this category.',
            'image' => '',

        ),
        array(
            'name' => 'First-Person Shooter',
            'description' => 'Though thematically similar, third-person shooters such as Gears of War should not be tagged as First-Person Shooter. Games that pull out of the perspective on occasion, such as Quantum of Solace, are fine, though.',
            'image' => '',

        ),
        array(
            'name' => 'Snowboarding/Skiing',
          'name' => 'MOBA',
          'description' => '',
            'image' => '',


        )
    );

    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        self::seedGenres();    $this->command->info('Tabla generos inicializada con datos!');

        self::seedUsers();     $this->command->info('Tabla usuarios inicializada con datos!');


    }

    private function seedGenres()
    {
        DB::table('users')->delete();
        foreach ($this->arrayGenres as $genres) {
            $genre = new Genres;

            $genre->name = $genres['name'];

            $genre->description = $genres['description'];

            $genre->image = $genres['image'];

            $genre->save();
        }
    }

    private function seedUsers()
    {
        DB::table('users')->delete();
        foreach ($this->arrayUsers as $usuario) {
            $user = new User;

            $user->name = $usuario['name'];

            $user->nick = $usuario['nick'];

            $user->email = $usuario['email'];

            $user->password = bcrypt($usuario['password']);

            $user->role = $usuario['role'];

            $user->save();
        }
    }
}
