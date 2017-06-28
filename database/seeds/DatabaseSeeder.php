<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete old data if necessary
        DB::table('languages')->delete();
        DB::unprepared('ALTER TABLE users AUTO_INCREMENT=1;');

        DB::table('projects')->delete();
        DB::unprepared('ALTER TABLE users AUTO_INCREMENT=1;');

        DB::table('requirements')->delete();
        DB::unprepared('ALTER TABLE users AUTO_INCREMENT=1;');

        //seed languages
        App\Language::create([
          'id' => '1',
          'name' => 'PHP',
          'blurb' => '<p>I honestly had not programmed in PHP much, but understood that it was a significant part of your stack and set out to learn more after receiving a reply to my application. Prior to this weekend, I had only written some simple view code while working on the front-end of some earlier projects in my career.</p><p>However after scheduling this interview I ran through some refresher courses and then tackled Laravel. After going through most of the beginner and some intermediate tutorials on <a href="https://laracasts.com/skills/laravel" target="blank">Laracasts</a>, I constructed this site using Laravel and Laravel build tools.</p>'
        ]);
        App\Language::create([
          'id' => '2',
          'name' => 'Javascript',
          'blurb' => '<p>Javascript is the language I am most familiar with. Early in my career this took the form of front-end work with JQuery and native JS, I quickly picked up AngularJS after seeing the robust kinds of applications it could provide. I have since also learned several front-end libraries like Chart.js, Angular-Material/MDL, and Slideshare.</p> <p>When I transitioned to a fullstack role I chose Node/Express for my server-side coding and MongoDB for my database due to my familiarity with the language. I also have experience with libraries like node-sql, Handlebars, Pug/Jade, and several others. I have also dabbled in React, Vue, and Backbone, as well as Angular (v2-4), but am not yet proficient enough to write production code in these libraries.</p>'
        ]);
        App\Language::create([
          'id' => '3',
          'name' => 'HTML/CSS',
          'blurb' => '<p>I am proficient with HTML(5), CSS(3) and the CSS preprocessor SASS with a particular interest in responsive and mobile design.</p>'
        ]);
        App\Language::create([
          'id' => '4',
          'name' => 'Build Tools',
          'blurb' => '<p> I am familiar with several NPM based task runners (like Uglify) and testing libraries (like Mocha and SuperTest), GIT version control, and image editors like Gimp and Inkscape.'
        ]);

        //seed projects
        App\Project::create([
          'id' => '1',
          'name' => 'This Portfolio Site',
          'imageUrl' => '/portfolio.png',
          'blurb' => '<p>This website is my first foray into Laravel programming, I have to say I am impressed with the robust set of MVC tools it has to offer. This website is constructed purposefully with little JS, leveraging Blade, Eloquent, and MySQL to allow me to better understand it and it&#39;s workflows.</p>'
        ]);
        App\Project::create([
          'id' => '2',
          'name' => 'Data On Politics',
          'imageUrl' => '/dop.png',
          'blurb' => '<p><a href="http://www.dataonpolitics.com" target="blank">Data On Politics</a> is a personal project I have been developing for a few months to better understand some areas I sorely lack experience in: digital marketing and SEO. I use my primary stack, MEAN, with Handlebars templating. All tasks, including deployment and maintenance, social media marketing, copywriting, design and development, and image creation have been done by myself in my spare time.</p>'
        ]);
        App\Project::create([
          'id' => '3',
          'name' => 'SalesBro and Tier III Resources',
          'imageUrl' => '/sb.png',
          'blurb' => 'When I was first hired at Time Warner Cable, it was for a Customer Service position, I quickly moved into "Tier III", an advanced troubleshooting department that deals with networking issues, outage tracking, and escalated customer issues. While I was in that role I developed "SalesBro", a simple web application to automate some order entry tasks for myself and my department. I hosted it on a local sharepoint site where it quickly gained usage across Wisconsin. After noticing, TWC&#39;s head of Customer Service decided the tool was beneficial and to allow access for all customer facing departments. We then migrated to a MEAN-stack Ubuntu server.</p><p>I then worked full-time on this and one other tool, "Tier III Resources", a knowledge management and training site for Tier III with two other developers, providing maintenance, trainings (in-person, remote, and recorded), and further development. To my knowledge, both tools are still in use today.</p>'
        ]);
        //seed requirements
        App\Requirement::create([
          'id' => '1',
          'name' => 'Must be effective in prioritizing tasks and responsibilities',
          'body' => '<p>I have been given roles with little oversight and direction at my last two positions and have excelled at creating timelines, prioritizing projects, and time management.</p>'
        ]);
        App\Requirement::create([
          'id' => '2',
          'name' => 'Must have working knowledge of WordPress',
          'body' => '<p>I actually have never used WordPress. However, after viewing a few theme building tutorials, I believe I can pick it up fairly easily and would be more than willing to learn.</p>'
        ]);
        App\Requirement::create([
          'id' => '3',
          'name' => 'Strong familiarity with, and interest in, website development, mobile website development, and responsive web design.',
          'body' => '<p>Barring some very early work, all of my production code has been responsive and mobile compliant. Due to the market share of mobile browsers, I have developed a particular interest in mobile design throughout my career.</p>'
        ]);
        App\Requirement::create([
          'id' => '4',
          'name' => 'Ability to apply user interface and interactive design best practices to projects.',
          'body' => '<p>Coming from a front-end design and development background, UI/UX is incredibly important to me. Some of my favorite texts on the subject include <a href="https://www.amazon.com/Dont-Make-Think-Revisited-Usability/dp/0321965515/ref=pd_lpo_sbs_14_t_0?_encoding=UTF8&psc=1&refRID=CFMZPE20SAKSFCT4XJHH" target="blank"><i>Don&#39;t Make Me Think</i></a> and <a href="https://www.amazon.com/Letting-Words-Second-Interactive-Technologies/dp/0123859301" target="blank"><i>Letting Go Of The Words</i></a>. I try to emulate lessons learned in these books in all my work.</p>'
        ]);
        App\Requirement::create([
          'id' => '5',
          'name' => 'Test and maintain websites and apps on multiple devices, operating systems, and web browsers.',
          'body' => '<p>My previous role was maintaining a web application that had users with IE(8/9), Edge, Chrome, and Safari, coming from desktop, mobile, and tablet devices.</p>'
        ]);
    }
}
