# Print: Good Morning Nation
# 5 times using ONE type of loop in python (Hint: for, while…)





# x = "Good Morning Nation"

# for i in range(5):
#     # print(i+1)
#     print(x, i+1)

# print("please enter name here-")

# input=input("please enter name here-")

# print("Hello", input)

from math import remainder


students=int(input("please enter how many students you have in class-"))
toffees=int(input("How many toffees you have-"))
toffees_per_student=(toffees)/(students)
toffees_per_student=int(toffees_per_student)
print("each student gets: ", toffees_per_student)

# remainder=toffees-(students*toffees_per_student)
remainder=toffees%students
print("leftovers: ", remainder)
# input=input("please enter birth year here-")

# sum=2022-int(input)

# print("your age is-", sum)

# if sum > 17:
#     print("you are an adult")
# else:
#     print("your a minor")









