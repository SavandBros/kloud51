# -*- coding: utf-8 -*-
# Generated by Django 1.11.7 on 2018-01-02 08:54
from __future__ import unicode_literals

from django.conf import settings
from django.db import migrations
import django.db.models.deletion
import filer.fields.image


class Migration(migrations.Migration):

    dependencies = [
        ('planet', '0006_auto_20180102_0823'),
    ]

    operations = [
        migrations.AlterField(
            model_name='section',
            name='image',
            field=filer.fields.image.FilerImageField(blank=True, help_text='Can be used for background image or the whole section.', null=True, on_delete=django.db.models.deletion.CASCADE, related_name='images', to=settings.FILER_IMAGE_MODEL, verbose_name='image'),
        ),
        migrations.AlterField(
            model_name='section',
            name='secondary_image',
            field=filer.fields.image.FilerImageField(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, related_name='secondary_images', to=settings.FILER_IMAGE_MODEL, verbose_name='secondary image'),
        ),
    ]
