import cv2
import pickle
import face_recognition
import numpy as np
import cvzone

kamera = cv2.VideoCapture(0)
kamera.set(3, 1280)
kamera.set(4, 720)

#import encodegenerator.py
print("Encoding Started")
file = open("EncodeFile.p", "rb")
encodeListKnown_ID = pickle.load(file)
file.close()
encodeListKnown, IDkaryawan = encodeListKnown_ID
#print(IDkaryawan)
print("Encoding Complete")

while True:
    succes, img = kamera.read()

    imgS = cv2.resize(img, (0, 0), None, 0.25, 0.25)
    imgS = cv2.cvtColor(imgS, cv2.COLOR_BGR2RGB)

    faceCurFrame = face_recognition.face_locations(imgS)
    encodeCurFrame = face_recognition.face_encodings(imgS, faceCurFrame)

    for encodeFace, faceLocation in zip(encodeCurFrame, faceCurFrame):
        matches = face_recognition.compare_faces(encodeListKnown, encodeFace)
        faceDistance = face_recognition.face_distance(encodeListKnown, encodeFace)
        #print("matches",matches)
        #print("faceDistance", faceDistance)

        matchIndex = np.argmin(faceDistance)
        #print("matchIndex", matchIndex)

        if matches[matchIndex]:
            print("karyawan terdeteksi")
            print(IDkaryawan[matchIndex])

            y1, x2,git y2, x1 = faceLocation
            y1, x2, y2, x1 = y1 * 4, x2 * 4, y2 * 4, x1 * 4  # Scale up the face locations
            cv2.rectangle(img, (x1, y1), (x2, y2), (0, 255, 0), 2)  # Draw a green rectangle around the face
            font = cv2.FONT_HERSHEY_SIMPLEX
            cv2.putText(img, f'ID: {IDkaryawan[matchIndex]}', (x1, y2 + 30), font, 1, (0, 255, 0), 2, cv2.LINE_AA)
    

    cv2.imshow("kehadiran", img)
    cv2.waitKey(1)