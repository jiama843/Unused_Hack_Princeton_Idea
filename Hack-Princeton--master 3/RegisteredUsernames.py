import sqlite3

conn = sqlite3.connect('Accounts.db')

cursor = conn.execute("SELECT USERNAME, PASSWORD FROM Registered")
for row in cursor:
   print ("USERNAME = ", row[0])
   print ("PASSWORD = ", row[1])

conn.close()