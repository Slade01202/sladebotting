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


# getter method included for possible external pull implementation
def get_encoder():
    """
    Default encoder, by index:
    0: Period (.)
    1: Space ( )
    2: a, b, c
    3: d, e, f
    4: g, h, i
    5: j, k, l
    6: m, n, o
    7: p, q, r, s
    8: t, u, v
    9: w, x, y, z
    """
    encoder = [["."], [" "], ["a", "b", "c"], ["d", "e", "f"], ["g", "h", "i"], ["j", "k", "l"], ["m", "n", "o"], ["p", "q", "r", "s"], ["t", "u", "v"], ["w", "x", "y", "z"]]

    return encoder


# getter method included for possible external pull implementation
def get_decoder():
    decoder = [["."], [" "], ["a", "b", "c"], ["d", "e", "f"], ["g", "h", "i"], ["j", "k", "l"], ["m", "n", "o"], ["p", "q", "r", "s"], ["t", "u", "v"], ["w", "x", "y", "z"]]

    return decoder


def encode(code):
    code = str(code).lower()
    encoded = ""
    encoder = get_encoder()
    for letter in code:
        check = True
        for x in range(len(encoder)):
            if letter in encoder[x]:
                encoded += str(x)
                check = False
        if check:
            encoded += letter
    return encoded


def decode(code):
    decoded = ""
    decoder = get_decoder()
    dic = initialize_dictionary()
    for letter in code:
        print()

    return decoded


def dic_lookup(decoder, dic):
    print()


def main():
    print("Cry")


print(encode("wow, that's really cool. watch this"))
