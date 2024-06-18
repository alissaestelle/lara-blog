<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

?>

<!-- <script type="text/javascript">
    import Avatar, { genConfig } from 'react-nice-avatar';
    import gradients from './gradients.js';

    const newAvatar = () => {
    let config = genConfig();

    let gradient = gradients[Math.floor(Math.random() * gradients.length)];
    let colors = [config.bgColor, gradient];
    let thisColor = colors[Math.floor(Math.random() * colors.length)];

    config.bgColor = thisColor;

    return {...config};
    }
</script> -->

<?php 

/*
@extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
*/

class UserFactory extends Factory
{
    /*
    The current password being used by the factory.
    */

    protected static ?string $password;

    /*
    Define the model's default state.
    @return array<string, mixed>
    */

    public function definition(): array
    {
        $name = fake()->name();

        $strName = strtr($name, [
            'Dr. ' => '',
            'Miss ' => '',
            'Mister ' => '',
            'Mr. ' => '',
            'Mrs. ' => '',
            'Ms. ' => '',
            'Prof. ' => '',
            "'" => '',
            '.' => '',
        ]);

        $url = str_replace(["'", ' '], ['', '-'], $strName);
        $username = str_replace(["'", ' '], ['', '.'], $strName);
        $email = explode('.', $username);

        return [
            'name' => $name,
            'username' => strtolower($username),
            'url' => strtolower($url),
            'email' => "{$email[0]}@{$email[1]}.com",
            // 'email' => fake()->unique()->safeEmail(),
            'verified' => now(),
            'password' => 'password',
            // 'password' => (static::$password ??= Hash::make('password')),
            'remember_token' => Str::random(10),
        ];
    }

    /*
    Indicate that the model's email address should be unverified.
    */

    /*
    public function unverified(): static
    {
        return $this->state(
            fn(array $attributes) => [
                'verified' => null,
            ]
        );
    }
    */
}

?>
