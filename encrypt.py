import sys
from cryptography.fernet import Fernet

key = b'your_fernet_key_here'  # Generate this key using Fernet.generate_key()
cipher = Fernet(key)

content = sys.argv[1]
encrypted_content = cipher.encrypt(content.encode())

print(encrypted_content.decode())
#http://localhost/personal_diary/index.html