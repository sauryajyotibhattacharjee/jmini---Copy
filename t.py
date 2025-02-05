import mysql.connector

# Replace with your database server information
host = "http://127.0.0.1:5502/gcr.html"
user = "root"
password = "root"
database = "laila"

try:
    connection = mysql.connector.connect(
        host=host,
        user=user,
        password=password,
        database=database
    )
    cursor = connection.cursor()

    # You now have a connection to your MySQL database.
    print("Connected to MySQL database successfully")

    # Continue with the table creation, data insertion, or other database operations here.
    # See the following steps for creating the table or other database tasks.

except mysql.connector.Error as err:
    print(f"Error: {err}")

finally:
    if connection.is_connected():
        cursor.close()
        connection.close()
