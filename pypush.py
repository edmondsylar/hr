from os import system as sys

coms = ['git status', 'git add .', 'git commit -m "auto push", git push']

for c in coms:
    sys(c)
