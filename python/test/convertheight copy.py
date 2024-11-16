my_height=(input("enter your height in feet and inches-"))
height_array=my_height.split()
print(height_array)
inches=int(height_array[0])*12 +int( height_array[1])
print("inches", inches)
cm=inches*2.54
print("cm", cm)
# feet=int(my_height%12)
# print(feet)