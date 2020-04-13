#paceusaoffical
from math import cos, pi, radians

earthRadius = 6371#km
Perimetre = 2 * pi * earthRadius #Earth Circumference
AngleFor1K = 360 / Perimetre

paramDistance = input("What is the Distance of the Object in KM ") #Distance Parameter

Angle = (paramDistance * 360)/Perimetre
adjacent = cos(radians(Angle)) * earthRadius
hiddenDrop = earthRadius - adjacent
hiddenHeight = earthRadius * ( ((adjacent + hiddenDrop)/adjacent) -1 )

hiddenX = earthRadius * (1 - cos(Angle)) #EarthCurves on Google

print ("Earth Circumference is:",Perimetre)
print ("Earth Angle for a Distance of 1KM: ",AngleFor1K)
print ("Angle of the Object Distance: ",Angle)
print ("Distance Adjacent to the Object Angle: ",adjacent)
print ("Hidden Drop: ",hiddenDrop)
print ("Hidden Objects Max Height from the Surface(in meter): ",hiddenHeight * 1000)




#print ("Hidden Objects Max Height from the ur EyE Height: ",paramInvisibleH)
#dropHeight = 
#distanceOnCurve = 
#paramEyeHeight = input("What is Eye Height in Meter") #Distance Parameter
