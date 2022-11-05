counter=0
search_for="james"
my_dict={}  
my_class=[
"james", 
"ruby",     
"kate", 
"jimmy", 
"luke", 
"james",          
"jimmy", 
"jimmy", 
"ruby"
]
print(my_class)

#  my_name=input("please enter name here-")
 
# print("Hello", my_name)
for i in (my_class):
    # print("Hello", i)
    # counter+=1
    if search_for==i:
        counter=counter+1


print("count",search_for, counter)
print(my_dict)