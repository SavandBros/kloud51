import dj_database_url
import os

gettext = lambda s: s
DATA_DIR = os.path.dirname(os.path.dirname(__file__))
BASE_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

SECRET_KEY = os.environ.get('SECRET_KEY')
DEBUG = os.environ.get('DJANGO_DEBUG') != 'False'
USE_S3 = os.environ.get('USE_S3') == 'True'
DEPLOY_ENV = os.environ.get('DEPLOY_ENV', 'development')
ROLLBAR_TOKEN = os.environ.get('ROLLBAR_TOKEN')

ALLOWED_HOSTS = [
    '192.168.56.1',
    'staging.kloud51.com',
    'beta.kloud51.com',
    'kloud51.com',
    'localhost',
    '127.0.0.1',
]
ROOT_URLCONF = 'kloud51.urls'
WSGI_APPLICATION = 'kloud51.wsgi.application'

DATABASES = {'default': dj_database_url.config(conn_max_age=600)}

# Static files (CSS, JavaScript, Images)
STATIC_URL = '/static/'
MEDIA_URL = '/media/'
MEDIA_ROOT = os.path.join(BASE_DIR, 'media')
STATIC_ROOT = os.environ.get('K51_STATIC_ROOT', os.path.join(DATA_DIR, 'static'))
STATICFILES_STORAGE = 'whitenoise.storage.CompressedManifestStaticFilesStorage'

STATICFILES_DIRS = (
    os.path.join(BASE_DIR, 'kloud51', 'static'),
)
SITE_ID = 1

TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': [
            os.path.join(BASE_DIR, 'kloud51', 'templates'),
        ],
        'OPTIONS': {
            'context_processors': [
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',
                'django.template.context_processors.i18n',
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.template.context_processors.media',
                'django.template.context_processors.csrf',
                'django.template.context_processors.tz',
                'sekizai.context_processors.sekizai',
                'django.template.context_processors.static',
                'cms.context_processors.cms_settings'
            ],
            'loaders': [
                'django.template.loaders.filesystem.Loader',
                'django.template.loaders.app_directories.Loader',
                'django.template.loaders.eggs.Loader'
            ],
        },
    },
]

MIDDLEWARE_CLASSES = (
    'whitenoise.middleware.WhiteNoiseMiddleware',
    'cms.middleware.utils.ApphookReloadMiddleware',
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.locale.LocaleMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
    'cms.middleware.user.CurrentUserMiddleware',
    'cms.middleware.page.CurrentPageMiddleware',
    'cms.middleware.toolbar.ToolbarMiddleware',
    'cms.middleware.language.LanguageCookieMiddleware',
    'rollbar.contrib.django.middleware.RollbarNotifierMiddleware',
)

INSTALLED_APPS = (
    'djangocms_admin_style',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'modeltranslation',
    'django.contrib.admin',
    'django.contrib.sites',
    'django.contrib.sitemaps',
    'django.contrib.staticfiles',
    'django.contrib.messages',
    'cms',
    'menus',
    'sekizai',
    'treebeard',
    'djangocms_text_ckeditor',
    'filer',
    'easy_thumbnails',
    'djangocms_column',
    'djangocms_link',
    'cmsplugin_filer_file',
    'cmsplugin_filer_folder',
    'cmsplugin_filer_image',
    'cmsplugin_filer_utils',
    'djangocms_style',
    'djangocms_snippet',
    'djangocms_googlemap',
    'djangocms_video',
    'kloud51',
    'storages',
    'adminsortable2',
    'colorfield',
    'whitenoise',
    # Apps and Plugins
    'planet',
    'cmsplugin_pure_text',
)


# Internationalization
LANGUAGE_CODE = 'en'
TIME_ZONE = 'Asia/Dubai'
USE_I18N = True
USE_L10N = True
USE_TZ = True

LANGUAGES = (
    ('en', gettext('English')),
    ('hi', gettext('Hindi')),
    ('ru', gettext('Russian')),
)

CMS_LANGUAGES = {
    1: [
        {
            'code': 'en',
            'name': gettext('English'),
            'public': True,
            'hide_untranslated': True,
            'redirect_on_fallback': False,
        },
        {
            'code': 'hi',
            'name': gettext('Hindi'),
            'public': True,
        },
        {
            'code': 'ru',
            'name': gettext('Russian'),
            'public': True,
        },
    ],
    'default': {
        'redirect_on_fallback': True,
        'public': True,
        'hide_untranslated': False,
    },
}

MODELTRANSLATION_DEFAULT_LANGUAGE = 'en'
MODELTRANSLATION_LANGUAGES = ('en', 'hi', 'ru', )
MODELTRANSLATION_PREPOPULATE_LANGUAGE = 'en'

CMS_TEMPLATES = (
    ('fullwidth.html', 'Fullwidth'),
    ('sidebar_left.html', 'Sidebar Left'),
    ('sidebar_right.html', 'Sidebar Right'),
    ('ten-sections.html', 'Ten Sections'),
    ('custom/home.html', 'Home'),
    ('custom/business-hosting.html', 'Business Hosting'),
    ('custom/affiliate-army.html', 'Affiliate Army'),
    ('custom/sponsorship.html', 'Sponsorship'),
    ('custom/about.html', 'About'),
    ('custom/tos.html', 'Terms of Service'),
    ('custom/acceptable-use-policy.html', 'Acceptable Use Policy'),
    ('custom/refunds.html', 'Refunds'),
    ('custom/privacy.html', 'Privacy Policy'),
    ('custom/grant.html', 'Grant Application'),
    ('custom/hosting/bbpress.html', 'bbPress'),
    ('custom/hosting/mariadb.html', 'MariaDB'),
    ('custom/hosting/my-bb.html', 'MyBB'),
    ('custom/hosting/ssd-vps.html', 'SSD VPS'),
    ('custom/hosting/whmcs.html', 'WHMCS'),
    ('custom/hosting/wordpress.html', 'WordPress'),
    ('custom/hosting/softaculous.html', 'Softaculous'),
    ('custom/hosting/joomla.html', 'Joomla'),
    ('custom/hosting/prestashop.html', 'Prestashop')
)

CMS_PERMISSION = True
CMS_PLACEHOLDER_CONF = {}
MIGRATION_MODULES = {}

THUMBNAIL_PROCESSORS = (
    'easy_thumbnails.processors.colorspace',
    'easy_thumbnails.processors.autocrop',
    'filer.thumbnail_processors.scale_and_crop_with_subject_location',
    'easy_thumbnails.processors.filters'
)

WHITENOISE_MAX_AGE = 864000


if USE_S3:
    AWS_ACCESS_KEY_ID = os.environ.get('AWS_ACCESS_KEY_ID')
    AWS_SECRET_ACCESS_KEY = os.environ.get('AWS_SECRET_ACCESS_KEY')
    AWS_STORAGE_BUCKET_NAME = os.environ.get('AWS_STORAGE_BUCKET_NAME')

    DEFAULT_FILE_STORAGE = 'storages.backends.s3boto3.S3Boto3Storage'

    AWS_S3_OBJECT_PARAMETERS = {
        'CacheControl': 'max-age=864000',
    }
    AWS_QUERYSTRING_AUTH = False

if not DEBUG:
    ROLLBAR = {
        'access_token': ROLLBAR_TOKEN,
        'environment': DEPLOY_ENV,
        'branch': 'master',
        'root': os.getcwd(),
    }
