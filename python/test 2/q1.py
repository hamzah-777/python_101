# Do the same activity as before, but define a FUNCTION (called- say_hello) which you can call with number of times to print hello world:

# Expected: way to run code:
# say_hello(8)




input=int(input("enter number from 1 to 50-"))
def say_hello(count):
    for i in range(count):
        print("Hello world")

if 50<input:
    print("choose a lower number")
else:
    say_hello(input)
    print("Well Done")