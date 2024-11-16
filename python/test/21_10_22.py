counter = 0

my_dict = {}
my_class = [
    # "ruby",
    # "james", "james",
    # "kate",
    # "jimmy",
    # "luke",
    # "james","james",
    # "jimmy",
    # "jimmy",
    # "ruby"
]

no_std=int(input("please enter number of students present-"))
for i in range(no_std):
    name=input("enter name of student-")
    my_class.append(name)

print(my_class)
for i in (my_class):

    if i in my_dict:
        print("if", i)
        my_dict[i] = my_dict[i] + 1
    else:
        print("else", i)
        my_dict[i] = 1

print(my_dict)
my_dict2 =sorted(my_dict.items(), key=lambda x: x[1])
print(my_dict2)
my_dict2.reverse()
print(my_dict2)
print(type(my_dict2))

print("The most popular name in class is", my_dict2[0])