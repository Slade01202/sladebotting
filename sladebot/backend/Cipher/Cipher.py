"""
Desc: Encode and decode via keypad cipher (asymmetrical)

input:

processing:

output:
"""


def initialize_dictionary():
    dictionary = []
    with open("sladebot/backend/Cipher/words.txt", "r") as filein:
        for line in filein:
            dictionary.append(line)
    return dictionary


def main():
    print("Cry")


dic = initialize_dictionary()
print(dic)
