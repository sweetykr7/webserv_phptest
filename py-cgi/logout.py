#!/usr/bin/env python3
import os

# HTTP header
print("Content-type: text/html\n")

# Delete the session variable
if "PY_SESSION" in os.environ:
    del os.environ["PY_SESSION"]

# Redirect to the login page
print("<script>location.replace('login.html');</script>")