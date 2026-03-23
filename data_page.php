<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" 
        content="width=device-width,initial-scale=1" />
        <title>Survey Data page</title>
    </head>
    <body>
            <h1>Survey data summery</h1>
            <p><a href="web_form.php"> Return to from</a></p>
    <main>
        <?php
        function main(){
                    require "dbconfig.php";
                    $db = connectDB();

                    displayServey($db, student_survey($db));
            
        
        }

        function ServeyArray ($db) {
            $select_id = $db->prepare("SELECT * FROM student_survey;");
            $select_id->execute();
            $ids = $select_all->fetchAll();
            $id_array = array();

            foreach ($ids as $array ) 
                {
                    array_push(id_array, $array["id"]);
                }
                return $id_array;


        }

        function displayServey($db, $id_array){
                    $select_all = $db->prepare('SELECT * FROM student_servey;');
                    $select_all->execute();

                    foreach ($id_array as $id){
                        $servey_array = $select_all->fetch();
                        $name = $servey_array["names"];
                        $age = $servey_array["age"];
                        $gender = $servey_array["gender"];
                        $major = $major_array["major"];
                        $credithours = $credithours_array["credithours"];

                         if ($gender == "m"){
                            $gender = "Male";
                        } elseif ($gender == "f"){
                            $gender = "Female";
                        } elseif ($gender == "nb"){
                            $gender = "Nonbinary";
                        } elseif ($gender == "gf"){
                            $gender = "Genderfluid";
                        } elseif ($gender == "a"){ 
                            $gender = "Agender";
                        } elseif ($gender == "o"){
                            $gender = "Choose not to say/Other";
                        };

                        print("</table>");
                    }
                    else{

                    print("<p>No data.</p>");


                        }

                function age($db){
                    print("<h2>Respondent Ages:</h2>");

                    $select_age = $db->prepare('SELECT age FROM Student Servey');
                    $select_age->execute();

                    $age_select = $select_age->fetchAll();
                    $age_array = array();
                    foreach ($age_select as $array){
                        array_push($age_array, $array["age"]);
                    }


                   
                    }

                    function major ($db) {
                         print("<h2>Random majors</h2>");
                         $selec_major= $db->prepare('SELECT age FROM Student Servey');
                    $select_major->execute();
                    $major_select = $select_major->fetchAll();
                    $major_array = array();
                    foreach ($major_select as $array){
                        array_push($major_array, $array["major"]);
                    }




                    }
                    
                    function credits ($db){
                        print("<h2>Random credits</h2>");

                         $selec_credits= $db->prepare('SELECT credits FROM Student Servey');
                    $select_credits->execute();
                    $credits_select = $select_major->fetchAll();
                    $credits_array = array();
                    foreach ($credits_select as $array){
                        array_push($credits_array, $array["credits"]);
                    }

                }
        }

        


?>

