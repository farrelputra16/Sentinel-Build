import cv2
import face_recognition
import pickle
import os

path_gambar = "images"
pathList = os.listdir(path_gambar)
imgList = []
IDkaryawan = []

for path in pathList:
    imgList.append(cv2.imread(os.path.join(path_gambar, path)))
    ##print(os.path.splitext(path)[0])
    IDkaryawan.append(os.path.splitext(path)[0])

def findEncodings(imgList):
    encodeList = []
    for img in imgList:
        img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
        encode = face_recognition.face_encodings(img)[0]
        encodeList.append(encode)
    return encodeList

print("Encoding Started")
encodeListKnown = findEncodings(imgList)
encodeListKnown_ID = [encodeListKnown, IDkaryawan]
##print(encodeListKnown)
print("Encoding Complete")

file = open("EncodeFile.p", "wb")
pickle.dump(encodeListKnown_ID, file)
file.close()
print("File Saved")