<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DefaultController extends Controller
{
    public function index()
    {
//        $myJson = $this->givemeJson();
        $myJson = $this->giveJsonFromUrl('url buraya');
//        $obj = json_decode(json_encode($myJson));
        return view('welcome')->with('JsonData', $myJson);
    }

    public function giveJsonFromUrl($url)
    {
        $json = file_get_contents($url);
        return $json;
    }

    public function givemeJson()
    {
        return '[
  {
    "_id": "57a1c9426663edd0d4be213f",
    "index": 0,
    "guid": "74e3aa4b-3f4f-441e-85f3-730278bb3787",
    "isActive": false,
    "balance": "$2,722.85",
    "picture": "http://placehold.it/32x32",
    "age": 38,
    "eyeColor": "brown",
    "name": {
      "first": "Arnold",
      "last": "Mcdowell"
    },
    "company": "TERRAGO",
    "email": "arnold.mcdowell@terrago.me",
    "phone": "+1 (968) 593-2979",
    "address": "355 Hinckley Place, Hobucken, Federated States Of Micronesia, 1057",
    "about": "Eiusmod velit duis Lorem non labore aliquip eiusmod non eiusmod. Lorem fugiat voluptate incididunt fugiat ex dolore. Est pariatur nulla nisi in commodo non non nulla anim reprehenderit voluptate occaecat deserunt deserunt. Enim irure est sit mollit quis ipsum officia est est ad culpa aute incididunt duis. Dolor ipsum ut eiusmod proident.",
    "registered": "Thursday, June 16, 2016 1:39 PM",
    "latitude": "55.460067",
    "longitude": "99.33444",
    "tags": [
      "consequat",
      "non",
      "cupidatat",
      "do",
      "quis"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Boyle Bennett"
      },
      {
        "id": 1,
        "name": "Conner Guy"
      },
      {
        "id": 2,
        "name": "Natalie Lynn"
      }
    ],
    "greeting": "Hello, Arnold! You have 8 unread messages.",
    "favoriteFruit": "strawberry"
  },
  {
    "_id": "57a1c942b0659c03c3f07db6",
    "index": 1,
    "guid": "086eea36-4253-4f61-ab57-867a5cd00eb7",
    "isActive": true,
    "balance": "$1,659.89",
    "picture": "http://placehold.it/32x32",
    "age": 29,
    "eyeColor": "green",
    "name": {
      "first": "Sullivan",
      "last": "Blake"
    },
    "company": "VERBUS",
    "email": "sullivan.blake@verbus.tv",
    "phone": "+1 (934) 401-2329",
    "address": "620 Gerry Street, Thatcher, Wyoming, 9505",
    "about": "Amet sunt voluptate exercitation ea esse occaecat amet amet veniam incididunt ullamco aute. Deserunt adipisicing quis labore exercitation aliquip. Irure ea commodo minim reprehenderit anim nulla ullamco qui non reprehenderit esse non labore. Enim do occaecat deserunt deserunt est veniam nostrud nisi laboris excepteur. Et non irure amet fugiat enim adipisicing deserunt proident velit deserunt nostrud. Duis deserunt ex aliquip culpa adipisicing cupidatat. Ullamco culpa excepteur id in nulla commodo nostrud reprehenderit sint nostrud officia reprehenderit commodo aliqua.",
    "registered": "Friday, July 3, 2015 6:36 PM",
    "latitude": "-55.359055",
    "longitude": "67.780015",
    "tags": [
      "magna",
      "sint",
      "nostrud",
      "culpa",
      "reprehenderit"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Connie Herring"
      },
      {
        "id": 1,
        "name": "Nielsen Dodson"
      },
      {
        "id": 2,
        "name": "Small Baker"
      }
    ],
    "greeting": "Hello, Sullivan! You have 8 unread messages.",
    "favoriteFruit": "strawberry"
  },
  {
    "_id": "57a1c9420bae838b4aaa2273",
    "index": 2,
    "guid": "37fd72bb-9f67-49f1-812d-9a8726f4a454",
    "isActive": true,
    "balance": "$2,643.46",
    "picture": "http://placehold.it/32x32",
    "age": 25,
    "eyeColor": "green",
    "name": {
      "first": "Marva",
      "last": "Estes"
    },
    "company": "MAGMINA",
    "email": "marva.estes@magmina.org",
    "phone": "+1 (872) 588-2887",
    "address": "850 Wakeman Place, Spokane, North Carolina, 5913",
    "about": "Non officia incididunt excepteur enim ipsum nostrud esse tempor commodo et culpa eu. Ullamco qui pariatur cillum dolore sunt sit aliquip nostrud culpa excepteur duis pariatur esse. Ipsum nostrud cillum culpa anim ipsum dolore cupidatat magna consequat in ipsum elit officia. Aliquip pariatur nisi magna laborum dolor qui elit eiusmod eiusmod minim et et tempor.",
    "registered": "Saturday, April 18, 2015 6:21 AM",
    "latitude": "59.974983",
    "longitude": "-166.707793",
    "tags": [
      "ut",
      "velit",
      "pariatur",
      "reprehenderit",
      "Lorem"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Eugenia Meyer"
      },
      {
        "id": 1,
        "name": "Thomas Sargent"
      },
      {
        "id": 2,
        "name": "Allyson Graves"
      }
    ],
    "greeting": "Hello, Marva! You have 10 unread messages.",
    "favoriteFruit": "apple"
  },
  {
    "_id": "57a1c94297f303ffdce7a637",
    "index": 3,
    "guid": "176c5519-d17d-461d-b081-1025e2ade473",
    "isActive": false,
    "balance": "$1,715.71",
    "picture": "http://placehold.it/32x32",
    "age": 25,
    "eyeColor": "blue",
    "name": {
      "first": "Donaldson",
      "last": "Martinez"
    },
    "company": "LUXURIA",
    "email": "donaldson.martinez@luxuria.ca",
    "phone": "+1 (963) 407-2000",
    "address": "213 Rutledge Street, Starks, Guam, 3993",
    "about": "Non ex deserunt laborum dolor reprehenderit occaecat veniam nostrud labore veniam exercitation sint. Aliqua mollit veniam in incididunt officia irure nulla ex mollit et. Ea enim in eiusmod elit laboris do nisi excepteur adipisicing fugiat.",
    "registered": "Sunday, February 1, 2015 7:59 AM",
    "latitude": "86.934398",
    "longitude": "61.424749",
    "tags": [
      "aliquip",
      "ad",
      "aute",
      "consectetur",
      "elit"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Pollard Townsend"
      },
      {
        "id": 1,
        "name": "Lee Rhodes"
      },
      {
        "id": 2,
        "name": "Aguirre Combs"
      }
    ],
    "greeting": "Hello, Donaldson! You have 5 unread messages.",
    "favoriteFruit": "banana"
  },
  {
    "_id": "57a1c942f194cc72f4f13baf",
    "index": 4,
    "guid": "f3f77941-de72-49fc-b739-a9dc1c77a7d1",
    "isActive": false,
    "balance": "$2,583.46",
    "picture": "http://placehold.it/32x32",
    "age": 38,
    "eyeColor": "blue",
    "name": {
      "first": "Shawn",
      "last": "Holmes"
    },
    "company": "EZENT",
    "email": "shawn.holmes@ezent.us",
    "phone": "+1 (935) 437-3453",
    "address": "705 Greenwood Avenue, Alamo, Delaware, 4365",
    "about": "Voluptate voluptate Lorem cupidatat nisi ad reprehenderit sint sunt. Pariatur Lorem commodo do tempor laboris non ipsum ipsum. Irure voluptate id cillum ex fugiat consectetur magna fugiat exercitation fugiat est mollit.",
    "registered": "Friday, March 28, 2014 8:17 AM",
    "latitude": "80.441445",
    "longitude": "-21.733657",
    "tags": [
      "labore",
      "officia",
      "aute",
      "officia",
      "sunt"
    ],
    "range": [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9
    ],
    "friends": [
      {
        "id": 0,
        "name": "Reeves Owen"
      },
      {
        "id": 1,
        "name": "Marilyn Houston"
      },
      {
        "id": 2,
        "name": "Sykes Preston"
      }
    ],
    "greeting": "Hello, Shawn! You have 9 unread messages.",
    "favoriteFruit": "banana"
  }
]';
    }
}
