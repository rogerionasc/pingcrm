<?php

namespace Database\Factories;

use App\Models\Cursor;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursorFactory extends Factory
{
    protected $model = Cursor::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Laravel', 'Vue.js', 'React', 'Angular', 'Symfony', 'Express.js', 'Django', 'Ruby on Rails', 'Spring Boot', 'Flask',
                'Java', 'JavaScript', 'Python', 'PHP', 'Ruby', 'C#', 'C++', 'Swift', 'Kotlin', 'Go',
                'Node.js', 'ASP.NET', 'Ruby', 'Perl', 'Scala', 'Rust', 'Haskell', 'Objective-C', 'TypeScript', 'Dart',
                'HTML', 'CSS', 'SQL', 'Shell', 'Assembly', 'R', 'Julia', 'Lua', 'VB.NET', 'Clojure', 'Groovy',
                'Matlab', 'Fortran', 'Scheme', 'Elixir', 'F#', 'COBOL', 'Pascal', 'Ada', 'Lisp'
            ]),
            'description' => $this->faker->paragraph(1),
        ];
    }
}
