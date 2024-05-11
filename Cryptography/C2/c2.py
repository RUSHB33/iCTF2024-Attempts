lookup1 = "\n \"#()CPU,:={}abcdefghijklmnopqrstuvwxyz0123456789._"
lookup2 = "ABCDEFGHIJKLMNOPQRSTabcdefghijklmnopqrst0123456789._"

chars = ""
with open("r.txt") as f:
    chars = f.read()

out = ""

for char in chars:
    if char in lookup1:
        cur = lookup1.index(char)
        e1 = 8654
        index = ((cur + e1)) % len(lookup1)
        out += lookup2[index]

print(out)
