while True:
    print("Options:")
    print("Enter 'add' to add two numbers")
    print("Enter 'subtract' to subtract two numbers")
    print("Enter 'multiply' to multiple two numbers")
    print("Enter 'divide' to divide two numbers")
    print("Enter 'Quit' to end the program")
    user_input = input(": ")
    if user_input == "quit":
        break
    elif user_input == "add":
        a = float(input("Enter a:"))
        b = float(input("Enter b:"))
        result = str(a+b)
        print("Answer:"+result)
    elif user_input == "subtract":
        a = float(input("Enter a:"))
        b = float(input("Enter b:"))
        result = str(a-b)
        print("Answer:"+result)
    elif user_input == "multiply":
        a = float(input("Enter a:"))
        b = float(input("Enter b:"))
        result = str(a*b)
        print("Answer:"+result)    
    elif user_input == "divide":
        a = float(input("Enter a:"))
        b = float(input("Enter b:"))
        result = str(a/b)
        print("Answer:"+result)
    else:
        print("Unknown input")
import time
time.sleep(5)        
        