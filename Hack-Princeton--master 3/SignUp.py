# Login
import sqlite3
# Creates the Database
conn = sqlite3.connect('Accounts.db')

name = input('Username: ')
# Creates the Table!
cursor = conn.execute("SELECT USERNAME FROM Registered WHERE USERNAME='" + name
                      + "'")

Available = True
for row in cursor:
    Available = False
if(Available == True):
    passw = input('Password: ')
    conn.execute("INSERT INTO Registered (USERNAME, PASSWORD) \
          VALUES ('"+name+"', '"+passw+"')")
    conn.commit()
conn.close()
