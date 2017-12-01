"""
WSGI config for Kloud51 project.
It exposes the WSGI callable as a module-level variable named ``application``.
"""

import os

from django.core.wsgi import get_wsgi_application
from whitenoise.django import DjangoWhiteNoise

os.environ.setdefault("DJANGO_SETTINGS_MODULE", "kloud51.settings")

application = get_wsgi_application()
application = DjangoWhiteNoise(application)
