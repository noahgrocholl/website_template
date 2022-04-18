from csv import reader


default_line = "INSERT INTO `menu_items` (`id`, `number`, `item_name`, `item_keyingredients`, `item_price`, `item_category`)"

# open file
with open("sql/menuitems.csv", "r") as my_file:
    # pass the file object to reader()
    file_reader = reader(my_file, delimiter=";")
    # do this for all the rows
    f = open("sql/temp.sql", "w")
    for i in file_reader:
        # print the rows
        print(default_line)
        print(f"VALUES (NULL, {i[0]},'{i[1]}', '{i[2]}', '{i[3]}', '{i[4]}');")
        f.write(f"{default_line}\n")
        f.write(f"VALUES (NULL, {i[0]},'{i[1]}', '{i[2]}', {i[3]}, {i[4]});\n")
    f.close()
