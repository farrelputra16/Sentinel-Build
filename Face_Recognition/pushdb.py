import pandas as pd
from pymongo import MongoClient

# Baca file CSV
file_path = '/Users/admin/Desktop/face_recognition_project-main/Attendance/Attendance_28-05-2024.csv'
data = pd.read_csv(file_path)

# Hubungkan ke MongoDB
client = MongoClient('mongodb://localhost:27017/')  # Ganti dengan URI MongoDB Anda jika perlu
db = client['Attendance']  # Ganti dengan nama database Anda
collection = db['Workers']  # Ganti dengan nama koleksi Anda

# Konversi DataFrame ke list of dictionaries
data_dict = data.to_dict("records")

# Unggah data ke MongoDB
collection.insert_many(data_dict)

print("Data berhasil diunggah ke MongoDB")
