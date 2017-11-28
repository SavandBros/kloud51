# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models
import djangocms_text_ckeditor.fields
import filer.fields.image
from django.conf import settings


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.FILER_IMAGE_MODEL),
        ('cms', '0016_auto_20160608_1535'),
    ]

    operations = [
        migrations.CreateModel(
            name='Cover',
            fields=[
                ('cmsplugin_ptr', models.OneToOneField(primary_key=True, serialize=False, auto_created=True, related_name='cmsplugin_cover_cover', parent_link=True, to='cms.CMSPlugin')),
                ('title', models.CharField(verbose_name='title', max_length=250, blank=True, null=True)),
                ('sub_title', models.CharField(verbose_name='sub title', max_length=500, blank=True, null=True)),
                ('detail', djangocms_text_ckeditor.fields.HTMLField(verbose_name='detail', blank=True, null=True)),
                ('image', filer.fields.image.FilerImageField(verbose_name='image', blank=True, null=True, to=settings.FILER_IMAGE_MODEL)),
            ],
            options={
                'abstract': False,
            },
            bases=('cms.cmsplugin',),
        ),
    ]
