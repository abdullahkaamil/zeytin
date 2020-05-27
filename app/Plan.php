<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = "plan";
}

// <?php
// $a = 0;
// // True because $a is set
// if (isset($a)) {
//   echo "Variable 'a' is set.<br>";
// }

// $b = null;
// // False because $b is NULL
// if (isset($b)) {
//   echo "Variable 'b' is set.";
// }
?>