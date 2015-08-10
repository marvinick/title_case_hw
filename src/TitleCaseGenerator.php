<?php

    class TitleCaseGenerator {

      function MakeTitleCase ($input_title) {
          $input_array_of_words = explode (" ", $input_title);
          $output_titlecased = array();
          foreach ($input_array_of_words as $word) {
            array_push($output_titlecased, ucfirst($word));
          }
          return implode(" ", $output_titlecased);
      }
    }

?>