"""
Desc: Encode and decode via keypad cipher (asymmetrical)

input:

processing:

output:
"""


def initializeDictionary():
    dictionary = []
    with open("words.txt", "r") as filein:
        for line in filein:
            dictionary.append(line)
    return dictionary


def main():
    print("Cry")


dic = initializeDictionary()
print(dic)