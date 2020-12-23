"""
Desc: Encode and decode via keypad cipher (asymmetrical)

imports:

processing:

output:
"""
from pathlib import Path


# takes dictionary file and returns it in array form
def initialize_dictionary():
    dictionary = []
    with open("{}\\words.txt".format(Path(__file__).parent.absolute()), "r") as filein:
        for line in filein:
            dictionary.append(line.strip())
    return dictionary


def decode():
    dic = initialize_dictionary()
    print("decode")


def encode():
    dic = initialize_dictionary()
    print("encode")


def main():
    print("Cry")
