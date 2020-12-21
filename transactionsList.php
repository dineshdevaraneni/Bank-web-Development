<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Bank Management System</title>
    <link rel="stylesheet" href="./intern.css">
</head>
<body>
    <div className="grid-container">
            <header class="header">
                <h2>Bank of Jarvis</h2>
                <a href = "intern.php" name = "homepage_link"><h3>Home</h3></a>
                <a href = "includes/users.php" name = "usersList_link"><h3>Users</h3></a>
                <a href = "transferMoney.php" name = "transfermoney"><h3>Transfer Money</h3></a>
                <a href = "transactionsList.php" name = "transactionList"><h3>Transaction List</h3></a>
            </header>
            <main class = "main">

                <div class="form">
                    <form action = "includes/transactionsListAction.php" method = "POST">
                        <ul class="form-container">
                            
                            <li><label for="user" >Account Number of the User</label><input type = "text" name = "user" placeholder = "Enter Account Number"><br></li>
                            <li><button type = "submit" class = "button" name = "get_User_transactions">User Transactions</button></li>
                            <!--li><input type = "submit" class = "button" name = "get_User_transactions" value = "User Transactions"><br></li-->
                            <li><h3> Want To Get All transactions ???</h3><br></li>
                            <!--li><input type = "submit" class = "button" name = "get_All_transactions" value = "Get All Transactions"><br></li-->
                            <li><button type = "submit" class = "button" name = "get_All_transactions" >Get All Transactions</button></li>
                            
                            
                        </ul>
                    </form>
                </div>

                <!--form class="form" action = "includes/transactionsListAction.php" method = "POST">
                    <input type = "text" name = "user" placeholder = "Enter Account Number"><br>
                    <input type = "submit" class = "button" name = "get_User_transactions" value = "User Transactions"><br>
                    <h3> Want To Get All transactions ???</h3><br>
                    <input type = "submit" class = "button" name = "get_All_transactions" value = "Get All Transactions"><br>
                    
                </form-->
            </main>
            <footer class="footer">
                All rights reserved...
            </footer>
        </div>
    </body>
</html>