<?php

  function biodata(){

    $biodata = [
        "name" => "Muhammad Faruq Amar",
        "age" => "23",
        "address" => "Jl. Kopral Sapari RT 01 RW 03 Pengkol Jepara",
        "hobbies" => [
            "Membaca","Internetan","Fotografi","Videografi","Mendengarkan Musik"
          ],
        "is_married" => false,
        "list_school" => [
            "name" => "Universitas Dian Nuswantoro",
            "year_in" => 2013,
            "year_out" => 2019,
            "major" => "Teknik Informatika"
        ],
        "skills" => [
            "skill_name" => "Editing Video",
            "level" => "Beginner",
            "skill_name" => "Website",
            "level" => "Beginner"
        ],
        "interest_in_coding" => false,
      ];

        $json_data = json_encode($biodata);
        return $json_data;
  }

  echo biodata();
?>