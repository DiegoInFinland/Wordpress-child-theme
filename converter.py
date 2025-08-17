#!/usr/bin/env python3
# Convert JPG images to WEBP format in the current directory

from PIL import Image
import os 

cwd = os.getcwd()    

for f in os.listdir(cwd):
    if f.lower().endswith((".jpg", ".jpeg", ".JPEG")):
        path_jpg = os.path.join(cwd, f)
        nombre_sin_ext = os.path.splitext(f)[0]
        path_webp = os.path.join(cwd, nombre_sin_ext + ".webp")

        with Image.open(path_jpg) as img:
            img.save(path_webp, "WEBP", quality=80, method=6) 
            print(f"Converted: {path_webp}")
            os.remove(path_jpg) 
    else:
        print("No JPG files found in the current directory.") 
        break 
