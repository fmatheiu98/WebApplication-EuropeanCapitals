<?php
//include ('../login/login.php');
//session_start();

// initializing variables
$username = "";
$session_n = "";
$review = "";
$errors = array();
$contor = 0;
$nume = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'users');
mysqli_select_db($db,'users');

if(isset($_SESSION['username']))
if(isset($_POST['nume_persoana']) && $_POST['nume_persoana']!="" && $session_n=="")
{  
    if (isset($_POST['add_review'])) {
        // receive all input values from the form
        $review = mysqli_real_escape_string($db, $_POST['message']);
        $username = mysqli_real_escape_string($db, $_POST['nume_persoana']);
        $session_n = mysqli_real_escape_string($db, $_SESSION['username']);
        if (empty($review)) { array_push($errors, "Dati un review."); }

        if (count($errors) == 0) {
            $query = "INSERT INTO reviews (name, session_name, review)  VALUES ('$username', '$session_n', '$review')";
            //$query = "INSERT INTO users (username, review) VALUES('ION','$review')";

            mysqli_query($db, $query);
        }

    }
}


//function afisare_reviews($db) 
{
    $users=array();
    $query = "SELECT * FROM reviews";
    $res = mysqli_query($db,$query);
    global $contor;
    global $nume;

    if(mysqli_num_rows($res)>0)
    {
        while($row = mysqli_fetch_assoc($res))
        {
            echo "<div class='comentarii'><p>";
            echo $row['name'].":<br>";
            echo "-> ".$row['review']."<br>";
            echo "</p>";

            if(isset($_SESSION['username']))
                    if ($_SESSION['admin'])
                    {
                        //echo "<input type='submit' value='Sterge review' name = 'delete_review_$contor' />";
                        echo "<form method='POST' class='delete_form' action='".stergere_review($db)."''>
                        <input type='hidden' name='cid' value='".$row['id']."' />
                        <button type='submit' name='deleteComment'> Sterge </button>
                        </form>";
                    }
                    echo "</div>";
        }
        /*$users[]=$row;
        
        foreach($users as $user)
        {
            if($user['review']){
                echo "<div class='comentarii'>";
                echo $user['name'].":<br>";
                echo "-> ".$user['review']."<br><br>";

                if(isset($_SESSION['username']))
                    if ($_SESSION['admin'])
                    {
                        //echo "<input type='submit' value='Sterge review' name = 'delete_review_$contor' />";
                        echo "<form method='POST action='".stergere_review($db)."''>
                        <input type='checkbox' class='adm' value='".$user[$contor]."' />
                        <input type='hidden' class='adm' name='sterge_$contor' />
                        </form>";
                        $nume[$contor] = $user['name'];
                        $contor++;
                    }

                echo "</div>";
            }                                                             
        }
        */
    }
}

function stergere_review($db)
{
    //global $contor;
    //global $nume;
    if(isset($_POST['deleteComment']))
    {
        $cid1 = $_POST['cid'];
        echo $cid1;
        

        $query = "DELETE from reviews WHERE id = '$cid1'";
        mysqli_query($db, $query);
        header("Location: index.php");
    }
            
    /*//$tt = "delete_review";
                
                //if(isset($_POST['delete_review']))
                for($j=0;$j<$contor;$j++)
                {
                   
                    
                    if (isset($_POST['sterge'.$j]))
                            {
                            $na = $nume[$j];
                            $query = "DELETE from reviews WHERE name = '$na'";
                            mysqli_query($db, $query);
                            //echo $tt;
                            header('location: index.php');
                            //brea        k;   
                            }        
                }
                
            }
        
*/
}
//afisare_reviews($db);
//stergere_review($db);
//afisare_reviews($db);



?>