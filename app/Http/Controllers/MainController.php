<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
  public function __invoke()
  {
    $users = [
      [
        'firstname' => 'Emily',
        'lastname'  => 'Selman',
        'email'     => 'emilyselman@exemple.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-1.jpg'
      ],
      [
        'firstname' => 'Micheal',
        'lastname'  => 'Foster',
        'email'     => 'michealfoster@example.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-2.jpg'
      ],
      [
        'firstname' => 'Emma',
        'lastname'  => 'Dorsey',
        'email'     => 'emmadorsey@example.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-3.jpg'
      ],
      [
        'firstname' => 'Anna',
        'lastname'  => 'Roberts',
        'email'     => 'annaroberts@example.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-4.jpg'
      ],
      [
        'firstname' => 'Leonard',
        'lastname'  => 'Krasner',
        'email'     => 'leaonardkrasner@example.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-5.jpg'
      ],
      [
        'firstname' => 'Floyd',
        'lastname'  => 'Miles',
        'email'     => 'floydmiles@examples.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-6.jpg'
      ],
      [
        'firstname' => 'Benjamin',
        'lastname'  => 'Russel',
        'email'     => 'benjaminrussel@example.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-7.jpg'
      ],
      [
        'firstname' => 'Courtney',
        'lastname'  => 'Henry',
        'email'     => 'courtneyhenry@example.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-8.jpg'
      ],
      [
        'firstname' => 'Lawrence',
        'lastname'  => 'Hunter',
        'email'     => 'lawrencehunter@example.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-9.jpg'
      ],
      [
        'firstname' => 'Alicia',
        'lastname'  => 'Bell',
        'email'     => 'aliciabell@example.com',
        'date'      => 'Applied on January 7, 2020',
        'task'      => 'Completed phone screening',
        'image'     => './images/user-10.jpg'
      ],
    ];

    return view('main',
    [
      'UserData' => $users
    ]
    );
  }
}
