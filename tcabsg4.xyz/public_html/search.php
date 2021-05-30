<?php
include_once 'mysqliconnect.php';
$conn = mysqli_connect("localhost:3306","u420747415_trevin","Dataimple123","u420747415_tcabs");

                        // Checks if connection is successful
                        if (!$conn) {
                            // Displays an error message
                            echo "<p>Database connection failure</p>";
							//print ('123'); exit();
                        } else {
						
						$sql_table = "Team_ID";
						
						$query = "SELECT * FROM Team";
                            $result = mysqli_query($conn, $query);

		 if (!$result) {
                                echo "<p>Database cannot be accessed.</p>";
                            } else {
                                if (mysqli_num_rows($result) > 0) {
                                    // Display the retrieved records
                                    echo "<div>";
                                    echo "<table>";
                                    echo "<tr>\n"
                                        . "<th scope=\"col\">Order ID</th>\n"
                                        . "<th scope=\"col\">First Name</th>\n"
                                        . "<th scope=\"col\">Last Name</th>\n"
                                       
                                        . "</tr>\n";
                                    // retrieve current record pointed by the result pointer

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>", $row["order_id"], "</td>";
                                        echo "<td>", $row["fName"], "</td>";
                                        echo "<td>", $row["lName"], "</td>";
                                   
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    echo "</div>";
                                    // Frees up the memory, after using the result pointer
                                    mysqli_free_result($result);
                                } // if successful query operation
                            } // end if no rows
                            // close the database connection
                            mysqli_close($conn);
                        } // if successful database connection

?>