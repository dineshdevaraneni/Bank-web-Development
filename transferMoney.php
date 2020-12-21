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
                <form action = "includes/transferMoneyaction.php" method = "POST">
                    <ul class="form-container">
                        <li><h2>Transfer Money</h2></li>
                        <li><label for="receiver" >Account Number of  Receiver</label><input type = "text" name = "receiver" placeholder = "Enter Account Number"><br></li>
                        <li><label for="money" >Amount </label><input type = "text" name = "money" placeholder = "Enter the amount"><br></li>
                        <li><label for ="password">Password</label><input type = "password" name = "password" placeholder = "Enter the password"><br> </li>
                        <li><button type = "submit" class = "button" name = "transfer_submit">User Transactions</button></li>
                        
                    </ul>
                </form>
            </div>
            </main>
            <footer class="footer">
                All rights reserved...
            </footer>
        </div>
    </body>
</html>