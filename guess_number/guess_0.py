import random

def guessIt(answer):
    guessed = int(input('Enter a guess: '))
    
    if(guessed == 0):
        print("__ The Answer was:",answer)
        print("Exit")
        exit()
    elif(answer == guessed):
        print("----------- Congrats!! you guessed it right!! -----------")
        exit()
    elif(answer < guessed):
        print("----------- Answer is smaller -----------")
    elif(answer > guessed):
        print("----------- Answer is bigger -----------")
    else:
        print("Something went wrong!!")


def main():
    max_num = 100
    print('Hello! What is your name?')
    myName = input()
    answer_to_guess = random.randint(1, max_num)
    print('Well, ' + myName + ', I am thinking of a number between 1 and', max_num)
    print("(to Give up: enter 0)")

    answer_to_guess = random.randint(1, max_num)

    while(1):
        guessIt(answer_to_guess)


if __name__ == "__main__":
    main()