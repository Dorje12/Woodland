
<div class="main_content sub_wrapper">
        <div class="header">
                <h1>Dashboard</h1>
                <main>
                        <div class="dash_container">
                                <div class="dash_card">
                                        <i class="fa-solid fa-users"></i>
                                        <div class="dash_title">
                                                <h3>{122}</h3>
                                                <p>Students</p>
                                        </div>
                                </div>

                                <div class="dash_card">
                                        <i class="fa-solid fa-users"></i>
                                        <div class="dash_title">
                                                <h3>{122}</h3>
                                                <p>Courses</p>
                                        </div>
                                </div>

                                <div class="dash_card">
                                        <i class="fa-solid fa-users"></i>
                                        <div class="dash_title">
                                                <h3>{122}</h3>
                                                <p>Modules</p>
                                        </div>
                                </div>
                              
                                <div class="dash_card">
                                        <i class="fa-solid fa-users"></i>
                                        <div class="dash_title">
                                                <h3>{122}</h3>
                                                <p>Modules Leader</p>
                                        </div>
                                </div>
                        </div>
                         
                </main>
                
        </div>

        <div class = "dashboarder_header">
                <h1>Detail informtion</h1>
        </div>
        <div class = "table_container " style = "text-align:left; margin:0; line-height:1.5; width:100% ">
                <table class = "data_holder" style = "word-wrap: break-word; wdth:100%;">
                        <tbody>
                                <tr>
                                        <th>User Name:</th>
                                        <td><?= $userData->user_first_name . " " . $userData->user_last_name; ?></td>
                                </tr>
                                <tr>
                                        <th>UID:</th>
                                        <td><?= $userData->userID; ?></tr>
                                </tr>
                                <tr>
                                        <th>Date of birth:</th>
                                        <td><?= $userData->user_birthdate; ?></td>
                                </tr>
                                <tr>
                                        <th>Gender:</th>
                                        <td><?= $userData->user_gender; ?></td>
                                </tr>
                                <tr>
                                        <th>Email:</th>
                                        <td> <?= $userData->user_email; ?></td>
                                </tr>
                                <tr>
                                        <th>Mobile:</th>
                                        <td> <?= $userData->user_mobile; ?></td>
                                </tr>
                                <tr>
                                        <th>User Status:</th>
                                        <td> <?= $userData->user_status; ?></td>
                                </tr>
                                <tr>
                                        <th>Role:</th>
                                        <td> <?= $userData->role; ?></td>
                                </tr>

                        </tbody>
                </table>
        </div>

        <div class = "Recent_post">
                <h1>Recent Post</h1>
        </div>
         <div class = "Update_table">
                <table class = "update_data">
                        <tbody>
                                <tr>
                                        <th>Vacancy Announcement!!!</th>
                                </tr>
                                <tr>
                                        <th>FareWell Program <br> 2021-2022 Batch</th>
                                </tr>
                                <tr>
                                        <th>Woodland Book Talk 2022</th>
                                </tr>
                                <tr>
                                        <th>Result distribution</th>
                                </tr>
                        </tbody>
                </table>

        
         </div>

         <div class = "Event">
                <h1>Events</h1>

         </div>
         <div class = "Event_data">
                <table class = "Event_table">
                        <tbody>
                                <tr>
                                        <th>Blood Donation Prgram</th>
                                </tr>
                                <tr>
                                        <th>Farewell Program 2022</th>
                                </tr>
                                <tr>
                                        <th>Quiz Competition</th>
                                </tr>
                                <tr>
                                        <th>Leading Sucessful life and Career</th>
                                </tr>
                                <tr>
                                        <th>Annual Sports Meet</th>
                                </tr>
                                
                                
                        </tbody>
                </table>
         </div>

</div>
</div>
</body>

        <style>
                .dashboarder_header{
                        margin-top:20px;
                       
                        text-align:center;
                        color:white;
                        width:75%;
                        background-color: #115740;
                }

                .data_holder{
                        width:75%;
                      
               
                }
                th{
                        text-align:center;
                        background-color:#D3D3D3;
                        
                }
                td{
                        text-align:center;
                }
                table,th,td{
                        border:1px solid black;
                        border-collapse:collapse;
                }


                .Recent_post{
                       
                        margin-top:50px;
                        text-align:center;
                        color:white;
                        width:30%;
                        background-color: #115740;
                }
                .update_data{
                        
                        width:30%;
                }


                .Event{
                        margin-left:40%;
                        margin-top:-160px;
                        text-align:center;
                        color:white;
                        width:30%;
                        background-color: #115740;
                        
                }
                .Event_table{
                        margin-left:40%;
                        width:30%;
                }


        </style>
</html>
