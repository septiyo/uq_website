<?php

$IDD = $_GET["IDD"];

switch ($IDD) {
    case "home":
        header("Location: index.php");
        break;
    case "tentang":
        header("Location: about.php");
        break;
    case "kajian":
        header("Location: courses.php");
        break;
    case "pembimbing":
        header("Location: trainers.php");
        break;
    case "pesad":
        header("Location: pesad.php");
        break;
    case "biaya":
        header("Location: pricing.php");
        break;
    case "kontak":
        header("Location: contact.php");
        break;
    case "muqim":
        header("Location: muqim.php");
        break;
    case "berita":
         header("Location: berita.php");
         break;    
    
    default:
         header("Location: index.php");
  }



?>