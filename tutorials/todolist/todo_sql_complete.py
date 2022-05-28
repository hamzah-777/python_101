print("Welcome to simple SQL - Python app with SQL Database")

# MAKE A CONNECTION TO DATABASE. only then we can access DATA from TABLES there
import mysql.connector 
mysqldb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="test"
)
# cursor is like a PEN or POINTER. we need to use this to DO THINGS in database.
mycursor=mysqldb.cursor()


# todos = ["Go to school", "Go to market"] #WE Don't need this any more

def read():
    print('---- Your Todo List ----')
    # SELECT QUERY we use to FIND DATA from table. ("SELECT * FROM `table_name_here`")
    # mycursor.execute("SELECT * FROM `tb_todos`")
    mycursor.execute("SELECT id, todo, is_done, created_at FROM `tb_todos`")
    # fetchall() return all the matching records from table
    result=mycursor.fetchall()
    for i in result:
        d_id=i[0]
        d_todo=i[1]
        d_is_done=i[2]
        d_created_at=i[3]
        print(d_id,d_todo,'-',d_is_done)
        print("Created at:", d_created_at)
    # #OLD CODE
    # for index, todo in enumerate(todos):
    #     print(index + 1, todo)

def create():
    todo_input = input("- Please add the task here - ")
    # we want to insert record to table. so we use "INSERT INTO `table_name` (columns_array) VALUES (data_to_to_insert)"
    mycursor.execute("INSERT INTO `tb_todos` (todo) VALUES('" + todo_input + "')") 
    mysqldb.commit()
    # #OLD code
    # todos.append(todo)

def update():
    print("update")
    position = input("Please give the number to update todo - ")

    index = int(position)
    # mycursor.execute(f"SELECT * FROM `tb_todos` WHERE id='{index}'")
    mycursor.execute(f"SELECT id, todo, is_done, created_at FROM `tb_todos` WHERE id='{index}'")
    result=mycursor.fetchone()
    #fetchone() return first record found
    if result is None:
        # checking for None to avoid error
        print("Item not found!")
    else:
        print("current todo - ", result[1])
        new_todo = input("Please add the updated task here - ")
        mycursor.execute(f"UPDATE `tb_todos` SET todo='{new_todo}' WHERE id='{index}'")
        mysqldb.commit()

    # index = int(position) - 1
    # print("current todo - ", todos[index])
    # todo = input("Please add the updated task here - ")
    # todos[index] = todo;

def delete():
    print("delete")
    position = input("Please give the number to delete todo - ")

    index = int(position)
    mycursor.execute(f"SELECT id, todo, is_done, created_at FROM `tb_todos` WHERE id='{index}'")
    result=mycursor.fetchone()
    #fetchone() return first record found
    if result is None:
        # checking for None to avoid error
        print("Item not found!")
    else:
        todo = result[1]
        mycursor.execute(f"DELETE FROM `tb_todos` WHERE id='{index}'")
        mysqldb.commit()
        print(todo, " - deleted")
    
    # index = int(position) - 1
    # todo = todos[index]
    # todos.remove(todo)
    # print(todo, " - deleted")

def markAsDone():
    position = input("Please give the number to mark as done - ")

    index = int(position)
    mycursor.execute(f"SELECT id, todo, is_done, created_at FROM `tb_todos` WHERE id='{index}'")
    result=mycursor.fetchone()
    #fetchone() return first record found
    if result is None:
        # checking for None to avoid error
        print("Item not found!")
    else:
        current_todo = result[1]
        mycursor.execute(f"UPDATE `tb_todos` SET is_done='done' WHERE id='{index}'")
        mysqldb.commit()
        print(index,current_todo,'- done')

    # index = int(position) - 1
    # todos[index] = todos[index] + " - done";

while True:
    option = input("""
Type 
1 -> Read the todo list
2 -> To create a todo
3 -> To update a todo
4 -> To delete a todo
5 -> Mark as done
exit() -> exit
""")

    if option == "1":
        read()
    elif option == "2":
        create()
    elif option == "3":
        update()
    elif option == "4":
        delete()
    elif option == "5":
        markAsDone()
    elif option == "exit()":
        print("Bye")
        mysqldb.close()
        quit()
    else:
        print("you typed a wrong option")


