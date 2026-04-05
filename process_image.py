import cv2
import numpy as np

# Load the image
img_path = r"d:\Project-RSS\undangan-digital\public\assets\image\theme-5-frame.png"
img = cv2.imread(img_path, cv2.IMREAD_UNCHANGED)

if img is not None:
    # If the image doesn't have an alpha channel, add one
    if img.shape[2] == 3:
        img = cv2.cvtColor(img, cv2.COLOR_BGR2BGRA)

    h, w = img.shape[:2]
    
    # Create an alpha mask
    mask = np.ones((h, w), dtype=np.float32)

    # We want a large elliptical hole in the center
    # Center coordinates
    cx, cy = w // 2, h // 2
    
    # Radii for the ellipse based on image size, but leaving borders
    rx = int(w * 0.42)
    ry = int(h * 0.42)

    # Generate coordinate grids
    y, x = np.ogrid[:h, :w]
    
    # Calculate elliptical distance formula
    dist = ((x - cx) / rx) ** 2 + ((y - cy) / ry) ** 2
    
    # Create soft edges (feathering)
    # dist < 0.7 -> fully transparent (0)
    # dist > 1.0 -> fully opaque (1)
    # between 0.7 and 1.0 -> gradient
    mask = np.clip((dist - 0.7) / 0.3, 0.0, 1.0)
    
    # Apply the mask to the alpha channel
    img[:, :, 3] = (mask * 255).astype(np.uint8)
    
    # Save the processed image
    out_path = r"d:\Project-RSS\undangan-digital\public\assets\image\theme-5-frame-transparent.png"
    cv2.imwrite(out_path, img)
    print("Success")
else:
    from PIL import Image, ImageDraw, ImageFilter
    print("cv2 failed or not installed, trying PIL...")
    img = Image.open(img_path).convert("RGBA")
    width, height = img.size
    
    mask = Image.new("L", img.size, 255)
    draw = ImageDraw.Draw(mask)
    
    # Ellipse bounding box
    margin_x = int(width * 0.1)
    margin_y = int(height * 0.1)
    bbox = [margin_x, margin_y, width - margin_x, height - margin_y]
    
    draw.ellipse(bbox, fill=0)
    
    # Blur the mask slightly for soft edges
    mask = mask.filter(ImageFilter.GaussianBlur(20))
    
    # Apply the mask
    img.putalpha(mask)
    out_path = r"d:\Project-RSS\undangan-digital\public\assets\image\theme-5-frame-transparent.png"
    img.save(out_path)
    print("Success with PIL")
