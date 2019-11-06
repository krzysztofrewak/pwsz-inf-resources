import random
from force_users import *


champions = [
    LightsaberUser("Jaden Korr"),
    LightSideForceUser("A'Sharad Hett"),
    LightSideForceUser("Aayla Secura"),
    DarkSideForceUser("Asajj Ventress"),
    JediMaster("Luke Skywalker"),
    SithLord("Emperor Palpatine"),
    SithLord("Darth Vader"),
]

while len(champions) > 1:
    attacker = random.choice(champions)
    target = attacker

    while attacker == target:
        target = random.choice(champions)

    attacker.attack(target)
    if target.life_points <= 0:
        print(target.name + " died.")
        champions.remove(target)

print("")
print("The winner is " + champions[0].name)
