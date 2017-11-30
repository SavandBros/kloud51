# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models
import colorfield.fields
import filer.fields.image
import djangocms_text_ckeditor.fields
from django.conf import settings


class Migration(migrations.Migration):

    dependencies = [
        ('cms', '0016_auto_20160608_1535'),
        migrations.swappable_dependency(settings.FILER_IMAGE_MODEL),
        ('planet', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Section',
            fields=[
                ('id', models.AutoField(verbose_name='ID', primary_key=True, serialize=False, auto_created=True)),
                ('name', models.CharField(verbose_name='name', max_length=250)),
                ('name_en', models.CharField(verbose_name='name', max_length=250, null=True)),
                ('name_hi', models.CharField(verbose_name='name', max_length=250, null=True)),
                ('name_fa', models.CharField(verbose_name='name', max_length=250, null=True)),
                ('name_ru', models.CharField(verbose_name='name', max_length=250, null=True)),
                ('description', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
                ('description_en', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
                ('description_hi', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
                ('description_fa', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
                ('description_ru', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
            ],
            options={
                'verbose_name': 'Section',
                'verbose_name_plural': 'Sections',
            },
        ),
        migrations.CreateModel(
            name='SectionItem',
            fields=[
                ('id', models.AutoField(verbose_name='ID', primary_key=True, serialize=False, auto_created=True)),
                ('title', models.CharField(verbose_name='title', max_length=250)),
                ('title_en', models.CharField(verbose_name='title', max_length=250, null=True)),
                ('title_hi', models.CharField(verbose_name='title', max_length=250, null=True)),
                ('title_fa', models.CharField(verbose_name='title', max_length=250, null=True)),
                ('title_ru', models.CharField(verbose_name='title', max_length=250, null=True)),
                ('description', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
                ('description_en', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
                ('description_hi', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
                ('description_fa', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
                ('description_ru', djangocms_text_ckeditor.fields.HTMLField(verbose_name='description', blank=True, null=True)),
                ('icon', models.CharField(verbose_name='icon', max_length=25, blank=True, null=True, help_text='an Icon from our icon/font framework, for instance "fa fa-login"')),
                ('icon_color', colorfield.fields.ColorField(max_length=18, blank=True, null=True)),
                ('link', models.URLField(verbose_name='link', blank=True, null=True)),
                ('item_order', models.PositiveIntegerField(default=0)),
                ('image', filer.fields.image.FilerImageField(verbose_name='image', blank=True, null=True, to=settings.FILER_IMAGE_MODEL)),
                ('section', models.ForeignKey(related_name='items', to='planet.Section')),
            ],
            options={
                'verbose_name': 'Section',
                'verbose_name_plural': 'Section Items',
                'ordering': ('item_order',),
            },
        ),
        migrations.CreateModel(
            name='SectionPluginModel',
            fields=[
                ('cmsplugin_ptr', models.OneToOneField(primary_key=True, serialize=False, auto_created=True, related_name='planet_sectionpluginmodel', parent_link=True, to='cms.CMSPlugin')),
                ('template', models.CharField(verbose_name='template', max_length=100, choices=[('planet/cms/sections/feature_icon.html', 'Features with Icons'), ('planet/cms/sections/feature_images_title.html', 'Feature with Images & and Title.')])),
                ('section', models.ForeignKey(to='planet.Section')),
            ],
            options={
                'abstract': False,
            },
            bases=('cms.cmsplugin',),
        ),
    ]
