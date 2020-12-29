"""
Desc: Encode and decode via keypad cipher (asymmetrical)

imports:

processing:

output:
"""
from pathlib import Path


# takes dictionary file and returns it in array form
def initialize_wordlist():
    wordlist = set()
    with open("{}\\words.txt".format(Path(__file__).parent.absolute()), "r") as filein:
        for line in filein:
            wordlist.add(line.strip())
    return wordlist


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
    code = str(code).lower()
    decoded = ""
    decoder = get_decoder()
    wordlist = initialize_wordlist()

    # for starters, split the string into a list of lists, split by numerical punctuation (0 & 1)
    # and other numbers (2-9) with non numerical punctuation (any symbol in the string)
    # the second item in each interior list is an identifier on whether it is numerical punctuation
    # (ex. 969106423 would split into [[969, False], [10, True], [6423, False]])
    punctuation = []
    last_was_punctuation = True
    this_is_punctuation = True
    list_pos = 0
    for letter in code:
        if ord(letter) == 1: # Check if ascii 0 or 1
            this_is_punctuation = True
        else:
            this_is_punctuation = False



    return decoded


def wordlist_lookup(decoder, wordlist):
    print()


def main():
    print("Cry")


# print(initialize_wordlist())
print(encode("This is a test string... It will be given to a rat."))
