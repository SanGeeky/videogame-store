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
            'description' => 'this is typically going to apply to games that are adventure games in the "traditional" sense, meaning games such as Monkey Island, Maniac Mansion, Space Quest, Neuromancer, and Shadowgate.',
            'image' => '',

        ),
        array(
            'name' => 'Role-Playing',
            'description' => '',
            'image' => '',

        ),
        array(
            'name' => 'Driving/Racing',
            'description' => 'the reason we call this "Driving/Racing" instead of just "Driving" is that non-vehicle-based racing games, such as Mad Dash Racing and Sonic R, still apply to this category.',
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
            'name' => 'trivia/Board Game',
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
            'description' => 'truly-massive only, please, no instanced free online games like Guild Wars.',
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
            'description' => 'though this is primarily here for games like Rock Band and Dance Dance Revolution, music creation products such as MTV Music Generator and Beaterator fit into this category, as well.',
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
            'name' => 'tennis',
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
            'description' => 'though thematically similar, third-person shooters such as Gears of War should not be tagged as First-Person Shooter. Games that pull out of the perspective on occasion, such as Quantum of Solace, are fine, though.',
            'image' => '',

        ),
        array(
            'name' => 'Snowboarding/Skiing',
          'description' => '',
            'image' => '',


        ),
        array(
            'name' => 'Baseball',
            'description' => 'Futuristic baseball, such as Base Wars, still counts for this genre, though you should also be sure to apply the sci-fi theme to such games.',
            'image' => '',

        ),
        array(
            'name' => 'Light-Gun Shooter',
            'description' => '',
            'image' => '',


        ),
        array(
            'name' => 'Text Adventure',
            'description' => 'There is a leaflet bearing a genre description here.    - READ DESCRIPTION    The leaflet reads: "The text adventure sub-genre applies to text-only games. Games with text-based entry and graphical elements should be filed under the Adventure genre."',
            'image' => '',


        ),
        array(
            'name' => 'Brawler',
            'description' => 'Games with character building and other RPG-light elements still qualify for this genre.    Modern character action games such as Devil May Cry, however, belong in Action.',
            'image' => '',


        ),
        array(
            'name' => 'Vehicular Combat',
            'description' => '',
            'image' => '',


        ),
        array(
            'name' => 'Hockey',
            'description' => '',
            'image' => '',


        ),
        array(
            'name' => 'Soccer',
            'description' => '',
            'image' => '',


        ),
        array(
            'name' => 'Platformer',
            'description' => '',
            'image' => '',


        ),
        array(
            'name' => 'Track & Field',
            'description' => '',
            'image' => '',


        ),
        array(
            'name' => 'Action-Adventure',
            'description' => '- Mission-based open-world games such as the Grand Theft Auto series.',
            'image' => '',


        ),
        array(
            'name' => 'Fitness',
            'description' => 'This is for games specifically designed and sold for the purpose of fitness, such as Wii Fit and Your Shape. Games that happen to have basic "workout" modes, like Dance Dance Revolution and Dance Central, do not apply.',
            'image' => '',



        ),
        array(
            'name' => 'Block-Breaking',
            'description' => 'Power-up-enabled games such as Arkanoid still qualify for this category.',
            'image' => '',



        ),
        array(
            'name' => 'Cricket',
            'description' => '',
            'image' => '',



        ),
        array(
            'name' => 'Surfing',
            'description' => '',
            'image' => '',



        ),
        array(
            'name' => 'Shoot \'Em Up',
            'description' => 'Modern takes on the classic form, such as Einhander, completely fit into this sub-genre.',
            'image' => '',



        ),
        array(
            'name' => 'Gambling',
            'description' => '',
            'image' => '',



        ),
        array(
            'name' => 'MOBA',
            'description' => '',
            'image' => '',


        ),
    );

    private $arrayGames = array(

        array(
            'name' => 'Fortnite',
            'aliases' => '',
            'description' => 'OverviewFortnite is a sci-fi sandbox-survival third-person shooter developed (in conjunction with People Can Fly) and digitally published by Epic Games as an early access title for the Xbox One, PlayStation 4, PC, and Mac on July 25, 2017. The early-access XONE and PS4 versions were also released in retail format on July 25, 2017 by Gearbox.Running on the studio\' signature Unreal Engine 4 game engine, Fortnite utilizes numerous exploration, scavenging, crafting, and constructing elements from other sandbox-survival games (such as Minecraft and Rust) with two distinct multiplayer-focused game modes:"Save the World", the game\'s main co-operative campaign. Up to four players can band together as unique Heroes and co-operate on missions in procedurally-generated landscapes. Players can earn new weapon schematics, trap schematics, and upgraded Heroes by completing missions and opening loot chests."Battle Royale", a free-to-play player-vs-player mode added on September 26, 2017. Similar to other survival-shooters (such as PLAYERUNKNOWN\'s BATTLEGROUNDS and H1Z1), each match has up to 100 players dropping into a large uninhabited island, where they must scavenge for weapons/items and fight (with no respawning) to become the last team standing.The game is set in a near-future contemporary Earth, where a mysterious and chaotic storm has engulfed the planet, dropping zombie-like creatures that put the world in an apocalyptic state. The remaining survivors have found a way to shield locations from the storm (using special field generators known as "Storm Shields") and must find survivors, resources, and a way to repel the storm completely.The Battle Royale mode of the game was later released as an early access title for iOS devices on April 2, 2018 and for the Nintendo Switch on June 12, 2018. An Android version in development.Weapons (BR)Unlike most games in the "battle royale" genre, each weapon in the game can be found in one of numerous different color-coded "rarities" (grey Common, green Uncommon, blue Rare, purple Epic, and gold Legendary). Higher-rarity weapons have an increase in damage dealt, along with a slight improvement in another stat (usually reloading speed).Light BulletsPistol (C,U,R,E) - Semi-automatic. The Rare and Epic versions, known in-game as the Suppressed Pistol, have a noise-cancelling suppressor equipped.Suppressed Submachine Gun (C,U,R) - Fully-automatic. Has a noise-cancelling suppressor equipped.Tactical Submachine Gun (U,R,E) - Fully-automatic. Formerly known as the Submachine Gun (with two variants: the older "TEC-9" and the newer "MP5").Minigun (E,L) - Fully-automatic with a windup time. Requires no reloading, but can overheat after long continuous fire.Medium BulletsRevolver (C,U,R,E,L) - Semi-automatic. High-powered with a slow rate-of-fire. Rarer versions have a unique weapon model.Assault Rifle (C,U,R,E,L) - Fully-automatic. Slower firing rate than the SMGs with more per-bullet damage and more effective range. Rarer versions have a unique weapon model.Infantry Rifle (C,U,R,E) - Semi-automatic. Rarer versions have a unique weapon model. Rarer versions have a unique weapon model. In normal gameplay, the Common version only spawns in Tilted Town.Heavy Assault Rifle (C,U,R) - Fully-automatic. Slower firing rate than the Assault Rifle, but deals more damage-per-shot.Six Shooter (U,R,E) - Semi-automatic. Firing from the hip "fans the hammer", trading precision for a faster firing rate. In normal gameplay, it only spawns in Tilted Town.Scoped Assault Rifle (U,R) - Fully-automatic. Improved accuracy and zoom distance at the cost of slower rate-of-fire and less damage-per-shot.Heavy BulletsHunting Rifle (U,R) - Bolt-action. Unlike other Sniper Rifles, the Hunting Rifle does not use a scope. In normal gameplay, it only spawns in Tilted Town.Bolt-Action Sniper Rifle (R,E,L) - Bolt-action. Deals incredible damage (knocking out unarmored enemies in one shot), at the cost of a very slow rate-of-fire.Hand Cannon (E,L) - Semi-automatic. High-powered with a slow rate-of-fire.Heavy Sniper Rifle (E,L) - Bolt-action. Slower reloading time than the Bolt-Action Sniper Rifle, but deals more damage (knocking out half-armored enemies in one shot) and can destroy any structure in one shot.Shells \'n SlugsTactical Shotgun (C,U,R,E,L) - Pump-action. Wide spread for closer ranges. Rarer versions have a unique weapon model.Drum Shotgun (C,U,R) - Fully-automatic. Faster firing rate and higher ammo capacity than the Combat Shotgun, but much less damage and wider spread.Pump Shotgun (U,R) - Pump-action. Higher damage than the Tactical Shotgun, but has a lower ammo capacity and slower firing rate.Combat Shotgun (R,E,L) - Semi-automatic. Tighter spread for longer ranges.Double Barrel Shotgun (E,L) - Break-action. Smallest ammo capacity, but deals incredible damage at close ranges. In normal gameplay, it only spawns in Tilted Town.RocketsGrenade Launcher (R,E,L) - Semi-automatic. Faster-firing than the Rocket Launcher, but its explosives fire in a downward arc.Rocket Launcher (E,L) - Single-shot. Fires missiles in a straight line and deals incredible damage (knocking out unarmored enemies in one direct blast and destroying structure parts easily).Proximity Grenade Launcher (E,L) - Semi-automatic. While weaker than the standard Grenade Launcher (and having 1/3 the chamber size), its explosives detonate prematurely in proximity of an enemy combatant.VaultedSince the game\'s beta, some of the game\'s arsenal has been put "in the vault" and shelved, meaning that they cannot be obtained in normal play. Some weapons can be found in Playground mode and in certain Limited Time Modes.Burst SMG (C,U,R) - Light. Fires in four-round bursts.Compact SMG (E,L) - Light. Fully-automatic. Sacrifices reloading speed for higher magazine size and per-bullet damage.Tactical Assault Rifle (E,L) - Light. Fully-automatic. Faster firing rate than the Assault Rifle, but deals less damage-per-shot.Burst Assault Rifle (C,U,R,E,L) - Medium. Fires in three-round bursts. Rarer versions have a unique weapon model.Drum Gun (U,R) - Medium. Fully-automatic. Faster firing rate and higher magazine size than Assault Rifles, but with a longer reload time and less per-bullet damage.Dual Pistols (R,E) - Medium. Semi-automatic, with each trigger pull firing both pistols in sequence.Light Machine Gun (R,E) - Medium. Fully-automatic. Higher magazine size than the Drum Gun, but with an even longer reload time.Scoped Revolver (E,L) - Medium. Semi-automatic. High-powered with a slow rate-of-fire.Suppressed Assault Rifle (E,L) - Medium. Fully-automatic. Deals slightly less damage than the Assault Rifle, but has a noise-cancelling suppressor equipped.Thermal Scoped Assault Rifle (E,L) - Medium. Fully-automatic. Slower firing rate than the Scoped Assault Rifle, but has an enhanced thermal scope that shows enemies and chests in thermal vision.Flint-Knock Pistol (C,U) - Heavy. Single-shot. High knock-back (for both shooter and target) and powerful at close range.Semi-Auto Sniper Rifle (U,R) - Heavy. Semi-automatic.Suppressed Sniper Rifle (E,L) - Heavy. Bolt-action. Slightly less damage than the Bolt-Action Sniper Rifle, but has a noise-cancelling suppressor equipped.Storm Scout Sniper Rifle (E,L) - Heavy. Semi-automatic. Has a small radar built on the scope that shows the location of the next few storm circles.Heavy Shotgun (E,L) - Shells. Pump-action. Slow firing rate, but with tighter spread for longer ranges.Boom Bow (L) - Shells. Compound bow that launches arrows with explosive shotgun-shell tips. The longer the Fire button is held, the faster the arrow launches. Direct hits deal additional impact damage (with headshots dealing critical damage).Guided Missile (E,L) - Rockets. Single-shot. Similar to the Rocket Launcher, only with less-damaging slower-moving rockets that are controlled directly by the player (leaving them unable to control their own character while the missile is in the air).Quad Launcher (E,L) - Rockets. Multi-shot. Similar to the Rocket Launcher, sacrificing explosive damage for the ability to fire four rockets in quick succession.Crossbow (R,E) - Scoped magazine-fed infinite-ammo hunting crossbow that deals powerful damage.Limited Time Modes (BR)Along with the standard Squads (where players can form four-man "squads"), Duos (where players can form two-man "duos"), and Solo (completely free-for-all) playlists, Epic has regularly released limited-time event playlists (called LTMs, or Limited Time Modes) that alter the standard formula.50v50 - First made available on December 7, 2017, 50v50 is a Squads playlist that splits the game lobby into two equal teams (of up to 50 players each). It was later improved upon by having each team drop from their own Battle Bus at opposite sides of the island, having the storm circle located in-between, and heavily increasing the ammunition and resources.High Explosives - First made available on December 28, 2017, High Explosives is a Squads playlist where the only weapons that can be found are those that use the Rockets ammo type. Traps are disabled and grenade items are easier to find. Was later changed to Fly Explosives with the addition of enhanced Jetpacks.Sneaky Silencers - First made available on January 5, 2018, Sneaky Silencers is a Squads playlist where the only weapons that can be found are those with suppressors. Traps are disabled and the Bush item is easier to find.Sniper Shootout - First made available on January 29, 2018, Sniper Shootout is a Squads (later Solo and Duos) playlist where the only weapons that can be found are all Sniper Rifle variants (including Hunting Rifles).Shooting Test - First made available on February 5, 2018, Shooting Test is a playlist used for publicly testing alterations to weapon accuracy and recoil.Solid Gold - First made available on February 27, 2018, Solid Gold is a Squads (and later Solo) playlist where the only weapons that can be found are those with the Legendary rarity. Rocket weapons can only be found in Chests.Teams of 20 - First made available on March 8, 2018, Teams of 20 is a Squads playlist that splits the game lobby into five equal teams (of up to 20 players each). It was later improved upon by having each team drop from their own Battle Bus at different points of the island (their paths forming a hexagon). Later used Final Fight rules (where the final circle instead triggers a end-of-game countdown timer).Blitz - First made available on March 19, 2018, Blitz is a faster-paced Squads playlist with much shorter Storm times (with the circle closing in from the start), improved overall loot spawn, and increased resources from loot/harvesting. It was later improved upon by having the Battle Bus enter from a lower height.Infinity Gauntlet - First made available on May 8, 2018, Infinity Gauntlet is a cross-promotion with the 2018 film Avengers: Infinity War. A faster-paced Solo variation of the Blitz playlist, players fight over possession of a singular Infinity Gauntlet. Once a player has the Gauntlet in their possession, they transform into the powerful supervillain Thanos and have access to both a variety of unique attacks (including a super-jump, an electrical blast, and a mighty punch) and a high amount of vitality (with shields that regenerate after each kill), at the cost of being unable to build nor carry items. To counter Thanos (and to hasten the game\'s pace), players have an easier time finding higher-grade loot.Close Encounters - First made available on May 25, 2018, Close Encounters is a Squads playlist where the only weapons that can be found are Pump Shotguns and Tactical Shotguns. In addition, Jetpacks and Heavy Shotguns can be found in Chests. Grapplers were later added.8 Teams of 12 - First made available on June 27, 2018, 8 Teams of 12 is a Squads playlist that splits the game lobby into eight equal teams (of up to 20 players each). Later used Final Fight rules (where the final circle instead triggers a end-of-game countdown timer).Playground - First made available on June 27, 2018, Playground puts a single squad into the map to train, explore, and create. Friendly fire is on (with players respawning after being eliminated) and resources are heavily increased.Steady Storm - First made available on August 7, 2018, Steady Storm is a Squads playlist that has the storm closing in to one central point from the start. Although the storm moves slowly, it is more damaging and does not display the final point on the map.Soaring 50\'s - First made available on August 15, 2018, Soaring 50\'s is a Squads playlist that builds on the 50v50 playlist. Increased Impulse Grenade, Launch Pad, and Bounce Pad spawns, and players can deploy their glider manually by jumping while mid-air and at least 10 meters off the ground.Score Royale - First made available on August 23, 2018, Score Royale is a Solo playlist where players score points by opening loot, killing enemies, and collecting coins scattered throughout the map. First player to reach the point limit (or the last player standing) wins.Solid Gold 50v50 - First made available on August 28, 2018, Solid Gold 50v50 is a Squads playlist that builds on the 50v50 mode by having only Legendary weapons spawn.The Getaway - First made available on September 6, 2018, The Getaway is a Squads playlist where squads race to retrieve one of four unique Jewel items on the map (which are found in special supply drops) and bring them to one of four Getaway Vans near the center of the storm. Safes and Getaway Vans show up in the mini-map, while players who pick up the Jewel will be visibile on the mini-map for 30 seconds. Players holding the jewel get health and shield regeneration, but have slower movement speed. Weapons are only found in the Rare, Epic, and Legendary rarities. Rifts and Launchpads disabled.Soaring Solos - First made available on September 18, 2018, Soaring Solos is a Solo playlist where players can deploy their glider manually by jumping while mid-air and at least 10 meters off the ground.Disco Domination - First made available on October 10, 2018, Disco Domination is a Squads playlist that combines 50v50 mode with the Domination mode from Unreal Tournament. Teams attempt to capture "Dance Floors" scattered around an area of the island by emoting in them uncontested, each of which slowly add to the team "Dance Bar". First team to have a full Dance Bar wins the match. Respawning is enabled until the storm has completely moved in (which also triples the amount of points added to the Dance Bar). Glider Redeploy is also enabled.Fortnitemares - First made available on October 24, 2018.Team Terror - First made available on November 6, 2018.Food Fight -Wild West -Team Rumble -One Shot -Wild West Duos',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2952214-box_fn.png',
      'release_date' => '',
      'genre_id' => 11,

    ),

    array(
      'name' => 'Pinball FX3',
      'aliases' => '',
      'description' => 'OverviewPinball FX3 is a free-to-play virtual pinball collection developed and digitally published by Zen Studios for the Xbox One, PlayStation 4, and PC (via Steam and Windows Store) on September 26, 2017. It was later released for the Nintendo Switch on December 12, 2017.The sequel to Pinball FX2, Pinball FX3 is the first to use its "Pinball FX" branding on all platforms. Along with new licensed tables, Pinball FX3 is the first in the series to feature recreations of real-world pinball tables (from Williams and Bally). The game also features new competitive asynchronous multiplayer options (including league and tournament play).Most of the tables that were purchased for either Pinball FX2 or Zen Pinball 2 can be acquired for free on Pinball FX3. Due to licensing issues, some tables can not be transferred.GameplayLike the previous entry in the series, Pinball FX3 is a free to play shell with the table Sorcerer\'s Lair being free with others available for purchase. The game features a persistent player level that is increased by playing the tables and earning points. As players level up they earn different borders and backgrounds for their player card.Single PlayerStarting the Epic Quest TableSelecting the single player option gives players the chance to play any of their purchased tables alone, or with a friend via the hotseat mode which has players taking turns on a single screen.When selecting a table players are given multiple options:Single Player &amp; Hotseat - This is the main mode of the game. Players play a full game of pinball, trying to complete table goals or getting high scores. This mode has a few sub options such as single player, classic single player, hotseat, and practice. Single player allows the use of scoring upgrades while classic does not.Table Mastery - Players can look at how much mastery they have unlocked for each of the tables.Upgrades - Players can turn on or off any of the upgrades earned on an individual table. These upgrades are gained by playing the tables and achieving certain goals such as amount of bumpers hit or skill shots. These upgrades will affect the scoring of the game.Table Guide - The table guide walks players through the mechanics of each table and how they work.Challenges - The challenges section has players playing a table with altered rules in order to unlock more table upgrades. Each challenge has up to five stars that can be earned. The different challenges are 1 ball, 5 minute, and survival.MatchupSelecting a MatchMatchup mode is an online multiplayer mode which gives players an option to choose from three different opponents. They are ranked from easiest challenge to hardest challenge, with the harder challenges netting better rewards. Players are given a rank depending on how many games are won/lost.Players also earn a diversity bonus for playing on multiple different tables.TournamentsEntering the Tournament SectionIn tournaments mode players can participate in both official and player created tournaments. Tournaments are set for a certain number of days and players can play that table using the settings the creator has set up to try and set the highest score possible. After the set amount of days are up players are then ranked based on their score.When creating tournaments players have the option to choose the amount of days, whether it is regular style or one of the challenge mode styles, and whether or not players can use upgrades.LeaderboardsThe Xbox One Leaderboard for Moon KnightThe leaderboards section allows players to look at their scores on any table and compare them to people around the world or their friends.Several options are available for each table:Single Play All-TimeSingle Play WeeklyClassic Play All-TimeClassic Play WeeklySurvival Challenge All-TimeSurvival Challenge Weekly1-Ball Challenge All-Time1-Ball Challenge Weekly5 Minute Challenge All-Time5 Minute Challenge WeeklyThere are also 2 global leaderboards that span across all tables, Wizard Score and Superscore.Tables (New)OriginalCarnival LegendsReleased on December 19, 2017 for $6.99. Also included in the Zen Originals Season 2 bundle.Son of ZeusAdventure LandLicensedUniversal Classics PinballReleased with the base game for $9.99. Contains three tables based on three classic film franchises from Universal Pictures.Back to the Future PinballJaws PinballE.T. PinballJurassic World PinballReleased on February 20, 2018 for $9.99. Contains three tables based on the Jurassic Park film franchise.Jurassic World PinballJurassic Park PinballJurassic Park Pinball MayhemStar Wars Pinball: The Last JediReleased on April 17, 2018 for $6.99. Contains two tables based on the 2017 film Star Wars: The Last Jedi. Also included in the Star Wars Pinball Season 2 bundle.Star Wars Pinball: The Last JediStar Wars Pinball: Ahch-To IslandStar Wars Pinball: SoloReleased on September 12, 2018 for $9.99. Contains three tables based on the 2018 film Solo: A Star Wars Story. Also included in the Star Wars Pinball Season 2 bundle.Star Wars Pinball: SoloStar Wars Pinball: Calrissian ChroniclesStar Wars Pinball: Battle of MimbanRecreatedWilliams Pinball (Free)Released on October 9, 2018 for free.Fish TalesWilliams Pinball: Volume 1Released on October 9, 2018 for $9.99.The Getaway: High Speed IIJunk YardMedieval MadnessWilliams Pinball: Volume 2Released on December 4, 2018 for $9.99.Attack From MarsBlack RoseThe Party ZoneWilliams Pinball: Volume 3Released on March 19, 2019 for $9.99.The Champion PubSafe CrackerTheatre of MagicWilliams Pinball: Volume 4Released on May 28, 2019 for $9.99.HurricaneRed and Ted\'s Road ShowWhite WaterWilliams Pinball: Universal Monsters PackReleased on October 29, 2019 for $9.99.Creature from the Black LagoonMonster BashWilliams Pinball: Volume 5Released on December 10, 2019 for $9.99.Cirqus VoltaireNo Good GofersTales of the Arabian NightsTables (Returning)64 of the 78 tables from Pinball FX2 return in Pinball FX3. Unless otherwise specified, all tables were released at the same time as the base game.Owners of these tables in Pinball FX2 can download the tables for free, as long as they were owned with the same account on the same system. The Sorcerer\'s Lair table is now free for all users, no matter whether they purchased it in Pinball FX2 or not.OriginalOriginal tables not brought over from Pinball FX2 include Speed Machine, Extreme, Agents, Buccaneer, and Nightmare Mansion.Free TableSorcerer\'s LairZen ClassicsReleased for $9.99. Also included in the Zen Originals Season 1 bundle.El DoradoShamanTeslaV12Medieval PackReleased for $4.99. Also included in the Zen Originals Season 1 bundle.Epic QuestExcaliburSci-Fi PackReleased for $9.99. Also included in the Zen Originals Season 1 bundle.Earth DefenseMarsParanormalIron &amp; Steel PackReleased for $4.99. Also included in the Zen Originals Season 2 bundle.Wild West RampageCastleStormCore CollectionReleased for $9.99. Also included in the Zen Originals Season 2 bundle.PashaRomeBiolabSecrets of the DeepStar WarsStar Wars PinballReleased for $9.99. Also included in the Star Wars Pinball Season 1 bundle.Star Wars Pinball: Episode V - The Empire Strikes BackStar Wars Pinball: The Clone WarsStar Wars Pinball: Boba FettStar Wars Pinball: Balance of the ForceReleased for $9.99. Also included in the Star Wars Pinball Season 1 bundle.Star Wars Pinball: Episode VI - Return of the JediStar Wars Pinball: Starfighter AssaultStar Wars Pinball: Darth VaderStar Wars Pinball: Heroes WithinReleased for $9.99. Also included in the Star Wars Pinball Season 1 bundle.Star Wars Pinball: Han SoloStar Wars Pinball: DroidsStar Wars Pinball: Episode IV - A New HopeStar Wars Pinball: Masters of the ForceStar Wars Pinball: The Force AwakensReleased for $4.99. Also included in the Star Wars Pinball Season 2 bundle.Star Wars Pinball: The Force AwakensStar Wars Pinball: Might of the First OrderStar Wars Pinball: Unsung HeroesReleased for $6.99. Also included in the Star Wars Pinball Season 2 bundle.Star Wars Pinball: Star Wars RebelsStar Wars Pinball: Rogue OneMarvelMarvel Pinball Original PackReleased for $9.99. Also included in the Marvel Pinball Season 1 bundle.Spider-ManIron ManBladeWolverineMarvel Pinball: Vengeance and VirtueReleased for $9.99. Also included in the Marvel Pinball Season 1 bundle.Ghost RiderThorMoon KnightX-MenMarvel Pinball: Marvel Legends PackReleased for $9.99. Also included in the Marvel Pinball Season 1 bundle.Fantastic FourCaptain AmericaDoctor StrangeMarvel Pinball: Avengers ChroniclesReleased for $9.99. Also included in the Marvel Pinball Season 2 bundle.The Avengers - Also included in the Marvel Pinball Epic Collection: Vol. 1 retail compilation.Fear Itself - Also included in the Marvel Pinball Epic Collection: Vol. 1 retail compilation.The Infinity GauntletWorld War Hulk - Also included in the Marvel Pinball Epic Collection: Vol. 1 retail compilation.Marvel\'s Women of PowerReleased for $6.99. Also included in the Marvel Pinball Season 2 bundle.A-ForceChampionsMarvel Pinball: Heavy HittersReleased for $9.99. Also included in the Marvel Pinball Season 2 bundle.Civil WarDeadpoolVenomMarvel Pinball: Cinematic PackReleased for $9.99. Also included in the Marvel Pinball Season 2 bundle.Guardians of the GalaxyMarvel\'s Avengers: Age of UltronMarvel\'s Ant-ManOther LicensesLicensed tables not brought over from Pinball FX2 include both South Park Pinball tables, Rocky and Bulwinkle, Street Fighter II Tribute, Ms. Splosion Man, Plants vs. Zombies, Ninja Gaiden Sigma 2, and Super League Football.Balls of Glory PinballReleased for $9.99. Contains four tables based on four animated sitcoms broadcasted by Fox.Family Guy PinballBob\'s Burgers PinballArcher PinballAmerican Dad! PinballAliens vs. PinballReleased for $9.99. Contains three tables based on the Alien franchise (including one based on the Alien vs. Predator spin-off series).Aliens PinballAlien vs. Predator PinballAlien: Isolation PinballBethesda PinballReleased for $10.99. Contains three tables based on video game series published by Bethesda.DOOM PinballFallout PinballThe Elder Scrolls V: Skyrim PinballIndividualPortal - Released for $2.99.The Walking Dead - Released for $2.99.System RequirementsPC MinimumOperating System: Windows 7 / Windows 8 / Windows 10Processor: Dual Core CPU @ 1.6GHzMemory: 4 GB RAMGraphics: Nvida GTS 450 or AMD equivalentDirectX: Version 11Storage: 6 GB available spaceSound Card: DirectX compatible sound card / integrated ',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3020980-box_pbfx3.png',
      'release_date' => '',
      'genre_id' => 30,


    ),

    array(
      'name' => 'Pathfinder Online',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2406338-pfo_logo_big.png',
      'release_date' => '',
      'genre_id' => 2,


    ),

    array(
      'name' => 'Gorogoa',
      'aliases' => '',
      'description' => 'AboutDeveloped by Jason Roberts, Gorogoa features hand drawn animation and a puzzle mechanic based on traditional slide puzzles with a twist. Each cell of the puzzle can, to some degree, be explored. The player must rearrange the tiles around the board to line up the images correctly. In some cases, tiles can be overlapped to give the character access to new areas. A playable demo was released in 2012 from the Gorogoa website. ',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3023798-box_goro.png',
      'release_date' => '',
      'genre_id' => 4,


    ),

    array(
      'name' => 'the Legend of Zelda: Breath of the Wild',
      'aliases' => 'tLoZ BotW',
      'description' => 'OverviewThe Legend of Zelda: Breath of the Wild was first officially acknowledged to be in development for the Wii U during the Nintendo Direct on January 23, 2013 and shortly before E3 2016 the title was announced to be released on the Nintendo Switch as well. Zelda series producer Eiji Aonuma has spoken about how the game\'s design was based on addressing key issues brought up by fans over the years and rethinking the conventions of the franchise.Breath of the Wild was developed by Nintendo EPD, with assistance from Monolith Software, and, after many delays, was released simultaneously for both systems during the Nintendo Switch\'s launch day on March 3, 2017.StoryLink is awoken by a disembodied voice and finds himself in a mysterious chamber after being asleep for 100 years. He is given the Sheikah Slate, a technological device that resembles a Wii U GamePad. After putting on some clothes, he leaves the cave and the mysterious voice tells him to go to the place marked on his Sheikah Slate map which ultimately leads him to the first Resurrection Tower. There, Link is told about the grave situation the land of Hyrule is faced with and which is the reason he was torn from his sleep. Calamity Ganon has been ravaging the land for 100 years and has almost gained full power which would lead to total destruction of the land. Until now, Calamity Ganon has been contained Hyrule Castle area, where he can be seen circling the towers in his misty form. Link has been called to this apocalyptic event.After leaving the cave he wakes up in on the Great Plateau, Link comes across an Old Man who claims to have lived there for a long time and seems to know more than he lets on. After Link activates the first Resurrection Tower, the Old Man provides Link with his first mission incentive in the form of the Paraglider which is the only thing Link is able to leave the Great Plateau starting area with since it is isolated from the rest of Hyrule by steep cliffs.WorldThe game is officially referred to as an "Open-Air Adventure" which refers to the game\'s take on the Open-World design as well as the art style inspirations from the French plein air painting style (describing the act of painting outdoors and depicting the visual as-is in that very moment). Hyrule is presented as a seamless open-world that players can traverse almost fully right form the start. Natural borders such as extreme weather conditions or geographic obstacles will make certain areas harder to reach without specific items or the appropriate gear.Breath of the Wild also features a full day/night cycle with one minute of real-world time equaling one hour of in-game time. Depending on the time of day, enemy and wildlife behavior might change. Some enemies will sleep at night and, as in previous games, Stalchildren will emerge from the ground between at night time. The temperature also drops at night. Different insects and other animals might be present during different times of the day.Additionally, the game also has dynamic weather. Heavy rainfall can hinder Link\'s climbing ability since scaling slippery walls will require more stamina. Combat might become more dangerous during a lightning storm since metal swords attract lightning and can hurt the one wielding it. However, this can be exploited if the enemy is wielding a sword in such a situation.While Link can affect the environment by burning fields of grass or chopping down trees, these effects are not permanent and the greenery will regrow over time (however, it is not immediate so a chopped down tree will stay that way for an unspecified amount of time).GameplayBreath of the Wild introduces numerous new gameplay systems into the Zelda series, heavily expands on some elements found in certain previous titles, and removes many tried and true series conventions from its bag of tricks.Navigation &amp; TraversalOne of the most notable new additions is Link\'s ability to climb nearly everything in the world. Trees, buildings, steep cliffs, rocks, even certain enemies. Part of this newfound freedom of movement is the return of the stamina meter introduced in Skyward Sword which determines for how long Link can hold onto a surface. The meter can be refilled, however, by consuming food or elixirs even while climbing.The addition of climbing brought about the first time that the 3D Zelda games introduce a dedicated manual jump button. Now, players can jump around as they like and use that to make the most out of a long climb or integrate it into their combat style.Naturally, fast travel returns for Breath of the Wild as well. Link can fast travel by selecting any shrine he has previously visited and activated or any of the Towers of Resurrection on his Sheikah Slate.Combat &amp; WeaponsCombat generally works like it did in pre-Skyward Sword Zelda games, meaning it is button-based and relies on blocking, dodging, and hitting an enemy\'s weak spot. New in this game is a Bullet Time mechanic either executed via a Perfect Dodge, Perfect Block, or by jumping off an elevated ground and using the bow and arrow. With time slowed down, Link can execute a Flurry Rush in the former two scenarios which allows him to get a barrage of hits in while the enemies are unable to react. The latter lets Link carefully aim a shot with an arrow while suspended in mid-air after jumping from an elevation or even horseback.While Link was able to pick up enemy weapons in other games such as The Wind Waker, Breath of the Wild takes it to a whole new level with a full-on weapon loot system that includes a variety of weapon types with unique properties and varying strengths. Link can pick up swords, axes, bows and arrows (with various kinds of arrows), spears, tree branches, and elemental rods (based on the E3 demo) either from enemies or from chests. Some weapons can also be found out in the open (like a woodcutters ax being stuck in a tree trunk).An important factor in this new weapon economy is the fact that weapons have durability now, meaning they break after being used a number of times. While an upgrade system involving the orbs gained from completing Shrines is confirmed, it is still unclear if there are permanent versions of items or if how exactly can be made more resilient through enhancements.Weapon types:One-handed swords (short sword, sickle sword)Two-handed swords (claymore)Blunt weapons (enemy limbs, tree branch, club)Axes/HammersSpear-types (lance, pitchfork)Ranged weapons (bows, magic rod)A notable additional use for shields is that Link can jump up in the air and press the shield button which then makes him stand on his shield and glide down slopes as if riding a snowboard. However, this damages the shield and it can break in the process.Returning from The Wind Waker is the ability to throw weapons. While in that game Link could only throw weapons he picked up from enemies, he can now throw all of his weapons since they are all picked up in the environment. Throwing a weapon at an enemy will do twice as much damage so a executing a well-aimed throw just before the weapon is about to break anyway is a highly effective combat strategy.Runes &amp; ItemsIn Breath of the Wild, Link doesn\'t simply find the important items required to progress inside of chests hidden away in dungeons. In this game, there are two groups of things Link can add to his arsenal: Runes and more traditional items. Runes are tied to the Sheikah Stone and are acquired through trials inside of one of the over 100 shrines found all over Hyrule (not all of them grant Runes, of course).The four known Runes so far areBomb (separated into round and cube-shapes, both of which can be remotely detonated)Magnesis (a magnet with which Link can manipulate metallic objects)Stasis (letting players freeze moving objects in place or lock static movements which can then be hit and charged with kinetic energy until they\'re unlocked and then shoot off in the desired direction with all the built-up energy)Cryonis (creates an ice pillar out of any puddle of water)More traditionally acquired items are, for example, the Paraglider which is given to Link by the Old Man after completing the first four Shrines. Temporary items such as the Korok Leaf (a new take on the Deku Leaf) occasionally drop after cutting down a tree. Korok Leafs can be swung to produce gusts of wind which in turn can be used to blow wind into the sail of a raft, for example.Hunting &amp; GatheringWhile previous Zelda games featured food items and loot drops from enemies and the occasional wildlife, Breath of the Wild goes all-in on a full hunting and gathering system. Like in Skyward Sword (and to a lesser degree, The Wind Waker), enemies drop items like fangs or horns upon defeat. Animals roaming the environment do the same. Food also grows on trees or other appropriate areas. Link can collect all of these things and consume most of them to restore health.CookingThese items collected in the wild, gained through hunting animals, or earned through combat with enemies, can all be used with a brand new cooking mechanic. Cooking up various items may yield dishes that restore large amounts of health or elixirs that grant temporary buffs (such as speed, stamina, noise reduction, weather resistance).amiiboAs was announced during the Twilight Princess HD reveal, the Wolf Link amiibo  released alongside that game will have a special function if data from Twilight Princess HD is brought into Breath of the Wild. Tapping the Wolf Link amiibo in Breath of the Wild will cause a Wolf Link companion to appear in the game. Wolf Link will assist Link in combat and hunting until he loses all of his hearts. Players who completed the Cave of Shadows in Twilight Princess HD will be able to transfer their leftover heart count to Wolf Link which will then be reflected in the actual heart count of Wolf Link in Breath of the Wild.Here is a list of supported amiibo and their functionality within the game:(Amiibo can be used only once per day)Breath of the Wild SeriesLink (Archer) - Food, materials, and rare bow-type weapons.Link (Rider) - Unique horse saddle, food, and high-end weapons.Zelda - Hylian Shield and plants.Guardian - Rare weapons, rare items, food, and ancient arrows.Bokoblin - Meat and club-type weapons.Super Smash Bros. SeriesLink - Epona, food items, weaponry, and Twilight Princess armour.Zelda - Twilight Bow, cooking materials, and rare weapons.Sheik - Sheik\'s Mask, cooking materials, and rare weapons.Ganondorf - Sword of Six Sages, cooking materials, and rare weapons.Toon Link - Sea-breeze boomerang, fish, and Wind Waker armour.30th Anniversary SeriesToon Link (The Wind Waker) - Sea-breeze boomerang, fish, and Wind Waker armour.Zelda (The Wind Waker) - Hero\'s Shield and cooking materials.Link (Ocarina of Time) - Basic weapons, meat, Biggoron\'s sword, and Ocarina of Time armour.Link (The Legend of Zelda 8-bit) - Food, rupees, and classic link armour and weapons.DevelopmentAonuma has stated in numerous interviews that he and the team behind the game are putting emphasis in "rethink[ing] the conventions of Zelda." In the January 2013 Nintendo Direct specifically, Aonuma called out the linear story progression and single-player-only gameplay in particular as being ripe for a fresh approach. The team is "setting aside" these conventions and wants to go "back to basics" to create a "reborn" Zelda game for Wii U. Aonuma also mentioned they were already trying to do this a bit with Skyward Sword but were unable to circumvent the linear design of the game at the time.At E3 2013, Aonuma mentioned that part of the reason work was done to port The Legend of Zelda: The Wind Waker to the Wii U was to use the game as a practice run and gain experience in HD game development. Nintendo considered showing the new Wii U Zelda game at E3, but chose to wait and continued development before unveiling it a year later.The Guardian enemy, first seen in the debut teaser.The game was finally revealed at E3 2014 during Nintendo\'s Digital Event. Aonuma introduced the game by explaining their goal to build a modern Zelda title with a completely open world inspired by the nature of the original The Legend of Zelda, discarding the more restrictive hub world nature of games such as Ocarina of Time. The goal is to allow players to explore the world and to approach aspects such as dungeons from multiple angles. The puzzles become figuring out how to get where players want to go and what to do once they get there.In the debut teaser footage, emphasis is first placed upon the land of Hyrule as it exists in the new game, showing off the vast depth of the landscape. Aonuma pointed out the mountains in the distant background, and stated that the player could travel to and traverse them, if they so choose. Once the action of the trailer begins, it depicts Link, dressed in a blue tunic, riding a horse and coming across a large enemy called a Guardian that attacks with beams of light. Link returns the attack with his bow.Also at E3 2014, Aonuma was present at the show to discuss Hyrule Warriors; a collaboration between Nintendo and Koei Tecmo that serves as a crossover of the Dynasty Warriors gameplay format with the characters and world of The Legend of Zelda. In interviews, Aonuma has stated that his involvement in the development of Hyrule Warriors has informed and influenced his ideas of game design and certain ideas behind the new Legend of Zelda. In particular, he called out how in Dynasty Warriors, there are multiple regions on each map in which action is always occurring, regardless of the player\'s presence, and the flow of the stage changes depending on the player\'s choice on how to proceed.The game\'s teaser trailer, which debuted at E3 2014, said the game would see release in 2015 which was reaffirmed during a live gameplay demo during The Game Awards in December of the same year. However, on March 27 2015, Nintendo released a video statement from producer Eiji Aonuma explaining the team has discovered so many new ideas that they don\'t want to force themselves to adhere to a strict schedule and thus would no longer make hitting 2015 a main priority as well as forgo a showing of the title at E3 2015. In early 2016, the was officially delayed again to 2017 and also announced to be launching at the same time on Nintendo Switch.Downloadable ContentOn June 30 2017, the first of two DLC packages, titled Trial of the Sword. The DLC\'s name comes from a new area added to the game in which the player must fight numerous waves of enemies starting with no equipment. As the player defeats progressively stronger enemies, better weapons will drop for the player to use. The end-goal of the trial is to prove Link\'s worthiness to unleash the full power of the Master Sword.The first DLC also features Master Mode, a new game difficulty which starts monsters off at a higher tier of difficulty, and also adds a new "gold tier" for late-game monsters. There is also a new map feature which allows the player to view the past 200 hours of their travel on the game map, and a Travel Medallion which may be used to travel to a previously-visited waypoint in the game.The second DLC pack, The Champions\' Ballad, released on December 7 2017, brings with it five new main quests and six new side quests along with new story content told through flashback scenes starring the four Champions. The new quests add a new dungeon, several new items and enemies as well as a major unlockable in the form of the Master Cycle Zero.Nintendo Labo VR-Kit SupportOn April 25 2019, Nintendo released a free update for the game adding support for the Nintendo Labo VR-Kit, allowing players to experience the game in Stereoscopic 3D',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2920687-the%20legend%20of%20zelda%20-%20breath%20of%20the%20wild%20v7.jpg',
      'release_date' => '',
      'genre_id' => 43,

    ),

    array(
      'name' => 'torment: Tides Of Numenera',
      'aliases' => '',
      'description' => 'OverviewTorment: Tides Of Numenera is an isometric turn-based cRPG developed by InXile Entertainment as the spiritual successor to Planescape: Torment. The game was successfully crowdfunded via Kickstarter in April, 2013. It met its $900,000 goal in less than 6 hours and set new records for fastest Kickstarter project ever to reach $1 million and the highest crowdfunded video game project. Ultimately, the game raised a total of $4,188,927 from 74,405 backers.Torment uses the Numenera game system, designed by Monte Cook, rather than the Dungeons &amp; Dragons license that Planescape used. Although the game will feature turn-based combat, story will be the much greater focus. The game has always been intended to be text-heavy, as Planescape was. Torment\'s script eventually grew to more than one million words, which exceeds Planescape\'s roughly 900,000 words. Torment\'s story has been described as being philosophical, deeply personal, and rich with choice and consequence. Limited voice acting will be employed to give individual characters their own definitive voices while avoiding the financially and logistically prohibitive costs of full voice acting for an indie game with so much writing.The game is powered by the Unity game engine and shares the technology and tools developed by Obsidian Entertainment for Pillars of Eternity. Chris Avellone, the lead writer and designer of Planescape, will contribute his writing to Torment per a stretch goal. Additionally, Mark Morgan, Planescape\'s original composer, will return to contribute music to Torment. The game was initially slated for released in December, 2014, according to the original Kickstarter pitch, but its release date has been pushed back multiple times, eventually settling on February 28, 2017.On August 4, 2016, inXile and publisher Techland announced that the game would also be released on PlayStation 4 and Xbox One. These versions of the game will first be shown publicly at Gamescom 2016. They are to be released simultaneously with the PC version.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2991316-box_tton.png',
      'release_date' => '',
      'genre_id' => 5,


    ),

    array(
      'name' => 'Lords of New York',
      'aliases' => '',
      'description' => 'Lords of New York is an multiplayer and singleplayer poker game with RPG elements set in Prohibition era New York City. In multiplayer mode, players choose from a group of intimidating, clever, and just plain wacky gangsters and face off against opponents over Steam, LAN, or PC-to-iPad. Lords of New York\'s Story Mode tells a tale of intrigue and vengeance through the eyes of several different characters.Character is the core of Lords of New York. With a custom animation studio, lovingly crafted characters, and AAA voice talent, the game encourages bonding with characters through responsive animation and an emote system that lets players show just how they feel about a particular move. With a diverse group of characters, there\'s someone for anyone to play.Lords of New York\'s developers hail from studios such as EA, Activision, and Tilted Mill, developing a custom engine that\'s infinitely modular for the addition of mini-games and several game modes, largely featured in the game\'s Story Mode.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2456501-screen%20shot%202013-03-17%20at%205.37.08%20pm.png',
      'release_date' => '',
      'genre_id' => 4,


    ),

    array(
      'name' => 'A Hat in Time',
      'aliases' => '',
      'description' => 'OverviewA Hat in Time is a 3D platformer and self proclaimed "collect-a-thon" developed by Gears for Breakfast that is meant to evoke 90s platformers released on consoles like the Nintendo 64. The title stars a top-hat wearing interstellar traveler who must journey through five different worlds in order to find all the missing "time pieces" she lost from her space ship before the evil Mustache Girl can take them for herself.A Hat in Time initially began development in 2012 as a solo project by Jonas Kaerlev but it eventually grew into a larger game that was successfully crowd funded through Kickstarter in 2013. After several delays, A Hat in Time was finally released on October 5, 2017 for the PC, PlayStation 4 and Xbox One.ChaptersChapter 1: Mafia TownChapter 2: Battle of the BirdsChapter 3: Subcon ForestChapter 4: Alpine SkylineChapter 5: FinaleLinksOfficial website.PC System RequirementsWindows XP or later2.0+ GHz processor512 MB system RAM3 GB free hard drive space',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2993638-box_ahit.png',
      'release_date' => '',
      'genre_id' => 41,


    ),

    array(
      'name' => 'Road Redemption',
      'aliases' => '',
      'description' => 'OverviewSuccessfully funded on Kickstarter in May of 2013, Road Redemption is a procedurally-generated vehicular combat game that pays homage to the Genesis classic Road Rash. It was released on Steam Early Access on September 18, 2014.Players take up the role of a member of a motorcycle gang in a post-apocalyptic world. Every biker in the country is racing to catch a mysterious assassin who has a 15 million dollar bounty on his head. The player and his fellow gang members must drive across the country through the heart of enemy territory in order to chase down the assassin and claim the prize. DevelopmentDevelopment of the originally announced PS3 and Xbox 360 versions of the game were officially canceled in June 2016 while the Wii U version is currently being evaluated with regard to the impending announcement and release of the NX successor platform from Nintendo.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3070977-box_rr.png',
      'release_date' => '',
      'genre_id' => 1,


    ),

    array(
      'name' => 'River City Ransom: Underground',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2925577-header.jpg',
      'release_date' => '',
      'genre_id' => 37,



    ),

    array(
      'name' => 'the Unlikely Legend of Rusty Pup',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2501456-650x.jpg',
      'release_date' => '',
      'genre_id' => 2,



    ),

    array(
      'name' => 'Darkwood',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3096883-box_dw.png',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'Cosmic Star Heroine',
      'aliases' => '',
      'description' => 'OverviewPlayers play the role of Alyssa as she works to uncover a conspiracy that threatens the peace of the galaxy, in this throwback Japanese-style RPG with retro sprite graphics. A game that was Kickstarted by Zeboyd games with a late 2014 release goal, but was unfinished until April 2017.Main CharactersAlyssa L\'salle - the heroine of the story, a top agent for the Agency for Peace and Intelligence (API) who goes rogue after her allies discover illegal experiments that her superiors were involved in. She fights with a bo staff and water magic.Chahn Kaneko - Alyssa\'s friend and fellow API agent, skilled in the art of "gunmancy" that can summon various guns to heal allies or damage enemies.Dave - Elite hacker for the API with no known last name. Uses his hacking skills to debuff enemies.Borisusovsky (aka "Sue") - A well-dressed superior officer for the API who helps Alyssa escape. Prefers to fight with his fists while buffing himself.Lauren Gambino - Underground informant and lead singer for a local indie band. Uses quick strikes with her poisoned daggers.Finian (a.k.a. "Finn") - a distant cousin of Alyssa and rookie API officer. Wields a high-tech shotgun that can hit multiple targets at once.Z\'xorv - Alien bounty hunter who spits acid and can take lots of punishment.Arete - Leader of a terrorist organization whose real name is unknown. Uses a seeing-eye robot.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2932593-cosmic_star_heroine___cover_art_by_slash000-d6lp1el.png',
      'release_date' => '',
      'genre_id' => 5,



    ),

    array(
      'name' => 'Aztez',
      'aliases' => '',
      'description' => 'OverviewAztez is a beat \'em up/strategy hybrid developed by Team Colorblind. It is inspired by technical action games like Devil May Cry and Bayonetta, and by randomly generated adventures like Spelunky and Weird Worlds: Return To Infinite Space.The player manages the breadth of their empire through turn-based strategy gameplay, which is interspersed with real-time beat \'em up sections. Success or failure in the combat segments can have consequences for your Empire.Release InformationIt released Summer 2017 for PC/Mac/Linux and later for PS4/Xbox One/PSVita. Planned Wii U development was shifted to the Switch. ',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3036921-aztez.jpg',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'RiME',
      'aliases' => '',
      'description' => 'OverviewRime is a cel-shaded open world adventure game that allows the player to explore an ancient civilization. After originally partnering with Sony to release the game, Tequila reacquired the rights to Rime in March 2016, continuing to work on the game on their own.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2940457-rime%20v3.jpg',
      'release_date' => '',
      'genre_id' => 4,



    ),

    array(
      'name' => 'Pom Gets Wi-Fi',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2534661-2077451005-tumbl.png',
      'release_date' => '',
      'genre_id' => 5,



    ),

    array(
      'name' => 'Closers',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2537776-2537775-closers.png',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'Cold Space',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3026329-gb_default-16_9.png',
      'release_date' => '',
      'genre_id' => 32,



    ),

    array(
      'name' => 'America\'s Army: Proving Grounds',
      'aliases' => 'America\'s Army 4',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2997336-americas-army-proving-ground-box-art-ps4-us-27june2017.jpg',
      'release_date' => '',
      'genre_id' => 32,


    ),

    array(
      'name' => 'Gravity Rush 2',
      'aliases' => '',
      'description' => 'OverviewDirected by Keiichiro Toyama, Gravity Rush 2 is the sequel to Gravity Rush and was offically announced at Sony\'s Tokyo Game Show Presentation on September 14, 2015 and released on January 18, 2017.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2931623-gravity%20rush%202%20v8.jpg',
      'release_date' => '',
      'genre_id' => 43,



    ),

    array(
      'name' => 'Faeria: Strategy Card Game',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2551536-2551535-faeria_cover.jpg',
      'release_date' => '',
      'genre_id' => 2,



    ),

    array(
      'name' => 'Randall',
      'aliases' => '',
      'description' => 'OverviewRandall is an action side-scroller packed with enemies and traps. The player controls Randall, who has to defeat hordes of enemies in order to escape this nightmare and learn what is going on in City of Nook. Randall relies on his fists to defeat his enemies, on his agility to perform parkour moves and on his brain to control his enemies minds.Randall has to explore City of Nook. As he stumbles upon power ups, new enemies and new places, some previously locked areas become accessible.CharactersRandallRandall is a schizophrenic man who has just woke up from a long time. He is an extraordinary fighter who relies on his combat abilities to defeat his foes. He is also a parkour enthusiast who can perform deft moves such as wall climbing and ledge grabs. His newly awakened telepathic powers allow him to get into his enemies minds and control them for short periods of time, using their abilities for his own advantage.Nook security personnelRandall\'s main enemies are mercenaries hired by Nook to keep all opposition at bay. They won\'t hesitate to gank upon Randall into submission. Their equipment make them incredible powerful and resilient to physical harm. Their mind has been corrupted by greed and power, and they are easy preys for Randall\'s telepathic abilities. Discover their strengths and weaknesess to defeat them and get some answers.GruntsThey are Nook\'s main force. Thugs and outcasts who found an opportunity to take their revenge against the society who ditched them. Their lack in strength is greatly compensated by their numbers. They carry a powerful baton and a riot armor that makes them much more resistant. Their weak minds make them an easy prey for Randall\'s telepathic abilities, but don\'t let your guard off, they are capable fighters driven by revenge and power.APE GuardsThey are Nook\'s elite forces. They are handpicked from the strongest members of the Grunt Corps. Their physical strength and performance caught Nook\'s attention. Boosted with steroids and bulletproof armors, these brutes were capable of eliminating all resistance in no time. They don\'t have a mind of their own, and will blindly follow their orders without remorse.FeaturesThis is a Metroidvania kind of adventure.The player has to explore every corner to find power ups, keys and new moves that will grant him access to previously inaccesible areas.Mind control. Randall\'s telepathic powers allow him to control his enemies minds to use their abilities (or bodies) to his advantage.Environmental awareness. The player has to pay extra attention to his surroundings and use Nook\'s own infrastructure to defeat Randall\'s enemies. Turning off steam valves to keep advancing, pushing his foes into deadly pits or use their own traps against them.New moves and abilities. Randall can upgrade his combat, parkour and telepathic abilities to progress through this madness.Earn Steam and Playstation 4 achievements and trophies.PlotIn a dystopian world controlled by a giant corporation, people live as slaves under permanent surveillance. Most of the people are being forced to work in places where they never come out. Every hint of rebellion and disobey is instantly extinguished by private security forces.Randall wakes up with no memory. He is a strong man with schizophrenia and has the habit of skipping leg days at the gym. He keeps hearing a voice in his head that gives him some useful advice, but also annoys Randall with his jokes and unwanted opinions.As the game progresses, Randall will realize there is much more than he initially thought about what is going on in this city.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2556311-screen%20shot%202013-10-06%20at%206.03.57%20pm.png',
      'release_date' => '',
      'genre_id' => 41,



    ),

    array(
      'name' => 'the Long Dark',
      'aliases' => '',
      'description' => 'OverviewSuccessfully funded their Kickstarter campaign, (Sep 16, 2013 - Oct 16, 2013). An alpha release of the game is available to Kickstarter backers, and on Steam in Early Access. The Long Dark is expected to Launch on August 1st leaving Early Access and will be released on PC, MAC, Linux as well as Xbox One and PS4.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2958575-box_tld.png',
      'release_date' => '',
      'genre_id' => 4,



    ),

    array(
      'name' => 'Gran Turismo Sport',
      'aliases' => 'Gran Turismo 7 GT Sport',
      'description' => 'Development"The PlayStation 4 game which we’ll likely call GT7 will be done in about a year or two." - Kazunori Yamauchi in Famitsu, November 2013.Release HistoryThe game was re-released on October 4th 2019 in two new physical editions; a budget PlayStation Hits edition, which only includes the base game, and a new "Spec II" version, which includes the game disc and every update until May 2019 (version 1.39) on a separate, 50GB install disc, along with 2,500,000 in-game credits and 10 Gr. 3 cars to start off with. A new intro movie was also released for the occasion.Single-playerAt launch, Gran Turismo Sport\'s single-player campaign only consisted of three different modes, all built as teaching tools for online play. These are Driving School, which teaches the basics of racing; Mission Challenge, which puts players into specific scenarios for them to achieve specific goals; and Circuit Experience, which teaches the many tracks included in the game. As of today, only the Circuit Experience is updated regularly following every new track added. Arcade modes are still part of the game, with single races and time trials.Two months after initial release, a new update was released with the return of the classic GT League mode of previous games, split into four categories (Beginner, Amateur, Professional, and Endurance). While they do not give prize cars, they are still a very good way to earn in-game credits.Classic arcade modes are also available, complete with time trials and single races.It is important to note that the classic customization component of past Gran Turismo games, where players could purchase updates for their cars such as a better engine or a better transmission, is now gone. Still, in single-player events where balance of performance is not applied, players are still permitted to tune their cars in whatever way they see fit, setting the downforce, the suspension, the drivetrain, the brakes or the transmission. They can also change the power and weight of their cars through a simple slider.On November 28th 2019, the first paid DLC for Gran Turismo Sport, the Lewis Hamilton Time Trial Challenge, was released. Players can now challenge lap times set on ten different tracks by the 6-time F1 world champion, with rewards including a special paint scheme for the AMG Vision Gran Turismo and unlocking the game\'s in-game credit limit cap from 20,000,000 to 100,000,000. Some tracks even include special tutorial videos narrated by Lewis Hamilton.Sport ModeThe central focus of the new Gran Turismo is Sport Mode, a ranked online multiplayer mode separate from the unranked lobbies, which are still available. Every player is assigned a Driver Rating, and a Sportsmanship Rating. The Driver Rating is determined by how fast the player is; it only increases after the checkered flag, by improving starting position and by beating other, faster drivers with a higher rating. Sportsmanship rating is a bit more complicated; it only fluctuates during races, and determines how clean the player drives. The rating is impacted by contact with other players, but also by going off course. While Sportsmanship Rating increases slowing during races at each clean sector, each incident decreases the rating dramatically. Together, both Driver Rating and Sportsmanship Rating determine which group the player is going up against, with opponents with similar DR and SR.Sport Mode is then divided into three other different modes: Daily Races, Time Trials, Nations Cup and Manufacturers Cup. Daily Races offers three weekly races starting at set intervals every 15 to 30 minutes: a 12-car sprint race, a 16-car sprint race, and a longer 20-car race with fuel consumption and tire wear. Time Trials give you a set car and track, with or without car settings permitted.Nations Cup and Manufacturers Cup are organized in partnership with the Fédération Internationale de l\'Automobile (FIA), the most important racing governing body in the world. Those events take place on a set race calendar, with set dates and times (giving each driver a two-hour window), and are all preceded by a ten-minute qualifying session. Only the best point finishes are tallied up for the final championship score.With the exception of one-make races where everyone has the same vehicle, players can generally choose whichever car they want in Daily Races and the Nations Cup, as long as theirs fit into the specified racing category (Gr. 3, N300, etc.). However, for the Manufacturers Cup, the player must sign a contract each season with a manufacturer, which determines which Gr. 4 and Gr. 3 cars they will be driving. As such, the player not only competes against other, different cars, but also against players who have chosen that same racing team in their region.The best drivers in the Nations and Manufacturers Cup are then invited to Gran Turismo e-sport events; first in regional finals split in three groups (America, Europe / Middle East / Africa, Asia and Oceania), and then in the world finals at the end of the year. CircuitsGran Turismo Sport includes 84 track layouts split among 29 different locales. Of this number, 16 are based on famous world circuits.Alsace (Original)Alsace - Village (3.37 mi / 5.423 km)Alsace - Village II (3.37 mi / 5.423 km)Autodrome Lago Maggiore (Original)Autodrome Lago Maggiore GP (3.61 mi / 5.809 km)Autodrome Lago Maggiore GP II (3.61 mi / 5.809 km)Autodromo Lago Maggiore - Centre (1.06 mi / 1.706 km)Autodromo Lago Maggiore - Centre II (1.06 mi / 1.706 km)Autodromo Lago Maggiore - East (2.264 mi / 3.643 km)Autodromo Lago Maggiore - East II (2.264 mi / 3.643 km)Autodromo Lago Maggiore - West (2.590 mi / 4.168 km)Autodromo Lago Maggiore - West (2.590 mi / 4.168 km)Autodromo José Carlos Pace (World circuit)Autodrome José Carlos Pace GP (2.678 mi / 4.309 km)Autodromo Nazionale Monza (World circuit)Autodromo Nazionale Monza (3.600 mi / 5.793 km)Autodromo Nazionale Monza - No chicane (3.58 mi / 5.755 km)Autopolis International Racing Course (World circuit)Autopolis International Racing Course (2.904 mi / 4.673 km)Autopolis International Racing Course - Shortcut Course (1.878 mi / 3.022 km)Blue Moon Bay Speedway (Original, oval based on Pocono Raceway)Blue Moon Bay Speedway (1.99 mi / 3.20 km)Blue Moon Bay Speedway II (1.99 mi / 3.20 km)Blue Moon Bay Speedway - Infield A (2.08 mi / 3.350 km)Blue Moon Bay Speedway - Infield A II (2.08 mi / 3.350 km)Blue Moon Bay Speedway - Infield B (1.78 mi / 2.860 km)Blue Moon Bay Speedway - Infield B II (1.78 mi / 2.860 km)Brands Hatch (World circuit)Brands Hatch GP (2.433 mi / 3.916 km)Brands Hatch Indy (1.208 mi / 1.944 km)Broad Bean Raceway (Original)Broad Bean Raceway (1.04 mi / 1.665 km)Broad Bean Raceway II (1.04 mi / 1.665 km)Circuit de Barcelona-Catalunya (World circuit)Circuit de Barcelona-Catalunya - Grand Prix (2.893 mi / 4.655 km)Circuit de la Sarthe (World circuit)Circuit de la Sarthe (8.469 mi / 13.629 km)Circuit de la Sarthe - No chicanes (8.428 mi / 13.554 km)Circuit de Sainte-Croix (Original)Circuit de Sainte-Croix - Layout A (5.889 mi / 9.477 km)Circuit de Sainte-Croix - Layout A II (5.889 mi / 9.477 km)Circuit de Sainte-Croix - Layout B (4.388 mi / 7.062 km)Circuit de Sainte-Croix - Layout B II (4.388 mi / 7.062 km)Circuit de Sainte-Croix - Layout C (6.726 mi / 10.825 km)Circuit de Sainte-Croix - Layout C II (6.726 mi / 10.825 km)Circuit de Spa-Francorchamps (World circuit)Circuit de Spa-Francorchamps (4.352 mi / 7.004 km)Colorado Springs (Rally)Colorado Springs - Lake (1.86 mi / 2.990 km)Colorado Springs - Lake II (1.86 mi / 2.990 km)Dragon Trail International Raceway (Original)Dragon Trail International Raceway - Gardens (2.70 mi / 4.352 km)Dragon Trail International Raceway - Gardens II (2.70 mi / 4.352 km)Dragon Trail International Raceway - Seaside (3.24 mi / 5.209 km)Dragon Trail International Raceway - Seaside II (3.24 mi / 5.209 km)Fishermans Ranch (Rally)Fishermans Ranch (4.28 mi / 6.893 km)Fishermans Ranch II (4.28 mi / 6.893 km)Fuji Speedway (World circuit)Fuji Speedway F (2.827 mi / 4.549 km)Fuji Speedway GT (2.812 mi / 4.526 km)Goodwood Motor Circuit (World circuit)Goodwood Motor Circuit (2.400 mi / 3.862 km)Kyoto Driving Park (Original)Kyoto Driving Park - Miyabi (1.21 mi / 1.953 km)Kyoto Driving Park - Yamigawa (3.05 mi / 4.912 km)Kyoto Driving Park - Yamigawa II (3.05 mi / 4.912 km)Kyoto Driving Park - Yamigawa + Miyabi (4.25 mi / 6.846 km)Kyoto Driving Park - Yamigawa + Miyabi II (4.25 mi / 6.846 km)Mount Panorama (World circuit)Mount Panorama Motor Racing Circuit (3.861 mi / 6.213 km)Northern Isle Speedway (Original, oval based on Bristol Motor Speedway)Northern Isle Speedway (0.56 mi / 0.900 km)Northern Isle Speedway - InfieldNürburgring (World circuit)Nürburgring GP (3.199 mi / 5.148 km)Nürburgring N24 (16.123 mi / 25.947 km)Nürburgring Nordschleife (12.944 mi / 20.832 km)Nürburgring Nordschleife Tourist Layout (12.944 mi / 20.832 km)Red Bull Ring (World circuit)Red Bull Ring Grand Prix Circuit (2.683 mi / 4.318 km)Red Bull Ring Südschleife National Circuit (1.452 mi / 2.336 km)Sardegna (Original + Rally)Sardegna - Road Track - A (3.17 mi / 5.113 km)Sardegna - Road Track - A II (3.17 mi / 5.113 km)Sardegna - Road Track - B (2.42 mi / 3.893 km)Sardegna - Road Track - B II (2.42 mi / 3.893 km)Sardegna - Road Track - C (1.65 mi / 2.661 km)Sardegna - Road Track - C II (1.65 mi / 2.661 km)Sardegna - Windmills (2.06 mi / 3.310 km)Sardegna - Windmills II (2.06 mi / 3.310 km)Special Stage Route X (Original)Special Stage Route X (18.82 mi / 30.283 km)Suzuka Circuit (World circuit)Suzuka Circuit (3.608 mi / 5.807 km)Suzuka Circuit East Course (1.394 mi / 2.243 km)Tokyo Expressway (Street circuit)Tokyo Expressway - Central Inner Loop (2.72 mi / 4.369 km)Tokyo Expressway - Central Outer Loop (2.74 mi / 4.405 km)Tokyo Expressway - East Inner Loop (4.47 mi / 7.192 km)Tokyo Expressway - East Outer Loop (4.54 mi / 7.301 km)Tokyo Expressway - South Inner Loop (4.07 mi / 6.560 km)Tokyo Expressway - South Outer Loop (3.23 mi / 5.201 km)Tsukuba Circuit (World circuit)Tsukuba Circuit (1.271 mi / 2.045 km)WeatherTech Raceway Laguna Seca (World circuit)WeatherTech Raceway Laguna Seca (2.238 mi / 3.602 km)Willow Springs International Raceway (World circuit)Willow Springs International Raceway - Big Willow (2.500 mi / 4.023 km)Willow Springs International Raceway - Horsethief Mile (1.000 mi / 1.609 km)Willow Springs International Raceway - Horsethief Mile II (1.000 mi / 1.609 km)Willow Springs International Raceway - Streets of Willow (1.800 mi / 2.897 km)Willow Springs International Raceway - Streets of Willow II (1.800 mi / 2.897 km)Car ListOriginally releasing with 169 cars included on disc, the amount of cars released with every free update since launch has increased that number to 329. While it is possible to buy cars worth less than 10,000,000 credits through microtransactions, every car can be purchased with the in-game currency or won by completing objectives or daily workouts.Abarth5001500 Biposto Bertone B.A.T. 1Alfa Romeo4C Launch Edition4C Gr. 34C Gr. 3 Road Car4C Gr. 4Giulia TZ2 Carrozzate da Zagato CN.AR750106Mito 1.4 T SportAlpineA110 1600SA110 Premiere EditionAlpine Vision Gran TurismoAlpine Vision Gran Turismo 2017Alpine Vision Gran Turismo Race ModeAmuseAmuse S2000 GT1 TurboAston MartinAston Martin DP-100 Vision Gran TurismoAston Martin VulcanDB11DB3S CN.1One-77V8 Vantage SV12 Vantage GT3Vantage Gr. 4AudiAudi e-tron Vision Gran TurismoAudi R18 TDI Audi Sport Team Joest 2016Audi Sport Quattro S1 Pikes PeakAudi Vision Gran TurismoR8 4.2 FSI R tronicR8 LMS Audio Sport Team WRTTT Coupé 3.2 QuattroTT CupTTS CoupéBMWBMW i3BMW M3 Coupé \'03BMW M3 Coupé \'07BMW M3 GT (BMW Motorsport)BMW M3 Sport EvolutionBMW M4 CoupéBMW M4 Gr. 4BMW M4 Safety CarBMW M6 GT3 M Power LiveryBMW M6 GT3 Walkenhorst MotorsportBMW Vision Gran TurismoBMW Z4 GT3BMW Z8BugattiBugatti Vision Gran TurismoBugatti Vision Gran Turismo Gr. 1Veyron 16.4Veyron Gr. 4ChaparralChevrolet Chaparral 2X Vision Gran TurismoChevroletCamaro SSCamaro ZL1 1LE PackageCamaro Z28Corvette C7 Gr. 3Corvette C7 Gr. 3 Road CarCorvette C7 Gr. 4Corvette Stringray Racer ConceptCorvette Stingray Sport Coupe C2Corvette Stingray C7Corvette Stingray Convertible C3Chris Holstrom Concepts1967 Chevy HovaCitroënDS3 RacingGT by Citroën Gr. 4GT by Citroën Race Car Gr. 3GT by Citroën Road CarDaihatsuCopen Active TopDaihatsu Copen RJ Vision Gran TurismoDe TomasoPanteraDodgeChallenger R/TDodge Charger SRT HellcatDodge Charger SRT Hellcat Safety CarSRT Tomahawk Vision Gran Turismo Gr. 1SRT Tomahawk Vision Gran Turismo RacingSRT Tomahawk Vision Gran Turismo StreetSRT Tomahawk Vision Gran Turismo TechnologySuper BeeViper Gr. 4Viper GTSViper GTS CoupeViper SRT GT3-RViper STR10 CoupeEckarts Rod &amp; CustomMach FortyFiat500 FFerrari250 GT Berlinetta passo corto CN.2521250 GTO CN .3729GT330 P4365 GTB4458 Italia458 Italia Gr. 4458 Italia GT3512BBDino 246 GTEnzo FerrariF40F50GTOLa FerrariFittipaldi MotorsFittipaldi EF7 Vision Gran Turismo by PininfarinaFordF-150 SVT RaptorFocus Gr. B Rally CarFocus STFord GT \'06Ford GT \'17Ford GT40 Mark IFord GT40 Mark IV Race CarFord GT LM Spec II Test CarMustang Gr. 3Mustang Gr. 3 Road CarMustang Gr. 4Mustang Gr. B Rally CarMustang GT Premium FastbackMustang Mach 1Gran TurismoGran Turismo F1500T-AGran Turismo Racing Kart 125 ShifterGran Turismo Red Bull X2019 CompetitionGran Turismo Red Bull X2014 JuniorGran Turismo Red Bull X2014 StandardGReddyFugu ZHondaBeatCivic Type R EKCivic Type R FK2Epson NSXFit HybridHonda Project 2&amp;4 powered by RC213VHonda Sports Vision Gran TurismoIntegra Type R (DC2)NSXNSX Gr. 3NSX Gr. 4NSX Gr. B Rally CarNSX Type RRaybring NSX Concept-GTS2000S660S800HyundaiGenesis Coupe 3.8 TrackGenesis Gr. 3Genesis Gr. 4Genesis Gr. B Rally CarHyundai N 2025 Vision Gran TurismoInfinitiInfiniti Concept Vision Gran TurismoJaguarD-TypeE-Type CoupeF-Type Gr. 3F-Type Gr. 4F-Type R CoupeJaguar Vision Gran Turismo CoupéXJ13XJR-9KTMX-BOW RLamborghiniAventador LP700-4Aventador LP750-4 SuperVeloceCountach 25th AnniversaryCountach LP400Diablo GTHuracan Gr. 4Huracan GT3 2015Huracan LP 610-4 2015Miura P400 Bertone Prototype CN.0706Veneno 2014LanciaDelta HF Integrale EvoluzioneStratosLexusau TOM\'s RC FLC500LF-LC GT Vision Gran TurismoPetronas Tom\'s SC430RC FRC F Gr. 4RC F GT3 (Emil Frey Racing)RC F GT3 Prototype (Emil Frey Racing)MaseratiGranTurismo SMazdaAtenza Gr. 3Atenza Gr. 3 Road CarAtenza Gr. 4Atenza Sedan XD L PackageDemio XD TouringEunos Roadster (NA Special Package)LM55 Vision Gran TurismoMazda 787BRoadster S (ND)Roadster Touring CarRX500RX-7 GTXRX-7 Spirit R Type A (FD)McLaren650S Coupe650S Gr. 4650S GT3McLaren F1McLaren F1 GTR - BMW (Kokusai Kaihatsu UK Racing)McLaren P1 GTRMcLaren Ultimate Vision Gran TurismoMP4-12CMercedes-Benz300 SEL 6.8 AMGA 45 AMG 4MaticAMG Vision Gran TurismoAMG Vision Gran Turismo Racing SeriesMercedes-AMG F1 W08 EQ Power+Mercedes-AMG GT3 AMG-Team HTP-MotorsportMercedes-AMG GT SMercedes-AMG Safety CarSauber Mercedes C9SLR McLarenSLS AMGSLS AMG Gr. 4SLS AMG GT3MiniMini Clubman Vision Gran TurismoMini-Cooper \'s 65Mini-Copper S \'05Mitsubishi MotorsConcept XR-Phev Evolution Vision Gran TurismoGTO Twin TurboLancer Evolution IV GSRLancer Evolution Final EditionLancer Evolution Final Edition Gr. 3Lancer Evolution Final Edition Gr. 4Lancer Evolution Final Edition Gr. B Rally CarLancer Evolution Final Edition Gr. B Road CarNissanFairlady Z 300ZX TT 2seater (Z32)Fairlady Z Version S (Z33)GT-R Gr. 4GT-R Gr. B Rally CarGT-R LM NismoGT-R NismoGT-R Nismo GT3 N24 Schulze MotorsportGT-R Premium EditionMotul Autech GT-RNissan Concept 2020 Vision Gran TurismoR92CPSilvia (S13) K\'s Dia SelectionSkyline GT-R V specSkyline GT-R V spec II R32Skyline GT-R V spec II Nür R34Xanavi Nismo GT-RPaganiHuayraZonda RPeugeot208 GTi by Peugeot SportPeugeot 908 HDI FAP Team Peugeot TotalPeugeot L500 HYbrid Vision Gran TurismoPeugeot L750 HYbrid Vision Gran TurismoPeugeot Vision Gran TurismoPeugeot Vision Gran Turismo Gr. 3RCZ Gr. 3RCZ Gr. 4RCZ Gr. B Rally CarRCZ Gr. B Road CarRCZ GT LinePlymouthXNR Ghia RoadsterPontiacFirebird Trans-AmPorsche356 A/1500 GS GT Carrera Speedster911 (993) Carrera RS Club Sport911 GT3 (996)911 GT3 (997)911 GT3 RS919 Hybrid (Porsche Team)911 RSR930 Turbo962 CCayman GT4 ClubsportTaycan Turbo SRE AmemiyaFD3S RX-7RenaultR8 GordiniRenault SportClio R.S. 220 EDC Trophy \'15Clio R.S. 220 EDC Trophy \'16Clio V6 24VMégane Gr. 4Mégane R.S. TrophyMégane R.S. Trophy Safety CarMégane TrophyR.S.01R.S.01 GT3RUFCTR3ShelbyShelby GT350Shelby Cobra 427Shelby Cobra Daytona CoupeSubaruBRZ SImpreza 22B-STI VersionImpreza Coupe WRX Type R STI Version VISubaru Falken Tires / Turn 14 Distribution BRZViziv GT Vision Gran TurismoWRX Gr. 3WRX Gr. 4WRX Gr. B Rally CarWRX Gr. 4 Road CarWRX STI Isle of Man Time Attack CarWRX STI Type SSuper FormulaDallara SF19 Super Formula/HondaDallara SF19 Super Formula/ToyotaSuzukiSwift SportTeslaModel S Signature PerformanceToyota2000GT86 Gr. 486 Gr. B Rally Car86 GRMN86 GT86 GT "Limited"Corolla Levin 3door 1600GT APEX (AE86)Crown Athlete GCrown Athlete G Safety CarFT-1FT-1 Vision Gran TurismoFT-1 Vision Gran Turismo Gr. 3GR Supra Nürburgring 24 Hours Race 2019 LiveryGR Supra RZGR Supra Racing ConceptMR2 GT-SS-FRS-FR Racing ConceptSports 800Sprinter Trueno 3door 1600GT APEX (AE86)Supra 3.0 GT TURBO ASupra RZTS030 HybridTundra TDR ProTVRTuscan Speed 6VolkswagenBeetle Gr. 3Golf I GTIGolf VII GTIGTI Roadster Vision Gran TurismoGTI Supersport Vision Gran TurismoGTI Vision Gran Turismo Gr. 3Samba Bus Type 2 T1Scirocco Gr. 4Volkswagen 1200ZagatoIsoRivolta Zagato Vision Gran Turismo',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3103821-box_gts.png',
      'release_date' => '',
      'genre_id' => 6,


    ),

    array(
      'name' => 'Get Even',
      'aliases' => '',
      'description' => 'OverviewGet Even is a first-person shooter/adventure game developed by The Farm 51 and published by Bandai Namco Entertainment for PC, Xbox One, and PlayStation 4.DevelopmentThe graphics were designed with an experimental piece of technology called Thorskan, created by Polish company Better Reality, that can scan real environments and recreate them in 3D.The game\'s story involving the perception of reality was heavily inspired by films such as The Matrix and The Butterfly Effect. The personal stories within the Silent Hill franchise--specifically the first two releases--was also stated to be an inspiration.Get Even was initially planned to release on May 26th 2017. However, publisher Bandai Namco decided to delay the release date one month out of respect for the victims of the bombing at a concert in Manchester, England.System RequirementsPCPC MinimumPC RecommendedOperating System: 64-bit Windows 7, 64-bit Windows 8 (8.1) or 64-bit Windows 10Processor: Intel CPU Core i5-2500K 3.3GHz / AMD CPU Phenom II X4 940Memory: 8 GB RAMGraphics: Nvidia GPU GeForce GTX 660 / AMD GPU Radeon HD 7870DirectX: Version 11Network: Broadband Internet connectionStorage: 40 GB available spaceSound Card: DirectX CompatibleOperating System: 64-bit Windows 7, 64-bit Windows 8 (8.1) or 64-bit Windows 10Processor: Intel CPU Core i7 3770 3.4 GHz / AMD CPU AMD FX-8350 4 GHzMemory: 8 GB RAMGraphics: AMD Radeon RX 480, Nvidia GeForce GTX 970DirectX: Version 11Network: Broadband Internet connectionStorage: 40 GB available spaceSound Card: DirectX CompatibleExternal LinksGet Even Official Site',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2950749-image%20%281%29.jfif',
      'release_date' => '',
      'genre_id' => 32,



    ),

    array(
      'name' => 'Cuphead',
      'aliases' => '',
      'description' => 'OverviewCuphead is a 2D co-operative shooter/platformer that consists solely of one-on-one boss fights. The game\'s unique visual aesthetic draws directly from classic 1920s, 1930s animations by Disney, Fleischer Studios and Ub Iwerks. Not only does the game use animation film techniques but also marries it with an anachronistic history of video games, from Street Fighter and Contra to Space Invaders.Cuphead is slated for a PC release, with an Xbox One version announced at E3 2014. The developers also hope to create a version for the Sega Master System if the game is successful enough.StoryCuphead and Mugman were gambling the Devil, having lost everything and their heads as well, the Devil makes them a deal. Retrieve some items for him and they\'re square.ProductionBrothers Chad and Jared Moldenhauser had spent quite some time experimenting with how it would be possible to achieve the look of an animated cartoon from the 30s. Three whole months were spent just on developing the aesthetic \'old-timey\' feel. For the majority of the process most of the art and animation is painstakingly done frame by frame by hand. On a regular basis the pair had to draw, ink, color and animate 200-350 frames a week, eventually hiring a small staff of nine to help.Initially the pair had tested hand painting animation cels, which would then be scanned in and animated with the filters effects added. When they realised that with the multiple filter layers applied, they couldn\'t tell the difference between hand painted and digitally coloured. And due to the already lengthy production of the game they decided to go with digitally colouring them with Photoshop. ',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2952215-box_cuphead.png',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'Night in the Woods',
      'aliases' => '',
      'description' => 'OverviewNight in the Woods is a 2D platforming adventure game developed by Infinite Fall and published digitally by Finji for the PlayStation 4, PC, Mac, and Linux on February 21, 2017. It was later digitally released for the Xbox One on December 13, 2017 and for the Nintendo Switch on February 1, 2018. It will be released on both iOS and Android devices sometime in 2018.Set in the small town of Possum Springs, players control unstable 20-year-old college dropout Margaret "Mae" Borowski as she returns to her hometown (which is suffering from a stagnant economy) to get reacquainted with her friends and family.Developed in the Unity engine and funded on Kickstarter, the game features a flat and colorful art style by indie animator Scott Benson, where the characters are depicted as anthropomorphic animals and communicate through speech bubbles. The game is designed and composed by Alec Holowka, previously known for Aquaria.CharactersMae BorowskiThe protagonist of Night in the Woods. Mae is the only child of the Borowskis, and the first in the family to go to college. She unfortunately drops out of college midway through her second year, to go back home without any further plans.Beatrice "Bea" SantelloBest friend of Mae until 7th Grade. Bea was valedictorian of her graduating class. Instead of going to college, she stayed home to help out her father with the family business after her mother passed away. Bea is presented as a crocodile, usually smoking a cigarette.Gregg &amp; AngusGregg is Mae\'s wacky best friend, while Angus was "that kid in school who wore ties and fedoras for no good reason." They are a couple and live together. Gregg is depicted as a fox, and Angus a bear.Germ WarfareHis real name is Jeremy Warton, but he is usually referred to as Germ Warfare. Germ is an enigma. He seems friendly, but nobody knows who he is or where he came from. Nobody knows "what his deal is".GameplayNight In The Woods is a 2D side-scrolling platformer, with a heavy emphasis on exploration and character interactions. There are light puzzle-platformer elements in some parts of the game.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2993643-box_nitw.png',
      'release_date' => '',
      'genre_id' => 4,


    ),

    array(
      'name' => 'Midwinter',
      'aliases' => '',
      'description' => 'Pre-Alpha 2014 screenshot.First released in 1989, Midwinter was created by pioneering British game designer Mike Singleton, who died in 2012.The new Midwinter project has the full support of the Singleton family, and includes key members of the original development team. Original Midwinter programmer and industry veteran Dave Gautrey is the technical lead on the game, using the original game code and design documents as a foundation. Games journalist, scriptwriter and author Dan Whitehead has taken on the creative lead role, responsible for narrative design and gameplay. Chilli Hugger founder Chris Wild, developer of the iOS remake of Singleton’s The Lords of Midnight, is overseeing the project.January 2014 pre Alpha landscape testMidwinter has been in pre-production throughout 2013 and will enter the next stage of development with a Kickstarter campaign in early 2014.As of December 7, 2015, the development seems to be on hold, though a comic book drawn by PJ Holden based on the Midwinter universe was released in September 2016.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2588526-header.jpg',
      'release_date' => '',
      'genre_id' => 5,



    ),

    array(
      'name' => 'D&D Lords of Waterdeep',
      'aliases' => '',
      'description' => 'Lords of Waterdeep, and the expansion Scoundrels or Skullport, take euro-style boardgame mechanics and apply them to the deep fantasy realm of Dungeons and Dragons.You play a clandestine Lord, sending agents out to locations across Waterdeep to secure adventurers (Fighters, Rogues, Clerics, and Wizards) in order to complete quests and gain more secret influence across the city. New buildings can be bought, providing new locations and abilities, influence cards can be played to give yourself a boost or to hurt another player\'s efforts, and corruption can be gained to give yourself a boost, but is worth negative points at the end of the game.At the end of seven rounds, each player reveals their Lord and final scoring determines who has the most influence over the city, and is the winner!The iOS version does not yet include the Scoundrels expansion, but successfully ports the popular boardgame to digital play.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2591058-pic1116080_md.jpg',
      'release_date' => '',
      'genre_id' => 2,



    ),

    array(
      'name' => 'Robocraft',
      'aliases' => '',
      'description' => 'Robocraft is a free-to-play competitive third-person shooter, in which customized robots battle in an arena. Individual pieces of opposing robots can be shot off, which affects their ability to fight back or to pilot their robot effectively. Movement is enabled on the robot by adding any combination of movement pieces: Wheels, Hover Blades, Thrusters, Wings, Helium Tanks, Mech Legs, and more.Firepower is added to one\'s robot by adding weapons: rapid-fire Lasers, splash-damage Plasma Launchers, long-range precision Rail Guns, melee Tesla Blades, spread-fire Ion Distorters, Lock-On Missile Launchers, and more, including variations of many of the aforementioned weapons with different trade-offs.Modules are functional pieces that allow unique abilities like a short-range teleport Blink Module, an invisibility Ghost Module, a deployable defensive Disc Shield Module, and more.Each robot has a limit to the maximum amount of cubes and other functional parts that can be placed on it (measured as "CPU pFLOPS"). The limit is 2000 CPU.The basis of a robot design is made out of health cubes and light cubes, and each of those come in different shapes to adjust the look of a robot as desired. Light cubes are the same size as health cubes, but they take up 3 CPU and have more health per cube at one fifth of the weight, allowing for smaller, lighter robot designs. Each cube placed, no matter which type, will apply a health boost of a small percentage to all parts on a robot, but light cubes apply a smaller boost percentage.Speed boost is applied by adding thrusters or propellers to bots, which raises the maximum speed in the direction that thrust is applied. There is no hard speed cap, and adding thrusters up to the CPU limit will continually increase the speed of a robot based on the movement parts\' base speed.Damage boost is applied for every CPU not spent. In a non-linear curve, there is 100% damage boost at 0 CPU and 0% damage boost at 2000 CPU. A robot can be made to deal more damage essentially at the cost of speed or health.Players can earn or buy loot crates that drop new parts or bundles of currency of different rarities, ranging from Common to Legendary. These crates are awarded at the end of a match, with the quality of a crate depending on the player\'s position on the scoreboard, and are also given out as a daily login bonus, with the quality of the crate going up by one tier for each consecutive daily login.Cosmetics will be found only in crates, and they can be added to a bot without compromising its design with a reserved set of Cosmetic CPU.XP is used to level up the player\'s account. Each level-up awards an additional crate.If a player wants to acquire a particular part, currently-owned parts can be "recycled" into a currency called Robits, and parts can be purchased a la carte with this currency.Players utilizing the game\'s clan functionality will receive a Robit payout at the end of the month, determined by the amount of XP its contributing members earned during that month, in what are called "clan seasons".Game ModesNote that while there are several modes in Robocraft, Team Deathmatch and Battle (or League) Arena are the only multiplayer modes that will always be available. Elimination and The Pit may still show up as Brawl game types but are otherwise unavailable outside of .Play vs. AI - The player is placed into a game of Team Deathmatch where all allies and enemies are AI-controlled.Team Deathmatch - Two teams of 5 try to score as many kills of the opposing team as possible until a score limit is reached or time runs out.Battle Arena - Available in ranked and unranked modes in which two teams of 5 attempt to capture and hold 3 mining locations to build up energy for their reactor. When one team controls all three points, the enemy\'s reactor shield is removed and energy can be stolen from the reactor by shooting crystals. At the 5- and 10-minute marks, if there is a score disparity, a Protonite Core crystal will appear at a central location of the map. If the losing team manages to destroy this core in time, their team acquires the difference in score between the two teams. When one team\'s reactor is charged to 100%, the orbiting "Annihilator" ship of the winning team destroys the enemy reactor.Brawl - A game type that rotates every few weeks with custom rules and variations on either Team Deathmatch, Battle Arena, Elimination, or The Pit. Certain parts may be restricted and certain numerical values may be changed from how they normally behave.Custom Game - Players can organize their own private game of Battle Arena, Team Deathmatch, or Elimination, with up to 5 players on each team. Custom games of The Pit are still free-for-alls. Future plans for this mode include sliders and adjustments for many of the game\'s variables, like health multipliers, damage multipliers, the match timer, or whether or not health regeneration is enabled.Elimination - Two teams of 10 try to eliminate the other team in combat with no respawns.The Pit - A 10-player free-for-all mode in which every player attempts to score as many kills for themselves as possible. Partial points are awarded for contributing to someone else\'s kill.Battle Arena (legacy version, no longer available) - Taking cues from the MOBA genre, the goal is for two teams of 8 players to try to destroy the opposing team\'s reactor core. A regenerative shield around a team\'s reactor core will be active as long as a team controls at least one of three towers on the map, with more benefits awarded as more towers are controlled. Players\' robots will "overclock" the more towers they control, the more they heal allies, and the more they damage enemy players. Unlike a MOBA, there are no "creeps" or AI-controlled units of any kind.Update HistoryOn November 2014, EasyAntiCheat (EAC) was added to the game to counteract various different cheats like instant reloading. On December 9, 2014, Tank Tracks and Tesla Blades were added, alongside several new features.On February 18, 2015, the "Dawn of the Megabots" update was released. Queues for new modes "Megaboss" and "Challenge Mode" were added around the addition of megabots, extremely large robots for high level players. Rotor blades were added to allow players to build helicopter-like robots.On April 30, 2015, the "Respawned and Overclocked" update was released. This added a new core battle mode to the game (later called Battle Arena) in which tower objectives were added to the maps containing crystals that each team would have to shoot. This update introduced concepts such as healing and overclocking to the game for the first time.On June 24, 2015, the controversial update "Team Orders" was released. Armor restrictions and requirements were placed on players in order to matchmake into a particular tier. The titular additions from this update were the new map pings at the player\'s disposal: "On My Way", "Danger", and "Go Here". Features like surrender votes, penalties for leaving a match early, and improved post-battle stats were also introduced.On July 28, 2015, "Robocraft: Unleashed" was released. After a heated response from the community, most build restrictions from the Team Orders update were removed.On August 27, 2015, "Legends of the Pit" was released, which introduced the free-for-all deathmatch mode, The Pit.On September 24, 2015, the update "Share, Drive, Fight" was released. This marked the release of the Community Robot Factory, which allowed players to rent other players\' robots or buy them for real money. This was also the first time players could test out their robots against AI players, though their behavior patterns were very basic.On October 22, 2015, the "League of Mechs" update was released. This update added mech legs as a new movement type as well as a ranked "league" version of the Battle Arena game mode.On December 17, 2015, the update "Full Spectrum Combat" was released. This was the first update to implement "The Vision" proposed by Freejam on their forums (most notably, "Realising the Vision: Chapter 7"). This updated included an update to the Unity 5 game engine, the ability to paint cubes, and the collapse of all armor cubes to one type. However, a variety of new armor cube shapes were introduced. In addition, up to 25 garage slots are now free for all users. Hotly debated on the forums was the removal of the Pilot seat, a notable design feature since the early days of Robocraft that previously provided a single weak point that robots needed to be designed around in order to protect it.On March 3, 2016, "Maximum Loadout" was released. This update introduced the ability to use multiple weapon types on a single robot. In addition to this, the maximum pFLOP was increased to 1750 at Level 150. Firing weapons drains the power of your bot, which then regenerates over time, though it is possible to get a power module which reduces this cooldown from 10 seconds to 8. In addition to this, two new modules have been added to the game. The DSM, or Disc Shield Module, deploys a stationary shield, which can be fired through only by the team of the player that deployed it and has a long cooldown. In addition to this, the BLM, or Blink Module, allows robots to warp forward a relatively long distance at the expense of massive power consumption and a short cooldown. A controversial change in this update was the removal of megabots. Freejam and a significant portion of the community saw megabots as a "failed experiment" that either actively hindered the quality of the game in modes like Team Deathmatch (now called Elimination) or resulted in very uneven queue times when placed in their own mode like Megaboss.On April 13, 2016, the update "Ghosts in the Machine" added the Ion Distorter, a futuristic shotgun, and the Ghost Module, which allows invisibility at the expense of your power meter.On April 28, 2016, a controversial update named "Epic Loot" switched currency and got rid of the tech tree, allowing players to buy any parts without needing to level up. The currency RP (free, earned currency) and GC (real-money currency that could be purchased in packs) were removed and replaced with a singular free currency called Robits. Players\' banked RP, and all RP prices in the shop, were divided by 63 in this conversion in order to make prices more readable. This update also removed cube depots and introduced crates as one of the only two sources of parts in-game, the only other way being to recycle weapons or other items into Robits, which can then be used to forge parts. In the wake of this release, though likely unrelated, Steam incorporated "recent user reviews" to show what a game has been like lately in light of recent updates. Approximately one month after the Epic Loot update, the recent (30-day) review score on Steam reflected a 33% rating of "Mostly Negative" while the game as a whole, including all lifetime user reviews on Steam, had a "Mostly Positive" 76% review score. Users often cite a longer grind as a result of the switch to loot crates as the reason for their dislike of the update.On June 2, 2016, the "Battle For Earth" update added a new traditional Team Deathmatch mode, where two teams try to earn the most kills, on a brand new map that takes place on Earth and is used only in this mode. The previous Team Deathmatch mode was renamed to Elimination and functioned the same as it always had, in which every player gets one life with no respawns to try to eliminate the enemy team. Also new to this update was the addition of player avatars. A major game update was released on June 30 adding a smaller variation of the aeroflak gun as well as rebalancing the game\'s power meter such that robots with more CPU get more power with which to use their weapons and modules. This power rebalance was meant to address the problem of experienced players with high-end weapons taking advantage of low-CPU matches against new players, whose robots tend to be more fragile.On July 14, 2016, the "Enter the Shredzone" update added two new high-CPU parts: the minigun-esque Chain Shredder and the area of effect disabling EMP Module. This update marks the first time that game had a basic tutorial system, introducing the player to the basics of building a robot, moving it around, and engaging in combat. Also new in this update is an expanded single player mode. The previous iteration of single player mode would put a player on a map with robots that didn\'t attempt very much to actually fire back at the player but rather just move around to provide moving targets. For the first time in this update, pulling robot designs from the community, the player was placed into a Team Deathmatch game where all allies and enemies were AI-controlled for the player to practice against. On August 4, the "Strut Your Stuff" update added struts, high-HP support pieces, as well as more advanced information readouts in the build mode and general balance updates to some weapons.On September 6, 2016, the "Roboclans Alpha" update was released. Apart from the usual balance changes, as the name implies, this update provides preliminary clan functionality, where players can join and create clans with their own lists of players and clan logos. There were also robust changes to the game\'s chat system, showing chat history, providing as many channels as the player likes, and giving users commands for advanced control. Platoons, the existing system for players to ensure that they\'re on the same team once a match has been made, have been renamed to "parties", representing future changes coming to the system. This update paves the way for future updates to clans, parties, and other social features. The existing tutorial was also expanded on slightly in this update, making movement controls clearer to new players and showing the first bits of in-game story as a backdrop to the game\'s multiplayer conflicts. On September 30, sprinter legs, less-armored but faster-moving versions of mech legs, were added.On October 6, 2016, the "Clan Party" update was released. Front and center in the changes for this update were changes to the party system, which was given a more modern widget in the corner of the screen for managing one\'s party and showing whether or not other players have readied up. Previously, 2 of the 5 party slots were only available to the party leader if they had a premium membership. This update marks the first time that all party slots are available to free players. Changes to premium memberships were also made. For $50, or the regional equivalent, lifetime premium membership has been made available. Also, to address concerns of players saying that the game\'s grind is too long (ever since the Epic Loot update), players with premium memberships get three times as many Robits for recycling unwanted parts and blocks than free players do. Bundles of crates and time-limited premium are still available in the shop. For players launching the game through Steam, Steam trading cards were also added. On October 20, the "Cash of Clans" supplementary update was released, including the game\'s first clan season that pays out Robit rewards at the end of a month.On November 17, 2016, the "Fast and Formidable" update was released. Maximum speed was increased for all movement parts, but they are now more affected by weight, where heavier bots will move slower than lighter bots. Also, while the game previously tied the maximum allowed CPU to the player\'s account level, now all players have access to a full 2000 CPU, up from the previous 1750, but with the trade-off of larger bots having less weapon energy. This was done in part to provide more depth and diversity to building but also to improve matchmaking; up to this point in the game\'s history, bots with more CPU would nearly always have native advantages against bots with less CPU. On December 8, a localization update was released to add support for 10 additional languages. On January 12, propellers were added as a high-speed movement part intended to propel heavier aircraft.On February 16, 2017, Robocraft received a Matchmaking Update. ELO was implemented for the first time to ensure better matchmaking since tiers were removed. Two separate rankings were implemented: one for Normal Mode (Battle Arena), which is visible to all players, and one for Basic Mode (Team Deathmatch and Brawl), which is hidden. This ensures that Normal Mode is the go-to mode for competitive players pursuing higher ranks and that players in less competitive modes are still matched against players of similar skill for more interesting matches.On March 2, 2017, Robocraft was promoted from alpha to beta. New in this update was a replacement for Normal Mode, reduced to 5v5 instead of 8v8, with different objective types than the legacy Battle Arena mode. Maps were overhauled and redesigned, clearly echoing the design of the previous maps but with more focus on symmetry and providing adequate (but not total) coverage from long-range or aerial threats. Because the new maps are smaller than the old ones, they also received a graphical update, allegedly at no additional cost to system requirements. On March 30, the names "Normal Mode" and "Basic Mode" were removed in favor of their previous names, "Battle Arena" and "Team Deathmatch", and an unranked Battle Arena queue was added alongside League Arena, with League Arena providing additional XP and crates as an incentive. On May 4, radar parts were removed in favor of a passive spotting system, and the Windowmaker module was added so that players can spot the enemy team through walls on a cooldown.On May 11, 2017, the first iteration of custom game functionality was released. This marks the first time that players can choose their opponents and vary team sizes to be less than 5v5 if they desire. On May 18, some improvements were added to custom game functionality, and piles of Robits became available in crates in different amounts and rarities.On June 1, 2017, Robocraft got a "Wheely Big Update". Wheels were completely overhauled to resolve long-standing physics and control issues that prevented them from staying competitive with newer movement types; they were also resized so that there was a more gradual progression from small to large wheels as their rarity increased. Also new in this update, alongside many balance changes, was a new, smaller version of the Lock-On Missile Launcher called "LOML Stinger". The larger LOML has been renamed to "LOML Viper". On June 15, custom games received a few additional options, and nanos (healing guns) were reworked; instead of shooting beams like they used to, it shoots healing projectiles with a soft lock-on.On June 30, 2017, the "Return of the Mega" update was released. Mega bots were made available once again, but to avoid the problems with placing them in game modes before, they\'ve been restricted to custom games only. A mega bot is now defined as any bot between 2001 and 10000 CPU. New custom game options were also added, and balance changes were implemented. On July 13, the first of several significant changes to the building system was rolled out. The highest-tiered "TX" cubes of old were brought back as "light cubes" for 3 CPU, 3x the HP of normal cubes (renamed "health cubes"), and one fifth of the weight. The idea is that it will allow players to build smaller and lighter at max CPU, in preparation of changes coming to the energy system. Blocks also now boost the health of all parts on a player\'s bot, meaning that the more cubes you put on your bot, the longer your weapons and other parts will take to get shot off.On July 27, 2017, Robocraft got an "Aerofoil Update". Since the primary game mode now relies on stopping on control points to capture them, planes were at a disadvantage, since they need to constantly keep moving. The new wings, or aerofoils, were retrofitted into VTOL-style (Vertical Take-Off and Landing) parts so that they can come to a stop and hover, making planes easier to control. Also introduced in this update, similar to the health boost system in the previous update, is a speed boost. Adding movement parts and thrusters to a robot will increase its speed boost, which raises the maximum speed that it can reach. For the first time in the game\'s history, this patch made it so that there are no longer any hard speed caps except for how many thrusters and movement parts can fit into a robot\'s CPU limits. On August 10, the final boost system, damage boost, was implemented alongside new robot copy features. The lower the robot\'s CPU, the more damage boost percentage they get, up to 100% boost. Robots are able to be copied as many times as desired, but the copied bot cannot be edited unless the user has the available parts in their inventory to forge the robot in its entirety. This update also implemented a new larger variant of the rail gun called the Impaler.On August 24, 2017, Robocraft released from Early Access with "1.0". In addition to some balance changes, cosmetics were given "Cosmetic CPU" so that they can be added to a bot without affecting the boost systems. All cosmetics were changed to have 0 mass and 0 HP so that they don\'t risk affecting gameplay. On September 21, there was an update that added the Gyro Mortar, an arcing splash damage weapon, as well as a few extra options around camera control methods.On November 16, 2017, the Body Builder update was released.  In addition to the usual balance changes and bug fixes, pre-made bodies can be selected as a basis for making new robots quickly if the player doesn\'t wish to build a robot from scratch.  All health cubes were also made completely free so that players can experiment and build more freely.  The game finally received a long-awaited Undo button in the build mode to undo mistakes. Robocraft is currently available for Windows, Mac OS-X, and Linux.System RequirementsOS: Windows 2000/XP/Vista/7/8/8.1/10, Mac OS X 10.7+, or Ubuntu 10.10+Processor: Intel dual core or better with SSE2 support or equivilent AMD familyMemory: 4 GB RAMGraphics: Shader Model 3.0 Compatible GPUNetwork: Broadband Internet connectionHard Drive: 1 GB available spaceResolution: Minimum resolution 1024x768',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2728905-8811048928-Roboc.png',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'Bodycheck',
      'aliases' => '',
      'description' => 'OverviewBodycheck is a sports game inspired medieval origins of football developed by Ludometrics for the PlayStation Vita. It will focus on rough play with no penalties for fouls, as well having match officials who can be bribed and magical aids that can be called in to assist. The game will support multiplayer.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2590971-1189149106-11874.jpg',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'World of Speed',
      'aliases' => '',
      'description' => 'World of Speed is a Free to Play online action racing game currently under development by Slightly Mad Studios, the developer of the Need for Speed: Shift series, and the crowd-funded Project CARS. The game is expected to feature fictional tracks set in London, Moscow and Monaco, as well as officially licensed venues such as Brands Hatch in the UK. World of Speed was initially expected to release some time in 2014. After a limited beta period, the forums for the game entered into \'read-only\' mode on the 1st of February 2017. The game is said to be undergoing \'substantial revisions\' following a series of focus tests led Slightly Mad Studios to believe that the game \'was not good enough for our players\'. A timeline for any future releases was not provided, and the game\'s future is currently unclear.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2599910-2943236040-56631.jpg',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'Million Onion Hotel',
      'aliases' => '',
      'description' => 'An action puzzle game with a pixel art style along with self-proclaimed "crazy sounds".',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2605288-visualmini.png',
      'release_date' => '',
      'genre_id' => 18,



    ),

    array(
      'name' => 'Forma.8',
      'aliases' => '',
      'description' => 'Overviewforma.8 is a 2D metroidvania game developed by MixedBag for PC, mobile and consoles.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2923378-6220228854-image',
      'release_date' => '',
      'genre_id' => 43,



    ),

    array(
      'name' => 'Hover',
      'aliases' => 'Hover: Revolt of Gamers',
      'description' => 'OverviewHover is a game that revolves around a struggle between "Gamers" and the anti-entertainment dictatorship in a futuristic City. As the player, you lead a team of young rebels equiped with high tech gears allowing crazy jumps and speed. You challenge the security forces, sabotage propaganda, and ultimately, dethroning the mayor. The game is centered around quick movements that can propel your character across large distances, and features a scoring system similar to that of the Tony Hawk series. Hover takes place in colorful a futuristic sci-fi world, where the player will be able to take control of a variety of characters including humans, aliens and robots.Hover was successfully funded on Kickstarter on May 22, 2014 and received $116,398 with an original goal of $38,000. The game was also selected to be on Steam via the Greenlight program.Hover has been developed by an indie French studio named Fusty Game, which received the support of Midgar Studio in the final stretch and for the game\'s soundtrack. The game also features new songs from original Jet Set Radio composer and music director Hideki Naganuma. Hover was released on PC, Mac and Linux on May 31st 2017. The game is schedule on consoles in late 2017 as Xbox One, PS4, and Switch versions were a stretch goal from the successful Kickstarter (which you can find here).It features Oculus Rift support on PC.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3046320-box_hover.png',
      'release_date' => '',
      'genre_id' => 1,


    ),

    array(
      'name' => 'Future Unfolding',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3082087-future%20unf.jpg',
      'release_date' => '',
      'genre_id' => 4,



    ),

    array(
      'name' => 'Orcs Must Die! Unchained',
      'aliases' => '',
      'description' => 'OverviewOrcs Must Die! Unchained is the third entry in the Orcs Must Die! franchise presently being developed. The story is set a couple years after the events of the second game where rifts to many different worlds have opened up starting a power struggle for control over the rifts. The sides are roughly divided between the Order (aka the warmages, humans, elves, dwarves, etc) and the Unchained (the orcs, goblins, ogres, and so forth.) This split is not represented mechanically in the game however.Like the previous games OMDU is a third person tower defense games where players can lay down traps to defeat waves of enemies, but OMDU has a competitive multiplayer focus where two teams of 5 face off on mirrored maps. To win a team must escort their minions into their opponent\'s rift. Each minion that enters a rift reduces that team\'s rift points. If the rift points reach 0 that team loses much like in the previous games.GameplayThe game has been described as a MOBA but the basic mode is more like two concurrent but opposite games of traditional OMD than it is a game of DOTA or League of Legends. Each team has lanes (amount depends on the map) to the opponents base but the lanes are independent for each team. Meaning that each teams minions do not interact with one another. Each lane has gates that the team defending that lane can open and close manually. The minions and players of the team attacking the lane will slowly break the gate if it is closed.Players have access to a shop equivalent while in a match. They can spent coins at Weavers on various passive upgrades for the duration of a match. The Weaver screen can be brought up anywhere at any time and the effects are instantaneous. At war camps players can upgrade the level of minions spawning using leadership points and choose the type of minions to spawn. Just like the previous games minions spawn in waves. There are no break or set up periods between waves.There are various amount of hero characters (currently 15) that players can choose from. Each with a set of basic abilities including a default weapon that has a primary and secondary attack, two active abilities that by default are bound to the "Q" and "E" buttons, as well as an innate passive ability. Players also have a hot bar that includes their traps, other abilities, and glyphs. These hot bar items can be arranged in customizable "decks" that that house cards of each equipment type (gear, traps, glyphs.) These decks are not character specific allowing characters to be very customizable. Decks are sort of like load out options of other multiplayer games but cannot be changed mid-match.Additional noncompetitive modes have been discussed but are not implemented as of now. There are no plans for a single player campaign mode.Closed Alpha/Beta and Founder\'s PacksThe game has been in a "sign up to play the alpha/beta" state since it\'s reveal at PAX East 2014. While the game will be free-to-play when released as of now potential players can only get into the game by buying one of the founder\'s bundles for instant access or by a free sign up for the chance of access. Founders gain additional starting heroes, exclusive skins, and a large amount of the paid currency, gold.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2619411-logo-cc3be2be34604ab9ae5e6a260a95b00d.png',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'Rain World',
      'aliases' => '',
      'description' => 'OverviewRain World is 2D stealth platformer developed by Joar Jakobsson and James Primate. PC versions were successfully funded through Kickstarter on February 14, 2014, and it has since been picked up by Adult Swim Games for console release.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2848306-cotd_email_1440429715_00063.jpg',
      'release_date' => '',
      'genre_id' => 41,



    ),

    array(
      'name' => 'Interplanetary',
      'aliases' => '',
      'description' => 'OverviewInterplanetary is a sci-fi turn-based strategy game currently in Early Access on Steam.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2622030-ip_logo_space_bg.jpg',
      'release_date' => '',
      'genre_id' => 2,



    ),

    array(
      'name' => '20XX',
      'aliases' => 'Echoes of Eridu',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3035725-box_20xx.png',
      'release_date' => '',
      'genre_id' => 1,


    ),

    array(
      'name' => 'son of Scoregasm',
      'aliases' => '',
      'description' => 'OverviewSon of Scoregasm is a dual-joystick shooter developed by Charlie\'s Games for PlayStation Vita and PC.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2633111-8057761067-13951.png',
      'release_date' => '',
      'genre_id' => 31,



    ),

    array(
      'name' => 'starCrawlers',
      'aliases' => 'star Crawlers',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2634064-sc.png',
      'release_date' => '',
      'genre_id' => 5,


    ),

    array(
      'name' => 'Battle Chef Brigade',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3041506-438123-battle-chef-brigade-nintendo-switch-front-cover.jpg',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'S.T.A.L.K.E.R.: Lost Alpha',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2635626-lostalpha.jpg',
      'release_date' => '',
      'genre_id' => 2,



    ),

    array(
      'name' => 'Bloom: Memories',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3026329-gb_default-16_9.png',
      'release_date' => '',
      'genre_id' => 5,



    ),

    array(
      'name' => 'Meriwether: An American Epic',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2640020-meriwether.jpg',
      'release_date' => '',
      'genre_id' => 5,



    ),

    array(
      'name' => 'Shiness: The Lightning Kingdom',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2991330-box_shiness.png',
      'release_date' => '',
      'genre_id' => 5,



    ),

    array(
      'name' => 'MechRunner',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2641090-b489432c67fc2ed6ae08a76a5144689b_large.jpg',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'Wulverblade',
      'aliases' => '',
      'description' => '',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3005646-box_wb.png',
      'release_date' => '',
      'genre_id' => 1,



    ),

    array(
      'name' => 'Siegecraft Commander',
      'aliases' => '',
      'description' => 'OverviewSiegecraft Commander is a strategy game developed and published by Blowfish Studios for Mac, PC, iPhone, iPad, Xbox One, and PlayStation 4.System RequirementsPC MinimumOperating System: Windows XPProcessor: SSE2 instruction set supportMemory: 4 GB RAMGraphics: DX9 (shader model 3.0) capabilitiesNetwork: Broadband Internet connectionStorage: 2 GB available spaceMac MinimumOperating System: Mac OS X 10.6Processor: SSE2 instruction set supportMemory: 4 GB RAMGraphics: DX9 (shader model 3.0) capabilitiesNetwork: Broadband Internet connectionStorage: 2 GB available spaceExternal LinksSiegecraft Commander Official Website',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/3016191-box_scc.png',
      'release_date' => '',
      'genre_id' => 2,



    ),

    array(
      'name' => 'Dreadnought',
      'aliases' => '',
      'description' => ' Dreadnought is a free-to-play game developed by Yager. Dreadnought is a class-based multi-player shooter, likened to a slow motion version of Team Fortress 2. Players are divided into two teams of five players each. Each player selects a ship, effectively his/her class, in which to pilot. There are currently five announced ship types. A team\'s ship selection will heavily influence the outcome of a match.The game heavily emphasizes energy management as a game mechanic. Players are able to divert ship energy to one of three modules; engines, weapons, or shields. Doing so will drain his/her ship\'s power. Power will regenerate over time. Diverting power to engines will increase the ship\'s maneuverability and speed. Weapons will increase fire rate and damage dealt. Powering shields will increase the amount of damage a ship\'s shield can take before failing.Due to the slower pace of Dreadnought, ship placement and teamwork are more emphasized then reaction times and twitch shooting. Victory will go to the team that can play to their ship’s strengths and minimize ship weaknesses.Dreadnought is set to be released in the early months of 2015. SHIPS DreadnoughtThe titular Dreadnought is the hardiest of the announced ships. Dreadnoughts will likely fulfill the role of Tank for a team. It features weaponry that performs well at close to medium ranges. The Dreadnought is also the slowest ship in the game but it has a special warping ability to instantly move across the battlefield and join the action. This ability consumes energy and the player must wait for a cooldown before it can be used again. The Dreadnought should be used to close with the enemy and take enemy firepower. When supported by a Tactical Cruiser, the Dreadnought becomes very difficult to destroy.DestroyerThe Destroyer is a combat ship that can perform a variety of roles for a team. It is armed with medium ranged chain cannons and has a moderate damage output. The Destroyer also has a special ability called the Plasma Ram. Engaging the Plasma Ram will speed up the Destroyer and cause a great deal of damage to any ship it comes in contact with. Destroyers lack specialization, which makes them proficient in many combat roles but excellent at none.CorvetteCorvettes are the fastest and most agile ships available. They perform the role of forward reconnaissance and hit-and-run attacks. Corvettes utilize repeating cannons for medium range damage and a slow moving torpedo for high damage at close range. The Corvette has a cloak ability that turns the ship invisible for a limited time. The cloak will break if weapons or other abilities are used. Communication and effective use of cloaking will be essential in piloting the Corvette.Artillery CruiserThe role of long range damage dealer rests on the hull of the Artillery Crusier. A ship designed around a single weapon, the Heavy Tesla Cannon. The Artillery Cruiser is designed to sit behind friendly ships and pour forth a barrage of heavy firepower. Artillery Cruisers are not particularly fast or mobile, so distance is of great importance. Keeping space between the Artillery Cruiser and its target will help ensure victory. Artillery Cruisers also have the ability to enter a Rapid Fire Mode. This directs all energy to the main cannon but saps power from the engines, turning the Artillery Cruiser into an immobile turret with a greatly increased fire rate.Tactical CruiserThe primary support ship in the game, the Tactical Cruiser is a necessary addition to any fleet. It is armed with a pair of beam turrets, capable of both repairing allies and damaging enemies. The beam turrets deal very limited damage to foes, so it is more effective to focus on repairing friendly ships. This ship can also redirect all power to its beams, greatly increasing repair speed for a limited time. Using this ability will make the Tactical Cruiser vulnerable and should be used cautiously. Tactical Cruisers are very weak on their own, and should always stay close to allied ships. Due to their ability to repair friendly ships, they are a likely target for enemy vessels.',
      'image' => 'https://www.giantbomb.com/api/image/screen_kubrick/2643742-screen%20shot%202014-06-10%20at%2012.58.37%20pm.png',
      'release_date' => '',
      'genre_id' => 1,
),


    );

    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        self::seedGenres();    $this->command->info('tabla generos inicializada con datos!');

        self::seedUsers();     $this->command->info('tabla usuarios inicializada con datos!');

        self::seedGames();     $this->command->info('tabla GAMES inicializada con datos!');


    }

    private function seedGames()
    {
        DB::table('games')->delete();
        foreach ($this->arrayGames as $games) {
            $game = new Videogames();

            $game->name = $games['name'];

            $game->aliases = $games['aliases'];

            $game->description = $games['description'];

            $game->image = $games['image'];

            //$game->release_date = $games['release_date'];

            $game->genre_id = $games['genre_id'];

            $game->save();
        }
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
