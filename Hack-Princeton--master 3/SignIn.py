# Login
import sqlite3
# Creates the Database
conn = sqlite3.connect('Accounts.db')

name = input('Username: ')
passw = input('Password: ')
# Creates the Table!
cursor = conn.execute("SELECT USERNAME, PASSWORD FROM Registered WHERE USERNAME='" + name
                      + "'AND PASSWORD='" + passw + "'")

Correct = False
for row in cursor:
    Correct = True
print(Correct)
# Create if statements if account exists or not
conn.close()