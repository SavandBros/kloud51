"""
WSGI config for kloud51 project.

It exposes the WSGI callable as a module-level variable named ``application``.

For more information on this file, see
https://docs.djangoproject.com/en/1.8/howto/deployment/wsgi/
"""

import os

from django.core.wsgi import get_wsgi_application
from whitenoise import WhiteNoise

os.environ.setdefault("DJANGO_SETTINGS_MODULE", "kloud51.settings")
from django.conf import settings

application = get_wsgi_application()
application = WhiteNoise(application, settings.STATIC_ROOT)
